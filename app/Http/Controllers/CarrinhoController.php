<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    public function mostrarCarrinho(){
        return view ('carrinho2');
    }
}
