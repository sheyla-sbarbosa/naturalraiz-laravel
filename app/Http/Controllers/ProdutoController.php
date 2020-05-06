<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdutoRequest as RequestsProdutoRequest;
use Illuminate\Http\Request;
use App\CategoriaProduto;
use App\Produto;
use App\Pedidos;
use App\Vendas;
use App\User;

use Illuminate\Http\Request\ProdutoRequest;

class ProdutoController extends Controller
{
    public  function index() {
        return view('produto');
    }

<<<<<<< HEAD
    public  function store(ProdutoRequest $request) {
    $data = $request->all();
    $novoproduto = new Produto();
    $novoproduto-> fill($data)->save();


    /*$novoProduto -> nome = $request-> nome;
=======
    public  function store(RequestsProdutoRequest $request) {

    $novoProduto = new Produto();
    $novoProduto -> nome = $request-> nome;
>>>>>>> 28ec93d6f5a787635a9eb4ed4e5dac284605e327
    $novoProduto -> valorProduto = $request-> valorProduto;
    $novoProduto -> estoqueProduto = $request-> estoqueProduto;
    $novoProduto -> avaliacaoProduto = $request-> avaliacaoProduto;
    $novoProduto -> descricaoProduto = $request-> descricaoProduto;

    $novoProduto ->save();
   */

    return redirect('./home')
        ->with('mensagem', 'Cadastro realizado com sucesso');

    }
}     


