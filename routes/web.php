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

/*rota empresa */
Route::get('empresa','EmpresaController@index');
Route::get('home', 'HomeController@index')->name('home.index');
/* rota produto */
Route::get('listagemproduto', 'ProdutoController@index')->name('listagemproduto.index'); //mostra os produtos na home
Route::get('administracao', 'ProdutoController@create')->name('administracao.create');
Route::post('produto/store', 'ProdutoController@store')->name('produto.store'); //recebe o produto
Route::get('{produto}/edit', 'ProdutoController@edit') ->name('produto.edit'); 
Route::post('{produto}/update', 'ProdutoController@update')->name('produto.update');
Route::get('{produto}/destroy', 'ProdutoController@destroy')->name('produto.destroy');

/*Rotas para cadastro de clientes*/
Route::get('/cadastroclient', 'UserController@create');
Route::post('/cadastroclient', 'UserController@store')->name('user.store');

Route::get('/fruta', function() {
    return view('fruta');
});

Route::get('/frutas', function() {
    return view('frutas');
});


Route::get('/legume', function() {
    return view('legume');
});

Route::get('/tempero', function() {
    return view('tempero');
});

Route::get('/temperos', function() {
    return view('temperos');
});


Route::get('/verdura', function() {
    return view('verdura');
});

Route::get('/verduras', function() {
    return view('verduras');
});


Route::get('/cha', function() {
    return view('cha');
});

/*rotas de login*/

Route::get('/loginclient', 'UserController@loginClient');
Route::get('/administracao1', 'AdminController@admin');

//Route::auth();

/*rota carrinho */
Route::get('/carrinho2', 'CarrinhoController@mostrarCarrinho');

/*rota favoritos */
Route::get('/favoritos', 'FavoritosController@listaFavoritos');

/*
Route::get('/model', function () {


     $produto = \App\Produto::create([
        'nome' => 'Brócolis',
        'valor_unitario' => '3.50',
        'descricao_produto' => 'Brócolis grandes, verdes e saudáveis',
        'estoque' => '12',
    
    ]);  

    return $produto = \App\Produto::All();

 
});  */