<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidoHasProdutoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'pedido_has_produto';

    /**
     * Run the migrations.
     * @table pedido_has_produto
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('pedidos_id');
            $table->unsignedInteger('produtos_id');

            $table->index(["produtos_id"], 'fk_Pedidos_has_Produtos_Produtos1_idx');

            $table->index(["pedidos_id"], 'fk_Pedidos_has_Produtos_Pedidos1_idx');


            $table->foreign('pedidos_id', 'fk_Pedidos_has_Produtos_Pedidos1_idx')
                ->references('id')->on('pedidos')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('produtos_id', 'fk_Pedidos_has_Produtos_Produtos1_idx')
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
