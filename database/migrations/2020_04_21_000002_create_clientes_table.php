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
<<<<<<< HEAD:database/migrations/2020_04_23_000002_create_clientes_table.php
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
=======
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
>>>>>>> d2a5125cf1e9a77fbbf29a79210b5b6526037d3f:database/migrations/2020_04_21_000002_create_clientes_table.php
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
