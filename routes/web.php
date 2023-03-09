<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\mahasiswaController;
use App\Http\Controllers\pagesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::controller(UserController::class)->group(function(){
        Route::get('/','index')->name('index');
        Route::get('tambah','tambah')->name('tambah');
        Route::post('tambah','tambah_action')->name('tambah.action');
        Route::get('dashboard','dashboard')->name('dashboard');
        Route::get('notification','notification')->name('notification');
        Route::get('logout','logout')->name('logout');
        Route::get('profile','profile')->name('profile');
        Route::get('register','register')->name('register');
        Route::get('topup','topup')->name('topup');
        Route::get('report','report')->name('report');
        Route::get('price','price')->name('price');
        Route::post('register','register_action')->name('register.action');
        Route::get('login','login')->name('login');
        Route::post('login','login_action')->name('login.action');
        Route::get('authorized/google','login_google')->name('login.google');
        Route::get('auth/google/callback','login_callback')->name('login.callback');

});
    
Route::get('login2', function () {
    return view('auth.login2',['title'=> 'Login 2']);
});

