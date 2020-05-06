<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaProdutos extends Model
{
    public function produto ()
    {
        return $this->hasMany(Produto::class);
    }

}
