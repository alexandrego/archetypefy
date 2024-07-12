<?php

namespace App\Http\Controllers;

use App\Models\Comportamentos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ComportamentoController extends Controller
{
    public function Comportamento1()
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $comportamento = Comportamentos::where('user_id', $userID)->first();

        if ($comportamento) {
            $answer = session()->forget('answer');
            $answer = session(['answer' => $comportamento->comportamento1]);

            return view('layouts/comportamentos/comportamento1')->with(['answer' => $answer]);
        } else {
            return view('layouts/comportamentos/comportamento1');
        }
    }
    public function SaveComportamento1(Request $request)
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer = $request->temper;

        // Verifica se o email existe no banco de dados
        $user = Comportamentos::where('user_id', $userID)->first();

        if($user){
            $user->comportamento1 = $answer;
            $user->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento2;
            if($answer === NULL) {
                return view('layouts/comportamentos/comportamento2');
            } else {
                $answer = session(['answer' => $user->comportamento2]);
                return view('layouts/comportamentos/comportamento2')->with(['answer' => $answer]);
            }
        } else {
            $temper = new Comportamentos();
            $temper->user_id = $userID;
            $temper->comportamento1 = $answer;
            $temper->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento2;
            if($answer === NULL) {
                return view('layouts/comportamentos/comportamento2');
            } else {
                $answer = session(['answer' => $user->comportamento2]);
                return view('layouts/comportamentos/comportamento2')->with(['answer' => $answer]);
            }
        }
    }
}
