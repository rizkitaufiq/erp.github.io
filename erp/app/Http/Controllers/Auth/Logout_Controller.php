<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Logout_Controller extends Controller
{
    //
    public function logout_process(){
        Session::flush();
        Auth::logout();
        return redirect(route('login.page'));
    }
}
