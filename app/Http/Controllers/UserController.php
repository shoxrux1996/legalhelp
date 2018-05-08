<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function questions(){

        return view('questions')->withQuestions(Question::paginate(10));
    }
    public function question($email, $title){
        $question = Question::where('Title',$title)->where('Email', $email)->first();

        return view('individual-question')->withQuestion($question);
    }
    public function calls(){
        return view('calls');
    }
    public function call(){
        return view('individual-call');
    }
    public function documents(){
        return view('documents');
    }
    public function document(){
        return view('individual-document');
    }
    public function blog(){
        return view('individual-blog');
    }
}

