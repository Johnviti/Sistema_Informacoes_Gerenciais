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
                'id' => 1,
                'nome' => 'Titan',
                'ano' => '2023-09-12',
                'marca' => 'HONDA',
                'modelo' => 'xw',
                'preco' => '16.000',
                'loja_id' => 1,
                'fornecedor_id' => 1,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 2,
                'nome' => 'Fz25',
                'ano' => '2023-09-19',
                'marca' => 'HONDA',
                'modelo' => '47474',
                'preco' => '47585',
                'loja_id' => 1,
                'fornecedor_id' => 1,
                'created_at' => '2023-09-14 17:59:57',
                'updated_at' => '2023-09-14 17:59:57',
            ],
            [
                'id' => 3,
                'nome' => 'FAN',
                'ano' => '2023-09-13',
                'marca' => 'YAMAHA',
                'modelo' => '654647',
                'preco' => '50.000',
                'loja_id' => 2,
                'fornecedor_id' => 1,
                'created_at' => '2023-09-16 18:16:37',
                'updated_at' => '2023-09-16 18:16:37',
            ],
            [
                'id' => 4,
                'nome' => 'Fz15',
                'ano' => '2023-09-19',
                'marca' => 'YAMAHA',
                'modelo' => '654647',
                'preco' => '60.000',
                'loja_id' => 3,
                'fornecedor_id' => 1,
                'created_at' => '2023-09-16 18:17:18',
                'updated_at' => '2023-09-16 18:17:18',
            ],
            [
                'id' => 5,
                'nome' => 'XRE',
                'ano' => '2023-09-19',
                'marca' => 'YAMAHA',
                'modelo' => '47474',
                'preco' => '80000',
                'loja_id' => 4,
                'fornecedor_id' => 3,
                'created_at' => '2023-09-21 20:41:37',
                'updated_at' => '2023-09-21 20:41:37',
            ],
            [
                'id' => 6,
                'nome' => 'Ninja ZX-6R',
                'ano' => '2023-09-25',
                'marca' => 'KAWASAKI',
                'modelo' => 'ZX-6R',
                'preco' => '12,999',
                'loja_id' => 5,
                'fornecedor_id' => 2,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 7,
                'nome' => 'GSX-R750',
                'ano' => '2023-09-26',
                'marca' => 'SUZUKI',
                'modelo' => 'GSX-R750',
                'preco' => '13,499',
                'loja_id' => 6,
                'fornecedor_id' => 2,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 8,
                'nome' => 'CBR1000RR',
                'ano' => '2023-09-27',
                'marca' => 'HONDA',
                'modelo' => 'CBR1000RR',
                'preco' => '16,799',
                'loja_id' => 7,
                'fornecedor_id' => 3,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 9,
                'nome' => 'Panigale V4',
                'ano' => '2023-09-28',
                'marca' => 'DUCATI',
                'modelo' => 'Panigale V4',
                'preco' => '21,195',
                'loja_id' => 8,
                'fornecedor_id' => 3,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 10,
                'nome' => 'R1',
                'ano' => '2023-09-29',
                'marca' => 'YAMAHA',
                'modelo' => 'YZF-R1',
                'preco' => '16,799',
                'loja_id' => 9,
                'fornecedor_id' => 4,
                'created_at' => null,
                'updated_at' => null,
            ],
        ]);
    }
}
