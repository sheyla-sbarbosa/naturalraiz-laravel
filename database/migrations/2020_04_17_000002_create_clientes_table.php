<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'clientes';

    /**
     * Run the migrations.
     * @table clientes
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nome', 250)->nullable();
            $table->string('endereco_1', 250);
            $table->string('endereco2', 250)->nullable();
            $table->integer('telefone')->nullable();
            $table->integer('whatsapp')->nullable();
            $table->longText('vendas_realizadas')->nullable()->comment('alias - Vendas ');
            $table->enum('venda_tipo', ['avulso', 'assinatura'])->nullable()->comment('Assinatura de produtos- entrega semanal 
Lista de produtos selecionado pelo cliente
- oferecer produtos da estação ');
            $table->enum('pagamento_formas', ['dinheiro', 'débito', 'crédito', 'paypal'])->nullable();
            $table->longText('favoritos')->nullable();
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
