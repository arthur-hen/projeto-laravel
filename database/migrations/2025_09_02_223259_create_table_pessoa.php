<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_pessoa', function (Blueprint $table) {
            $table->id();//campo id inteiro autoincremento chave primaria
            $table->string("pess_nome","45");
            $table->text("pess_observacao")->nullable();
            $table->boolean("pess_viva")->default(1);
            $table->date("pess_dtNasc");
            $table->datetime("pess_agendamento")->nullable();
            $table->bigInteger("pess_condigobarras")->nullable();

 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_pessoa');
    }
};
