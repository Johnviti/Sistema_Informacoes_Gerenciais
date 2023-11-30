<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendasTable extends Migration
{
    public function up()
    {
        Schema::create('vendas', function (Blueprint $table) {
            $table->id();
            $table->date('data_venda');
            $table->decimal('preco_venda', 10, 2);
            $table->unsignedBigInteger('funcionario_id');
            $table->foreign('loja_id')->references('id')->on('lojas');
            $table->foreign('moto_id')->references('id')->on('motos');
            $table->foreign('metodo_pagamento_id')->references('id')->on('metodos_pagamento'); 
            $table->foreign('funcionario_id')->references('id')->on('funcionarios');
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('vendas');
    }
}
