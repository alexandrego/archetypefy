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
            return view('layouts/temper/temper20');
        }
    }
    public function SaveTemper20(Request $request)
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer = $request->temper;

        // Verifica se o email existe no banco de dados
        $user = Temperamentos::where('user_id', $userID)->first();

        if($user){
            $user->temper20 = $answer;
            $user->save();

            $answer = session()->forget('answer');
            return view('layouts/temper/result');
        } else {
            $temper = new Temperamentos();
            $temper->user_id = $userID;
            $temper->temper20 = $answer;
            $temper->save();

            $answer = session()->forget('answer');
            return view('layouts/temper/result');
        }
    }
}
