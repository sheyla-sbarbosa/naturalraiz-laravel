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
            $table->integer('cep_1');
            $table->string('numero_1', 45)->nullable();
            $table->string('complemento_1')->nullable();
            $table->string('bairro_1')->nullable();
            $table->integer('telefone')->nullable();
            $table->integer('whatsapp')->nullable();
            $table->longText('vendas_realizadas')->nullable()->comment('alias - Vendas ');
            $table->enum('venda_tipo', ['avulso', 'assinatura'])->nullable();
            $table->enum('pagamento_formas', ['dinheiro', 'débito', 'crédito', 'paypal'])->nullable();
            $table->longText('favoritos')->nullable();
            $table->string('endereco_2', 250)->nullable();
            $table->integer('cep_2')->nullable();
            $table->string('numero_2', 45)->nullable();
            $table->string('complemento_2')->nullable();
            $table->string('bairro_2')->nullable();
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
