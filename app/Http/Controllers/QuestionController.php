<?php

namespace App\Http\Controllers;

use App\Models\Questions;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    public function question1(){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $question1 = Questions::where('user_id', $userID)->first();

        if ($question1) {

            $answer = session(['answer' => $question1->question_1]);

            return view('layouts/questions/question1')->with(['answer' => $answer]);
        } else {
            return view('layouts/questions/question1');
        }
    }
    public function SaveQuestion1(Request $request){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer = $request->question1;

        // Verifica se o email existe no banco de dados
        $user = Questions::where('user_id', $userID)->first();

        if($user){
            $user->question_1 = $answer;
            $user->save();

            return view('layouts/questions/question2');
        } else {
            $question1 = new Questions();
            $question1->user_id = $userID;
            $question1->question_1 = $answer;
            $question1->save();

            return view('layouts/questions/question2');}
    }

    public function question2(){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $question1 = Questions::where('user_id', $userID)->first();

        if ($question1) {
            dd($question1);
        } else {
            return view('layouts/questions/question2');
        }
    }
}
