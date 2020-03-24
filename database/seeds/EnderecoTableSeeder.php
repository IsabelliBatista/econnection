<?php

use Illuminate\Database\Seeder;
use App\Endereco;

class EnderecoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Endereco::create([
            'rua' => 'Praça da Sé',
            'numero' => 10,
            'bairro' => 'Centro',
            'cidade' => 'São Paulo',
            'estado' => 'São Paulo',
            'cep' => 02124000,
            'complemento' => 'lado ímpar',
            'user_id' => 1,
        ]);
    }
}
