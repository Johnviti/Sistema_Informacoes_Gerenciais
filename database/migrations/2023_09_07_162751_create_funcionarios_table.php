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
            $table->foreignId('loja_id')->constrained('lojas');
            $table->timestamps();
        });
        
    }

    public function down()
    {
        Schema::dropIfExists('funcionarios');
    }
}
