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
            $answer = session()->forget('answer');
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
            if($answer == NULL) {
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
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento2');
            } else {
                $answer = session(['answer' => $user->comportamento2]);
                return view('layouts/comportamentos/comportamento2')->with(['answer' => $answer]);
            }
        }
    }

    public function Comportamento2()
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $comportamento = Comportamentos::where('user_id', $userID)->first();

        if ($comportamento) {
            $answer = session()->forget('answer');
            $answer = session(['answer' => $comportamento->comportamento2]);

            return view('layouts/comportamentos/comportamento2')->with(['answer' => $answer]);
        } else {
            $answer = session()->forget('answer');
            return view('layouts/comportamentos/comportamento2');
        }
    }
    public function SaveComportamento2(Request $request)
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer = $request->temper;

        // Verifica se o email existe no banco de dados
        $user = Comportamentos::where('user_id', $userID)->first();

        if($user){
            $user->comportamento2 = $answer;
            $user->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento3;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento3');
            } else {
                $answer = session(['answer' => $user->comportamento3]);
                return view('layouts/comportamentos/comportamento3')->with(['answer' => $answer]);
            }
        } else {
            $temper = new Comportamentos();
            $temper->user_id = $userID;
            $temper->comportamento2 = $answer;
            $temper->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento3;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento3');
            } else {
                $answer = session(['answer' => $user->comportamento3]);
                return view('layouts/comportamentos/comportamento3')->with(['answer' => $answer]);
            }
        }
    }

    public function Comportamento3()
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $comportamento = Comportamentos::where('user_id', $userID)->first();

        if ($comportamento) {
            $answer = session()->forget('answer');
            $answer = session(['answer' => $comportamento->comportamento3]);

            return view('layouts/comportamentos/comportamento3')->with(['answer' => $answer]);
        } else {
            $answer = session()->forget('answer');
            return view('layouts/comportamentos/comportamento3');
        }
    }
    public function SaveComportamento3(Request $request)
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer = $request->temper;

        // Verifica se o email existe no banco de dados
        $user = Comportamentos::where('user_id', $userID)->first();

        if($user){
            $user->comportamento3 = $answer;
            $user->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento4;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento4');
            } else {
                $answer = session(['answer' => $user->comportamento4]);
                return view('layouts/comportamentos/comportamento4')->with(['answer' => $answer]);
            }
        } else {
            $temper = new Comportamentos();
            $temper->user_id = $userID;
            $temper->comportamento3 = $answer;
            $temper->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento4;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento4');
            } else {
                $answer = session(['answer' => $user->comportamento4]);
                return view('layouts/comportamentos/comportamento4')->with(['answer' => $answer]);
            }
        }
    }

    public function Comportamento4()
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $comportamento = Comportamentos::where('user_id', $userID)->first();

        if ($comportamento) {
            $answer = session()->forget('answer');
            $answer = session(['answer' => $comportamento->comportamento4]);

            return view('layouts/comportamentos/comportamento4')->with(['answer' => $answer]);
        } else {
            $answer = session()->forget('answer');
            return view('layouts/comportamentos/comportamento4');
        }
    }
    public function SaveComportamento4(Request $request)
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer = $request->temper;

        // Verifica se o email existe no banco de dados
        $user = Comportamentos::where('user_id', $userID)->first();

        if($user){
            $user->comportamento4 = $answer;
            $user->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento5;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento5');
            } else {
                $answer = session(['answer' => $user->comportamento5]);
                return view('layouts/comportamentos/comportamento5')->with(['answer' => $answer]);
            }
        } else {
            $temper = new Comportamentos();
            $temper->user_id = $userID;
            $temper->comportamento4 = $answer;
            $temper->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento5;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento5');
            } else {
                $answer = session(['answer' => $user->comportamento5]);
                return view('layouts/comportamentos/comportamento5')->with(['answer' => $answer]);
            }
        }
    }

    public function Comportamento5()
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $comportamento = Comportamentos::where('user_id', $userID)->first();

        if ($comportamento) {
            $answer = session()->forget('answer');
            $answer = session(['answer' => $comportamento->comportamento5]);

            return view('layouts/comportamentos/comportamento5')->with(['answer' => $answer]);
        } else {
            $answer = session()->forget('answer');
            return view('layouts/comportamentos/comportamento5');
        }
    }
    public function SaveComportamento5(Request $request)
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer = $request->temper;

        // Verifica se o email existe no banco de dados
        $user = Comportamentos::where('user_id', $userID)->first();

        if($user){
            $user->comportamento5 = $answer;
            $user->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento6;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento6');
            } else {
                $answer = session(['answer' => $user->comportamento6]);
                return view('layouts/comportamentos/comportamento6')->with(['answer' => $answer]);
            }
        } else {
            $temper = new Comportamentos();
            $temper->user_id = $userID;
            $temper->comportamento5 = $answer;
            $temper->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento6;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento6');
            } else {
                $answer = session(['answer' => $user->comportamento6]);
                return view('layouts/comportamentos/comportamento6')->with(['answer' => $answer]);
            }
        }
    }

    public function Comportamento6()
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $comportamento = Comportamentos::where('user_id', $userID)->first();

        if ($comportamento) {
            $answer = session()->forget('answer');
            $answer = session(['answer' => $comportamento->comportamento6]);

            return view('layouts/comportamentos/comportamento6')->with(['answer' => $answer]);
        } else {
            $answer = session()->forget('answer');
            return view('layouts/comportamentos/comportamento6');
        }
    }
    public function SaveComportamento6(Request $request)
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer = $request->temper;

        // Verifica se o email existe no banco de dados
        $user = Comportamentos::where('user_id', $userID)->first();

        if($user){
            $user->comportamento6 = $answer;
            $user->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento7;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento7');
            } else {
                $answer = session(['answer' => $user->comportamento7]);
                return view('layouts/comportamentos/comportamento7')->with(['answer' => $answer]);
            }
        } else {
            $temper = new Comportamentos();
            $temper->user_id = $userID;
            $temper->comportamento6 = $answer;
            $temper->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento7;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento7');
            } else {
                $answer = session(['answer' => $user->comportamento7]);
                return view('layouts/comportamentos/comportamento7')->with(['answer' => $answer]);
            }
        }
    }

    public function Comportamento7()
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $comportamento = Comportamentos::where('user_id', $userID)->first();

        if ($comportamento) {
            $answer = session()->forget('answer');
            $answer = session(['answer' => $comportamento->comportamento7]);

            return view('layouts/comportamentos/comportamento7')->with(['answer' => $answer]);
        } else {
            $answer = session()->forget('answer');
            return view('layouts/comportamentos/comportamento7');
        }
    }
    public function SaveComportamento7(Request $request)
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer = $request->temper;

        // Verifica se o email existe no banco de dados
        $user = Comportamentos::where('user_id', $userID)->first();

        if($user){
            $user->comportamento7 = $answer;
            $user->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento8;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento8');
            } else {
                $answer = session(['answer' => $user->comportamento8]);
                return view('layouts/comportamentos/comportamento8')->with(['answer' => $answer]);
            }
        } else {
            $temper = new Comportamentos();
            $temper->user_id = $userID;
            $temper->comportamento7 = $answer;
            $temper->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento8;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento8');
            } else {
                $answer = session(['answer' => $user->comportamento8]);
                return view('layouts/comportamentos/comportamento8')->with(['answer' => $answer]);
            }
        }
    }

    public function Comportamento8()
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $comportamento = Comportamentos::where('user_id', $userID)->first();

        if ($comportamento) {
            $answer = session()->forget('answer');
            $answer = session(['answer' => $comportamento->comportamento8]);

            return view('layouts/comportamentos/comportamento8')->with(['answer' => $answer]);
        } else {
            $answer = session()->forget('answer');
            return view('layouts/comportamentos/comportamento8');
        }
    }
    public function SaveComportamento8(Request $request)
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer = $request->temper;

        // Verifica se o email existe no banco de dados
        $user = Comportamentos::where('user_id', $userID)->first();

        if($user){
            $user->comportamento8 = $answer;
            $user->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento9;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento9');
            } else {
                $answer = session(['answer' => $user->comportamento9]);
                return view('layouts/comportamentos/comportamento9')->with(['answer' => $answer]);
            }
        } else {
            $temper = new Comportamentos();
            $temper->user_id = $userID;
            $temper->comportamento8 = $answer;
            $temper->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento9;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento9');
            } else {
                $answer = session(['answer' => $user->comportamento9]);
                return view('layouts/comportamentos/comportamento9')->with(['answer' => $answer]);
            }
        }
    }

    public function Comportamento9()
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $comportamento = Comportamentos::where('user_id', $userID)->first();

        if ($comportamento) {
            $answer = session()->forget('answer');
            $answer = session(['answer' => $comportamento->comportamento9]);

            return view('layouts/comportamentos/comportamento9')->with(['answer' => $answer]);
        } else {
            $answer = session()->forget('answer');
            return view('layouts/comportamentos/comportamento9');
        }
    }
    public function SaveComportamento9(Request $request)
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer = $request->temper;

        // Verifica se o email existe no banco de dados
        $user = Comportamentos::where('user_id', $userID)->first();

        if($user){
            $user->comportamento9 = $answer;
            $user->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento10;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento10');
            } else {
                $answer = session(['answer' => $user->comportamento10]);
                return view('layouts/comportamentos/comportamento10')->with(['answer' => $answer]);
            }
        } else {
            $temper = new Comportamentos();
            $temper->user_id = $userID;
            $temper->comportamento9 = $answer;
            $temper->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento10;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento10');
            } else {
                $answer = session(['answer' => $user->comportamento10]);
                return view('layouts/comportamentos/comportamento10')->with(['answer' => $answer]);
            }
        }
    }

    public function Comportamento10()
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $comportamento = Comportamentos::where('user_id', $userID)->first();

        if ($comportamento) {
            $answer = session()->forget('answer');
            $answer = session(['answer' => $comportamento->comportamento10]);

            return view('layouts/comportamentos/comportamento10')->with(['answer' => $answer]);
        } else {
            $answer = session()->forget('answer');
            return view('layouts/comportamentos/comportamento10');
        }
    }
    public function SaveComportamento10(Request $request)
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer = $request->temper;

        // Verifica se o email existe no banco de dados
        $user = Comportamentos::where('user_id', $userID)->first();

        if($user){
            $user->comportamento10 = $answer;
            $user->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento11;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento11');
            } else {
                $answer = session(['answer' => $user->comportamento11]);
                return view('layouts/comportamentos/comportamento11')->with(['answer' => $answer]);
            }
        } else {
            $temper = new Comportamentos();
            $temper->user_id = $userID;
            $temper->comportamento10 = $answer;
            $temper->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento11;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento11');
            } else {
                $answer = session(['answer' => $user->comportamento11]);
                return view('layouts/comportamentos/comportamento11')->with(['answer' => $answer]);
            }
        }
    }

    public function Comportamento11()
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $comportamento = Comportamentos::where('user_id', $userID)->first();

        if ($comportamento) {
            $answer = session()->forget('answer');
            $answer = session(['answer' => $comportamento->comportamento11]);

            return view('layouts/comportamentos/comportamento11')->with(['answer' => $answer]);
        } else {
            $answer = session()->forget('answer');
            return view('layouts/comportamentos/comportamento11');
        }
    }
    public function SaveComportamento11(Request $request)
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer = $request->temper;

        // Verifica se o email existe no banco de dados
        $user = Comportamentos::where('user_id', $userID)->first();

        if($user){
            $user->comportamento11 = $answer;
            $user->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento12;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento12');
            } else {
                $answer = session(['answer' => $user->comportamento12]);
                return view('layouts/comportamentos/comportamento12')->with(['answer' => $answer]);
            }
        } else {
            $temper = new Comportamentos();
            $temper->user_id = $userID;
            $temper->comportamento11 = $answer;
            $temper->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento12;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento12');
            } else {
                $answer = session(['answer' => $user->comportamento12]);
                return view('layouts/comportamentos/comportamento12')->with(['answer' => $answer]);
            }
        }
    }

    public function Comportamento12()
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $comportamento = Comportamentos::where('user_id', $userID)->first();

        if ($comportamento) {
            $answer = session()->forget('answer');
            $answer = session(['answer' => $comportamento->comportamento12]);

            return view('layouts/comportamentos/comportamento12')->with(['answer' => $answer]);
        } else {
            $answer = session()->forget('answer');
            return view('layouts/comportamentos/comportamento12');
        }
    }
    public function SaveComportamento12(Request $request)
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer = $request->temper;

        // Verifica se o email existe no banco de dados
        $user = Comportamentos::where('user_id', $userID)->first();

        if($user){
            $user->comportamento12 = $answer;
            $user->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento13;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento13');
            } else {
                $answer = session(['answer' => $user->comportamento13]);
                return view('layouts/comportamentos/comportamento13')->with(['answer' => $answer]);
            }
        } else {
            $temper = new Comportamentos();
            $temper->user_id = $userID;
            $temper->comportamento12 = $answer;
            $temper->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento13;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento13');
            } else {
                $answer = session(['answer' => $user->comportamento13]);
                return view('layouts/comportamentos/comportamento13')->with(['answer' => $answer]);
            }
        }
    }

    public function Comportamento13()
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $comportamento = Comportamentos::where('user_id', $userID)->first();

        if ($comportamento) {
            $answer = session()->forget('answer');
            $answer = session(['answer' => $comportamento->comportamento13]);

            return view('layouts/comportamentos/comportamento13')->with(['answer' => $answer]);
        } else {
            $answer = session()->forget('answer');
            return view('layouts/comportamentos/comportamento13');
        }
    }
    public function SaveComportamento13(Request $request)
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer = $request->temper;

        // Verifica se o email existe no banco de dados
        $user = Comportamentos::where('user_id', $userID)->first();

        if($user){
            $user->comportamento13 = $answer;
            $user->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento14;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento14');
            } else {
                $answer = session(['answer' => $user->comportamento14]);
                return view('layouts/comportamentos/comportamento14')->with(['answer' => $answer]);
            }
        } else {
            $temper = new Comportamentos();
            $temper->user_id = $userID;
            $temper->comportamento13 = $answer;
            $temper->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento14;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento14');
            } else {
                $answer = session(['answer' => $user->comportamento14]);
                return view('layouts/comportamentos/comportamento14')->with(['answer' => $answer]);
            }
        }
    }

    public function Comportamento14()
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $comportamento = Comportamentos::where('user_id', $userID)->first();

        if ($comportamento) {
            $answer = session()->forget('answer');
            $answer = session(['answer' => $comportamento->comportamento14]);

            return view('layouts/comportamentos/comportamento14')->with(['answer' => $answer]);
        } else {
            $answer = session()->forget('answer');
            return view('layouts/comportamentos/comportamento14');
        }
    }
    public function SaveComportamento14(Request $request)
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer = $request->temper;

        // Verifica se o email existe no banco de dados
        $user = Comportamentos::where('user_id', $userID)->first();

        if($user){
            $user->comportamento14 = $answer;
            $user->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento15;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento15');
            } else {
                $answer = session(['answer' => $user->comportamento15]);
                return view('layouts/comportamentos/comportamento15')->with(['answer' => $answer]);
            }
        } else {
            $temper = new Comportamentos();
            $temper->user_id = $userID;
            $temper->comportamento14 = $answer;
            $temper->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento15;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento15');
            } else {
                $answer = session(['answer' => $user->comportamento15]);
                return view('layouts/comportamentos/comportamento15')->with(['answer' => $answer]);
            }
        }
    }

    public function Comportamento15()
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $comportamento = Comportamentos::where('user_id', $userID)->first();

        if ($comportamento) {
            $answer = session()->forget('answer');
            $answer = session(['answer' => $comportamento->comportamento15]);

            return view('layouts/comportamentos/comportamento15')->with(['answer' => $answer]);
        } else {
            $answer = session()->forget('answer');
            return view('layouts/comportamentos/comportamento15');
        }
    }
    public function SaveComportamento15(Request $request)
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer = $request->temper;

        // Verifica se o email existe no banco de dados
        $user = Comportamentos::where('user_id', $userID)->first();

        if($user){
            $user->comportamento15 = $answer;
            $user->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento16;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento16');
            } else {
                $answer = session(['answer' => $user->comportamento16]);
                return view('layouts/comportamentos/comportamento16')->with(['answer' => $answer]);
            }
        } else {
            $temper = new Comportamentos();
            $temper->user_id = $userID;
            $temper->comportamento15 = $answer;
            $temper->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento16;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento16');
            } else {
                $answer = session(['answer' => $user->comportamento16]);
                return view('layouts/comportamentos/comportamento16')->with(['answer' => $answer]);
            }
        }
    }

    public function Comportamento16()
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $comportamento = Comportamentos::where('user_id', $userID)->first();

        if ($comportamento) {
            $answer = session()->forget('answer');
            $answer = session(['answer' => $comportamento->comportamento16]);

            return view('layouts/comportamentos/comportamento16')->with(['answer' => $answer]);
        } else {
            $answer = session()->forget('answer');
            return view('layouts/comportamentos/comportamento16');
        }
    }
    public function SaveComportamento16(Request $request)
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer = $request->temper;

        // Verifica se o email existe no banco de dados
        $user = Comportamentos::where('user_id', $userID)->first();

        if($user){
            $user->comportamento16 = $answer;
            $user->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento17;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento17');
            } else {
                $answer = session(['answer' => $user->comportamento17]);
                return view('layouts/comportamentos/comportamento17')->with(['answer' => $answer]);
            }
        } else {
            $temper = new Comportamentos();
            $temper->user_id = $userID;
            $temper->comportamento16 = $answer;
            $temper->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento17;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento17');
            } else {
                $answer = session(['answer' => $user->comportamento17]);
                return view('layouts/comportamentos/comportamento17')->with(['answer' => $answer]);
            }
        }
    }

    public function Comportamento17()
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $comportamento = Comportamentos::where('user_id', $userID)->first();

        if ($comportamento) {
            $answer = session()->forget('answer');
            $answer = session(['answer' => $comportamento->comportamento17]);

            return view('layouts/comportamentos/comportamento17')->with(['answer' => $answer]);
        } else {
            $answer = session()->forget('answer');
            return view('layouts/comportamentos/comportamento17');
        }
    }
    public function SaveComportamento17(Request $request)
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer = $request->temper;

        // Verifica se o email existe no banco de dados
        $user = Comportamentos::where('user_id', $userID)->first();

        if($user){
            $user->comportamento17 = $answer;
            $user->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento18;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento18');
            } else {
                $answer = session(['answer' => $user->comportamento18]);
                return view('layouts/comportamentos/comportamento18')->with(['answer' => $answer]);
            }
        } else {
            $temper = new Comportamentos();
            $temper->user_id = $userID;
            $temper->comportamento17 = $answer;
            $temper->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento18;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento18');
            } else {
                $answer = session(['answer' => $user->comportamento18]);
                return view('layouts/comportamentos/comportamento18')->with(['answer' => $answer]);
            }
        }
    }

    public function Comportamento18()
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $comportamento = Comportamentos::where('user_id', $userID)->first();

        if ($comportamento) {
            $answer = session()->forget('answer');
            $answer = session(['answer' => $comportamento->comportamento18]);

            return view('layouts/comportamentos/comportamento18')->with(['answer' => $answer]);
        } else {
            $answer = session()->forget('answer');
            return view('layouts/comportamentos/comportamento18');
        }
    }
    public function SaveComportamento18(Request $request)
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer = $request->temper;

        // Verifica se o email existe no banco de dados
        $user = Comportamentos::where('user_id', $userID)->first();

        if($user){
            $user->comportamento18 = $answer;
            $user->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento19;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento19');
            } else {
                $answer = session(['answer' => $user->comportamento19]);
                return view('layouts/comportamentos/comportamento19')->with(['answer' => $answer]);
            }
        } else {
            $temper = new Comportamentos();
            $temper->user_id = $userID;
            $temper->comportamento18 = $answer;
            $temper->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento19;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento19');
            } else {
                $answer = session(['answer' => $user->comportamento19]);
                return view('layouts/comportamentos/comportamento19')->with(['answer' => $answer]);
            }
        }
    }

    public function Comportamento19()
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $comportamento = Comportamentos::where('user_id', $userID)->first();

        if ($comportamento) {
            $answer = session()->forget('answer');
            $answer = session(['answer' => $comportamento->comportamento19]);

            return view('layouts/comportamentos/comportamento19')->with(['answer' => $answer]);
        } else {
            $answer = session()->forget('answer');
            return view('layouts/comportamentos/comportamento19');
        }
    }
    public function SaveComportamento19(Request $request)
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer = $request->temper;

        // Verifica se o email existe no banco de dados
        $user = Comportamentos::where('user_id', $userID)->first();

        if($user){
            $user->comportamento19 = $answer;
            $user->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento20;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento20');
            } else {
                $answer = session(['answer' => $user->comportamento20]);
                return view('layouts/comportamentos/comportamento20')->with(['answer' => $answer]);
            }
        } else {
            $temper = new Comportamentos();
            $temper->user_id = $userID;
            $temper->comportamento19 = $answer;
            $temper->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento20;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento20');
            } else {
                $answer = session(['answer' => $user->comportamento20]);
                return view('layouts/comportamentos/comportamento20')->with(['answer' => $answer]);
            }
        }
    }

    public function Comportamento20()
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $comportamento = Comportamentos::where('user_id', $userID)->first();

        if ($comportamento) {
            $answer = session()->forget('answer');
            $answer = session(['answer' => $comportamento->comportamento20]);

            return view('layouts/comportamentos/comportamento20')->with(['answer' => $answer]);
        } else {
            $answer = session()->forget('answer');
            return view('layouts/comportamentos/comportamento20');
        }
    }
    public function SaveComportamento20(Request $request)
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer = $request->temper;

        // Verifica se o email existe no banco de dados
        $user = Comportamentos::where('user_id', $userID)->first();

        if($user){
            $user->comportamento20 = $answer;
            $user->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento21;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento21');
            } else {
                $answer = session(['answer' => $user->comportamento21]);
                return view('layouts/comportamentos/comportamento21')->with(['answer' => $answer]);
            }
        } else {
            $temper = new Comportamentos();
            $temper->user_id = $userID;
            $temper->comportamento20 = $answer;
            $temper->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento21;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento21');
            } else {
                $answer = session(['answer' => $user->comportamento21]);
                return view('layouts/comportamentos/comportamento21')->with(['answer' => $answer]);
            }
        }
    }

    public function Comportamento21()
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $comportamento = Comportamentos::where('user_id', $userID)->first();

        if ($comportamento) {
            $answer = session()->forget('answer');
            $answer = session(['answer' => $comportamento->comportamento21]);

            return view('layouts/comportamentos/comportamento21')->with(['answer' => $answer]);
        } else {
            $answer = session()->forget('answer');
            return view('layouts/comportamentos/comportamento21');
        }
    }
    public function SaveComportamento21(Request $request)
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer = $request->temper;

        // Verifica se o email existe no banco de dados
        $user = Comportamentos::where('user_id', $userID)->first();

        if($user){
            $user->comportamento21 = $answer;
            $user->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento22;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento22');
            } else {
                $answer = session(['answer' => $user->comportamento22]);
                return view('layouts/comportamentos/comportamento22')->with(['answer' => $answer]);
            }
        } else {
            $temper = new Comportamentos();
            $temper->user_id = $userID;
            $temper->comportamento21 = $answer;
            $temper->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento22;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento22');
            } else {
                $answer = session(['answer' => $user->comportamento22]);
                return view('layouts/comportamentos/comportamento22')->with(['answer' => $answer]);
            }
        }
    }

    public function Comportamento22()
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $comportamento = Comportamentos::where('user_id', $userID)->first();

        if ($comportamento) {
            $answer = session()->forget('answer');
            $answer = session(['answer' => $comportamento->comportamento22]);

            return view('layouts/comportamentos/comportamento22')->with(['answer' => $answer]);
        } else {
            $answer = session()->forget('answer');
            return view('layouts/comportamentos/comportamento22');
        }
    }
    public function SaveComportamento22(Request $request)
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer = $request->temper;

        // Verifica se o email existe no banco de dados
        $user = Comportamentos::where('user_id', $userID)->first();

        if($user){
            $user->comportamento22 = $answer;
            $user->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento23;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento23');
            } else {
                $answer = session(['answer' => $user->comportamento23]);
                return view('layouts/comportamentos/comportamento23')->with(['answer' => $answer]);
            }
        } else {
            $temper = new Comportamentos();
            $temper->user_id = $userID;
            $temper->comportamento22 = $answer;
            $temper->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento23;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento23');
            } else {
                $answer = session(['answer' => $user->comportamento23]);
                return view('layouts/comportamentos/comportamento23')->with(['answer' => $answer]);
            }
        }
    }

    public function Comportamento23()
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $comportamento = Comportamentos::where('user_id', $userID)->first();

        if ($comportamento) {
            $answer = session()->forget('answer');
            $answer = session(['answer' => $comportamento->comportamento23]);

            return view('layouts/comportamentos/comportamento23')->with(['answer' => $answer]);
        } else {
            $answer = session()->forget('answer');
            return view('layouts/comportamentos/comportamento23');
        }
    }
    public function SaveComportamento23(Request $request)
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer = $request->temper;

        // Verifica se o email existe no banco de dados
        $user = Comportamentos::where('user_id', $userID)->first();

        if($user){
            $user->comportamento23 = $answer;
            $user->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento24;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento24');
            } else {
                $answer = session(['answer' => $user->comportamento24]);
                return view('layouts/comportamentos/comportamento24')->with(['answer' => $answer]);
            }
        } else {
            $temper = new Comportamentos();
            $temper->user_id = $userID;
            $temper->comportamento23 = $answer;
            $temper->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento24;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento24');
            } else {
                $answer = session(['answer' => $user->comportamento24]);
                return view('layouts/comportamentos/comportamento24')->with(['answer' => $answer]);
            }
        }
    }

    public function Comportamento24()
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $comportamento = Comportamentos::where('user_id', $userID)->first();

        if ($comportamento) {
            $answer = session()->forget('answer');
            $answer = session(['answer' => $comportamento->comportamento24]);

            return view('layouts/comportamentos/comportamento24')->with(['answer' => $answer]);
        } else {
            $answer = session()->forget('answer');
            return view('layouts/comportamentos/comportamento24');
        }
    }
    public function SaveComportamento24(Request $request)
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer = $request->temper;

        // Verifica se o email existe no banco de dados
        $user = Comportamentos::where('user_id', $userID)->first();

        if($user){
            $user->comportamento24 = $answer;
            $user->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento25;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento25');
            } else {
                $answer = session(['answer' => $user->comportamento25]);
                return view('layouts/comportamentos/comportamento25')->with(['answer' => $answer]);
            }
        } else {
            $temper = new Comportamentos();
            $temper->user_id = $userID;
            $temper->comportamento24 = $answer;
            $temper->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento25;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento25');
            } else {
                $answer = session(['answer' => $user->comportamento25]);
                return view('layouts/comportamentos/comportamento25')->with(['answer' => $answer]);
            }
        }
    }

    public function Comportamento25()
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $comportamento = Comportamentos::where('user_id', $userID)->first();

        if ($comportamento) {
            $answer = session()->forget('answer');
            $answer = session(['answer' => $comportamento->comportamento25]);

            return view('layouts/comportamentos/comportamento25')->with(['answer' => $answer]);
        } else {
            $answer = session()->forget('answer');
            return view('layouts/comportamentos/comportamento25');
        }
    }
    public function SaveComportamento25(Request $request)
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer = $request->temper;

        // Verifica se o email existe no banco de dados
        $user = Comportamentos::where('user_id', $userID)->first();

        if($user){
            $user->comportamento25 = $answer;
            $user->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento26;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento26');
            } else {
                $answer = session(['answer' => $user->comportamento26]);
                return view('layouts/comportamentos/comportamento26')->with(['answer' => $answer]);
            }
        } else {
            $temper = new Comportamentos();
            $temper->user_id = $userID;
            $temper->comportamento25 = $answer;
            $temper->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento26;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento26');
            } else {
                $answer = session(['answer' => $user->comportamento26]);
                return view('layouts/comportamentos/comportamento26')->with(['answer' => $answer]);
            }
        }
    }

    public function Comportamento26()
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $comportamento = Comportamentos::where('user_id', $userID)->first();

        if ($comportamento) {
            $answer = session()->forget('answer');
            $answer = session(['answer' => $comportamento->comportamento26]);

            return view('layouts/comportamentos/comportamento26')->with(['answer' => $answer]);
        } else {
            $answer = session()->forget('answer');
            return view('layouts/comportamentos/comportamento26');
        }
    }
    public function SaveComportamento26(Request $request)
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer = $request->temper;

        // Verifica se o email existe no banco de dados
        $user = Comportamentos::where('user_id', $userID)->first();

        if($user){
            $user->comportamento26 = $answer;
            $user->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento27;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento27');
            } else {
                $answer = session(['answer' => $user->comportamento27]);
                return view('layouts/comportamentos/comportamento27')->with(['answer' => $answer]);
            }
        } else {
            $temper = new Comportamentos();
            $temper->user_id = $userID;
            $temper->comportamento26 = $answer;
            $temper->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento27;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento27');
            } else {
                $answer = session(['answer' => $user->comportamento27]);
                return view('layouts/comportamentos/comportamento27')->with(['answer' => $answer]);
            }
        }
    }

    public function Comportamento27()
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $comportamento = Comportamentos::where('user_id', $userID)->first();

        if ($comportamento) {
            $answer = session()->forget('answer');
            $answer = session(['answer' => $comportamento->comportamento27]);

            return view('layouts/comportamentos/comportamento27')->with(['answer' => $answer]);
        } else {
            $answer = session()->forget('answer');
            return view('layouts/comportamentos/comportamento27');
        }
    }
    public function SaveComportamento27(Request $request)
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer = $request->temper;

        // Verifica se o email existe no banco de dados
        $user = Comportamentos::where('user_id', $userID)->first();

        if($user){
            $user->comportamento27 = $answer;
            $user->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento28;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento28');
            } else {
                $answer = session(['answer' => $user->comportamento28]);
                return view('layouts/comportamentos/comportamento28')->with(['answer' => $answer]);
            }
        } else {
            $temper = new Comportamentos();
            $temper->user_id = $userID;
            $temper->comportamento27 = $answer;
            $temper->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento28;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento28');
            } else {
                $answer = session(['answer' => $user->comportamento28]);
                return view('layouts/comportamentos/comportamento28')->with(['answer' => $answer]);
            }
        }
    }

    public function Comportamento28()
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $comportamento = Comportamentos::where('user_id', $userID)->first();

        if ($comportamento) {
            $answer = session()->forget('answer');
            $answer = session(['answer' => $comportamento->comportamento28]);

            return view('layouts/comportamentos/comportamento28')->with(['answer' => $answer]);
        } else {
            $answer = session()->forget('answer');
            return view('layouts/comportamentos/comportamento28');
        }
    }
    public function SaveComportamento28(Request $request)
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer = $request->temper;

        // Verifica se o email existe no banco de dados
        $user = Comportamentos::where('user_id', $userID)->first();

        if($user){
            $user->comportamento28 = $answer;
            $user->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento29;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento29');
            } else {
                $answer = session(['answer' => $user->comportamento29]);
                return view('layouts/comportamentos/comportamento29')->with(['answer' => $answer]);
            }
        } else {
            $temper = new Comportamentos();
            $temper->user_id = $userID;
            $temper->comportamento28 = $answer;
            $temper->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento29;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento29');
            } else {
                $answer = session(['answer' => $user->comportamento29]);
                return view('layouts/comportamentos/comportamento29')->with(['answer' => $answer]);
            }
        }
    }

    public function Comportamento29()
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $comportamento = Comportamentos::where('user_id', $userID)->first();

        if ($comportamento) {
            $answer = session()->forget('answer');
            $answer = session(['answer' => $comportamento->comportamento29]);

            return view('layouts/comportamentos/comportamento29')->with(['answer' => $answer]);
        } else {
            $answer = session()->forget('answer');
            return view('layouts/comportamentos/comportamento29');
        }
    }
    public function SaveComportamento29(Request $request)
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer = $request->temper;

        // Verifica se o email existe no banco de dados
        $user = Comportamentos::where('user_id', $userID)->first();

        if($user){
            $user->comportamento29 = $answer;
            $user->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento30;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento30');
            } else {
                $answer = session(['answer' => $user->comportamento30]);
                return view('layouts/comportamentos/comportamento30')->with(['answer' => $answer]);
            }
        } else {
            $temper = new Comportamentos();
            $temper->user_id = $userID;
            $temper->comportamento29 = $answer;
            $temper->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento30;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento30');
            } else {
                $answer = session(['answer' => $user->comportamento30]);
                return view('layouts/comportamentos/comportamento30')->with(['answer' => $answer]);
            }
        }
    }

    public function Comportamento30()
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $comportamento = Comportamentos::where('user_id', $userID)->first();

        if ($comportamento) {
            $answer = session()->forget('answer');
            $answer = session(['answer' => $comportamento->comportamento30]);

            return view('layouts/comportamentos/comportamento30')->with(['answer' => $answer]);
        } else {
            $answer = session()->forget('answer');
            return view('layouts/comportamentos/comportamento30');
        }
    }
    public function SaveComportamento30(Request $request)
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer = $request->temper;

        // Verifica se o email existe no banco de dados
        $user = Comportamentos::where('user_id', $userID)->first();

        if($user){
            $user->comportamento30 = $answer;
            $user->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento31;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento31');
            } else {
                $answer = session(['answer' => $user->comportamento31]);
                return view('layouts/comportamentos/comportamento31')->with(['answer' => $answer]);
            }
        } else {
            $temper = new Comportamentos();
            $temper->user_id = $userID;
            $temper->comportamento30 = $answer;
            $temper->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento31;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento31');
            } else {
                $answer = session(['answer' => $user->comportamento31]);
                return view('layouts/comportamentos/comportamento31')->with(['answer' => $answer]);
            }
        }
    }

    public function Comportamento31()
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $comportamento = Comportamentos::where('user_id', $userID)->first();

        if ($comportamento) {
            $answer = session()->forget('answer');
            $answer = session(['answer' => $comportamento->comportamento31]);

            return view('layouts/comportamentos/comportamento31')->with(['answer' => $answer]);
        } else {
            $answer = session()->forget('answer');
            return view('layouts/comportamentos/comportamento31');
        }
    }
    public function SaveComportamento31(Request $request)
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer = $request->temper;

        // Verifica se o email existe no banco de dados
        $user = Comportamentos::where('user_id', $userID)->first();

        if($user){
            $user->comportamento31 = $answer;
            $user->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento32;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento32');
            } else {
                $answer = session(['answer' => $user->comportamento32]);
                return view('layouts/comportamentos/comportamento32')->with(['answer' => $answer]);
            }
        } else {
            $temper = new Comportamentos();
            $temper->user_id = $userID;
            $temper->comportamento31 = $answer;
            $temper->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento32;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento32');
            } else {
                $answer = session(['answer' => $user->comportamento32]);
                return view('layouts/comportamentos/comportamento32')->with(['answer' => $answer]);
            }
        }
    }

    public function Comportamento32()
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $comportamento = Comportamentos::where('user_id', $userID)->first();

        if ($comportamento) {
            $answer = session()->forget('answer');
            $answer = session(['answer' => $comportamento->comportamento32]);

            return view('layouts/comportamentos/comportamento32')->with(['answer' => $answer]);
        } else {
            $answer = session()->forget('answer');
            return view('layouts/comportamentos/comportamento32');
        }
    }
    public function SaveComportamento32(Request $request)
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer = $request->temper;

        // Verifica se o email existe no banco de dados
        $user = Comportamentos::where('user_id', $userID)->first();

        if($user){
            $user->comportamento32 = $answer;
            $user->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento33;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento33');
            } else {
                $answer = session(['answer' => $user->comportamento33]);
                return view('layouts/comportamentos/comportamento33')->with(['answer' => $answer]);
            }
        } else {
            $temper = new Comportamentos();
            $temper->user_id = $userID;
            $temper->comportamento32 = $answer;
            $temper->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento33;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento33');
            } else {
                $answer = session(['answer' => $user->comportamento33]);
                return view('layouts/comportamentos/comportamento33')->with(['answer' => $answer]);
            }
        }
    }

    public function Comportamento33()
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $comportamento = Comportamentos::where('user_id', $userID)->first();

        if ($comportamento) {
            $answer = session()->forget('answer');
            $answer = session(['answer' => $comportamento->comportamento33]);

            return view('layouts/comportamentos/comportamento33')->with(['answer' => $answer]);
        } else {
            $answer = session()->forget('answer');
            return view('layouts/comportamentos/comportamento33');
        }
    }
    public function SaveComportamento33(Request $request)
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer = $request->temper;

        // Verifica se o email existe no banco de dados
        $user = Comportamentos::where('user_id', $userID)->first();

        if($user){
            $user->comportamento33 = $answer;
            $user->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento34;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento34');
            } else {
                $answer = session(['answer' => $user->comportamento34]);
                return view('layouts/comportamentos/comportamento34')->with(['answer' => $answer]);
            }
        } else {
            $temper = new Comportamentos();
            $temper->user_id = $userID;
            $temper->comportamento33 = $answer;
            $temper->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento34;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento34');
            } else {
                $answer = session(['answer' => $user->comportamento34]);
                return view('layouts/comportamentos/comportamento34')->with(['answer' => $answer]);
            }
        }
    }

    public function Comportamento34()
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $comportamento = Comportamentos::where('user_id', $userID)->first();

        if ($comportamento) {
            $answer = session()->forget('answer');
            $answer = session(['answer' => $comportamento->comportamento34]);

            return view('layouts/comportamentos/comportamento34')->with(['answer' => $answer]);
        } else {
            $answer = session()->forget('answer');
            return view('layouts/comportamentos/comportamento34');
        }
    }
    public function SaveComportamento34(Request $request)
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer = $request->temper;

        // Verifica se o email existe no banco de dados
        $user = Comportamentos::where('user_id', $userID)->first();

        if($user){
            $user->comportamento34 = $answer;
            $user->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento35;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento35');
            } else {
                $answer = session(['answer' => $user->comportamento35]);
                return view('layouts/comportamentos/comportamento35')->with(['answer' => $answer]);
            }
        } else {
            $temper = new Comportamentos();
            $temper->user_id = $userID;
            $temper->comportamento34 = $answer;
            $temper->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento35;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento35');
            } else {
                $answer = session(['answer' => $user->comportamento35]);
                return view('layouts/comportamentos/comportamento35')->with(['answer' => $answer]);
            }
        }
    }

    public function Comportamento35()
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $comportamento = Comportamentos::where('user_id', $userID)->first();

        if ($comportamento) {
            $answer = session()->forget('answer');
            $answer = session(['answer' => $comportamento->comportamento35]);

            return view('layouts/comportamentos/comportamento35')->with(['answer' => $answer]);
        } else {
            $answer = session()->forget('answer');
            return view('layouts/comportamentos/comportamento35');
        }
    }
    public function SaveComportamento35(Request $request)
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer = $request->temper;

        // Verifica se o email existe no banco de dados
        $user = Comportamentos::where('user_id', $userID)->first();

        if($user){
            $user->comportamento35 = $answer;
            $user->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento36;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento36');
            } else {
                $answer = session(['answer' => $user->comportamento36]);
                return view('layouts/comportamentos/comportamento36')->with(['answer' => $answer]);
            }
        } else {
            $temper = new Comportamentos();
            $temper->user_id = $userID;
            $temper->comportamento35 = $answer;
            $temper->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento36;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento36');
            } else {
                $answer = session(['answer' => $user->comportamento36]);
                return view('layouts/comportamentos/comportamento36')->with(['answer' => $answer]);
            }
        }
    }

    public function Comportamento36()
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $comportamento = Comportamentos::where('user_id', $userID)->first();

        if ($comportamento) {
            $answer = session()->forget('answer');
            $answer = session(['answer' => $comportamento->comportamento36]);

            return view('layouts/comportamentos/comportamento36')->with(['answer' => $answer]);
        } else {
            $answer = session()->forget('answer');
            return view('layouts/comportamentos/comportamento36');
        }
    }
    public function SaveComportamento36(Request $request)
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer = $request->temper;

        // Verifica se o email existe no banco de dados
        $user = Comportamentos::where('user_id', $userID)->first();

        if($user){
            $user->comportamento36 = $answer;
            $user->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento37;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento37');
            } else {
                $answer = session(['answer' => $user->comportamento37]);
                return view('layouts/comportamentos/comportamento37')->with(['answer' => $answer]);
            }
        } else {
            $temper = new Comportamentos();
            $temper->user_id = $userID;
            $temper->comportamento36 = $answer;
            $temper->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento37;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento37');
            } else {
                $answer = session(['answer' => $user->comportamento37]);
                return view('layouts/comportamentos/comportamento37')->with(['answer' => $answer]);
            }
        }
    }

    public function Comportamento37()
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $comportamento = Comportamentos::where('user_id', $userID)->first();

        if ($comportamento) {
            $answer = session()->forget('answer');
            $answer = session(['answer' => $comportamento->comportamento37]);

            return view('layouts/comportamentos/comportamento37')->with(['answer' => $answer]);
        } else {
            $answer = session()->forget('answer');
            return view('layouts/comportamentos/comportamento37');
        }
    }
    public function SaveComportamento37(Request $request)
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer = $request->temper;

        // Verifica se o email existe no banco de dados
        $user = Comportamentos::where('user_id', $userID)->first();

        if($user){
            $user->comportamento37 = $answer;
            $user->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento38;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento38');
            } else {
                $answer = session(['answer' => $user->comportamento38]);
                return view('layouts/comportamentos/comportamento38')->with(['answer' => $answer]);
            }
        } else {
            $temper = new Comportamentos();
            $temper->user_id = $userID;
            $temper->comportamento37 = $answer;
            $temper->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento38;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento38');
            } else {
                $answer = session(['answer' => $user->comportamento38]);
                return view('layouts/comportamentos/comportamento38')->with(['answer' => $answer]);
            }
        }
    }

    public function Comportamento38()
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $comportamento = Comportamentos::where('user_id', $userID)->first();

        if ($comportamento) {
            $answer = session()->forget('answer');
            $answer = session(['answer' => $comportamento->comportamento38]);

            return view('layouts/comportamentos/comportamento38')->with(['answer' => $answer]);
        } else {
            $answer = session()->forget('answer');
            return view('layouts/comportamentos/comportamento38');
        }
    }
    public function SaveComportamento38(Request $request)
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer = $request->temper;

        // Verifica se o email existe no banco de dados
        $user = Comportamentos::where('user_id', $userID)->first();

        if($user){
            $user->comportamento38 = $answer;
            $user->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento39;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento39');
            } else {
                $answer = session(['answer' => $user->comportamento39]);
                return view('layouts/comportamentos/comportamento39')->with(['answer' => $answer]);
            }
        } else {
            $temper = new Comportamentos();
            $temper->user_id = $userID;
            $temper->comportamento38 = $answer;
            $temper->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento39;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento39');
            } else {
                $answer = session(['answer' => $user->comportamento39]);
                return view('layouts/comportamentos/comportamento39')->with(['answer' => $answer]);
            }
        }
    }

    public function Comportamento39()
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $comportamento = Comportamentos::where('user_id', $userID)->first();

        if ($comportamento) {
            $answer = session()->forget('answer');
            $answer = session(['answer' => $comportamento->comportamento39]);

            return view('layouts/comportamentos/comportamento39')->with(['answer' => $answer]);
        } else {
            $answer = session()->forget('answer');
            return view('layouts/comportamentos/comportamento39');
        }
    }
    public function SaveComportamento39(Request $request)
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer = $request->temper;

        // Verifica se o email existe no banco de dados
        $user = Comportamentos::where('user_id', $userID)->first();

        if($user){
            $user->comportamento39 = $answer;
            $user->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento40;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento40');
            } else {
                $answer = session(['answer' => $user->comportamento40]);
                return view('layouts/comportamentos/comportamento40')->with(['answer' => $answer]);
            }
        } else {
            $temper = new Comportamentos();
            $temper->user_id = $userID;
            $temper->comportamento39 = $answer;
            $temper->save();

            $answer = session()->forget('answer');

            //Verifica se tem resposta na próxima view
            $answer = $user->comportamento40;
            if($answer == NULL) {
                return view('layouts/comportamentos/comportamento40');
            } else {
                $answer = session(['answer' => $user->comportamento40]);
                return view('layouts/comportamentos/comportamento40')->with(['answer' => $answer]);
            }
        }
    }

    public function Comportamento40()
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $comportamento = Comportamentos::where('user_id', $userID)->first();

        if ($comportamento) {
            $answer = session()->forget('answer');
            $answer = session(['answer' => $comportamento->comportamento40]);

            return view('layouts/comportamentos/comportamento40')->with(['answer' => $answer]);
        } else {
            $answer = session()->forget('answer');
            return view('layouts/comportamentos/comportamento40');
        }
    }
    public function SaveComportamento40(Request $request)
    {
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer = $request->temper;

        // Verifica se o email existe no banco de dados
        $user = Comportamentos::where('user_id', $userID)->first();

        if($user){
            $user->comportamento40 = $answer;
            $user->save();

            $answer = session()->forget('answer');
            return view('layouts/comportamentos/result');
        } else {
            $temper = new Comportamentos();
            $temper->user_id = $userID;
            $temper->comportamento40 = $answer;
            $temper->save();

            $answer = session()->forget('answer');
            return view('layouts/comportamentos/result');
        }
    }
}
