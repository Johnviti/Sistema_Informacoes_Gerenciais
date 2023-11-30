<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FuncionariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('funcionario')->insert([
            [
                'id' => 1,
                'nome_funcionario' => 'Carlos Pereira',
                'cargo' => 'Vendedor',
                'salario' => 2000.00,
                'id_loja' => 1,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 2,
                'nome_funcionario' => 'João da Silva',
                'cargo' => 'Vendedor',
                'salario' => 2000.00,
                'id_loja' => 1,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 3,
                'nome_funcionario' => 'Maria da Silva',
                'cargo' => 'Vendedor',
                'salario' => 2000.00,
                'id_loja' => 2,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 4,
                'nome_funcionario' => 'José da Silva',
                'cargo' => 'Vendedor',
                'salario' => 2000.00,
                'id_loja' => 2,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 5,
                'nome_funcionario' => 'Joana da Silva',
                'cargo' => 'Vendedor',
                'salario' => 2000.00,
                'id_loja' => 3,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 6,
                'nome_funcionario' => 'Pedro da Silva',
                'cargo' => 'Vendedor',
                'salario' => 2000.00,
                'id_loja' => 3,
                'created_at' => null,
                'updated_at' => null,
            ]
        ]);
    }
}
