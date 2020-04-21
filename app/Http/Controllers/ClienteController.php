<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use Illuminate\Http\ClientRequest;

class ClienteController extends Controller
{
    public function cadastro()
    {return view('cadastroclient');}


    public function store(clienteRequest $request) {
        $dados = $request -> all();
        $novocliente = new Cliente();
        $novocliente -> fill($dados)->save();
       
    

        return redirect('cadastroclient')
            ->with('mensagem', 'Cadastro realizado com sucesso');
    }     
}