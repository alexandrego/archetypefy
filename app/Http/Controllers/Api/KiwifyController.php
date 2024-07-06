<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Order;
use Illuminate\Http\Request;

class KiwifyController extends Controller
{
    public function KiwifyWebhook(Request $request)
    {
        // Verificar se a requisição é válida
        if ($this->isValidKiwifyRequest($request)) {
            // Obter os dados do POST
            $data = $request->all();

            dd($data);

            // Extrair os dados do cliente
            $customerData = $data['Customer'];

            // Extrair os dados do pedido
            $orderData = $data['Order'];

            // Salvar os dados do cliente no banco de dados
            $customer = Customer::updateOrCreate(
                ['email' => $customerData['email']],
                $customerData
            );

            // Salvar os dados do pedido no banco de dados
            $order = Order::create([
                'customer_id' => $customer->id,
                'order_id' => $orderData['id'],
                'amount' => $orderData['amount'],
                'status' => $orderData['status'],
            ]);

            // Retornar uma resposta de sucesso
            return response()->json(['message' => 'Webhook recebido e dados salvos com sucesso'], 200);
        } else {
            // Retornar uma resposta de erro
            return response()->json(['error' => 'Requisição inválida'], 400);
        }
    }

    private function isValidKiwifyRequest(Request $request)
    {
        // Implementar a lógica de validação da requisição da Kiwify
        // Você pode verificar o cabeçalho da requisição, a assinatura, etc.
        // Retornar true se a requisição for válida, false caso contrário

        // Exemplo simples:
        return true;
    }
}
