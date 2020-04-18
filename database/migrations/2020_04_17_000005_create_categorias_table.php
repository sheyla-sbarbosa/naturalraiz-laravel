<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriasTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'categorias';

    /**
     * Run the migrations.
     * @table categorias
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->enum('categoria', ['Frutas', 'Legumes', 'Verduras', 'Temperos'])->nullable();
            $table->string('descricao_categoria', 45)->nullable();
            $table->unsignedInteger('produtos_id');

            $table->index(["produtos_id"], 'fk_Categorias_Produtos1_idx');


            $table->foreign('produtos_id', 'fk_Categorias_Produtos1_idx')
                ->references('id')->on('produtos')
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
