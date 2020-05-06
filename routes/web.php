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
Route::get('/home','HomeController@index');
/*rota empresa */
Route::get('empresa','EmpresaController@index');
/* rota produto */
Route::get('produto', 'ProdutoController@index');
Route::post('produto', 'ProdutoController@store')->name('produto.store');

/*Rotas para cadastro de clientes*/
Route::get('/cadastroclient', 'UserController@create');
Route::post('/cadastroclient', 'UserController@store')->name('user.store');

/*rotas de login*/

// route::get('/loginclient', 'AuthController@loginClient');
route::get('/administracao', 'AdminController@admin');

Route::auth();

/*rota carrinho */
Route::get('/carrinho2', 'CarrinhoController@mostrarCarrinho');

/*rota favoritos */
Route::get('/favoritos', 'FavoritosController@listaFavoritos');


Route::get('/model', function () {


    /* $user = \App\User::create([
        'nome' => 'adriana silva',
        'email' => 'adrianasilva@hotmail.com',
        'password' => bcrypt('1234567899')

    ]); */
    /*
    $user = \App\User::find(8);
    $user = $user->update([
        'nome' => 'Atualizando com MassUpdate'
    ]); //true ou false

    dd($user);
*/

    return \App\User::all();
} );
