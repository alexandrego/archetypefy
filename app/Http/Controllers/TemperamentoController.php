<?php

namespace App\Http\Controllers;

use App\Models\Temperamentos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TemperamentoController extends Controller
{
    public function Temper1()
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $temper = Temperamentos::where('user_id', $userID)->first();

        if ($temper) {
            $answer = session()->forget('answer');
            $answer = session(['answer' => $temper->temper1]);

            return view('layouts/temper/temper1')->with(['answer' => $answer]);
        } else {
            return view('layouts/temper/temper1');
        }
    }
    public function SaveTemper1(Request $request)
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer = $request->temper;

        // Verifica se o email existe no banco de dados
        $user = Temperamentos::where('user_id', $userID)->first();

        if($user){
            $user->temper1 = $answer;
            $user->save();

            $answer = session()->forget('answer');
            return view('layouts/temper/temper2');
        } else {
            $temper = new Temperamentos();
            $temper->user_id = $userID;
            $temper->temper1 = $answer;
            $temper->save();

            $answer = session()->forget('answer');
            return view('layouts/temper/temper2');
        }
    }
    public function Temper2()
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $temper = Temperamentos::where('user_id', $userID)->first();

        if ($temper) {
            $answer = session()->forget('answer');
            $answer = session(['answer' => $temper->temper2]);

            return view('layouts/temper/temper2')->with(['answer' => $answer]);
        } else {
            return view('layouts/temper/temper2');
        }
    }
    public function SaveTemper2(Request $request)
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer = $request->temper;

        // Verifica se o email existe no banco de dados
        $user = Temperamentos::where('user_id', $userID)->first();

        if($user){
            $user->temper2 = $answer;
            $user->save();

            $answer = session()->forget('answer');
            return view('layouts/temper/temper3');
        } else {
            $temper = new Temperamentos();
            $temper->user_id = $userID;
            $temper->temper1 = $answer;
            $temper->save();

            $answer = session()->forget('answer');
            return view('layouts/temper/temper3');
        }
    }
}
