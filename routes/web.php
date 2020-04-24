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

/*Rotas para cadastro de clientes*/
<<<<<<< HEAD
Route::get('/cadastroclient', 'ClienteController@create');
=======
Route::get('/cadastroclient', 'ClienteController@cadastro');
>>>>>>> d2a5125cf1e9a77fbbf29a79210b5b6526037d3f
Route::post('/cadastroclient', 'ClienteController@store');

/*rotas de login*/

route::get('/loginclient', 'AuthController@loginClient');
route::get('/admin', 'AuthController@administracao');

/*rota carrinho */ 
Route::get('/carrinho2', 'CarrinhoController@mostrarCarrinho');

/*rota favoritos */
Route::get('/favoritos', 'FavoritosController@listaFavoritos');