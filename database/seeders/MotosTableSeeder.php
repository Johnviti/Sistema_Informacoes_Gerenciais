<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('moto')->insert([
            [
                'modelo' => 'HONDA POP',
                'ano_fabricacao' => 2020,
                'cor' => 'Red',
                'preco' => 5000.00,
                'disponivel' => true,
                'id_fornecedor' => 1,
                'qtd_estoque' => 10
            ],
            [
                'modelo' => 'HONDA PCX',
                'ano_fabricacao' => 2021,
                'cor' => 'Blue',
                'preco' => 6000.00,
                'disponivel' => true,
                'id_fornecedor' => 2,
                'qtd_estoque' => 5
            ],
            [
                'modelo' => 'HONDA BIZ',
                'ano_fabricacao' => 2022,
                'cor' => 'Green',
                'preco' => 7000.00,
                'disponivel' => true,
                'id_fornecedor' => 3,
                'qtd_estoque' => 8
            ],
            [
                'modelo' => 'HONDA 160 TITAN',
                'ano_fabricacao' => 2023,
                'cor' => 'Yellow',
                'preco' => 8000.00,
                'disponivel' => true,
                'id_fornecedor' => 4,
                'qtd_estoque' => 3
            ],
            [
                'modelo' => 'HONDA 300',
                'ano_fabricacao' => 2024,
                'cor' => 'Black',
                'preco' => 9000.00,
                'disponivel' => true,
                'id_fornecedor' => 5,
                'qtd_estoque' => 7
            ],
            [
                'modelo' => 'HONDA 250',
                'ano_fabricacao' => 2025,
                'cor' => 'White',
                'preco' => 10000.00,
                'disponivel' => true,
                'id_fornecedor' => 6,
                'qtd_estoque' => 2
            ], 
        ]);
    }
}
