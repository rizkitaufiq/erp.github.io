<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class Registration_Controller extends Controller
{
    //
    public function registration_page(){
        if (Auth::check()){
            return redirect(route('beranda.page'));
        }
        return view('/auth/registration');
    }

    public function registration_process(Request $request){
    $request->validate([
        'name'      => 'required',
        'email'     => 'required|email|unique:users',
        'password'  => 'required|min:3',
    ],[
        'name'              => __("Name_Required"),
        'email.required'    => __("Email_Required"),
        'email.email'       => __('Email_Email'),
        'email.unique'      => __('Email_Unique'),
        'password.required' => __("Password_Required"),
        'password.min'      => __("Password_Min"),
    ]);

    $data['name']       = $request->name;
    $data['email']      = $request->email;
    $data['password']   = Hash::make($request->password);
    
    $user = User::create($data);
    
    if(!$user){
        return redirect(route('registration.page'))->with("error", "Registration failed, try again");
    }
    return redirect(route('login.page'))->with("success", "Registration success, Login to access ERP SYSTEM");
}

}
