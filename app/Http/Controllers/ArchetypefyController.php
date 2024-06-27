<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ArchetypefyController extends Controller
{
    public function Index() {

        if(Auth::guest()){
            //Se não estiver logado, volta para o login
            // return redirect()->route('login')->with('error', 'Preencha todos os dados');
        } else {
            return view('layouts/dashboard');
        }

        return view('layouts/index');
    }
    public function ConfirmCode(Request $request) {

        $email = $request->email;

        if(!$email){
            //Se não tiver email, volta para o login
            return redirect()->route('login')->with('error', 'Código Inválido!');
        }

        // return view('layouts/confirmCode')->with('error', 'Preencha todos os dados');
        return view('layouts/confirmCode')->with('email', $email);
    }

    public function Dashboard(Request $request) {

        $nome = session(['nome' => $request->nome]);

        return view('layouts/dashboard')->with(['nome' => $nome]);
    }
    public function Atention() {
        return view('layouts/atention');
    }

    public function StartTest() {
        return view('layouts/startTest');
    }

    public function MailCode() {

        $email    = session('email');

        \Illuminate\Support\Facades\Mail::to($email)->send(
            new \App\Mail\SecuryCode()
        );

        return view('layouts/confirmCode');
    }

    public function store(Request $request) {
        // Gera uma sequência de 4 números aleatórios
        $confirmCode =  array_map('strval', array_map('rand', array(0, 1, 2, 3), array(4, 5, 6, 7)));
        $confirmCode = implode('', $confirmCode);

        $lead = new User();

        $lead->name = $request->nome;
        $lead->email = $request->email;
        $lead->mobile = $request->celular;
        $lead->password = $confirmCode;

        $nome    = $request->nome;
        $email   = $request->email;
        $mobile = $request->celular;

        // Verifica se o email existe no banco de dados
        $user = User::where('email', $email)->first();

        if ($user) {
            // Atualiza a senha do usuário
            $user->password = Hash::make($confirmCode);
            $user->save();

            // Envia dados por e-mail
            return redirect('/mailCode')->with(
                [
                    'nome' => $nome,
                    'email' => $email,
                    'mobile' => $mobile,
                    'confirmCode' => $confirmCode
                ]
            );
        } else {
            // Salva os dados no banco de dados
            $lead->save();

            // Envia dados por e-mail
            return redirect('/mailCode')->with(
                [
                    'nome' => $nome,
                    'email' => $email,
                    'mobile' => $mobile,
                    'confirmCode' => $confirmCode
                ]
            );
        }
    }
}
