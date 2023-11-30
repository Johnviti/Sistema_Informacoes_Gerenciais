<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
            [
                'id' => 1,
                'nome' => 'Carlos José',
                'email' => 'jose@gmail.com',
                'cpf' => '78665',
                'telefone' => '68596969',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 2,
                'nome' => 'Tainá Miranda',
                'email' => 'tainaferreira23@outlook.com',
                'cpf' => '252.647.585-96',
                'telefone' => '(83) 74848-4888',
                'created_at' => '2023-09-14 17:31:16',
                'updated_at' => '2023-09-14 17:31:16',
            ],
            [
                'id' => 3,
                'nome' => 'Felipe Leo',
                'email' => 'tainaferreira23@outlook.com',
                'cpf' => '252.647.585-96',
                'telefone' => '(83) 74848-4888',
                'created_at' => '2023-09-21 20:40:54',
                'updated_at' => '2023-09-21 20:40:54',
            ],
            [
                'id' => 4,
                'nome' => 'John Victor',
                'email' => 'johnviti@outlook.com',
                'cpf' => '133.647.585-96',
                'telefone' => '(83) 88888-4888',
                'created_at' => '2023-09-21 20:40:54',
                'updated_at' => '2023-09-21 20:40:54',
            ],
        ]);
    }
}
