<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Produto extends Model

{

    protected $fillable = [
        'nome',
        'valor_unitario',
        'estoque', 
    ];
 
    public function pedido ()
    {
        return $this->belongsToMany(Pedidos::class);
    }

    public function categoria ()
    {
        return $this->belongsTo(CategoriaProdutos::class);
    }


}
