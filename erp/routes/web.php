<?php

use App\Http\Controllers\Auth\Login_Controller;
use App\Http\Controllers\Auth\Logout_Controller;
use App\Http\Controllers\Auth\Registration_Controller;
use App\Http\Controllers\Beranda\Beranda_Controller;
use App\Http\Controllers\Localization_Controller;
use App\Http\Middleware\Localization;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;


/*
|-----------------------------------------F---------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/localization/{locale}', Localization_Controller::class)->name('localization');

Route::middleware(Localization::class)
->group(function (){

    Route::get('/', function(){
        return view('welcome');
    })->name('home');
    
// -----------------------------------------------------Auth-----------------------------------------------------    
    Route::view('/','index');

    Route::middleware('prevent')->group(function () {
        Route::get('/', [Login_Controller::class,'login_page'])->name('login.page');
        Route::post('/', [Login_Controller::class,'login_process'])->name('login.process');
    });
    
        Route::get('/logout', [Logout_Controller::class, 'logout_process'])->name('logout.process');
        Route::get('/auth/registration', [Registration_Controller::class, 'registration_page'])->name('registration.page');
        Route::post('/auth/registration',[Registration_Controller::class, 'registration_process'])->name('registration.process');

// -----------------------------------------------------Beranda-----------------------------------------------------    
    Route::middleware('prevent')->group(function(){
        Route::get('/beranda/',[Beranda_Controller::class, 'beranda_page'])->name('beranda.page');
    });

});

