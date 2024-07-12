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
            $temper->temper2 = $answer;
            $temper->save();

            $answer = session()->forget('answer');
            return view('layouts/temper/temper3');
        }
    }

    public function Temper3()
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $temper = Temperamentos::where('user_id', $userID)->first();

        if ($temper) {
            $answer = session()->forget('answer');
            $answer = session(['answer' => $temper->temper3]);

            return view('layouts/temper/temper3')->with(['answer' => $answer]);
        } else {
            return view('layouts/temper/temper3');
        }
    }
    public function SaveTemper3(Request $request)
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer = $request->temper;

        // Verifica se o email existe no banco de dados
        $user = Temperamentos::where('user_id', $userID)->first();

        if($user){
            $user->temper3 = $answer;
            $user->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->Temper4;
            dd($answer);
            if($answer == NULL) {
                return view('layouts/temper/temper4');
            } else {
                $answer = session(['answer' => $user->temper4]);
                return view('layouts/temper/temper4')->with(['answer' => $answer]);
            }
            return view('layouts/temper/temper4');
        } else {
            $temper = new Temperamentos();
            $temper->user_id = $userID;
            $temper->temper3 = $answer;
            $temper->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->Temper4;
            if($answer == NULL) {
                return view('layouts/temper/temper4');
            } else {
                $answer = session(['answer' => $user->temper4]);
                return view('layouts/temper/temper4')->with(['answer' => $answer]);
            }
            return view('layouts/temper/temper4');
        }
    }

    public function Temper4()
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $temper = Temperamentos::where('user_id', $userID)->first();

        if ($temper) {
            $answer = session()->forget('answer');
            $answer = session(['answer' => $temper->temper4]);

            return view('layouts/temper/temper4')->with(['answer' => $answer]);
        } else {
            return view('layouts/temper/temper4');
        }
    }
    public function SaveTemper4(Request $request)
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer = $request->temper;

        // Verifica se o email existe no banco de dados
        $user = Temperamentos::where('user_id', $userID)->first();

        if($user){
            $user->temper4 = $answer;
            $user->save();

            $answer = session()->forget('answer');
            return view('layouts/temper/temper5');
        } else {
            $temper = new Temperamentos();
            $temper->user_id = $userID;
            $temper->temper4 = $answer;
            $temper->save();

            $answer = session()->forget('answer');
            return view('layouts/temper/temper5');
        }
    }

    public function Temper5()
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $temper = Temperamentos::where('user_id', $userID)->first();

        if ($temper) {
            $answer = session()->forget('answer');
            $answer = session(['answer' => $temper->temper5]);

            return view('layouts/temper/temper5')->with(['answer' => $answer]);
        } else {
            return view('layouts/temper/temper5');
        }
    }
    public function SaveTemper5(Request $request)
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer = $request->temper;

        // Verifica se o email existe no banco de dados
        $user = Temperamentos::where('user_id', $userID)->first();

        if($user){
            $user->temper5 = $answer;
            $user->save();

            $answer = session()->forget('answer');
            return view('layouts/temper/temper6');
        } else {
            $temper = new Temperamentos();
            $temper->user_id = $userID;
            $temper->temper5 = $answer;
            $temper->save();

            $answer = session()->forget('answer');
            return view('layouts/temper/temper6');
        }
    }

    public function Temper6()
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $temper = Temperamentos::where('user_id', $userID)->first();

        if ($temper) {
            $answer = session()->forget('answer');
            $answer = session(['answer' => $temper->temper6]);

            return view('layouts/temper/temper6')->with(['answer' => $answer]);
        } else {
            return view('layouts/temper/temper6');
        }
    }
    public function SaveTemper6(Request $request)
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer = $request->temper;

        // Verifica se o email existe no banco de dados
        $user = Temperamentos::where('user_id', $userID)->first();

        if($user){
            $user->temper6 = $answer;
            $user->save();

            $answer = session()->forget('answer');
            return view('layouts/temper/temper7');
        } else {
            $temper = new Temperamentos();
            $temper->user_id = $userID;
            $temper->temper6 = $answer;
            $temper->save();

            $answer = session()->forget('answer');
            return view('layouts/temper/temper7');
        }
    }

    public function Temper7()
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $temper = Temperamentos::where('user_id', $userID)->first();

        if ($temper) {
            $answer = session()->forget('answer');
            $answer = session(['answer' => $temper->temper7]);

            return view('layouts/temper/temper7')->with(['answer' => $answer]);
        } else {
            return view('layouts/temper/temper7');
        }
    }
    public function SaveTemper7(Request $request)
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer = $request->temper;

        // Verifica se o email existe no banco de dados
        $user = Temperamentos::where('user_id', $userID)->first();

        if($user){
            $user->temper7 = $answer;
            $user->save();

            $answer = session()->forget('answer');
            return view('layouts/temper/temper8');
        } else {
            $temper = new Temperamentos();
            $temper->user_id = $userID;
            $temper->temper7 = $answer;
            $temper->save();

            $answer = session()->forget('answer');
            return view('layouts/temper/temper8');
        }
    }

    public function Temper8()
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $temper = Temperamentos::where('user_id', $userID)->first();

        if ($temper) {
            $answer = session()->forget('answer');
            $answer = session(['answer' => $temper->temper8]);

            return view('layouts/temper/temper8')->with(['answer' => $answer]);
        } else {
            return view('layouts/temper/temper8');
        }
    }
    public function SaveTemper8(Request $request)
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer = $request->temper;

        // Verifica se o email existe no banco de dados
        $user = Temperamentos::where('user_id', $userID)->first();

        if($user){
            $user->temper8 = $answer;
            $user->save();

            $answer = session()->forget('answer');
            return view('layouts/temper/temper9');
        } else {
            $temper = new Temperamentos();
            $temper->user_id = $userID;
            $temper->temper8 = $answer;
            $temper->save();

            $answer = session()->forget('answer');
            return view('layouts/temper/temper9');
        }
    }

    public function Temper9()
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $temper = Temperamentos::where('user_id', $userID)->first();

        if ($temper) {
            $answer = session()->forget('answer');
            $answer = session(['answer' => $temper->temper9]);

            return view('layouts/temper/temper9')->with(['answer' => $answer]);
        } else {
            return view('layouts/temper/temper9');
        }
    }
    public function SaveTemper9(Request $request)
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer = $request->temper;

        // Verifica se o email existe no banco de dados
        $user = Temperamentos::where('user_id', $userID)->first();

        if($user){
            $user->temper9 = $answer;
            $user->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->Temper10;
            if($answer == NULL) {
                return view('layouts/temper/temper10');
            } else {
                $answer = session(['answer' => $user->temper10]);
                return view('layouts/temper/temper10')->with(['answer' => $answer]);
            }
        } else {
            $temper = new Temperamentos();
            $temper->user_id = $userID;
            $temper->temper9 = $answer;
            $temper->save();

            $answer = session()->forget('answer');
            return view('layouts/temper/temper10');
        }
    }

    public function Temper10()
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $temper = Temperamentos::where('user_id', $userID)->first();

        if ($temper) {
            $answer = session()->forget('answer');
            $answer = session(['answer' => $temper->temper10]);

            return view('layouts/temper/temper10')->with(['answer' => $answer]);
        } else {
            return view('layouts/temper/temper10');
        }
    }
    public function SaveTemper10(Request $request)
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer = $request->temper;

        // Verifica se o email existe no banco de dados
        $user = Temperamentos::where('user_id', $userID)->first();

        if($user){
            $user->temper10 = $answer;
            $user->save();

            $answer = session()->forget('answer');
            return view('layouts/temper/temper11');
        } else {
            $temper = new Temperamentos();
            $temper->user_id = $userID;
            $temper->temper10 = $answer;
            $temper->save();

            $answer = session()->forget('answer');
            return view('layouts/temper/temper11');
        }
    }
}
