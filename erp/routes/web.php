<?php

use App\Http\Middleware\Localization;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(Localization::class)
->group(function (){

    Route::view('/','index');
    // Route::get('/', function () {
    //     return view('index');
    // })->middleware(['auth', 'verified'])->name('index');
    
    // require __DIR__ . '/auth.php';

});

