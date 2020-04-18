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

/* rota home */
Route::get('/','HomeController@index');
/* rota produto */
Route::get('produto', 'ProdutoController@index');

/*Rotas para criação de usuários*/
Route::get('/addclient', 'ClientController@create');
Route::post('/addclient', 'ClientController@store');

/*rotas de login*/

route::get('/loginClient', 'AuthController@LoginClient')->name('login');
route::get('/admin', 'AuthController@administracao')->name('admin');

/*rota carrinho */ 
Route::get('/carrinho', 'CarrinhoController@mostrarCarrinho');
