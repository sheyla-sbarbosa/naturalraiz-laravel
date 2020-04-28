<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Pedidos;
use App\Produto;
use App\Vendas;

use App\Http\Requests\ClienteRequest;


class ClienteController extends Controller
{
    
    public function index() {
        $novocliente = Cadastroclient::paginate();
        return view('cadastroclient');
    }

    public function create() {
        return view('cadastroclient');
    }

    
    public function cadastro()
    {return view('cadastroclient');}


    public function store(ClienteRequest $request) {
        
        $novocliente = new Cliente();
        $novocliente -> nome = $request-> nome;
        $novocliente -> telefone1 = $request-> whatsapp;
        $novocliente -> telefone2 = $request-> telefone;
        $novocliente -> email = $request-> e-mail;
        $novocliente -> password = $request-> senha;
        $novocliente -> endereco1 = $request-> endereço;
        $novocliente -> cep1 = $request-> cep;
        $novocliente -> bairro1 = $request-> bairro;
        $novocliente -> numero1 = $request-> numero;
        $novocliente -> complemento1 = $request-> complemento;
        $novocliente -> endereco2 = $request-> endereco_opcional;
        $novocliente -> cep2 = $request-> cep_opcional;
        $novocliente -> bairro2 = $request-> bairro_opcional;
        $novocliente -> numero2 = $request-> numero_opcional;
        $novocliente -> complemento2 = $request-> complemento_opcional;
        $novocliente -> fill($novocliente)->save();



        return redirect('./home')
            ->with('mensagem', 'Cadastro realizado com sucesso');
    }     
}