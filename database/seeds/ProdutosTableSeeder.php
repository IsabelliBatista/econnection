<?php

use Illuminate\Database\Seeder;
use App\Produto;

class ProdutosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produto::create([
            'name' => 'KIT Eco Copo e Talheres',
            'description' => 'KIT Eco Copo e Talheres' ,
            'price' =>  '30',
            'image' => 'storage/uploads/Copo-Produto1.jpg',
            'marca_id' => 1,    
            'categoria_id' => 3
        ]);
        Produto::create([
            'name' => 'Shampoo Biodegrádavel',
            'description' => 'Shampoo Biodegrádavel sem sal',
            'price' =>  '20',
            'image' => 'storage/uploads/Cabelo-Produto1.jpg',
            'marca_id' => 4,    
            'categoria_id' => 2
        ]);
        Produto::create([
            'name' => 'Escova Dental de Bambu',
            'description' => 'KIT Eco Copo e Talheres' ,
            'price' =>  '10',
            'image' => 'storage/uploads/Dental-Produto3.jpg',
            'marca_id' => 9,    
            'categoria_id' => 2
        ]);
        Produto::create([
            'name' => 'Eco Copo Retratil',
            'description' => 'Eco Copo Retratil' ,
            'price' =>  '30',
            'image' => 'storage/uploads/Copo-Produto3.jpg',
            'marca_id' => 1,    
            'categoria_id' => 3
        ]);
        Produto::create([
            'name' => 'Sabonete Orgânico',
            'description' => 'Sabonete Orgânico e biodegradavel' ,
            'price' =>  '5',
            'image' => 'storage/uploads/Sabonete-Produto1.jpg',
            'marca_id' => 9,    
            'categoria_id' => 2
        ]);
        Produto::create([
            'name' => 'Toalha de algodão orgânico',
            'description' => 'Toalha de algodão orgânico' ,
            'price' =>  '25',
            'image' => 'storage/uploads/Toalha-Produto3.jpg',
            'marca_id' => 7,    
            'categoria_id' => 1
        ]);
        Produto::create([
            'name' => 'Tapete de Yoga Azul',
            'description' => 'Tapete de Yoga Azul' ,
            'price' =>  '35',
            'image' => 'storage/uploads/Produto5.jpg',
            'marca_id' => 1,    
            'categoria_id' => 4
        ]);
        Produto::create([
            'name' => 'KIT Eco Copo e Talheres',
            'description' => 'KIT Eco Copo e Talheres' ,
            'price' =>  '30',
            'image' => 'storage/uploads/Copo-Produto1.jpg',
            'marca_id' => 1,    
            'categoria_id' => 3
        ]);
        Produto::create([
            'name' => 'Shampoo Biodegrádavel',
            'description' => 'Shampoo Biodegrádavel sem sal',
            'price' =>  '20',
            'image' => 'storage/uploads/Cabelo-Produto1.jpg',
            'marca_id' => 4,    
            'categoria_id' => 2
        ]);
        Produto::create([
            'name' => 'Escova Dental de Bambu',
            'description' => 'KIT Eco Copo e Talheres' ,
            'price' =>  '10',
            'image' => 'storage/uploads/Dental-Produto3.jpg',
            'marca_id' => 9,    
            'categoria_id' => 2
        ]);
        Produto::create([
            'name' => 'Eco Copo Retratil',
            'description' => 'Eco Copo Retratil' ,
            'price' =>  '30',
            'image' => 'storage/uploads/Copo-Produto3.jpg',
            'marca_id' => 1,    
            'categoria_id' => 3
        ]);
        Produto::create([
            'name' => 'Sabonete Orgânico',
            'description' => 'Sabonete Orgânico e biodegradavel' ,
            'price' =>  '5',
            'image' => 'storage/uploads/Sabonete-Produto1.jpg',
            'marca_id' => 9,    
            'categoria_id' => 2
        ]);
        Produto::create([
            'name' => 'Toalha de algodão orgânico',
            'description' => 'Toalha de algodão orgânico' ,
            'price' =>  '25',
            'image' => 'storage/uploads/Toalha-Produto3.jpg',
            'marca_id' => 7,    
            'categoria_id' => 1
        ]);
        Produto::create([
            'name' => 'Tapete de Yoga Azul',
            'description' => 'Tapete de Yoga Azul' ,
            'price' =>  '35',
            'image' => 'storage/uploads/Produto5.jpg',
            'marca_id' => 1,    
            'categoria_id' => 4
        ]);
    }
}
