<?php

use Illuminate\Database\Seeder;

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
            'cep' => 02124000,
            'estado' => 'São Paulo',
            'complemento' => 'lado ímpar',
            'user_id' => 1,
        ]);
    }
}
