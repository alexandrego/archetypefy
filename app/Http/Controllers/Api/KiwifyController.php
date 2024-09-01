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
        // Acessa as chaves do arquivo .env
        $secretKey1 = env('KIWIFY_SECRET_KEY_DEV');
        $secretKey2 = env('KIWIFY_SECRET_KEY_PRODUCTION');

        // Verifica se pelo menos uma das chaves está definida
        if (empty($secretKey1) && empty($secretKey2)) {
            Log::error('Nenhuma chave secreta Kiwify está definida no arquivo .env.');
            return response()->json(['error' => 'Chave secreta não configurada'], 500);
        }

        // Verifica se a requisição é do tipo HEAD
        if ($request->isMethod('HEAD')) {
            return true; // Responde OK para HEAD requests
        }

        // Recebe os dados do pedido
        $payload = $request->getContent();
        $order = json_decode($payload, true);

        // Verifica a assinatura
        $signature = $request->query('signature', '');
        $calculatedSignature1 = hash_hmac('sha1', json_encode($order), $secretKey1);
        $calculatedSignature2 = hash_hmac('sha1', json_encode($order), $secretKey2);

        // Verifica se a assinatura corresponde a alguma das chaves
        if (!hash_equals($signature, $calculatedSignature1) && !hash_equals($signature, $calculatedSignature2)) {
            Log::warning('Assinatura inválida recebida do webhook Kiwify', [
                'expected_signature_1' => $calculatedSignature1,
                'expected_signature_2' => $calculatedSignature2,
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
