<?php

use Illuminate\Database\Seeder;
use App\Marca;

class MarcaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Marca::create([
            "name" => "Paz em Gaia"
        ]);
        Marca::create([
            "name" => "Insecta Shoes"
        ]);
        Marca::create([
            "name" => "Eco Consumo"
        ]);
        Marca::create([
            "name" => "Ideia Crua"
        ]);
        Marca::create([
            "name" => "BeeGreen"
        ]);
        Marca::create([
            "name" => "Korui - Ciclos de Vida"
        ]);
        Marca::create([
            "name" => "Positiv.a"
        ]);
        Marca::create([
            "name" => "So Bags"
        ]);
        Marca::create([
            "name" => "Orgânico Natural"
        ]);
        Marca::create([
            "name" => "Menos 1 Lixo"
        ]);
    }
}
