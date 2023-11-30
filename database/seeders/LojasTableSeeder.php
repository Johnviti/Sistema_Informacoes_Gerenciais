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
                'nome' => 'Dream Moto',
                'estado' => 'alagoas',
                'cidade' => 'maceió',
                'bairro' => 'feitosa',
                'complemento' => 'perto do shopping',
                'rua' => 'rua da caixa',
                'cep' => '94848',
                'funcionario_id' => 1,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 2,
                'nome' => 'Motos Tainá',
                'estado' => 'alagoas',
                'cidade' => 'maceio',
                'bairro' => 'feitosa',
                'complemento' => 'nada',
                'rua' => 'sao joao',
                'cep' => '25364-747',
                'funcionario_id' => 1,
                'created_at' => '2023-09-14 17:10:08',
                'updated_at' => '2023-09-14 17:10:08',
            ],
            [
                'id' => 3,
                'nome' => 'Carvalho Motos',
                'estado' => 'São Paulo',
                'cidade' => 'Santos',
                'bairro' => 'Barra',
                'complemento' => 'Muitos Próximo',
                'rua' => 'Neymar',
                'cep' => '25364-747',
                'funcionario_id' => 1,
                'created_at' => '2023-09-16 17:44:18',
                'updated_at' => '2023-09-16 17:44:18',
            ],
            [
                'id' => 4,
                'nome' => 'Felipe Alves Motos',
                'estado' => 'alagoas',
                'cidade' => 'maceio',
                'bairro' => 'feitosa',
                'complemento' => 'nada',
                'rua' => 'sao joao',
                'cep' => '25364-747',
                'funcionario_id' => 1,
                'created_at' => '2023-09-21 20:12:46',
                'updated_at' => '2023-09-21 20:12:46',
            ],
            [
                'id' => 5,
                'nome' => 'Santos Motos',
                'estado' => 'alagoas',
                'cidade' => 'maceio',
                'bairro' => 'feitosa',
                'complemento' => 'nada',
                'rua' => 'Neymar',
                'cep' => '25364-747',
                'funcionario_id' => 1,
                'created_at' => '2023-09-21 20:13:11',
                'updated_at' => '2023-09-21 20:13:11',
            ],
            [
                'id' => 6,
                'nome' => 'Beto Motos',
                'estado' => 'alagoas',
                'cidade' => 'maceio',
                'bairro' => 'Barra',
                'complemento' => 'nada',
                'rua' => 'Neymar',
                'cep' => '25364-747',
                'funcionario_id' => 1,
                'created_at' => '2023-09-21 20:40:31',
                'updated_at' => '2023-09-21 20:40:31',
            ],
            [
                'id' => 7,
                'nome' => 'John Dream Motos',
                'estado' => 'alagoas',
                'cidade' => 'maceio',
                'bairro' => 'Barra',
                'complemento' => 'nada',
                'rua' => 'Neymar',
                'cep' => '25364-747',
                'funcionario_id' => 1,
                'created_at' => '2023-09-21 20:40:31',
                'updated_at' => '2023-09-21 20:40:31',
            ],
        ]);
    }
}

