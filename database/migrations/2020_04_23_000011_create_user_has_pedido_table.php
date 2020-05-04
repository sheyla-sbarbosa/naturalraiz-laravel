<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserHasPedidoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'user_has_pedido';

    /**
     * Run the migrations.
     * @table user_has_pedido
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('User_id');
            $table->integer('pedidos_id');
            $table->integer('pedidos_descricao');

           
         });
    }

    /**
     * Reverse the migrations.
     *php
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
