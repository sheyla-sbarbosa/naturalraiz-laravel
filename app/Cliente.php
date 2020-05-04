<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{ 

    protected $fillable = [

        'nome',
        'whatsapp',
        'email',
        'password',
        'endereco1',
        'cep1',
        'numero',
    ];

    public function RegisterController ()
    { return $this-> belongsTo (User::class);} 

    public function produtos () 
    {
        return $this->belongsToMany(Produto::class);
    }


    public function pedidos () {
    return $this->belongsToMany(Pedidos::class);}

    public function vendas (){
        return $this->belongsToMany(Vendas::class);
    }



}