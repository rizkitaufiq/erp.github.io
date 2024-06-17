<?php

namespace App\Http\Controllers\Beranda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class Beranda_Controller extends Controller
{
    //
    public function beranda_page(){
        if (Auth::check()){
            return view('/beranda/index');
        }
        return view('index');
    }
}
