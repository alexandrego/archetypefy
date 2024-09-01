<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class KiwifyController extends Controller
{
    // Webhook para receber compra aprovada
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

    // Webhook para receber conta cancelada ou reembolsada
    public function KiwifyCanceledOrRefunded(Request $request)
    {
        // Verificar se a requisição é válida
        if (!$this->isValidKiwifyRequest($request)) {
            return response()->json(['error' => 'Requisição inválida'], 400);
        }

        // Obter os dados do POST
        $data = $request->all();

        // Verificar o tipo de evento do webhook
        $eventType = $data['webhook_event_type'];

        if ($eventType === 'order_refunded' || $eventType === 'subscription_cancelled') {
            // Obter o email do cliente
            $customerEmail = $data['Customer']['email'];

            // Atualizar o valor de $arquetipo para 0 no banco de dados
            $this->updateCustomerArchetipo($customerEmail);
        }

        // Retornar uma resposta de sucesso
        return response()->json(['message' => 'Webhook recebido e processado com sucesso'], 200);
    }

    private function isValidKiwifyRequest(Request $request)
    {
        // Acessa as chaves do arquivo .env
        $secretKey1 = env('KIWIFY_SECRET_KEY_APPROVED_DEV');
        $secretKey2 = env('KIWIFY_SECRET_KEY_REFUNDED_DEV');
        $secretKey3 = env('KIWIFY_SECRET_KEY_APPROVED_PRODUCTION');
        $secretKey4 = env('KIWIFY_SECRET_KEY_REFUNDED_PRODUCTION');

        // Verifica se pelo menos uma das chaves está definida
        if (empty($secretKey1) && empty($secretKey2) && empty($secretKey3) && empty($secretKey4)) {
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
        $calculatedSignature3 = hash_hmac('sha1', json_encode($order), $secretKey3);
        $calculatedSignature4 = hash_hmac('sha1', json_encode($order), $secretKey4);

        // Verifica se a assinatura corresponde a alguma das chaves
        if (!hash_equals($signature, $calculatedSignature1) && !hash_equals($signature, $calculatedSignature2) && !hash_equals($signature, $calculatedSignature3) && !hash_equals($signature, $calculatedSignature4)) {
            Log::warning('Assinatura inválida recebida do webhook Kiwify', [
                'expected_signature_1' => $calculatedSignature1,
                'expected_signature_2' => $calculatedSignature2,
                'expected_signature_3' => $calculatedSignature3,
                'expected_signature_4' => $calculatedSignature4,
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

    private function updateCustomerArchetipo($customerEmail)
    {
        $customer = Customer::where('email', $customerEmail)->first();

        if ($customer) {
            $customer->arquetipos = 0; // Definir $arquetipo como 0
            $customer->save();

            Log::info('Valor de $arquetipo atualizado para 0 para o cliente com email: ' . $customerEmail);
        } else {
            Log::warning('Cliente não encontrado com o email: ' . $customerEmail);
        }
    }
}
