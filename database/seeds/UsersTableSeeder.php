<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {      
        User::create([
            'name' => 'Mary Smith',
            'email' => 'mary@email.com',
            'password' => bcrypt("123456789"),
            'cpf' => 12345678901,
            'telefone' => 1112341234,
            'data_nasc' => 1990-12-01 ,
            'sexo' => 'Feminino'
        ]);
    }
}
