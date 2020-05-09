<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pedidos;
use App\Produto;
use App\Vendas;
use App\User;

use App\Http\Requests\UserRequest;


class UserController extends Controller
{
    
    public function index() {
        $novocliente = User::paginate();
        return view('loginclient');
    }

    public function loginclient() {
        return view('loginclient');
    }


    public function show() {
        $novocliente = User::paginate();
        return view('loginclient');
    }

    public function create() {
        return view('cadastroclient');
    }

    
    public function cadastro()
    {return view('cadastroclient');}


    public function store(UserRequest $request) {
        
        $novocliente = new User();
        $novocliente -> nome = $request-> nome;
        $novocliente -> telefone1 = $request-> whatsapp;
        $novocliente -> telefone2 = $request-> telefone;
        $novocliente -> email = $request-> email;
        $novocliente -> password = $request-> senha;
        $novocliente -> endereco1 = $request-> endereço;
        $novocliente -> cep1 = $request-> cep;
        $novocliente -> bairro1 = $request-> bairro;
        $novocliente -> numero1 = $request-> numero;
        $novocliente -> complemento_1 = $request-> complemento;
        $novocliente -> endereco2 = $request-> endereco_opcional;
        $novocliente -> cep2 = $request-> cep_opcional;
        $novocliente -> bairro2 = $request-> bairro_opcional;
        $novocliente -> numero2 = $request-> numero_opcional;
        $novocliente -> complemento2 = $request-> complemento_opcional;
        $novocliente ->save();



        return redirect('./')
            ->with('mensagem', 'Cadastro realizado com sucesso');
    }     
}