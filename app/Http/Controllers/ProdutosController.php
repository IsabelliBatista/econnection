<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
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

        return redirect()->to('/cadastrarProdutos')->with('message', 'Produto cadastrado com sucesso!');

    }

    public function update(Request $request)
    {
        $path = $request->file('image')->store('image');

        return $path;
    }

    protected function pegarCategoriaMarca()
    {
        $marca = Marca::all();
        $categoria = Categoria::all();

        return view('produtos.cadastrarProdutos')->with(['marcas' => $marca, 'categorias' => $categoria]);
    }
}