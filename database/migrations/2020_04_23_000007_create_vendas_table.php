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
            $table->integer('pedido_id')->nullable()->unsigned();
            $table->enum('pagamento_forma', ['dinheiro', 'débito', 'crédito', 'vale refeição', 'vale-alimentação'])->nullable();
            $table->date('data_venda')->nullable();
            $table->float('estoque')->nullable();
            $table->enum('venda_tipo', ['avulso', 'assinatura'])->nullable();
            $table->integer('descricao_vendas_id')->unsigned();

            
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
