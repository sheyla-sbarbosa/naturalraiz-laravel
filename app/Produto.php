<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    public function cadastroclient ()
    {
        return $this->belongsToMany(Cadastroclient::class);
    }
}
