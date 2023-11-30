<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FornecedoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fornecedor')->insert([
            [
                'id' => 1,
                'nome' => 'Motos Pereira Ltda.',
                'email' => 'motospereira@gmail.com',
                'cpf_cnpj' => '12345678901',
                'cep' => '25364-747',
                'telefone' => '83748484888',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 2,
                'nome' => 'Miranda Motos S.A.',
                'email' => 'mirandamotos@email.com',
                'cpf_cnpj' => '23456789012',
                'cep' => '94848',
                'telefone' => '68596969',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 3,
                'nome' => 'Fornecedora de Peças Silva',
                'email' => 'fornecedorasilva@email.com',
                'cpf_cnpj' => '34567890123',
                'cep' => '66666-666',
                'telefone' => '1234567890',
                'created_at' => null,
                'updated_at' => null,
            ],
        ]);
    }
}
