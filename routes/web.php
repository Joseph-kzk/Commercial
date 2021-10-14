<?php

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

Route::get('/', function () {
    return view("auth.login");
})->middleware("guest");

Route::get('/logout', function (){
    auth()->logout();
    \session()->flush();
    return redirect()->Route('login')->with('success', 'Déconnecté avec succès');
  })->name('logout');

Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::resource('abonnements', 'App\Http\Controllers\AbonnementsController');