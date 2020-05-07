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

        $produtos = \App\Produto::paginate(5) ;

        return view('home', compact('produtos'));
    }

    public function create() {
        return view('admin');
    }

    public function store(Request $request) {
      $data = $request->all();
      $novoproduto = new Produto();
      $novoproduto-> fill($data)->save();

      return  $novoproduto;

    }

    public function edit($produto) {

        $produto = \App\Produto::find($produto);

        return view('editarproduto', compact('produto'));
    }

    public function update(Request $request, $produto) {

      
    }

}     
