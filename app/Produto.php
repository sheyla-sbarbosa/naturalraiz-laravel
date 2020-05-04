<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Produto extends Model
{
    public function pedido ()
    {
        return $this->belongsToMany(Pedido::class);
    }

    public function categoria ()
    {
        return $this->belongsTo(CategoriaProduto::class);
    }


}
