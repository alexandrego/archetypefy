<?php

namespace App\Http\Controllers;

use App\Models\Comportamentos;
use App\Models\Customer;
use App\Models\Questions;
use App\Models\Temperamentos;
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
        $email = session('sessionEmail');

        if(!$email){
            //Se não tiver email, volta para o login
            return redirect()->route('login')->with('error', 'Código Inválido!');
        }

        // return view('layouts/confirmCode')->with('error', 'Preencha todos os dados');
        return view('layouts/confirmCode')->with('email', $email);
    }

    public function Dashboard(Request $request) {

        // $nome = session(['nome' => $request->nome]);
        $user = Auth::user();
        $userID = $user->id;
        $fullName = $user->name;

        $firstName = strtok($fullName, " ");

        session(['firstName' => $firstName]);

        $lastQuestion = Questions::where('id', $userID)->first();
        $lastTemper = Temperamentos::where('id', $userID)->first();
        $lastComportamento = Comportamentos::where('id', $userID)->first();

        if ($lastQuestion) {
            $columnNames = array_keys($lastQuestion->getAttributes());
            $firstNullColumn = null;

            foreach ($columnNames as $column) {
                if ($lastQuestion->$column === null) {
                    $firstNullColumn = $column;
                    break;
                }
            }

            if ($firstNullColumn) {
                if($firstNullColumn === "question_1"){
                    // Não exiba nada
                } else if ($firstNullColumn === "question_2"){
                    session(['firstNullColumn' => $firstNullColumn]);
                }
            } else {
                $firstNullColumn = 'result';
                session(['firstNullColumn' => $firstNullColumn]);
            }
        } else {
            $firstNullColumn = 'nao_iniciado';
            session(['firstNullColumn' => $firstNullColumn]);
        }

        if ($lastTemper) {
            $columnNamesTemper = array_keys($lastTemper->getAttributes());
            $firstNullColumnTemper = null;

            foreach ($columnNamesTemper as $columnTemper) {
                if ($lastTemper->$columnTemper === null) {
                    $firstNullColumnTemper = $columnTemper;
                    break;
                }
            }

            if ($firstNullColumnTemper) {
                if($firstNullColumnTemper == "temper1"){
                    // Não exiba nada
                } else if ($firstNullColumnTemper == "temper2"){
                    session(['firstNullColumnTemper' => $firstNullColumnTemper]);
                }
            } else {
                $firstNullColumnTemper = 'resultTemper';
                session(['firstNullColumnTemper' => $firstNullColumnTemper]);
            }
        } else {
            $firstNullColumnTemper = 'nao_iniciado_temper';
            session(['firstNullColumnTemper' => $firstNullColumnTemper]);
        }

        if ($lastComportamento) {
            $columnNamesComportamento = array_keys($lastComportamento->getAttributes());
            $firstNullColumnComportamento = null;

            foreach ($columnNamesComportamento as $columnComportamento) {
                if ($lastComportamento->$columnComportamento === null) {
                    $firstNullColumnComportamento = $columnComportamento;
                    break;
                }
            }

            if ($firstNullColumnComportamento) {
                if($firstNullColumnComportamento == "comportamento1"){
                    // Não exiba nada
                } else if ($firstNullColumnComportamento == "comportamento2"){
                    session(['firstNullColumnComportamento' => $firstNullColumnComportamento]);
                }
            } else {
                $firstNullColumnComportamento = 'resultComportamento';
                session(['firstNullColumnComportamento' => $firstNullColumnComportamento]);
            }
        } else {
            $firstNullColumnComportamento = 'nao_iniciado_Comportamento';
            session(['firstNullColumnComportamento' => $firstNullColumnComportamento]);
        }

        return view('layouts/dashboard')->with(['firstName' => $firstName, 'firstNullColumn' => $firstNullColumn, 'firstNullColumnTemper' => $firstNullColumnTemper, 'firstNullColumnComportamento' => $firstNullColumnComportamento]);
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

        // $lead = new User();

        // $lead->name = $request->nome;
        // $lead->email = $request->email;
        // $lead->mobile = $request->celular;
        // $lead->password = $confirmCode;

        // $nome    = $request->nome;
        $email   = $request->email;
        // $mobile = $request->celular;

        // Verifica se o email existe no banco de dados
        $user = Customer::where('email', $email)->first();

        if ($user) {
            $newUserName = $user->full_name;
            $newUserEmail = $user->email;
            $newUserMobile = $user->mobile;

            dd($newUserName, $newUserEmail, $newUserMobile);

            // Atualiza a senha do usuário
            // $user->password = Hash::make($confirmCode);
            // $user->save();

            // Envia dados por e-mail
            return redirect('/mailCode')->with(
                [
                    // 'nome' => $nome,
                    'email' => $email,
                    // 'mobile' => $mobile,
                    'confirmCode' => $confirmCode
                ]
            );
        } else {
            $email   = $request->email;
            // session(['emailNaoEncontrado' => $email]);
            return redirect('/')->with('error', 'Email não encontrado!');
            // Salva os dados no banco de dados
            // $lead->save();

            // Envia dados por e-mail
            // return redirect('/mailCode')->with(
            //     [
            //         'nome' => $nome,
            //         'email' => $email,
            //         'mobile' => $mobile,
            //         'confirmCode' => $confirmCode
            //     ]
            // );
        }
    }
}
