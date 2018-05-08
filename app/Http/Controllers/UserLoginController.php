<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserLoginController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|exists:User,Email',
            'password'=>'required'
        ]);
        if($validator->fails())
            return redirect()->back()->withErrors($validator);

        return redirect()->route('questions');

    }
}
