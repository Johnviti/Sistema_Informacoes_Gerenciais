<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientesVendasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes_vendas')->insert([
            [
                'id_cliente' => 1,
                'id_venda' => 1,
                'created_at' => null,
                'updated_at' => null,
            ],
            [ 
                'id_cliente' => 2,
                'id_venda' => 1,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id_cliente' => 3,
                'id_venda' => 2,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id_cliente' => 4,
                'id_venda' => 2,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id_cliente' => 5,
                'id_venda' => 3,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id_cliente' => 6,
                'id_venda' => 3,
                'created_at' => null,
                'updated_at' => null,
            ]
        ]);
    }
}
