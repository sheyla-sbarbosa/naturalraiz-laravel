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
            $table->integer('cep1');
            $table->string('numero1', 45)->nullable();
            $table->string('complemento1')->nullable();
            $table->string('bairro1')->nullable();
            $table->integer('telefone')->nullable();
            $table->integer('whatsapp')->nullable();
            $table->longText('vendas_realizadas')->nullable();
            $table->enum('venda_tipo', ['avulso', 'assinatura'])->nullable();
            $table->longText('favoritos')->nullable();
            $table->string('endereco2', 250)->nullable();
            $table->integer('cep2')->nullable();
            $table->string('numero2', 45)->nullable();
            $table->string('complemento2')->nullable();
            $table->string('bairro2')->nullable();
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
