<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'pedidos';

    /**
     * Run the migrations.
     * @table pedidos
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->nullable();
            $table->unsignedInteger('cliente_id');
            $table->unsignedInteger('produto_id');
            $table->float('quantidade_produtos')->nullable();
            $table->longText('descricao_produtos')->nullable();
            $table->float('total_pedido')->nullable();
            $table->date('data_venda')->nullable();
            $table->date('data_entrega')->nullable();
            $table->enum('pagamento_formas', ['dinheiro', 'débito', 'crédito', 'vale refeição', 'vale-alimentação'])->nullable();
            $table->enum('status', ['Confirmação do Pedido', 'Em Separação', 'Envio', 'Entregue', 'Cancelado'])->nullable();
            $table->text('descricao_pedidos');
            $table->unsignedInteger('vendas_id');

            $table->index(["descricao_pedidos"], 'fk_pedidos_Descricao_Pedidos1_idx');

            $table->index(["cliente_id"], 'cliente_idx');

            $table->index(["vendas_id"], 'fk_pedidos_vendas1_idx');


            $table->foreign('descricao_pedidos', 'fk_pedidos_Descricao_Pedidos1_idx')
                ->references('id')->on('descricao_pedidos')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('vendas_id', 'fk_pedidos_vendas1_idx')
                ->references('id')->on('vendas')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('cliente_id', 'cliente_idx')
                ->references('id')->on('clientes')
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
