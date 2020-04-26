<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Pedidos extends Model
{
    public function cadastroclient()
    {
        return $this->belongsToMany(Cadastroclient::class);
    }
}
