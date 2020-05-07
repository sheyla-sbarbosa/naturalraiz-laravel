<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'produtos';

    /**
     * Run the migrations.
     * @table produtos
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nome', 45);
            $table->float('valor_unitario');
            $table->longText('descricao_produto')->nullable();
            $table->float('estoque')->nullable();
            $table->binary('imagem')->nullable();
            $table->text('comentarios')->nullable();
            $table->timestamps();
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
