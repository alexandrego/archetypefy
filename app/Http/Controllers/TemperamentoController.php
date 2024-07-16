<?php

namespace App\Http\Controllers;

use App\Models\Temperamentos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;

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

            //Verifica se tem resposta na próxima view
            $answer = $user->temper2;
            if($answer === NULL) {
                return view('layouts/temper/temper2');
            } else {
                $answer = session(['answer' => $user->temper2]);
                return view('layouts/temper/temper2')->with(['answer' => $answer]);
            }
        } else {
            $temper = new Temperamentos();
            $temper->user_id = $userID;
            $temper->temper1 = $answer;
            $temper->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->temper2;
            if($answer === NULL) {
                return view('layouts/temper/temper2');
            } else {
                $answer = session(['answer' => $user->temper2]);
                return view('layouts/temper/temper2')->with(['answer' => $answer]);
            }
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

            //Verifica se tem resposta na próxima view
            $answer = $user->temper3;
            if($answer === NULL) {
                return view('layouts/temper/temper3');
            } else {
                $answer = session(['answer' => $user->temper3]);
                return view('layouts/temper/temper3')->with(['answer' => $answer]);
            }
        } else {
            $temper = new Temperamentos();
            $temper->user_id = $userID;
            $temper->temper2 = $answer;
            $temper->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->temper3;
            if($answer === NULL) {
                return view('layouts/temper/temper3');
            } else {
                $answer = session(['answer' => $user->temper3]);
                return view('layouts/temper/temper3')->with(['answer' => $answer]);
            }
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
            $answer = $user->temper4;
            if($answer === NULL) {
                return view('layouts/temper/temper4');
            } else {
                $answer = session(['answer' => $user->temper4]);
                return view('layouts/temper/temper4')->with(['answer' => $answer]);
            }
        } else {
            $temper = new Temperamentos();
            $temper->user_id = $userID;
            $temper->temper3 = $answer;
            $temper->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->temper4;
            if($answer == NULL) {
                return view('layouts/temper/temper4');
            } else {
                $answer = session(['answer' => $user->temper4]);
                return view('layouts/temper/temper4')->with(['answer' => $answer]);
            }
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

            //Verifica se tem resposta na próxima view
            $answer = $user->temper5;
            if($answer === NULL) {
                return view('layouts/temper/temper5');
            } else {
                $answer = session(['answer' => $user->temper5]);
                return view('layouts/temper/temper5')->with(['answer' => $answer]);
            }
        } else {
            $temper = new Temperamentos();
            $temper->user_id = $userID;
            $temper->temper4 = $answer;
            $temper->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->temper5;
            if($answer === NULL) {
                return view('layouts/temper/temper5');
            } else {
                $answer = session(['answer' => $user->temper5]);
                return view('layouts/temper/temper5')->with(['answer' => $answer]);
            }
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

            //Verifica se tem resposta na próxima view
            $answer = $user->temper6;
            if($answer === NULL) {
                return view('layouts/temper/temper6');
            } else {
                $answer = session(['answer' => $user->temper6]);
                return view('layouts/temper/temper6')->with(['answer' => $answer]);
            }
        } else {
            $temper = new Temperamentos();
            $temper->user_id = $userID;
            $temper->temper5 = $answer;
            $temper->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->temper6;
            if($answer === NULL) {
                return view('layouts/temper/temper6');
            } else {
                $answer = session(['answer' => $user->temper6]);
                return view('layouts/temper/temper6')->with(['answer' => $answer]);
            }
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

            //Verifica se tem resposta na próxima view
            $answer = $user->temper7;
            if($answer === NULL) {
                return view('layouts/temper/temper7');
            } else {
                $answer = session(['answer' => $user->temper7]);
                return view('layouts/temper/temper7')->with(['answer' => $answer]);
            }
        } else {
            $temper = new Temperamentos();
            $temper->user_id = $userID;
            $temper->temper6 = $answer;
            $temper->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->temper7;
            if($answer === NULL) {
                return view('layouts/temper/temper7');
            } else {
                $answer = session(['answer' => $user->temper7]);
                return view('layouts/temper/temper7')->with(['answer' => $answer]);
            }
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

            //Verifica se tem resposta na próxima view
            $answer = $user->temper8;
            if($answer === NULL) {
                return view('layouts/temper/temper8');
            } else {
                $answer = session(['answer' => $user->temper8]);
                return view('layouts/temper/temper8')->with(['answer' => $answer]);
            }
        } else {
            $temper = new Temperamentos();
            $temper->user_id = $userID;
            $temper->temper7 = $answer;
            $temper->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->temper8;
            if($answer === NULL) {
                return view('layouts/temper/temper8');
            } else {
                $answer = session(['answer' => $user->temper8]);
                return view('layouts/temper/temper8')->with(['answer' => $answer]);
            }
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

            //Verifica se tem resposta na próxima view
            $answer = $user->temper9;
            if($answer === NULL) {
                return view('layouts/temper/temper9');
            } else {
                $answer = session(['answer' => $user->temper9]);
                return view('layouts/temper/temper9')->with(['answer' => $answer]);
            }
        } else {
            $temper = new Temperamentos();
            $temper->user_id = $userID;
            $temper->temper8 = $answer;
            $temper->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->temper9;
            if($answer === NULL) {
                return view('layouts/temper/temper9');
            } else {
                $answer = session(['answer' => $user->temper9]);
                return view('layouts/temper/temper9')->with(['answer' => $answer]);
            }
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
            $answer = $user->temper10;
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

            //Verifica se tem resposta na próxima view
            $answer = $user->temper10;
            if($answer == NULL) {
                return view('layouts/temper/temper10');
            } else {
                $answer = session(['answer' => $user->temper10]);
                return view('layouts/temper/temper10')->with(['answer' => $answer]);
            }
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

            //Verifica se tem resposta na próxima view
            $answer = $user->temper11;
            if($answer == NULL) {
                return view('layouts/temper/temper11');
            } else {
                $answer = session(['answer' => $user->temper11]);
                return view('layouts/temper/temper11')->with(['answer' => $answer]);
            }
        } else {
            $temper = new Temperamentos();
            $temper->user_id = $userID;
            $temper->temper10 = $answer;
            $temper->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->temper11;
            if($answer == NULL) {
                return view('layouts/temper/temper11');
            } else {
                $answer = session(['answer' => $user->temper11]);
                return view('layouts/temper/temper11')->with(['answer' => $answer]);
            }
        }
    }

    public function Temper11()
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $temper = Temperamentos::where('user_id', $userID)->first();

        if ($temper) {
            $answer = session()->forget('answer');
            $answer = session(['answer' => $temper->temper11]);

            return view('layouts/temper/temper11')->with(['answer' => $answer]);
        } else {
            return view('layouts/temper/temper11');
        }
    }
    public function SaveTemper11(Request $request)
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer = $request->temper;

        // Verifica se o email existe no banco de dados
        $user = Temperamentos::where('user_id', $userID)->first();

        if($user){
            $user->temper11 = $answer;
            $user->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->temper12;
            if($answer == NULL) {
                return view('layouts/temper/temper12');
            } else {
                $answer = session(['answer' => $user->temper12]);
                return view('layouts/temper/temper12')->with(['answer' => $answer]);
            }
        } else {
            $temper = new Temperamentos();
            $temper->user_id = $userID;
            $temper->temper11 = $answer;
            $temper->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->temper12;
            if($answer == NULL) {
                return view('layouts/temper/temper12');
            } else {
                $answer = session(['answer' => $user->temper12]);
                return view('layouts/temper/temper12')->with(['answer' => $answer]);
            }
        }
    }

    public function Temper12()
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $temper = Temperamentos::where('user_id', $userID)->first();

        if ($temper) {
            $answer = session()->forget('answer');
            $answer = session(['answer' => $temper->temper12]);

            return view('layouts/temper/temper12')->with(['answer' => $answer]);
        } else {
            return view('layouts/temper/temper12');
        }
    }
    public function SaveTemper12(Request $request)
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer = $request->temper;

        // Verifica se o email existe no banco de dados
        $user = Temperamentos::where('user_id', $userID)->first();

        if($user){
            $user->temper12 = $answer;
            $user->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->temper13;
            if($answer == NULL) {
                return view('layouts/temper/temper13');
            } else {
                $answer = session(['answer' => $user->temper13]);
                return view('layouts/temper/temper13')->with(['answer' => $answer]);
            }
        } else {
            $temper = new Temperamentos();
            $temper->user_id = $userID;
            $temper->temper12 = $answer;
            $temper->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->temper13;
            if($answer == NULL) {
                return view('layouts/temper/temper13');
            } else {
                $answer = session(['answer' => $user->temper13]);
                return view('layouts/temper/temper13')->with(['answer' => $answer]);
            }
        }
    }

    public function Temper13()
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $temper = Temperamentos::where('user_id', $userID)->first();

        if ($temper) {
            $answer = session()->forget('answer');
            $answer = session(['answer' => $temper->temper13]);

            return view('layouts/temper/temper13')->with(['answer' => $answer]);
        } else {
            return view('layouts/temper/temper13');
        }
    }
    public function SaveTemper13(Request $request)
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer = $request->temper;

        // Verifica se o email existe no banco de dados
        $user = Temperamentos::where('user_id', $userID)->first();

        if($user){
            $user->temper13 = $answer;
            $user->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->temper14;
            if($answer == NULL) {
                return view('layouts/temper/temper14');
            } else {
                $answer = session(['answer' => $user->temper14]);
                return view('layouts/temper/temper14')->with(['answer' => $answer]);
            }
        } else {
            $temper = new Temperamentos();
            $temper->user_id = $userID;
            $temper->temper13 = $answer;
            $temper->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->temper14;
            if($answer == NULL) {
                return view('layouts/temper/temper14');
            } else {
                $answer = session(['answer' => $user->temper14]);
                return view('layouts/temper/temper14')->with(['answer' => $answer]);
            }
        }
    }

    public function Temper14()
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $temper = Temperamentos::where('user_id', $userID)->first();

        if ($temper) {
            $answer = session()->forget('answer');
            $answer = session(['answer' => $temper->temper14]);

            return view('layouts/temper/temper14')->with(['answer' => $answer]);
        } else {
            return view('layouts/temper/temper14');
        }
    }
    public function SaveTemper14(Request $request)
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer = $request->temper;

        // Verifica se o email existe no banco de dados
        $user = Temperamentos::where('user_id', $userID)->first();

        if($user){
            $user->temper14 = $answer;
            $user->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->temper15;
            if($answer == NULL) {
                return view('layouts/temper/temper15');
            } else {
                $answer = session(['answer' => $user->temper15]);
                return view('layouts/temper/temper15')->with(['answer' => $answer]);
            }
        } else {
            $temper = new Temperamentos();
            $temper->user_id = $userID;
            $temper->temper14 = $answer;
            $temper->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->temper15;
            if($answer == NULL) {
                return view('layouts/temper/temper15');
            } else {
                $answer = session(['answer' => $user->temper15]);
                return view('layouts/temper/temper15')->with(['answer' => $answer]);
            }
        }
    }

    public function Temper15()
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $temper = Temperamentos::where('user_id', $userID)->first();

        if ($temper) {
            $answer = session()->forget('answer');
            $answer = session(['answer' => $temper->temper15]);

            return view('layouts/temper/temper15')->with(['answer' => $answer]);
        } else {
            return view('layouts/temper/temper15');
        }
    }
    public function SaveTemper15(Request $request)
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer = $request->temper;

        // Verifica se o email existe no banco de dados
        $user = Temperamentos::where('user_id', $userID)->first();

        if($user){
            $user->temper15 = $answer;
            $user->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->temper16;
            if($answer == NULL) {
                return view('layouts/temper/temper16');
            } else {
                $answer = session(['answer' => $user->temper16]);
                return view('layouts/temper/temper16')->with(['answer' => $answer]);
            }
        } else {
            $temper = new Temperamentos();
            $temper->user_id = $userID;
            $temper->temper15 = $answer;
            $temper->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->temper16;
            if($answer == NULL) {
                return view('layouts/temper/temper16');
            } else {
                $answer = session(['answer' => $user->temper16]);
                return view('layouts/temper/temper16')->with(['answer' => $answer]);
            }
        }
    }

    public function Temper16()
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $temper = Temperamentos::where('user_id', $userID)->first();

        if ($temper) {
            $answer = session()->forget('answer');
            $answer = session(['answer' => $temper->temper16]);

            return view('layouts/temper/temper16')->with(['answer' => $answer]);
        } else {
            return view('layouts/temper/temper16');
        }
    }
    public function SaveTemper16(Request $request)
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer = $request->temper;

        // Verifica se o email existe no banco de dados
        $user = Temperamentos::where('user_id', $userID)->first();

        if($user){
            $user->temper16 = $answer;
            $user->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->temper17;
            if($answer == NULL) {
                return view('layouts/temper/temper17');
            } else {
                $answer = session(['answer' => $user->temper17]);
                return view('layouts/temper/temper17')->with(['answer' => $answer]);
            }
        } else {
            $temper = new Temperamentos();
            $temper->user_id = $userID;
            $temper->temper16 = $answer;
            $temper->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->temper17;
            if($answer == NULL) {
                return view('layouts/temper/temper17');
            } else {
                $answer = session(['answer' => $user->temper17]);
                return view('layouts/temper/temper17')->with(['answer' => $answer]);
            }
        }
    }

    public function Temper17()
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $temper = Temperamentos::where('user_id', $userID)->first();

        if ($temper) {
            $answer = session()->forget('answer');
            $answer = session(['answer' => $temper->temper17]);

            return view('layouts/temper/temper17')->with(['answer' => $answer]);
        } else {
            return view('layouts/temper/temper17');
        }
    }
    public function SaveTemper17(Request $request)
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer = $request->temper;

        // Verifica se o email existe no banco de dados
        $user = Temperamentos::where('user_id', $userID)->first();

        if($user){
            $user->temper17 = $answer;
            $user->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->temper18;
            if($answer == NULL) {
                return view('layouts/temper/temper18');
            } else {
                $answer = session(['answer' => $user->temper18]);
                return view('layouts/temper/temper18')->with(['answer' => $answer]);
            }
        } else {
            $temper = new Temperamentos();
            $temper->user_id = $userID;
            $temper->temper17 = $answer;
            $temper->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->temper18;
            if($answer == NULL) {
                return view('layouts/temper/temper18');
            } else {
                $answer = session(['answer' => $user->temper18]);
                return view('layouts/temper/temper18')->with(['answer' => $answer]);
            }
        }
    }

    public function Temper18()
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $temper = Temperamentos::where('user_id', $userID)->first();

        if ($temper) {
            $answer = session()->forget('answer');
            $answer = session(['answer' => $temper->temper18]);

            return view('layouts/temper/temper18')->with(['answer' => $answer]);
        } else {
            return view('layouts/temper/temper18');
        }
    }
    public function SaveTemper18(Request $request)
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer = $request->temper;

        // Verifica se o email existe no banco de dados
        $user = Temperamentos::where('user_id', $userID)->first();

        if($user){
            $user->temper18 = $answer;
            $user->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->temper19;
            if($answer == NULL) {
                return view('layouts/temper/temper19');
            } else {
                $answer = session(['answer' => $user->temper19]);
                return view('layouts/temper/temper19')->with(['answer' => $answer]);
            }
        } else {
            $temper = new Temperamentos();
            $temper->user_id = $userID;
            $temper->temper18 = $answer;
            $temper->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->temper19;
            if($answer == NULL) {
                return view('layouts/temper/temper19');
            } else {
                $answer = session(['answer' => $user->temper19]);
                return view('layouts/temper/temper19')->with(['answer' => $answer]);
            }
        }
    }

    public function Temper19()
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $temper = Temperamentos::where('user_id', $userID)->first();

        if ($temper) {
            $answer = session()->forget('answer');
            $answer = session(['answer' => $temper->temper19]);

            return view('layouts/temper/temper19')->with(['answer' => $answer]);
        } else {
            return view('layouts/temper/temper19');
        }
    }
    public function SaveTemper19(Request $request)
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer = $request->temper;

        // Verifica se o email existe no banco de dados
        $user = Temperamentos::where('user_id', $userID)->first();

        if($user){
            $user->temper19 = $answer;
            $user->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->temper20;
            if($answer == NULL) {
                return view('layouts/temper/temper20');
            } else {
                $answer = session(['answer' => $user->temper20]);
                return view('layouts/temper/temper20')->with(['answer' => $answer]);
            }
        } else {
            $temper = new Temperamentos();
            $temper->user_id = $userID;
            $temper->temper19 = $answer;
            $temper->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->temper20;
            if($answer == NULL) {
                return view('layouts/temper/temper20');
            } else {
                $answer = session(['answer' => $user->temper20]);
                return view('layouts/temper/temper20')->with(['answer' => $answer]);
            }
        }
    }

    public function Temper20()
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $temper = Temperamentos::where('user_id', $userID)->first();

        if ($temper) {
            $answer = session()->forget('answer');
            $answer = session(['answer' => $temper->temper20]);

            return view('layouts/temper/temper20')->with(['answer' => $answer]);
        } else {
            $answer = session()->forget('answer');
            $answer = session(['answer' => $temper->temper20]);

            return view('layouts/temper/temper20')->with(['answer' => $answer]);
        }
    }
    public function SaveTemper20(Request $request)
    {
        // Busca dados no banco
        $user = Auth::user();
        $fullName = $user->name;
        $firstName = strtok($fullName, " ");
        session(['firstName' => $firstName]);
        $userID = $user->id;

        $answer = $request->temper;

        // Verifica se o email existe no banco de dados
        $user = Temperamentos::where('user_id', $userID)->first();

        $times_exec = $user->times_exec;
        if($times_exec == ""){
            $user->times_exec = 1;
        } else {
            $user->times_exec = $times_exec + 1;
        }

        if($user){
            $user->temper20 = $answer;
            $user->times_exec;
            $user->save();

            if($user) {
                $lastTemper = Temperamentos::where('id', $userID)->first();

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
                        if($firstNullColumnTemper === "temper1"){
                            // Não exiba nada
                        } else if ($firstNullColumnTemper === "temper2"){
                            session(['firstNullColumnTemper' => $firstNullColumnTemper]);
                        }
                    } else {
                        $firstNullColumnTemper = 'resultTemper';
                        session(['firstNullColumnTemper' => $firstNullColumnTemper]);
                    }
                } else {
                    $firstNullColumnTemper = 'nao_iniciado';
                    session(['firstNullColumnTemper' => $firstNullColumnTemper]);
                }
                return view('layouts/dashboard')->with(['firstName' => $firstName, 'firstNullColumnTemper' => $firstNullColumnTemper]);
            }
        } else {
            $temper = new Temperamentos();
            $temper->user_id = $userID;
            $temper->temper20 = $answer;
            $temper->$user->times_exec;
            $temper->save();

            $answer = session()->forget('answer');
            return view('layouts/dashboard');
        }
    }

    public function ResultTemper(Request $request) {
        $user = Auth::user();
        $fullName = $user->name;
        $email = $user->email;
        $userID = $user->id;

        // Verifica o banco de dados
        $userTemper = Temperamentos::where('user_id', $userID)->first();

        $sanguineo = "Sanguíneo";
        $res_Temper1 = $userTemper->temper1;
        if($res_Temper1 == "a"){
            $res_Temper1 = 4;
        } else if($res_Temper1 == "b"){
            $res_Temper1 = 3;
        } else if($res_Temper1 == "c"){
            $res_Temper1 = 2;
        } else {
            $res_Temper1 = 1;
        }

        $res_Temper2 = $userTemper->temper2;
        if($res_Temper2 == "a"){
            $res_Temper2 = 1;
        } else if($res_Temper2 == "b"){
            $res_Temper2 = 3;
        } else if($res_Temper2 == "c"){
            $res_Temper2 = 4;
        } else {
            $res_Temper2 = 2;
        }

        $res_Temper3 = $userTemper->temper3;
        if($res_Temper3 == "a"){
            $res_Temper3 = 2;
        } else if($res_Temper3 == "b"){
            $res_Temper3 = 3;
        } else if($res_Temper3 == "c"){
            $res_Temper3 = 4;
        } else {
            $res_Temper3 = 1;
        }

        $res_Temper4 = $userTemper->temper4;
        if($res_Temper4 == "a"){
            $res_Temper4 = 4;
        } else if($res_Temper4 == "b"){
            $res_Temper4 = 1;
        } else if($res_Temper4 == "c"){
            $res_Temper4 = 3;
        } else {
            $res_Temper4 = 2;
        }

        $res_Temper5 = $userTemper->temper5;
        if($res_Temper5 == "a"){
            $res_Temper5 = 3;
        } else if($res_Temper5 == "b"){
            $res_Temper5 = 4;
        } else if($res_Temper5 == "c"){
            $res_Temper5 = 2;
        } else {
            $res_Temper5 = 1;
        }

        $somaSanguineo = $res_Temper1 + $res_Temper2 + $res_Temper3 + $res_Temper4 + $res_Temper5;

        $colerico = "Colérico";

        $res_Temper6 = $userTemper->temper6;
        if($res_Temper6 == "a"){
            $res_Temper6 = 4;
        } else if($res_Temper6 == "b"){
            $res_Temper6 = 2;
        } else if($res_Temper6 == "c"){
            $res_Temper6 = 3;
        } else {
            $res_Temper6 = 1;
        }

        $res_Temper7 = $userTemper->temper7;
        if($res_Temper7 == "a"){
            $res_Temper7 = 2;
        } else if($res_Temper7 == "b"){
            $res_Temper7 = 4;
        } else if($res_Temper7 == "c"){
            $res_Temper7 = 1;
        } else {
            $res_Temper7 = 3;
        }

        $res_Temper8 = $userTemper->temper8;
        if($res_Temper8 == "a"){
            $res_Temper8 = 4;
        } else if($res_Temper8 == "b"){
            $res_Temper8 = 1;
        } else if($res_Temper8 == "c"){
            $res_Temper8 = 2;
        } else {
            $res_Temper8 = 3;
        }

        $res_Temper9 = $userTemper->temper9;
        if($res_Temper9 == "a"){
            $res_Temper9 = 4;
        } else if($res_Temper9 == "b"){
            $res_Temper9 = 2;
        } else if($res_Temper9 == "c"){
            $res_Temper9 = 1;
        } else {
            $res_Temper9 = 3;
        }

        $res_Temper10 = $userTemper->temper10;
        if($res_Temper10 == "a"){
            $res_Temper10 = 4;
        } else if($res_Temper10 == "b"){
            $res_Temper10 = 3;
        } else if($res_Temper10 == "c"){
            $res_Temper10 = 1;
        } else {
            $res_Temper10 = 2;
        }

        $somaColerico = $res_Temper6 + $res_Temper7 + $res_Temper8 + $res_Temper9 + $res_Temper10;

        $melancolico = "Melancólico";

        $res_Temper11 = $userTemper->question_11;
        if($res_Temper11 == "a"){
            $res_Temper11 = 3;
        } else if($res_Temper11 == "b"){
            $res_Temper11 = 2;
        } else if($res_Temper11 == "c"){
            $res_Temper11 = 4;
        } else {
            $res_Temper11 = 1;
        }

        $res_Temper12 = $userTemper->temper12;
        if($res_Temper12 == "a"){
            $res_Temper12 = 1;
        } else if($res_Temper12 == "b"){
            $res_Temper12 = 3;
        } else if($res_Temper12 == "c"){
            $res_Temper12 = 4;
        } else {
            $res_Temper12 = 2;
        }

        $res_Temper13 = $userTemper->temper13;
        if($res_Temper13 == "a"){
            $res_Temper13 = 3;
        } else if($res_Temper13 == "b"){
            $res_Temper13 = 1;
        } else if($res_Temper13 == "c"){
            $res_Temper13 = 4;
        } else {
            $res_Temper13 = 2;
        }

        $res_Temper14 = $userTemper->temper14;
        if($res_Temper14 == "a"){
            $res_Temper14 = 2;
        } else if($res_Temper14 == "b"){
            $res_Temper14 = 3;
        } else if($res_Temper14 == "c"){
            $res_Temper14 = 4;
        } else {
            $res_Temper14 = 1;
        }

        $res_Temper15 = $userTemper->temper15;
        if($res_Temper15 == "a"){
            $res_Temper15 = 4;
        } else if($res_Temper15 == "b"){
            $res_Temper15 = 1;
        } else if($res_Temper15 == "c"){
            $res_Temper15 = 2;
        } else {
            $res_Temper15 = 3;
        }

        $somaMelancolico = $res_Temper11 + $res_Temper12 + $res_Temper13 + $res_Temper14 + $res_Temper15;

        $fleumatico = "Fleumático";

        $res_Temper16 = $userTemper->question_16;
        if($res_Temper16 == "a"){
            $res_Temper16 = 4;
        } else if($res_Temper16 == "b"){
            $res_Temper16 = 3;
        } else if($res_Temper16 == "c"){
            $res_Temper16 = 1;
        } else {
            $res_Temper16 = 2;
        }

        $res_Temper17 = $userTemper->question_17;
        if($res_Temper17 == "a"){
            $res_Temper17 = 4;
        } else if($res_Temper17 == "b"){
            $res_Temper17 = 3;
        } else if($res_Temper17 == "c"){
            $res_Temper17 = 2;
        } else {
            $res_Temper17 = 1;
        }

        $res_Temper18 = $userTemper->temper18;
        if($res_Temper18 == "a"){
            $res_Temper18 = 4;
        } else if($res_Temper18 == "b"){
            $res_Temper18 = 3;
        } else if($res_Temper18 == "c"){
            $res_Temper18 = 1;
        } else {
            $res_Temper18 = 2;
        }

        $res_Temper19 = $userTemper->temper19;
        if($res_Temper19 == "a"){
            $res_Temper19 = 4;
        } else if($res_Temper19 == "b"){
            $res_Temper19 = 3;
        } else if($res_Temper19 == "c"){
            $res_Temper19 = 1;
        } else {
            $res_Temper19 = 2;
        }

        $res_Temper20 = $userTemper->temper20;
        if($res_Temper20 == "a"){
            $res_Temper20 = 4;
        } else if($res_Temper20 == "b"){
            $res_Temper20 = 1;
        } else if($res_Temper20 == "c"){
            $res_Temper20 = 2;
        } else {
            $res_Temper20 = 3;
        }

        $somaFleumatico = $res_Temper16 + $res_Temper17 + $res_Temper18 + $res_Temper19 + $res_Temper20;

        $resultadosTemper = [
            'Sanguíneo' => $somaSanguineo,
            'Colérico' => $somaColerico,
            'Melancólico' => $somaMelancolico,
            'Fleumático' => $somaFleumatico
        ];

        $maiorResultTemper = max($resultadosTemper);
        $maiorResultChaveTemper = array_search($maiorResultTemper, $resultadosTemper);

        $resultadoFinalTemper = session(['resultadoFinalTemper' => $maiorResultChaveTemper]);
        $fullName = session(['fullName' => $fullName]);

        // Gerar o PDF
        $pdf = PDF::loadView('layouts.mail.mailPdfResultTemper', [
            'fullName' => $fullName,
            'resultadoFinalTemper' => $resultadoFinalTemper
        ]);

        // Enviar o email com o PDF anexado
        \Illuminate\Support\Facades\Mail::send('layouts.mail.mailResultTemper', ['fullName' => $fullName, 'resultadoFinalTemper' => $resultadoFinalTemper], function($message) use ($pdf, $email) {
            $message->to($email)
                    ->subject('Teste de Temperamentos - Resultado do Teste')
                    ->attachData($pdf->output(), 'resultadoTemper.pdf');
        });

        return view('layouts/temper/resultTemper')->with(['fullName' => $fullName, 'resultadoFinalTemper' => $maiorResultChaveTemper]);
    }
    public function MailResultTemper() {
        // Busca dados no banco
        $user = Auth::user();
        $email = $user->email;

        \Illuminate\Support\Facades\Mail::to($email)->send(
            new \App\Mail\MailResultTemper()
        );

        return view('layouts/temper/resultTemper');
    }
}
