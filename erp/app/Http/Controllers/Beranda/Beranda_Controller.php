<?php

namespace App\Http\Controllers\Beranda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Beranda_Controller extends Controller
{
    //
    function beranda_page(){

        return view('/beranda/index');
    }
}
