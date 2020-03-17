<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Categoria;
use App\Marca;


class ProdutosController extends Controller
{
    protected function create(Request $request)
    {

        $produtos = Produto::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'image' => $request->input('image'),
            'marca_id' => $request->input('marca'),    
            'categoria_id' => $request->input('category')
        ]);

        $produtos->save();

        return redirect('/home');
    }
    public function update(Request $request)
    {
        $path = $request->file('image')->store('image');

        return $path;
    }
}