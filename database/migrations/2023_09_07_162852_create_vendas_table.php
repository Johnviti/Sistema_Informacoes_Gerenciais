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
            $table->foreignId('loja_id')->constrained('lojas');
            $table->foreignId('moto_id')->constrained('motos');
            $table->foreignId('metodo_pagamento_id')->constrained('metodo_pagamento'); 
            $table->foreignId('funcionario_id')->constrained('funcionarios');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('vendas');
    }
}
