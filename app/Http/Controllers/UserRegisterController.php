<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserRegisterController extends Controller
{
    public function showRegister(){
        return view('register')->withActiveuser('client');
    }
}
