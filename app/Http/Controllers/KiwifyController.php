<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KiwifyController extends Controller
{
    public function KiwifyWebhook(Request $request) {// Verificar se a requisição é válida
        if ($this->isValidKiwifyRequest($request)) {
            // Obter os dados do POST
            $data = $request->all();

            // Mostrar os dados usando dd()
            dd($data);

            // Você pode processar os dados aqui, como salvar no banco de dados
            // ...

            // Retornar uma resposta de sucesso
            return response()->json(['message' => 'Webhook recebido com sucesso']);
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
