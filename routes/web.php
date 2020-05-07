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
/*rota empresa */
Route::get('empresa','EmpresaController@index');

/* rota produto */
Route::get('produto', 'ProdutoController@index');
Route::post('produto', 'ProdutoController@store')->name('produto.store');
route::get('verduras', 'ProdutoController@verduras');
route::get('fruta', 'ProdutoController@fruta');
route::get('legume', 'ProdutoController@legume');
route::get('tempero', 'ProdutoController@tempero');
Route::get('home', 'ProdutoController@index'); //mostra os produtos na home
Route::get('administracao', 'ProdutoController@create'); //mostra criar produto
Route::post('produto/store', 'ProdutoController@store')->name('produto.store'); //recebe o produto
Route::get('/{produto}/edit', 'ProdutoController@edit') ->name('produto.edit'); 
Route::post('/{produto}/update', 'ProdutoController@update');

/*Rotas para cadastro de clientes*/
Route::get('/cadastroclient', 'UserController@create');
Route::post('/cadastroclient', 'UserController@store')->name('user.store');


/*rotas de login*/

route::get('/loginclient', 'UserController@loginClient');
route::get('/administracao1', 'AdminController@admin');

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