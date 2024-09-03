<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class KiwifyController extends Controller
{
    // Teste de Arquetipos
        // Webhook para receber compra aprovada do Teste de Arquetipos
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

        // Webhook para receber conta cancelada ou reembolsada do Teste de Arquetipos
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

            if ($eventType === 'order_refunded' || $eventType === 'subscription_canceled') {
                // Obter o email do cliente
                $customerEmail = $data['Customer']['email'];

                // Atualizar o valor de $arquetipo para 0 no banco de dados
                $this->updateCustomerArchetipo($customerEmail);
            }

            // Retornar uma resposta de sucesso
            return response()->json(['message' => 'Webhook recebido e processado com sucesso'], 200);
        }

        // Webhook para cadastrar ou ativar compra do Teste de Arquetipos
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

        // Webhook para desativar conta cancelada ou reembolsada do Teste de Arquetipos
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
    // Teste de Arquetipos

    // Teste de Temperamentos
        // Webhook para receber compra aprovada do Teste de Temperamentos
        public function KiwifyTemperamentos(Request $request)
        {
            // Verificar se a requisição é válida
            if (!$this->isValidKiwifyRequest($request)) {
                return response()->json(['error' => 'Requisição inválida'], 400);
            }

            // Obter os dados do POST
            $data = $request->all();

            // Processar os dados do cliente
            $this->processCustomerDataTemperamentos($data['Customer']);

            // Retornar uma resposta de sucesso
            return response()->json(['message' => 'Webhook recebido e dados salvos com sucesso'], 200);
        }

        // Webhook para receber conta cancelada ou reembolsada do Teste de Temperamentos
        public function KiwifyTemperamentosCanceledOrRefunded(Request $request)
        {
            // Verificar se a requisição é válida
            if (!$this->isValidKiwifyRequest($request)) {
                return response()->json(['error' => 'Requisição inválida'], 400);
            }

            // Obter os dados do POST
            $data = $request->all();

            // Verificar o tipo de evento do webhook
            $eventType = $data['webhook_event_type'];

            if ($eventType === 'order_refunded' || $eventType === 'subscription_canceled') {
                // Obter o email do cliente
                $customerEmail = $data['Customer']['email'];

                // Atualizar o valor de $arquetipo para 0 no banco de dados
                $this->updateCustomerTemperamentos($customerEmail);
            }

            // Retornar uma resposta de sucesso
            return response()->json(['message' => 'Webhook recebido e processado com sucesso'], 200);
        }

        // Webhook para cadastrar ou ativar compra do Teste de Temperamentos
        private function processCustomerDataTemperamentos(array $customerData)
        {
            // Libera o Teste de Temperamentos (se necessário)
            // Aqui você pode definir a lógica para Temperamentos, se necessário
            $temperamentos = 1; // Exemplo de valor fixo, ajuste conforme necessário
            $customerData['temperamentos'] = $temperamentos;

            // Salvar os dados do cliente no banco de dados
            Customer::updateOrCreate(
                ['email' => $customerData['email']],
                $customerData
            );
        }

        // Webhook para desativar conta cancelada ou reembolsada do Teste de Temperamentos
        private function updateCustomerTemperamentos($customerEmail)
        {
            $customer = Customer::where('email', $customerEmail)->first();

            if ($customer) {
                $customer->temperamentos = 0; // Definir temperamentos como 0
                $customer->save();

                Log::info('Valor de temperamentos atualizado para 0 para o cliente com email: ' . $customerEmail);
            } else {
                Log::warning('Cliente não encontrado com o email: ' . $customerEmail);
            }
        }
    // Teste de Temperamentos

    // Teste Comportamental
        // Webhook para receber compra aprovada do Perfil Comportamental
        public function KiwifyComportamentos(Request $request)
        {
            // Verificar se a requisição é válida
            if (!$this->isValidKiwifyRequest($request)) {
                return response()->json(['error' => 'Requisição inválida'], 400);
            }

            // Obter os dados do POST
            $data = $request->all();

            // Processar os dados do cliente
            $this->processCustomerDataComportamentos($data['Customer']);

            // Retornar uma resposta de sucesso
            return response()->json(['message' => 'Webhook recebido e dados salvos com sucesso'], 200);
        }

        // Webhook para receber conta cancelada ou reembolsada do Perfil Comportamental
        public function KiwifyComportamentosCanceledOrRefunded(Request $request)
        {
            // Verificar se a requisição é válida
            if (!$this->isValidKiwifyRequest($request)) {
                return response()->json(['error' => 'Requisição inválida'], 400);
            }

            // Obter os dados do POST
            $data = $request->all();

            // Verificar o tipo de evento do webhook
            $eventType = $data['webhook_event_type'];

            if ($eventType === 'order_refunded' || $eventType === 'subscription_canceled') {
                // Obter o email do cliente
                $customerEmail = $data['Customer']['email'];

                // Atualizar o valor de $arquetipo para 0 no banco de dados
                $this->updateCustomerComportamental($customerEmail);
            }

            // Retornar uma resposta de sucesso
            return response()->json(['message' => 'Webhook recebido e processado com sucesso'], 200);
        }

        // Webhook para cadastrar ou ativar compra do Perfil Comportamental
        private function processCustomerDataComportamentos(array $customerData)
        {
            // Libera o Teste de Arquetipos (se necessário)
            // Aqui você pode definir a lógica para arquetipos, se necessário
            $comportamental = 1; // Exemplo de valor fixo, ajuste conforme necessário
            $customerData['comportamental'] = $comportamental;

            // Salvar os dados do cliente no banco de dados
            Customer::updateOrCreate(
                ['email' => $customerData['email']],
                $customerData
            );
        }

        // Webhook para desativar conta cancelada ou reembolsada do Perfil Comportamental
        private function updateCustomerComportamental($customerEmail)
        {
            $customer = Customer::where('email', $customerEmail)->first();

            if ($customer) {
                $customer->comportamental = 0; // Definir comportamental como 0
                $customer->save();

                Log::info('Valor de comportamental atualizado para 0 para o cliente com email: ' . $customerEmail);
            } else {
                Log::warning('Cliente não encontrado com o email: ' . $customerEmail);
            }
        }
    // Teste Comportamental

    // Combo
        // Webhook para receber compra aprovada do Perfil Comportamental
        public function KiwifyCombo(Request $request)
        {
            // Verificar se a requisição é válida
            if (!$this->isValidKiwifyRequest($request)) {
                return response()->json(['error' => 'Requisição inválida'], 400);
            }

            // Obter os dados do POST
            $data = $request->all();

            // Processar os dados do cliente
            $this->processCustomerDataCombo($data['Customer']);

            // Retornar uma resposta de sucesso
            return response()->json(['message' => 'Webhook recebido e dados salvos com sucesso'], 200);
        }

        // Webhook para receber conta cancelada ou reembolsada do Perfil Comportamental
        public function KiwifyComboCanceledOrRefunded(Request $request)
        {
            // Verificar se a requisição é válida
            if (!$this->isValidKiwifyRequest($request)) {
                return response()->json(['error' => 'Requisição inválida'], 400);
            }

            // Obter os dados do POST
            $data = $request->all();

            // Verificar o tipo de evento do webhook
            $eventType = $data['webhook_event_type'];

            if ($eventType === 'order_refunded' || $eventType === 'subscription_canceled') {
                // Obter o email do cliente
                $customerEmail = $data['Customer']['email'];

                // Atualizar o valor de $arquetipo para 0 no banco de dados
                $this->updateCustomerCombo($customerEmail);
            }

            // Retornar uma resposta de sucesso
            return response()->json(['message' => 'Webhook recebido e processado com sucesso'], 200);
        }

        // Webhook para cadastrar ou ativar compra do Perfil Comportamental
        private function processCustomerDataCombo(array $customerData)
        {
            // Libera os Testes
            $customerData['arquetipos'] = 1;
            $customerData['temperamentos'] = 1;
            $customerData['comportamental'] = 1;

            // Verifica se o email está presente nos dados do cliente
            if (isset($customerData['email'])) {
                try {
                    // Salvar os dados do cliente no banco de dados
                    Customer::updateOrCreate(
                        ['email' => $customerData['email']],
                        $customerData
                    );
                } catch (\Exception $e) {
                    // Lida com a exceção (por exemplo, log de erro)
                    Log::error('Erro ao salvar dados do cliente: ' . $e->getMessage());
                }
            } else {
                // Lida com a ausência do email
                Log::warning('Email não fornecido nos dados do cliente.');
            }
        }

        // Webhook para desativar conta cancelada ou reembolsada do Perfil Comportamental
        private function updateCustomerCombo($customerEmail)
        {
            try {
                $customer = Customer::where('email', $customerEmail)->first();

                if ($customer) {
                    $customer->update([
                        'arquetipos' => 0,
                        'temperamentos' => 0,
                        'comportamental' => 0,
                    ]);

                    Log::info('Valores atualizados para 0 para o cliente com email: ' . $customerEmail);
                } else {
                    Log::warning('Cliente não encontrado com o email: ' . $customerEmail);
                }
            } catch (\Exception $e) {
                Log::error('Erro ao atualizar cliente: ' . $e->getMessage());
            }
        }
    // Combo

    // Verifica se os POST's estão vindo realmente da Kiwify
    private function isValidKiwifyRequest(Request $request)
    {
        // Chaves do Teste de Arquetipos
        $secretKey1 = env('KIWIFY_SECRET_KEY_APPROVED_DEV');
        $secretKey2 = env('KIWIFY_SECRET_KEY_REFUNDED_DEV');

        $secretKey3 = env('KIWIFY_SECRET_KEY_APPROVED_PRODUCTION');
        $secretKey4 = env('KIWIFY_SECRET_KEY_REFUNDED_PRODUCTION');

        // Chaves do Teste de Comportamentos
        $secretKey5 = env('KIWIFY_SECRET_KEY_COMP_APPROVED_DEV');
        $secretKey6 = env('KIWIFY_SECRET_KEY_COMP_REFUNDED_DEV');

        $secretKey7 = env('KIWIFY_SECRET_KEY_COMP_APPROVED_PRODUCTION');
        $secretKey8 = env('KIWIFY_SECRET_KEY_COMP_REFUNDED_PRODUCTION');

        // Chaves do Teste de Temperamentos
        $secretKey9 = env('KIWIFY_SECRET_KEY_TEMP_APPROVED_DEV');
        $secretKey10 = env('KIWIFY_SECRET_KEY_TEMP_REFUNDED_DEV');

        $secretKey11 = env('KIWIFY_SECRET_KEY_TEMP_APPROVED_PRODUCTION');
        $secretKey12 = env('KIWIFY_SECRET_KEY_TEMP_REFUNDED_PRODUCTION');

        // Chaves do Combo
        $secretKey13 = env('KIWIFY_SECRET_KEY_COMBO_APPROVED_DEV');
        $secretKey14 = env('KIWIFY_SECRET_KEY_COMBO_REFUNDED_DEV');

        $secretKey15 = env('KIWIFY_SECRET_KEY_COMBO_APPROVED_PRODUCTION');
        $secretKey16 = env('KIWIFY_SECRET_KEY_COMBO_REFUNDED_PRODUCTION');

        // Verifica se pelo menos uma das chaves está definida
        if (empty($secretKey1) && empty($secretKey2) && empty($secretKey3) && empty($secretKey4) && empty($secretKey5) && empty($secretKey6) && empty($secretKey7) && empty($secretKey8) && empty($secretKey9) && empty($secretKey10) && empty($secretKey11) && empty($secretKey12) && empty($secretKey13) && empty($secretKey14) && empty($secretKey15) && empty($secretKey16)) {
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
        $calculatedSignature5 = hash_hmac('sha1', json_encode($order), $secretKey5);
        $calculatedSignature6 = hash_hmac('sha1', json_encode($order), $secretKey6);
        $calculatedSignature7 = hash_hmac('sha1', json_encode($order), $secretKey7);
        $calculatedSignature8 = hash_hmac('sha1', json_encode($order), $secretKey8);
        $calculatedSignature9 = hash_hmac('sha1', json_encode($order), $secretKey9);
        $calculatedSignature10 = hash_hmac('sha1', json_encode($order), $secretKey10);
        $calculatedSignature11 = hash_hmac('sha1', json_encode($order), $secretKey11);
        $calculatedSignature12 = hash_hmac('sha1', json_encode($order), $secretKey12);
        $calculatedSignature13 = hash_hmac('sha1', json_encode($order), $secretKey13);
        $calculatedSignature14 = hash_hmac('sha1', json_encode($order), $secretKey14);
        $calculatedSignature15 = hash_hmac('sha1', json_encode($order), $secretKey15);
        $calculatedSignature16 = hash_hmac('sha1', json_encode($order), $secretKey16);

        // Verifica se a assinatura corresponde a alguma das chaves
        if (!hash_equals($signature, $calculatedSignature1) && !hash_equals($signature, $calculatedSignature2) && !hash_equals($signature, $calculatedSignature3) && !hash_equals($signature, $calculatedSignature4) && !hash_equals($signature, $calculatedSignature5) && !hash_equals($signature, $calculatedSignature6) && !hash_equals($signature, $calculatedSignature7) && !hash_equals($signature, $calculatedSignature8) && !hash_equals($signature, $calculatedSignature9) && !hash_equals($signature, $calculatedSignature10) && !hash_equals($signature, $calculatedSignature11) && !hash_equals($signature, $calculatedSignature12) && !hash_equals($signature, $calculatedSignature13) && !hash_equals($signature, $calculatedSignature14) && !hash_equals($signature, $calculatedSignature15) && !hash_equals($signature, $calculatedSignature16)) {
            Log::warning('Assinatura inválida recebida do webhook Kiwify', [
                'expected_signature_1' => $calculatedSignature1,
                'expected_signature_2' => $calculatedSignature2,
                'expected_signature_3' => $calculatedSignature3,
                'expected_signature_4' => $calculatedSignature4,
                'expected_signature_5' => $calculatedSignature5,
                'expected_signature_6' => $calculatedSignature6,
                'expected_signature_7' => $calculatedSignature7,
                'expected_signature_8' => $calculatedSignature8,
                'expected_signature_9' => $calculatedSignature9,
                'expected_signature_10' => $calculatedSignature10,
                'expected_signature_11' => $calculatedSignature11,
                'expected_signature_12' => $calculatedSignature12,
                'expected_signature_13' => $calculatedSignature13,
                'expected_signature_14' => $calculatedSignature14,
                'expected_signature_15' => $calculatedSignature15,
                'expected_signature_16' => $calculatedSignature16,
                'received_signature' => $signature,
            ]);
            return false; // Assinatura inválida
        }

        return true; // Assinatura válida
    }
}
