<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public  function index() {

        $produtos = \App\Produto::paginate(1) ;

        return view('home', compact('produtos'));
    }

}
