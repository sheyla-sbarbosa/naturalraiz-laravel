<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagamentosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'pagamentos';

    /**
     * Run the migrations.
     * @table pagamentos
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->enum('pagamento_forma', ['dinheiro', 'débito', 'crédito', 'vale refeição', 'vale-alimentação'])->nullable();
            $table->integer('vendas_id')->unsigned();
            $table->string('soma_vendas', 45)->nullable();
            $table->integer('admin_id')->unsigned();

            
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
