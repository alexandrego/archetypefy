<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function question1(){
        return view('layouts/questions/question1');
    }
}
