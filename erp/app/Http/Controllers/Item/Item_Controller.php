<?php

namespace App\Http\Controllers\Item;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class Item_Controller extends Controller
{
    //
    function item_page(){
        if (Auth::check()){
            return view('/item/index');
        }
    return view('index');   
    }
    
}
