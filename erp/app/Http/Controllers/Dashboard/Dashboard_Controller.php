<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class Dashboard_Controller extends Controller
{
    //
    public function dashboard_page(){
        if (Auth::check()){
            return view('/dashboard/index');
        }
        return view('index');
    }
}
