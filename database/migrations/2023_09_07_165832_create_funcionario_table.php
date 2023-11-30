<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuncionariosTable extends Migration
{
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome_funcionario');
            $table->string('cargo');
            $table->decimal('salario', 10, 2);
            $table->unsignedBigInteger('id_loja');
            $table->timestamps();

            $table->foreign('id_loja')->references('id')->on('lojas');
        });
    }

    public function down()
    {
        Schema::dropIfExists('funcionarios');
    }
}
