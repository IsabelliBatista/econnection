<?php

use Illuminate\Database\Seeder;

class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create([
        "name" => "Casa"
        ]);

        Categoria::create([
        "name" => "Cuidados"
        ]);

        Categoria::create([
        "name" => "100Plástico"
        ]);
        Categoria::create([
        "name" => "Acessórios"
        ]);
    }
}
