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
                'nome' => 'Carlos Pereira',
                'email' => 'jose@gmail.com',
                'telefone' => '',
                'cpf' => '',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 2,
                'nome' => 'Maria da Silva',
                'email' => 'maria@gmail.com',
                'telefone' => '555-5555',
                'cpf' => '12345678901',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 3,
                'nome' => 'João Souza',
                'email' => 'joao@gmail.com',
                'telefone' => '555-5556',
                'cpf' => '23456789012',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 4,
                'nome' => 'Ana Santos',
                'email' => 'ana@gmail.com',
                'telefone' => '555-5557',
                'cpf' => '34567890123',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 5,
                'nome' => 'Pedro Ferreira',
                'email' => 'pedro@gmail.com',
                'telefone' => '555-5558',
                'cpf' => '45678901234',
                'created_at' => null,
                'updated_at' => null,
            ],
        ]);
    }
}
