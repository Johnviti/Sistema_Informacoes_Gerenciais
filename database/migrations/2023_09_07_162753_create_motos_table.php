<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotosTable extends Migration
{
    public function up()
    {
        Schema::create('motos', function (Blueprint $table) {
            $table->id();
            $table->string('modelo');
            $table->integer('ano_fabricacao');
            $table->string('cor')->nullable();
            $table->decimal('preco', 10, 2);
            $table->boolean('disponivel')->default(true);
            $table->foreignId('fornecedor_id')->constrained('fornecedor');
            $table->integer('qtd_estoque')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::table('motos', function (Blueprint $table) {
            $table->dropForeign(['id_fornecedor']);
        });
        Schema::dropIfExists('motos');
    }
}
