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
            $table->integer('cliente_id')->unsigned();
            $table->integer('produto_id')->unsigned();
            $table->float('quantidade_produtos')->nullable();
            $table->longText('descricao_produtos')->nullable();
            $table->float('total_pedido')->nullable();
            $table->date('data_venda')->nullable();
            $table->date('data_entrega')->nullable();
            $table->enum('pagamento_formas', ['dinheiro', 'débito', 'crédito', 'vale refeição', 'vale-alimentação'])->nullable();
            $table->enum('status', ['Confirmação do Pedido', 'Em Separação', 'Envio', 'Entregue', 'Cancelado'])->nullable();
            $table->text('descricao_pedidos');
            $table->integer('vendas_id')->unsigned();

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
