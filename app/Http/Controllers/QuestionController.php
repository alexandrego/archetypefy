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
        $question2 = Questions::where('user_id', $userID)->first();

        if ($question2) {

            $answer2 = session(['answer2' => $question2->question_2]);

            return view('layouts/questions/question2')->with(['answer2' => $answer2]);
        } else {
            return view('layouts/questions/question2');
        }
    }
    public function SaveQuestion2(Request $request){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer2 = $request->question2;

        // Verifica se o email existe no banco de dados
        $user = Questions::where('user_id', $userID)->first();

        if($user){
            $user->question_2 = $answer2;
            $user->save();

            return view('layouts/questions/question3');
        } else {
            $question2 = new Questions();
            $question2->user_id = $userID;
            $question2->question_2 = $answer2;
            $question2->save();

            return view('layouts/questions/question3');}
    }
    public function question3(){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $question3 = Questions::where('user_id', $userID)->first();

        if ($question3) {

            $answer3 = session(['answer3' => $question3->question_3]);

            return view('layouts/questions/question3')->with(['answer3' => $answer3]);
        } else {
            return view('layouts/questions/question3');
        }
    }
    public function SaveQuestion3(Request $request){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer3 = $request->question3;

        // Verifica se o email existe no banco de dados
        $user = Questions::where('user_id', $userID)->first();

        if($user){
            $user->question_3 = $answer3;
            $user->save();

            return view('layouts/questions/question4');
        } else {
            $question3 = new Questions();
            $question3->user_id = $userID;
            $question3->question_3 = $answer3;
            $question3->save();

            return view('layouts/questions/question4');}
    }
    public function question4(){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $question4 = Questions::where('user_id', $userID)->first();

        if ($question4) {

            $answer4 = session(['answer4' => $question4->question_4]);

            return view('layouts/questions/question4')->with(['answer4' => $answer4]);
        } else {
            return view('layouts/questions/question4');
        }
    }
    public function SaveQuestion4(Request $request){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer4 = $request->question4;

        // Verifica se o email existe no banco de dados
        $user = Questions::where('user_id', $userID)->first();

        if($user){
            $user->question_4 = $answer4;
            $user->save();

            return view('layouts/questions/question5');
        } else {
            $question4 = new Questions();
            $question4->user_id = $userID;
            $question4->question_4 = $answer4;
            $question4->save();

            return view('layouts/questions/question5');
        }
    }
    public function question5(){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $question5 = Questions::where('user_id', $userID)->first();

        if ($question5) {

            $answer5 = session(['answer5' => $question5->question_5]);

            return view('layouts/questions/question5')->with(['answer5' => $answer5]);
        } else {
            return view('layouts/questions/question5');
        }
    }
    public function SaveQuestion5(Request $request){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer5 = $request->question5;

        // Verifica se o email existe no banco de dados
        $user = Questions::where('user_id', $userID)->first();

        if($user){
            $user->question_5 = $answer5;
            $user->save();

            return view('layouts/questions/question6');
        } else {
            $question5 = new Questions();
            $question5->user_id = $userID;
            $question5->question_5 = $answer5;
            $question5->save();

            return view('layouts/questions/question6');
        }
    }
    public function question6(){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $question6 = Questions::where('user_id', $userID)->first();

        if ($question6) {

            $answer6 = session(['answer6' => $question6->question_6]);

            return view('layouts/questions/question6')->with(['answer6' => $answer6]);
        } else {
            return view('layouts/questions/question6');
        }
    }
    public function SaveQuestion6(Request $request){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer6 = $request->question6;

        // Verifica se o email existe no banco de dados
        $user = Questions::where('user_id', $userID)->first();

        if($user){
            $user->question_6 = $answer6;
            $user->save();

            return view('layouts/questions/question7');
        } else {
            $question6 = new Questions();
            $question6->user_id = $userID;
            $question6->question_6 = $answer6;
            $question6->save();

            return view('layouts/questions/question7');
        }
    }
    public function question7(){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $question7 = Questions::where('user_id', $userID)->first();

        if ($question7) {

            $answer7 = session(['answer7' => $question7->question_7]);

            return view('layouts/questions/question7')->with(['answer7' => $answer7]);
        } else {
            return view('layouts/questions/question7');
        }
    }
    public function SaveQuestion7(Request $request){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer7 = $request->question7;

        // Verifica se o email existe no banco de dados
        $user = Questions::where('user_id', $userID)->first();

        if($user){
            $user->question_7 = $answer7;
            $user->save();

            return view('layouts/questions/question8');
        } else {
            $question7 = new Questions();
            $question7->user_id = $userID;
            $question7->question_7 = $answer7;
            $question7->save();

            return view('layouts/questions/question8');
        }
    }
    public function question8(){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $question8 = Questions::where('user_id', $userID)->first();

        if ($question8) {

            $answer8 = session(['answer8' => $question8->question_8]);

            return view('layouts/questions/question8')->with(['answer8' => $answer8]);
        } else {
            return view('layouts/questions/question8');
        }
    }
    public function SaveQuestion8(Request $request){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer8 = $request->question8;

        // Verifica se o email existe no banco de dados
        $user = Questions::where('user_id', $userID)->first();

        if($user){
            $user->question_8 = $answer8;
            $user->save();

            return view('layouts/questions/question9');
        } else {
            $question8 = new Questions();
            $question8->user_id = $userID;
            $question8->question_8 = $answer8;
            $question8->save();

            return view('layouts/questions/question9');
        }
    }
    public function question9(){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $question9 = Questions::where('user_id', $userID)->first();

        if ($question9) {

            $answer9 = session(['answer9' => $question9->question_9]);

            return view('layouts/questions/question9')->with(['answer9' => $answer9]);
        } else {
            return view('layouts/questions/question9');
        }
    }
    public function SaveQuestion9(Request $request){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer9 = $request->question9;

        // Verifica se o email existe no banco de dados
        $user = Questions::where('user_id', $userID)->first();

        if($user){
            $user->question_9 = $answer9;
            $user->save();

            return view('layouts/questions/question10');
        } else {
            $question9 = new Questions();
            $question9->user_id = $userID;
            $question9->question_9 = $answer9;
            $question9->save();

            return view('layouts/questions/question10');
        }
    }
    public function question10(){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $question10 = Questions::where('user_id', $userID)->first();

        if ($question10) {

            $answer10 = session(['answer10' => $question10->question_10]);

            return view('layouts/questions/question10')->with(['answer10' => $answer10]);
        } else {
            return view('layouts/questions/question10');
        }
    }
    public function SaveQuestion10(Request $request){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer10 = $request->question10;

        // Verifica se o email existe no banco de dados
        $user = Questions::where('user_id', $userID)->first();

        if($user){
            $user->question_10 = $answer10;
            $user->save();

            return view('layouts/questions/question11');
        } else {
            $question10 = new Questions();
            $question10->user_id = $userID;
            $question10->question_10 = $answer10;
            $question10->save();

            return view('layouts/questions/question11');
        }
    }
    public function question11(){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $question11 = Questions::where('user_id', $userID)->first();

        if ($question11) {

            $answer11 = session(['answer11' => $question11->question_11]);

            return view('layouts/questions/question11')->with(['answer11' => $answer11]);
        } else {
            return view('layouts/questions/question11');
        }
    }
    public function SaveQuestion11(Request $request){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer11 = $request->question11;

        // Verifica se o email existe no banco de dados
        $user = Questions::where('user_id', $userID)->first();

        if($user){
            $user->question_11 = $answer11;
            $user->save();

            return view('layouts/questions/question12');
        } else {
            $question11 = new Questions();
            $question11->user_id = $userID;
            $question11->question_11 = $answer11;
            $question11->save();

            return view('layouts/questions/question12');
        }
    }
    public function question12(){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $question12 = Questions::where('user_id', $userID)->first();

        if ($question12) {

            $answer12 = session(['answer12' => $question12->question_12]);

            return view('layouts/questions/question12')->with(['answer12' => $answer12]);
        } else {
            return view('layouts/questions/question12');
        }
    }
    public function SaveQuestion12(Request $request){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer12 = $request->question12;

        // Verifica se o email existe no banco de dados
        $user = Questions::where('user_id', $userID)->first();

        if($user){
            $user->question_12 = $answer12;
            $user->save();

            return view('layouts/questions/question13');
        } else {
            $question12 = new Questions();
            $question12->user_id = $userID;
            $question12->question_12 = $answer12;
            $question12->save();

            return view('layouts/questions/question13');
        }
    }
    public function question13(){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $question13 = Questions::where('user_id', $userID)->first();

        if ($question13) {

            $answer13 = session(['answer13' => $question13->question_13]);

            return view('layouts/questions/question13')->with(['answer13' => $answer13]);
        } else {
            return view('layouts/questions/question13');
        }
    }
    public function SaveQuestion13(Request $request){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer13 = $request->question13;

        // Verifica se o email existe no banco de dados
        $user = Questions::where('user_id', $userID)->first();

        if($user){
            $user->question_13 = $answer13;
            $user->save();

            return view('layouts/questions/question14');
        } else {
            $question13 = new Questions();
            $question13->user_id = $userID;
            $question13->question_13 = $answer13;
            $question13->save();

            return view('layouts/questions/question14');
        }
    }
    public function question14(){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $question14 = Questions::where('user_id', $userID)->first();

        if ($question14) {

            $answer14 = session(['answer14' => $question14->question_14]);

            return view('layouts/questions/question14')->with(['answer14' => $answer14]);
        } else {
            return view('layouts/questions/question14');
        }
    }
    public function SaveQuestion14(Request $request){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer14 = $request->question14;

        // Verifica se o email existe no banco de dados
        $user = Questions::where('user_id', $userID)->first();

        if($user){
            $user->question_14 = $answer14;
            $user->save();

            return view('layouts/questions/question15');
        } else {
            $question14 = new Questions();
            $question14->user_id = $userID;
            $question14->question_14 = $answer14;
            $question14->save();

            return view('layouts/questions/question15');
        }
    }
    public function question15(){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $question15 = Questions::where('user_id', $userID)->first();

        if ($question15) {

            $answer15 = session(['answer15' => $question15->question_15]);

            return view('layouts/questions/question15')->with(['answer15' => $answer15]);
        } else {
            return view('layouts/questions/question15');
        }
    }
    public function SaveQuestion15(Request $request){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer15 = $request->question15;

        // Verifica se o email existe no banco de dados
        $user = Questions::where('user_id', $userID)->first();

        if($user){
            $user->question_15 = $answer15;
            $user->save();

            return view('layouts/questions/question16');
        } else {
            $question15 = new Questions();
            $question15->user_id = $userID;
            $question15->question_15 = $answer15;
            $question15->save();

            return view('layouts/questions/question16');
        }
    }
    public function question16(){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $question16 = Questions::where('user_id', $userID)->first();

        if ($question16) {

            $answer16 = session(['answer16' => $question16->question_16]);

            return view('layouts/questions/question16')->with(['answer16' => $answer16]);
        } else {
            return view('layouts/questions/question16');
        }
    }
    public function SaveQuestion16(Request $request){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer16 = $request->question16;

        // Verifica se o email existe no banco de dados
        $user = Questions::where('user_id', $userID)->first();

        if($user){
            $user->question_16 = $answer16;
            $user->save();

            return view('layouts/questions/question17');
        } else {
            $question16 = new Questions();
            $question16->user_id = $userID;
            $question16->question_16 = $answer16;
            $question16->save();

            return view('layouts/questions/question17');
        }
    }
    public function question17(){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $question17 = Questions::where('user_id', $userID)->first();

        if ($question17) {

            $answer17 = session(['answer17' => $question17->question_17]);

            return view('layouts/questions/question17')->with(['answer17' => $answer17]);
        } else {
            return view('layouts/questions/question17');
        }
    }
    public function SaveQuestion17(Request $request){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer17 = $request->question17;

        // Verifica se o email existe no banco de dados
        $user = Questions::where('user_id', $userID)->first();

        if($user){
            $user->question_17 = $answer17;
            $user->save();

            return view('layouts/questions/question18');
        } else {
            $question17 = new Questions();
            $question17->user_id = $userID;
            $question17->question_17 = $answer17;
            $question17->save();

            return view('layouts/questions/question18');
        }
    }
    public function question18(){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $question18 = Questions::where('user_id', $userID)->first();

        if ($question18) {

            $answer18 = session(['answer18' => $question18->question_18]);

            return view('layouts/questions/question18')->with(['answer18' => $answer18]);
        } else {
            return view('layouts/questions/question18');
        }
    }
    public function SaveQuestion18(Request $request){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer18 = $request->question18;

        // Verifica se o email existe no banco de dados
        $user = Questions::where('user_id', $userID)->first();

        if($user){
            $user->question_18 = $answer18;
            $user->save();

            return view('layouts/questions/question19');
        } else {
            $question18 = new Questions();
            $question18->user_id = $userID;
            $question18->question_18 = $answer18;
            $question18->save();

            return view('layouts/questions/question19');
        }
    }
    public function question19(){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $question19 = Questions::where('user_id', $userID)->first();

        if ($question19) {

            $answer19 = session(['answer19' => $question19->question_19]);

            return view('layouts/questions/question19')->with(['answer19' => $answer19]);
        } else {
            return view('layouts/questions/question19');
        }
    }
    public function SaveQuestion19(Request $request){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer19 = $request->question19;

        // Verifica se o email existe no banco de dados
        $user = Questions::where('user_id', $userID)->first();

        if($user){
            $user->question_19 = $answer19;
            $user->save();

            return view('layouts/questions/question20');
        } else {
            $question19 = new Questions();
            $question19->user_id = $userID;
            $question19->question_19 = $answer19;
            $question19->save();

            return view('layouts/questions/question20');
        }
    }
    public function question20(){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $question20 = Questions::where('user_id', $userID)->first();

        if ($question20) {

            $answer20 = session(['answer20' => $question20->question_20]);

            return view('layouts/questions/question20')->with(['answer20' => $answer20]);
        } else {
            return view('layouts/questions/question20');
        }
    }
    public function SaveQuestion20(Request $request){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer20 = $request->question20;

        // Verifica se o email existe no banco de dados
        $user = Questions::where('user_id', $userID)->first();

        if($user){
            $user->question_20 = $answer20;
            $user->save();

            return view('layouts/questions/question21');
        } else {
            $question20 = new Questions();
            $question20->user_id = $userID;
            $question20->question_20 = $answer20;
            $question20->save();

            return view('layouts/questions/question21');
        }
    }
    public function question21(){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $question21 = Questions::where('user_id', $userID)->first();

        if ($question21) {

            $answer21 = session(['answer21' => $question21->question_21]);

            return view('layouts/questions/question21')->with(['answer21' => $answer21]);
        } else {
            return view('layouts/questions/question21');
        }
    }
    public function SaveQuestion21(Request $request){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer21 = $request->question21;

        // Verifica se o email existe no banco de dados
        $user = Questions::where('user_id', $userID)->first();

        if($user){
            $user->question_21 = $answer21;
            $user->save();

            return view('layouts/questions/question22');
        } else {
            $question21 = new Questions();
            $question21->user_id = $userID;
            $question21->question_21 = $answer21;
            $question21->save();

            return view('layouts/questions/question22');
        }
    }
    public function question22(){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $question22 = Questions::where('user_id', $userID)->first();

        if ($question22) {

            $answer22 = session(['answer22' => $question22->question_22]);

            return view('layouts/questions/question22')->with(['answer22' => $answer22]);
        } else {
            return view('layouts/questions/question22');
        }
    }
    public function SaveQuestion22(Request $request){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer22 = $request->question22;

        // Verifica se o email existe no banco de dados
        $user = Questions::where('user_id', $userID)->first();

        if($user){
            $user->question_22 = $answer22;
            $user->save();

            return view('layouts/questions/question23');
        } else {
            $question22 = new Questions();
            $question22->user_id = $userID;
            $question22->question_22 = $answer22;
            $question22->save();

            return view('layouts/questions/question23');
        }
    }
    public function question23(){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $question23 = Questions::where('user_id', $userID)->first();

        if ($question23) {

            $answer23 = session(['answer23' => $question23->question_23]);

            return view('layouts/questions/question23')->with(['answer23' => $answer23]);
        } else {
            return view('layouts/questions/question23');
        }
    }
    public function SaveQuestion23(Request $request){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer23 = $request->question23;

        // Verifica se o email existe no banco de dados
        $user = Questions::where('user_id', $userID)->first();

        if($user){
            $user->question_23 = $answer23;
            $user->save();

            return view('layouts/questions/question24');
        } else {
            $question23 = new Questions();
            $question23->user_id = $userID;
            $question23->question_23 = $answer23;
            $question23->save();

            return view('layouts/questions/question24');
        }
    }
    public function question24(){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $question24 = Questions::where('user_id', $userID)->first();

        if ($question24) {

            $answer24 = session(['answer24' => $question24->question_24]);

            return view('layouts/questions/question24')->with(['answer24' => $answer24]);
        } else {
            return view('layouts/questions/question24');
        }
    }
    public function SaveQuestion24(Request $request){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer24 = $request->question24;

        // Verifica se o email existe no banco de dados
        $user = Questions::where('user_id', $userID)->first();

        if($user){
            $user->question_24 = $answer24;
            $user->save();

            return view('layouts/questions/question25');
        } else {
            $question24 = new Questions();
            $question24->user_id = $userID;
            $question24->question_24 = $answer24;
            $question24->save();

            return view('layouts/questions/question25');
        }
    }
    public function question25(){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $question25 = Questions::where('user_id', $userID)->first();

        if ($question25) {

            $answer25 = session(['answer25' => $question25->question_25]);

            return view('layouts/questions/question25')->with(['answer25' => $answer25]);
        } else {
            return view('layouts/questions/question25');
        }
    }
    public function SaveQuestion25(Request $request){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer25 = $request->question25;

        // Verifica se o email existe no banco de dados
        $user = Questions::where('user_id', $userID)->first();

        if($user){
            $user->question_25 = $answer25;
            $user->save();

            return view('layouts/questions/question26');
        } else {
            $question25 = new Questions();
            $question25->user_id = $userID;
            $question25->question_25 = $answer25;
            $question25->save();

            return view('layouts/questions/question26');
        }
    }
    public function question26(){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $question26 = Questions::where('user_id', $userID)->first();

        if ($question26) {

            $answer26 = session(['answer26' => $question26->question_26]);

            return view('layouts/questions/question26')->with(['answer26' => $answer26]);
        } else {
            return view('layouts/questions/question26');
        }
    }
    public function SaveQuestion26(Request $request){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer26 = $request->question26;

        // Verifica se o email existe no banco de dados
        $user = Questions::where('user_id', $userID)->first();

        if($user){
            $user->question_26 = $answer26;
            $user->save();

            return view('layouts/questions/question27');
        } else {
            $question26 = new Questions();
            $question26->user_id = $userID;
            $question26->question_26 = $answer26;
            $question26->save();

            return view('layouts/questions/question27');
        }
    }
    public function question27(){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $question27 = Questions::where('user_id', $userID)->first();

        if ($question27) {

            $answer27 = session(['answer27' => $question27->question_27]);

            return view('layouts/questions/question27')->with(['answer27' => $answer27]);
        } else {
            return view('layouts/questions/question27');
        }
    }
    public function SaveQuestion27(Request $request){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer27 = $request->question27;

        // Verifica se o email existe no banco de dados
        $user = Questions::where('user_id', $userID)->first();

        if($user){
            $user->question_27 = $answer27;
            $user->save();

            return view('layouts/questions/question28');
        } else {
            $question27 = new Questions();
            $question27->user_id = $userID;
            $question27->question_27 = $answer27;
            $question27->save();

            return view('layouts/questions/question28');
        }
    }
    public function question28(){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $question28 = Questions::where('user_id', $userID)->first();

        if ($question28) {

            $answer28 = session(['answer28' => $question28->question_28]);

            return view('layouts/questions/question28')->with(['answer28' => $answer28]);
        } else {
            return view('layouts/questions/question28');
        }
    }
    public function SaveQuestion28(Request $request){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer28 = $request->question28;

        // Verifica se o email existe no banco de dados
        $user = Questions::where('user_id', $userID)->first();

        if($user){
            $user->question_28 = $answer28;
            $user->save();

            return view('layouts/questions/question29');
        } else {
            $question28 = new Questions();
            $question28->user_id = $userID;
            $question28->question_28 = $answer28;
            $question28->save();

            return view('layouts/questions/question29');
        }
    }
    public function question29(){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $question29 = Questions::where('user_id', $userID)->first();

        if ($question29) {

            $answer29 = session(['answer29' => $question29->question_29]);

            return view('layouts/questions/question29')->with(['answer29' => $answer29]);
        } else {
            return view('layouts/questions/question29');
        }
    }
    public function SaveQuestion29(Request $request){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer29 = $request->question29;

        // Verifica se o email existe no banco de dados
        $user = Questions::where('user_id', $userID)->first();

        if($user){
            $user->question_29 = $answer29;
            $user->save();

            return view('layouts/questions/question30');
        } else {
            $question29 = new Questions();
            $question29->user_id = $userID;
            $question29->question_29 = $answer29;
            $question29->save();

            return view('layouts/questions/question30');
        }
    }
    public function question30(){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $question30 = Questions::where('user_id', $userID)->first();

        if ($question30) {

            $answer30 = session(['answer30' => $question30->question_30]);

            return view('layouts/questions/question30')->with(['answer30' => $answer30]);
        } else {
            return view('layouts/questions/question30');
        }
    }
    public function SaveQuestion30(Request $request){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer30 = $request->question30;

        // Verifica se o email existe no banco de dados
        $user = Questions::where('user_id', $userID)->first();

        if($user){
            $user->question_30 = $answer30;
            $user->save();

            return view('layouts/questions/question31');
        } else {
            $question30 = new Questions();
            $question30->user_id = $userID;
            $question30->question_30 = $answer30;
            $question30->save();

            return view('layouts/questions/question31');
        }
    }
    public function question31(){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $question31 = Questions::where('user_id', $userID)->first();

        if ($question31) {

            $answer31 = session(['answer31' => $question31->question_31]);

            return view('layouts/questions/question31')->with(['answer31' => $answer31]);
        } else {
            return view('layouts/questions/question31');
        }
    }
    public function SaveQuestion31(Request $request){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer31 = $request->question31;

        // Verifica se o email existe no banco de dados
        $user = Questions::where('user_id', $userID)->first();

        if($user){
            $user->question_31 = $answer31;
            $user->save();

            return view('layouts/questions/question32');
        } else {
            $question31 = new Questions();
            $question31->user_id = $userID;
            $question31->question_31 = $answer31;
            $question31->save();

            return view('layouts/questions/question32');
        }
    }
    public function question32(){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $question32 = Questions::where('user_id', $userID)->first();

        if ($question32) {

            $answer32 = session(['answer32' => $question32->question_32]);

            return view('layouts/questions/question32')->with(['answer32' => $answer32]);
        } else {
            return view('layouts/questions/question32');
        }
    }
    public function SaveQuestion32(Request $request){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer32 = $request->question32;

        // Verifica se o email existe no banco de dados
        $user = Questions::where('user_id', $userID)->first();

        if($user){
            $user->question_32 = $answer32;
            $user->save();

            return view('layouts/questions/question33');
        } else {
            $question32 = new Questions();
            $question32->user_id = $userID;
            $question32->question_32 = $answer32;
            $question32->save();

            return view('layouts/questions/question33');
        }
    }
    public function question33(){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $question33 = Questions::where('user_id', $userID)->first();

        if ($question33) {

            $answer33 = session(['answer33' => $question33->question_33]);

            return view('layouts/questions/question33')->with(['answer33' => $answer33]);
        } else {
            return view('layouts/questions/question33');
        }
    }
    public function SaveQuestion33(Request $request){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer33 = $request->question33;

        // Verifica se o email existe no banco de dados
        $user = Questions::where('user_id', $userID)->first();

        if($user){
            $user->question_33 = $answer33;
            $user->save();

            return view('layouts/questions/question34');
        } else {
            $question33 = new Questions();
            $question33->user_id = $userID;
            $question33->question_33 = $answer33;
            $question33->save();

            return view('layouts/questions/question34');
        }
    }
    public function question34(){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $question34 = Questions::where('user_id', $userID)->first();

        if ($question34) {

            $answer34 = session(['answer34' => $question34->question_34]);

            return view('layouts/questions/question34')->with(['answer34' => $answer34]);
        } else {
            return view('layouts/questions/question34');
        }
    }
    public function SaveQuestion34(Request $request){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer34 = $request->question34;

        // Verifica se o email existe no banco de dados
        $user = Questions::where('user_id', $userID)->first();

        if($user){
            $user->question_34 = $answer34;
            $user->save();

            return view('layouts/questions/question35');
        } else {
            $question34 = new Questions();
            $question34->user_id = $userID;
            $question34->question_34 = $answer34;
            $question34->save();

            return view('layouts/questions/question35');
        }
    }
    public function question35(){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $question35 = Questions::where('user_id', $userID)->first();

        if ($question35) {

            $answer35 = session(['answer35' => $question35->question_35]);

            return view('layouts/questions/question35')->with(['answer35' => $answer35]);
        } else {
            return view('layouts/questions/question35');
        }
    }
    public function SaveQuestion35(Request $request){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer35 = $request->question35;

        // Verifica se o email existe no banco de dados
        $user = Questions::where('user_id', $userID)->first();

        if($user){
            $user->question_35 = $answer35;
            $user->save();

            return view('layouts/questions/question36');
        } else {
            $question35 = new Questions();
            $question35->user_id = $userID;
            $question35->question_35 = $answer35;
            $question35->save();

            return view('layouts/questions/question36');
        }
    }
    public function question36(){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $question36 = Questions::where('user_id', $userID)->first();

        if ($question36) {

            $answer36 = session(['answer36' => $question36->question_36]);

            return view('layouts/questions/question36')->with(['answer36' => $answer36]);
        } else {
            return view('layouts/questions/question36');
        }
    }
    public function SaveQuestion36(Request $request){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer36 = $request->question36;

        // Verifica se o email existe no banco de dados
        $user = Questions::where('user_id', $userID)->first();

        if($user){
            $user->question_36 = $answer36;
            $user->save();

            return view('layouts/questions/question37');
        } else {
            $question36 = new Questions();
            $question36->user_id = $userID;
            $question36->question_36 = $answer36;
            $question36->save();

            return view('layouts/questions/question37');
        }
    }
    public function question37(){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $question37 = Questions::where('user_id', $userID)->first();

        if ($question37) {

            $answer37 = session(['answer37' => $question37->question_37]);

            return view('layouts/questions/question37')->with(['answer37' => $answer37]);
        } else {
            return view('layouts/questions/question37');
        }
    }
    public function SaveQuestion37(Request $request){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer37 = $request->question37;

        // Verifica se o email existe no banco de dados
        $user = Questions::where('user_id', $userID)->first();

        if($user){
            $user->question_37 = $answer37;
            $user->save();

            return view('layouts/questions/question38');
        } else {
            $question37 = new Questions();
            $question37->user_id = $userID;
            $question37->question_37 = $answer37;
            $question37->save();

            return view('layouts/questions/question38');
        }
    }
    public function question38(){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $question38 = Questions::where('user_id', $userID)->first();

        if ($question38) {

            $answer38 = session(['answer38' => $question38->question_38]);

            return view('layouts/questions/question38')->with(['answer38' => $answer38]);
        } else {
            return view('layouts/questions/question38');
        }
    }
    public function SaveQuestion38(Request $request){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer38 = $request->question38;

        // Verifica se o email existe no banco de dados
        $user = Questions::where('user_id', $userID)->first();

        if($user){
            $user->question_38 = $answer38;
            $user->save();

            return view('layouts/questions/question39');
        } else {
            $question38 = new Questions();
            $question38->user_id = $userID;
            $question38->question_38 = $answer38;
            $question38->save();

            return view('layouts/questions/question39');
        }
    }
    public function question39(){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $question39 = Questions::where('user_id', $userID)->first();

        if ($question39) {

            $answer39 = session(['answer39' => $question39->question_39]);

            return view('layouts/questions/question39')->with(['answer39' => $answer39]);
        } else {
            return view('layouts/questions/question39');
        }
    }
    public function SaveQuestion39(Request $request){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer39 = $request->question39;

        // Verifica se o email existe no banco de dados
        $user = Questions::where('user_id', $userID)->first();

        if($user){
            $user->question_39 = $answer39;
            $user->save();

            return view('layouts/questions/question40');
        } else {
            $question39 = new Questions();
            $question39->user_id = $userID;
            $question39->question_39 = $answer39;
            $question39->save();

            return view('layouts/questions/question40');
        }
    }
    public function question40(){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $question40 = Questions::where('user_id', $userID)->first();

        if ($question40) {

            $answer40 = session(['answer40' => $question40->question_40]);

            return view('layouts/questions/question40')->with(['answer40' => $answer40]);
        } else {
            return view('layouts/questions/question40');
        }
    }
    public function SaveQuestion40(Request $request){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer40 = $request->question40;

        // Verifica se o email existe no banco de dados
        $user = Questions::where('user_id', $userID)->first();

        if($user){
            $user->question_40 = $answer40;
            $user->save();

            return view('layouts/questions/question41');
        } else {
            $question40 = new Questions();
            $question40->user_id = $userID;
            $question40->question_40 = $answer40;
            $question40->save();

            return view('layouts/questions/question41');
        }
    }
    public function question41(){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $question41 = Questions::where('user_id', $userID)->first();

        if ($question41) {

            $answer41 = session(['answer41' => $question41->question_41]);

            return view('layouts/questions/question41')->with(['answer41' => $answer41]);
        } else {
            return view('layouts/questions/question41');
        }
    }
    public function SaveQuestion41(Request $request){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer41 = $request->question41;

        // Verifica se o email existe no banco de dados
        $user = Questions::where('user_id', $userID)->first();

        if($user){
            $user->question_41 = $answer41;
            $user->save();

            return view('layouts/questions/question42');
        } else {
            $question41 = new Questions();
            $question41->user_id = $userID;
            $question41->question_41 = $answer41;
            $question41->save();

            return view('layouts/questions/question42');
        }
    }
    public function question42(){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $question42 = Questions::where('user_id', $userID)->first();

        if ($question42) {

            $answer42 = session(['answer42' => $question42->question_42]);

            return view('layouts/questions/question42')->with(['answer42' => $answer42]);
        } else {
            return view('layouts/questions/question42');
        }
    }
    public function SaveQuestion42(Request $request){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer42 = $request->question42;

        // Verifica se o email existe no banco de dados
        $user = Questions::where('user_id', $userID)->first();

        if($user){
            $user->question_42 = $answer42;
            $user->save();

            return view('layouts/questions/question43');
        } else {
            $question42 = new Questions();
            $question42->user_id = $userID;
            $question42->question_42 = $answer42;
            $question42->save();

            return view('layouts/questions/question43');
        }
    }
    public function question43(){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $question43 = Questions::where('user_id', $userID)->first();

        if ($question43) {

            $answer43 = session(['answer43' => $question43->question_43]);

            return view('layouts/questions/question43')->with(['answer43' => $answer43]);
        } else {
            return view('layouts/questions/question43');
        }
    }
    public function SaveQuestion43(Request $request){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer43 = $request->question43;

        // Verifica se o email existe no banco de dados
        $user = Questions::where('user_id', $userID)->first();

        if($user){
            $user->question_43 = $answer43;
            $user->save();

            return view('layouts/questions/question44');
        } else {
            $question43 = new Questions();
            $question43->user_id = $userID;
            $question43->question_43 = $answer43;
            $question43->save();

            return view('layouts/questions/question44');
        }
    }
    public function question44(){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $question44 = Questions::where('user_id', $userID)->first();

        if ($question44) {

            $answer44 = session(['answer44' => $question44->question_44]);

            return view('layouts/questions/question44')->with(['answer44' => $answer44]);
        } else {
            return view('layouts/questions/question44');
        }
    }
    public function SaveQuestion44(Request $request){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer44 = $request->question44;

        // Verifica se o email existe no banco de dados
        $user = Questions::where('user_id', $userID)->first();

        if($user){
            $user->question_44 = $answer44;
            $user->save();

            return view('layouts/questions/question45');
        } else {
            $question44 = new Questions();
            $question44->user_id = $userID;
            $question44->question_44 = $answer44;
            $question44->save();

            return view('layouts/questions/question45');
        }
    }
    public function question45(){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $question45 = Questions::where('user_id', $userID)->first();

        if ($question45) {

            $answer45 = session(['answer45' => $question45->question_45]);

            return view('layouts/questions/question45')->with(['answer45' => $answer45]);
        } else {
            return view('layouts/questions/question45');
        }
    }
    public function SaveQuestion45(Request $request){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer45 = $request->question45;

        // Verifica se o email existe no banco de dados
        $user = Questions::where('user_id', $userID)->first();

        if($user){
            $user->question_45 = $answer45;
            $user->save();

            return view('layouts/questions/question46');
        } else {
            $question45 = new Questions();
            $question45->user_id = $userID;
            $question45->question_45 = $answer45;
            $question45->save();

            return view('layouts/questions/question46');
        }
    }
    public function question46(){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $question46 = Questions::where('user_id', $userID)->first();

        if ($question46) {

            $answer46 = session(['answer46' => $question46->question_46]);

            return view('layouts/questions/question46')->with(['answer46' => $answer46]);
        } else {
            return view('layouts/questions/question46');
        }
    }
    public function SaveQuestion46(Request $request){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer46 = $request->question46;

        // Verifica se o email existe no banco de dados
        $user = Questions::where('user_id', $userID)->first();

        if($user){
            $user->question_46 = $answer46;
            $user->save();

            return view('layouts/questions/question47');
        } else {
            $question46 = new Questions();
            $question46->user_id = $userID;
            $question46->question_46 = $answer46;
            $question46->save();

            return view('layouts/questions/question47');
        }
    }
    public function question47(){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $question47 = Questions::where('user_id', $userID)->first();

        if ($question47) {

            $answer47 = session(['answer47' => $question47->question_47]);

            return view('layouts/questions/question47')->with(['answer47' => $answer47]);
        } else {
            return view('layouts/questions/question47');
        }
    }
    public function SaveQuestion47(Request $request){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;

        $answer47 = $request->question47;

        // Verifica se o email existe no banco de dados
        $user = Questions::where('user_id', $userID)->first();

        if($user){
            $user->question_47 = $answer47;
            $user->save();

            return view('layouts/questions/question48');
        } else {
            $question47 = new Questions();
            $question47->user_id = $userID;
            $question47->question_47 = $answer47;
            $question47->save();

            return view('layouts/questions/question48');
        }
    }
    public function question48(){
        // Busca dados no banco
        $user = Auth::user();
        $userID = $user->id;
        $question48 = Questions::where('user_id', $userID)->first();

        if ($question48) {

            $answer48 = session(['answer48' => $question48->question_48]);

            return view('layouts/questions/question48')->with(['answer48' => $answer48]);
        } else {
            return view('layouts/questions/question48');
        }
    }
    public function SaveQuestion48(Request $request){
        // Busca dados no banco
        $user = Auth::user();
        $fullName = $user->name;
        $userID = $user->id;

        $answer48 = $request->question48;

        // Verifica o banco de dados
        $user = Questions::where('user_id', $userID)->first();

        $times_exec = $user->times_exec;
        if($times_exec == ""){
            $user->times_exec = 1;
        } else {
            $user->times_exec = $times_exec + 1;
        }

        //Arquétipos
        $inocente = "Inocente";

        $res_1 = $user->question_1;
        if($res_1 == "a"){
            $res_1 = 4;
        } else if($res_1 == "b"){
            $res_1 = 2;
        } else if($res_1 == "c"){
            $res_1 = 3;
        } else {
            $res_1 = 1;
        }

        $res_2 = $user->question_2;
        if($res_2 == "a"){
            $res_2 = 1;
        } else if($res_2 == "b"){
            $res_2 = 3;
        } else if($res_2 == "c"){
            $res_2 = 4;
        } else {
            $res_2 = 2;
        }

        $res_3 = $user->question_3;
        if($res_3 == "a"){
            $res_3 = 2;
        } else if($res_3 == "b"){
            $res_3 = 1;
        } else if($res_3 == "c"){
            $res_3 = 4;
        } else {
            $res_3 = 3;
        }

        $res_4 = $user->question_4;
        if($res_4 == "a"){
            $res_4 = 4;
        } else if($res_4 == "b"){
            $res_4 = 1;
        } else if($res_4 == "c"){
            $res_4 = 3;
        } else {
            $res_4 = 2;
        }

        $somaInocente = $res_1 + $res_2 + $res_3 + $res_4;

        $orfao = "Orfão";

        $res_5 = $user->question_5;
        if($res_5 == "a"){
            $res_5 = 3;
        } else if($res_5 == "b"){
            $res_5 = 4;
        } else if($res_5 == "c"){
            $res_5 = 2;
        } else {
            $res_5 = 1;
        }

        $res_6 = $user->question_6;
        if($res_6 == "a"){
            $res_6 = 4;
        } else if($res_6 == "b"){
            $res_6 = 2;
        } else if($res_6 == "c"){
            $res_6 = 3;
        } else {
            $res_6 = 1;
        }

        $res_7 = $user->question_7;
        if($res_7 == "a"){
            $res_7 = 2;
        } else if($res_7 == "b"){
            $res_7 = 4;
        } else if($res_7 == "c"){
            $res_7 = 1;
        } else {
            $res_7 = 3;
        }

        $res_8 = $user->question_8;
        if($res_8 == "a"){
            $res_8 = 4;
        } else if($res_8 == "b"){
            $res_8 = 1;
        } else if($res_8 == "c"){
            $res_8 = 2;
        } else {
            $res_8 = 3;
        }

        $somaOrfao = $res_5 + $res_6 + $res_7 + $res_8;

        dd('Resultado = ' .$somaOrfao);

        $guerreiro = "Guerreiro";
        $cuidador = "Cuidador";
        $explorador = "Explorador";
        $rebelde = "Rebelde";
        $amante = "Amante";
        $criador = "Criador";
        $bobo_da_corte = "Bobo da Corte";
        $sabio = "Sábio";
        $mago = "Mago";
        $governante = "Governante";

        if($user){
            $user->question_48 = $answer48;
            $user->times_exec;
            dd($user);
            $user->save();

            return view('layouts/questions/result', compact('fullName'));
        } else {
            $question48 = new Questions();
            $question48->user_id = $userID;
            $question48->question_48 = $answer48;
            $question48->$user->times_exec;
            $question48->save();

            return view('layouts/questions/result', compact('fullName'));
        }
    }

    // public function Result(Request $request) {
    //     $user = Auth::user();
    //     $fullName = $user->name;
    //     $userID = $user->id;

    //     // Verifica o banco de dados
    //     $user = Questions::where('user_id', $userID)->first();
    //     dd($user);

    //     return view('layouts/resultado', compact('fullName'));
    // }
}
