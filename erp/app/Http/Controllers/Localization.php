<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class Localization extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($locale)
    {
        //
        if(!in_array($locale, ['en','id'])){
            abort(400);
        }

        App::setLocale($locale);
    }
}
