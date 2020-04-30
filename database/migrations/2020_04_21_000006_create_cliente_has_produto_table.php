<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClienteHasProdutoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'cliente_has_produto';

    /**
     * Run the migrations.
     * @table cliente_has_produto
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('clientes_id');
            $table->integer('produto_id');

            $table->index(["clientes_id"], 'fk_Clientes_has_Produto_Clientes1_idx');

            $table->index(["produto_id"], 'fk_Clientes_has_Produto_Produto1_idx');


            $table->foreign('clientes_id', 'fk_Clientes_has_Produto_Clientes1_idx')
                ->references('id')->on('clientes')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('produto_id', 'fk_Clientes_has_Produto_Produto1_idx')
                ->references('id')->on('produtos')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}