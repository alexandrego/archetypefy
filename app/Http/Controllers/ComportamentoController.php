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
}
