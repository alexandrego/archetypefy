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
        $temper1 = Temperamentos::where('user_id', $userID)->first();

        if ($temper1) {

            $answer1 = session(['answer' => $temper1->temper1]);

            return view('layouts/temper/temper1')->with(['answer1' => $answer1]);
        } else {
            return view('layouts/temper/temper1');
        }
    }
}
