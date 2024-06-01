<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login_Controller extends Controller
{
    //
    function login_page(){
        if (Auth::check()){
            return redirect(route('beranda.page'));
        }
        return view('index');
    }

    function login_process(Request $request){
        $request->validate([
            'email'     => 'required|email|max:255',
            'password'  => 'required|min:3',
        ],[
            'email.required'    => __("Email_Required"),
            'email.email'       => __('Email_Email'),
            'password.required' => __("Password_Required"),
            'password.min'      => __("Password_Min"),
        ]);

        $credentials = $request->only('email','password');

        if(Auth::attempt($credentials)){
            return redirect()->intended('beranda.page');
        }
        return back()->withErrors(['login_error' => __('Email_And_Password_Do_Not_Match')])
        ->withInput($request->only('email'));
    }

}
