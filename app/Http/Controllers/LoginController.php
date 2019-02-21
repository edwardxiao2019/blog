<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view("login.index");
    }

    public function login()
    {
        //validate
        $this->validate(request(),[
            'email'=>'required|email',
            'password'=>'required',
            'is_remember'=>'integer'
        ]);

        $user = request(['email', 'password']);
        $is_remember = boolval(request('is_remember'));

        if(\Auth::attempt($user,$is_remember)){
            return redirect('/');
        }

        return \Redirect::back()->withErrors('Email or Password is wrong!');
    }

    public function logout()
    {
        \Auth::logout();
        return redirect('/');
    }
}
