<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendasTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'vendas';

    /**
     * Run the migrations.
     * @table vendas
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('id_pedido')->nullable();
            $table->enum('pagamento_forma', ['dinheiro', 'débito', 'crédito', 'vale refeição', 'vale-alimentação'])->nullable();
            $table->date('data_venda')->nullable();
            $table->float('estoque')->nullable();
            $table->enum('venda_tipo', ['avulso', 'assinatura'])->nullable();
            $table->text('descricao_vendas_id');

            $table->index(["descricao_vendas_id"], 'fk_vendas_descricao_vendas1_idx');


            $table->foreign('descricao_vendas_id', 'fk_vendas_descricao_vendas1_idx')
                ->references('id')->on('descricao_vendas')
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
