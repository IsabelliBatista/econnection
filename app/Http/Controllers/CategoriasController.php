<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Produto;

class CategoriasController extends Controller
{
    protected function create(Request $request)
    {
        $category = Categoria::create([
            'name' => $request->input('name')
        ]);

        $category->save();

        return redirect('/adicionandoC');
    }
    public function listandoCategoria() 
    {
        $category = Categoria::all();
        //dd($category);
        return view('categorias.listandoC')->with('category', $category);
    }

    public function editarCategoria()
    {
        $category = Categoria::all();
        return view('categorias.listandoC')->with('category', $category);
    }

    public function atualizarCategoria(Request $request, Categoria $category) 
    {
        $category->update([
            'name' => $request->input('name')
        ]);
        
        return view('categorias.listandoC')->with('category', $category);

    }
}
