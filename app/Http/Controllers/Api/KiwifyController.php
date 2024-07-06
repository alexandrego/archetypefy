<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Order;
use Illuminate\Http\Request;

// client_secret = 9b2c4f9467bd0668d69264452caca0e839243ef7fed5ca90e3a1e5113f9402c3
// client_id = abca9aed-92bb-405a-b4e9-0d145a555deb
// account_id = Pj9KMsmrYA4Cz7I

class KiwifyController extends Controller
{
    public function KiwifyWebhook(Request $request)
    {
        // Verificar se a requisição é válida
        if ($this->isValidKiwifyRequest($request)) {
            // Obter os dados do POST
            // dd($request->all());
            $data = $request->all();

            // if (array_key_exists('Customer', $data)) {
            //     $customerData = $data['Customer'];
            //     // Agora você pode acessar os dados do cliente, como:
            //     $fullName = $customerData['full_name'];
            //     $email = $customerData['email'];
            //     $ip = $customerData['ip'];
            //     // E assim por diante
            // } else {
            //     // Tratar o caso em que a chave "Customer" não está presente
            //     return response()->json(['error' => 'Dados do cliente não encontrados'], 400);
            // }

            // Extrair os dados do cliente
            $customerData = $data['Customer'];

            // Extrair os dados do pedido
            // $orderData = $data['webhook_event_type'];

            // Salvar os dados do cliente no banco de dados
            $customer = Customer::updateOrCreate(
                ['email' => $customerData['email']],
                $customerData
            );

            // Salvar os dados do pedido no banco de dados
            // $order = Order::create([
            //     'customer_id' => $customer->id,
            //     'order_id' => $orderData['id'],
            //     'amount' => $orderData['amount'],
            //     'status' => $orderData['status'],
            // ]);

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
        // $secret_key = 'f72wl8vo9va';

        // // handle HEAD request
        // if (count($_POST) === 0) {
        //     http_response_code(200);
        //     header('Content-Type: application/json');
        //     echo json_encode(['status' => 'ok']);
        //     exit();
        // }

        // // receive order's data
        // $payload = @file_get_contents('php://input');
        // $order = json_decode($payload, true);

        // // verify signature
        // $signature = isset($_GET['signature']) ? trim($_GET['signature']) : '';
        // $calculatedSignature = hash_hmac('sha1', json_encode($order), $secret_key);

        // if ($signature !== $calculatedSignature) {
        //     http_response_code(400);
        //     header('Content-Type: application/json');
        //     echo json_encode(['error' => 'Incorrect signature']);
        //     exit();
        // }

        // // do any job with received order's data

        // http_response_code(200);
        // header('Content-Type: application/json');
        // echo json_encode(['status' => 'ok']);
        return true;
    }
}
