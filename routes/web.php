<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

/* autenticação */
Auth::routes();

/* home */
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* registro */
Route::get('/register', 'App\Http\Controllers\UserController@registerUser')->name('register');
Route::post('/register', 'App\Http\Controllers\UserController@storeUser')->name('store');


