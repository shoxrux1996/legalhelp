<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function createQuestion(){
        return view('ask-question');
    }

    public function makeCall(){
        return view('order-call');
    }
    public function makeDocument(){
        return view('order-document');
    }
}
