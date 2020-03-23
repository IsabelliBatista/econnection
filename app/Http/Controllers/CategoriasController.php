<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Produto;

class CategoriasController extends Controller
{
    protected function create(Request $request)
    {
        $categoria = Categoria::create([
            'name' => $request->input('name')
        ]);

        $categoria->save();

        return redirect('/adicionar/categoria');
    }
    public function listandoCategoria() 
    {
        $categoria = Categoria::all();
        return view('categorias.listarCategoria')->with('categoria', $categoria);
    }

    public function editarCategoria($id)
    {
        $categoria = Categoria::find($id);
        return view('categorias.editarCategoria')->with('categoria', $categoria);
    }

    public function atualizarCategoria(Request $request, $id) 
    {
        $categoria = Categoria::find($id);
        $categoria->update([
            'name' => $request->input('name')
        ]);

        $categoria = Categoria::all();
        return view('categorias.listarCategoria')->with('categoria', $categoria);
    }

    public function excluirCategoria($id)
    {
        $categoria = Categoria::find($id);
        $categoria->delete();

        $categoria = Categoria::all();
        return view('categorias.listarCategoria')->with('categoria', $categoria);

    }
}
