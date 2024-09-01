<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

// client_secret = 9b2c4f9467bd0668d69264452caca0e839243ef7fed5ca90e3a1e5113f9402c3
// client_id = abca9aed-92bb-405a-b4e9-0d145a555deb
// account_id = Pj9KMsmrYA4Cz7I

class KiwifyController extends Controller
{
    public function KiwifyWebhook(Request $request)
    {
        // Verificar se a requisição é válida
        if (!$this->isValidKiwifyRequest($request)) {
            return response()->json(['error' => 'Requisição inválida'], 400);
        }

        // Obter os dados do POST
        $data = $request->all();

        // Processar os dados do cliente
        $this->processCustomerData($data['Customer']);

        // Retornar uma resposta de sucesso
        return response()->json(['message' => 'Webhook recebido e dados salvos com sucesso'], 200);
    }

    private function isValidKiwifyRequest(Request $request)
    {
        $secret_key = 'f72wl8vo9va'; // Mantenha isso em um arquivo de configuração ou variável de ambiente

        // Verifica se a requisição é do tipo POST
        if ($request->isMethod('HEAD')) {
            return true; // Responde OK para HEAD requests
        }

        // Recebe os dados do pedido
        $payload = $request->getContent();
        $order = json_decode($payload, true);

        // Verifica a assinatura
        $signature = $request->query('signature', '');
        $calculatedSignature = hash_hmac('sha1', json_encode($order), $secret_key);

        if (!hash_equals($signature, $calculatedSignature)) {
            Log::warning('Assinatura inválida recebida do webhook Kiwify', [
                'expected_signature' => $calculatedSignature,
                'received_signature' => $signature,
            ]);
            return false; // Assinatura inválida
        }

        return true; // Assinatura válida
    }

    private function processCustomerData(array $customerData)
    {
        // Libera o Teste de Arquetipos (se necessário)
        // Aqui você pode definir a lógica para arquetipos, se necessário
        $arquetipo = 1; // Exemplo de valor fixo, ajuste conforme necessário
        $customerData['arquetipos'] = $arquetipo;

        // Salvar os dados do cliente no banco de dados
        Customer::updateOrCreate(
            ['email' => $customerData['email']],
            $customerData
        );
    }
}
