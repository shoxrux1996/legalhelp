<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function questions(){
        return view('questions');
    }
    public function question(){
        return view('individual-question');
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

