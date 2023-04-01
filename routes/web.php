<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

/* ---------- auth ---------- */
Auth::routes();

/* ---------- home ---------- */
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* ---------- admin ----------*/
/* Produtos */
Route::get('/admin/produtos', 'App\Http\Controllers\ProductController@index')->name('produtos');
Route::get('/admin/produtos/add', 'App\Http\Controllers\ProductController@create')->name('addProdutos');
Route::post('/admin/produtos/add', 'App\Http\Controllers\ProductController@store')->name('storeProdutos');

/* Dashboard */
Route::get('/admin/dashboard', 'App\Http\Controllers\HomeController@redirects')->name('dashboard');

/* Pedidos */
Route::get('/admin/pedidos', 'App\Http\Controllers\PedidosController@index')->name('pedidos');

/* Clientes */
Route::get('/admin/clientes', 'App\Http\Controllers\ClientesController@index')->name('clientes');


/* ---------- user ---------- */
/* Login */
Route::get('/register', 'App\Http\Controllers\UserController@registerUser')->name('register');
Route::post('/register', 'App\Http\Controllers\UserController@storeUser')->name('store');

/* Menu */
Route::get('/menu', 'App\Http\Controllers\MenuController@index')->name('menu');

/* Cart */
Route::get('/carrinho', [\App\Http\Controllers\CartController::class, 'cartList'])->name('carrinho');
Route::post('/carrinho', [\App\Http\Controllers\CartController::class, 'addCart'])->name('addCarrinho');





