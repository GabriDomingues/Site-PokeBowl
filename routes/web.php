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
Route::get('/admin/dashboard', [App\Http\Controllers\HomeController::class, 'redirects'])->name('dashboard');
Route::get('/admin/pedidos', 'App\Http\Controllers\HomeController@rotaPedidos')->name('pedidos');
Route::get('/admin/produtos', 'App\Http\Controllers\HomeController@rotaProdutos')->name('produtos');
Route::get('/admin/clientes', 'App\Http\Controllers\HomeController@rotaClientes')->name('clientes');


/* registro */
Route::get('/register', 'App\Http\Controllers\UserController@registerUser')->name('register');
Route::post('/register', 'App\Http\Controllers\UserController@storeUser')->name('store');


