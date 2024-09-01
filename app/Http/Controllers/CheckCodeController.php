<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CheckCodeController extends Controller
{
    public function store(Request $request)
    {
        $email   = $request->email;
        $password = $request->confirmCode;
        $whoIs =  $request->whoIs;

        // Verifica se o email existe no banco de dados
        $user = User::where('email', $email)->first();

        if ($user) {
            // Verifica se a senha está correta
            if (Hash::check($password, $user->password)) {
                // A senha está correta
                $user->markEmailAsVerified();
                $user->save();

                // Cria uma sessão
                Auth::login($user);

                // Direciona para a página de logado
                return redirect('/dashboard')->with(['nome' => $user->name]);
            } else {
                // A senha está incorreta
                if($whoIs = 'adm') {
                    return redirect('/confirmCode')->with(
                        [
                            'error' => 'Senha não confere, tente novamente!',
                            'user' => $user,
                            'whoIs' => $whoIs
                        ]
                    );
                } else {
                    return redirect('/confirmCode')->with(
                        [
                            'error' => 'Código expirado, verifique seu e-mail com atenção!',
                            'user' => $user,
                            'whoIs' => $whoIs
                        ]
                    );
                }
            }
        } else {
            // O usuário não existe
            // return response()->json(['message' => 'User not found'], 404);
            return redirect()->route('login')->with('error', 'Usuário Ou Código Inválido!');
        }
    }

    public function CreatePassword(Request $request)
    {
         // Validação dos dados recebidos
        $request->validate([
            'email' => 'required|email|exists:users,email', // Verifica se o email existe na tabela 'users'
            'crieSenha' => 'required|string|min:4|max:8', // Valida a nova senha
            'confirmSenha' => 'required|string|min:4|max:8', // Valida a confirmação da senha
        ]);

        // Recebe os dados
        $email = $request->email;
        $password = $request->crieSenha;
        $confirmPassword = $request->confirmSenha;

        // Verifica se as senhas são iguais
        if ($password !== $confirmPassword) {
            // Se as senhas não coincidirem, redireciona de volta com uma mensagem de erro
            return redirect()->back()->with('error', 'As senhas não coincidem. Por favor, tente novamente.');
        }

        // Verifica se o email existe no banco de dados
        $user = User::where('email', $email)->first();

        if ($user) {
            // Atualiza a senha do usuário
            $user->password = Hash::make($password); // Usa Hash para criptografar a nova senha
            $user->save(); // Salva as alterações

            // Cria uma sessão
            Auth::login($user);

            // Se atualizar vai para a Dashboard com uma mensagem de sucesso
            return redirect()->route('dashboard')->with(
                [
                    'success' => 'Senha atualizada com sucesso!',
                    'nome' => $user->name
                ]
            );
        } else {
            // Se não encontrar o usuário, redireciona de volta com uma mensagem de erro
            return redirect()->back()->with('error', 'Usuário não encontrado. Por favor, verifique o email.');
        }
    }

    public function destroy()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
