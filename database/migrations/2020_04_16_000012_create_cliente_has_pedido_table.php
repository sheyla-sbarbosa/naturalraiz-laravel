<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClienteHasPedidoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'cliente_has_pedido';

    /**
     * Run the migrations.
     * @table cliente_has_pedido
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('Clientes_idClientes');
            $table->integer('pedidos_id');
            $table->integer('pedidos_descricao');

            $table->index(["pedidos_id", "pedidos_descricao"], 'fk_Clientes_has_Pedidos_Pedidos1_idx');

            $table->index(["Clientes_idClientes"], 'fk_Clientes_has_Pedidos_Clientes1_idx');


            $table->foreign('Clientes_idClientes', 'fk_Clientes_has_Pedidos_Clientes1_idx')
                ->references('id')->on('clientes')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('pedidos_id', 'fk_Clientes_has_Pedidos_Pedidos1_idx')
                ->references('id')->on('pedidos')
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
