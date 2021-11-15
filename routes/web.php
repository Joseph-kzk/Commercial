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

Route::resource('publicites', 'App\Http\Controllers\PublicitesController');

Route::get('/digital', 'App\Http\Controllers\HomeController@digital');

Route::get('/journal', 'App\Http\Controllers\HomeController@journal');

Route::get("notification","App\Http\Controllers\NotificationController@list")->name("notification_list");

Route::get("notification/read/a/{id}","App\Http\Controllers\NotificationController@readAbonnement")
    ->name("notification_read_abonnement");

Route::get("notification/read/p/{id}","App\Http\Controllers\NotificationController@readPublicite")
    ->name("notification_read_publicite");
