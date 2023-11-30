<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LojasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('loja')->insert([
            [
                'id' => 1,
                'nome_loja' => 'Dream Moto',
                'endereco' => 'Rua das Flores, 123',
                'cep' => '94848',
                'telefone' => '51999999999',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 2,
                'nome_loja' => 'Moto Show',
                'endereco' => 'Rua das Pedras, 456',
                'cep' => '94849',
                'telefone' => '51999999998',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 3,
                'nome_loja' => 'Moto Mania',
                'endereco' => 'Rua das Árvores, 789',
                'cep' => '94850',
                'telefone' => '51999999997',
                'created_at' => null,
                'updated_at' => null,
            ]
        ]);
    }
}

