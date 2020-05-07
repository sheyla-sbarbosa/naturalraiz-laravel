<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdutoRequest;
use Illuminate\Http\Request;
use App\CategoriaProduto;
use App\Produto;
use App\Pedidos;
use App\Vendas;
use App\User;


class ProdutoController extends Controller
{
    public  function index() {
        return view('produto');
    }

    public function verduras () 
        { return view('verduras');

    }

    public function fruta () 
        { return view('fruta');

    }

    public function legume () 
        { return view('legume');

    }

    public function tempero () 
        { return view('tempero');

    }

    public  function store(ProdutoRequest $request) {
    $novoproduto = new Produto();
    $novoProduto -> nomeProduto = $request-> nome;
    $novoProduto -> valor_unitario= $request-> valor;
    $novoProduto -> estoqueProduto = $request-> estoque;
    $novoProduto -> avaliacaoProduto = $request-> avaliacaoProduto;
    $novoProduto -> descricaoProduto = $request-> comentarios;
    $novoProduto ->save();
    
   

    return redirect('./')
        ->with('mensagem', 'Cadastro realizado com sucesso');

    }
}     


