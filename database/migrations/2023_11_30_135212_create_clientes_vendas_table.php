<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clientes_vendas', function (Blueprint $table) {
            $table->id();
            $table->foreign('id_cliente')->references('id')->on('clientes');
            $table->foreign('id_venda')->references('id')->on('vendas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes_vendas');
    }
};
