<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('carros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('marca', 100);
            $table->string('modelo', 100);
            $table->string('cor', 50);
            $table->integer('ano_fabricacao');
            $table->integer('quilometragem')->nullable();
            $table->decimal('valor', 10, 2);
            $table->string('foto1')->nullable();
            $table->string('foto2')->nullable();
            $table->string('foto3')->nullable();
            $table->text('descricao')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('carros');
    }
};
