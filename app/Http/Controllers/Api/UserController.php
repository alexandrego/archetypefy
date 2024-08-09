<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Retorna uma lista paginada de usuários.
     *
     * Este método recupera uma lista paginada de usuários do banco de dados
     * e a retorna como uma resposta JSON.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function Index() : JsonResponse
    {
        // Recupera os usuários do banco de dados, ordenados pelo id em ordem decrescente, paginados
        $users = User::orderBy('id', 'DESC')->paginate(2);

        // Retorna a resposta JSON com a lista paginada de usuários
        return response()->json([
            'status' => true,
            'users' => $users,
        ],200);
    }
    /**
     * Exibe os detalhes de um usuário específico.
     *
     * Este método retorna os detalhes de um usuário específico em formato JSON.
     *
     * @param \App\Models\User $user O objeto do usuário a ser exibido
     * @return \Illuminate\Http\JsonResponse
     */
    public function Show(User $user) : JsonResponse
    {
        // Retorna a resposta JSON com os detalhes do usuário
        return response()->json([
            'status' => true,
            'user' => $user,
        ],200);
    }
    public function Store(Request $request)
    {
        // dd($request);
    }
}
