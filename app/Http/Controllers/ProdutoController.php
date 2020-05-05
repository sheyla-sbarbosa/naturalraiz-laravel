<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
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

    public  function store(ProdutoRequest $request) {
    $novoproduto = new Produto();
    $novoProduto -> nome = $request-> nome;
    $novoProduto -> valorProduto = $request-> valorProduto;
    $novoProduto -> estoqueProduto = $request-> estoqueProduto;
    $novoProduto -> avaliacaoProduto = $request-> avaliacaoProduto;
    $novoProduto -> descricaoProduto = $request-> descricaoProduto;

    $novoProduto ->save();
  


    return redirect('./home')
        ->with('mensagem', 'Cadastro realizado com sucesso');

    }
}     


