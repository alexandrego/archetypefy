<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\User;
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
            $data = $request->all();

            // Extrair os dados do cliente
            $customerData = $data['Customer'];

            // Extrair os dados do pedido
            // $orderData = $data['webhook_event_type'];

            // Salvar os dados do cliente no banco de dados
            // $customer = Customer::updateOrCreate(
            //     ['email' => $customerData['email']],
            //     $customerData
            // );
            Customer::updateOrCreate(
                ['email' => $customerData['email']],
                $customerData
            );

            $lead = new User();

            $lead->name   = $customerData['full_name'];
            $lead->email  = $customerData['email'];
            $lead->mobile = $customerData['mobile'];

            $lead->save();

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
        // $secret_key = $request;

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
