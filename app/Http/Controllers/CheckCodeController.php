<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CheckCodeController extends Controller
{
    public function store(Request $request) {

        $email   = $request->email;
        $password = $request->confirmCode;

        // $sessionEmail = session(['sessionEmail' => $request->sessionEmail]);

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
                return redirect('/confirmCode')->with(['error' => 'Código expirado, verifique seu e-mail com atenção!']);
            }
        } else {
            // O usuário não existe
            // return response()->json(['message' => 'User not found'], 404);
            return redirect()->route('login')->with('error', 'Usuário Ou Código Inválido!');
        }
    }

    public function destroy() {
        Auth::logout();
        return redirect()->route('login');
    }
}
