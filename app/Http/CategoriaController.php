<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Filme;

class CategoriaController extends Controller
{
    public function listandoCategorias(){
        $categorias = Categoria::orderBy('id', 'ASC')->paginate(10);

        return view('categoria.listando')->with('categorias', $categorias);
    }

    public function adicionandoCategoria(){
        return view('categoria.adicionando');
    }

    public function salvandoCategoria(Request $request){
        $request->validate([
            "descricao" => "required|max:50"
        ]);

        $categoria = Categoria::create([
            "descricao" => $request->input('descricao')
        ]);

        $categoria->save();

        return redirect('/categorias');
    }

    public function modificandoCategoria($id){
        $categoria = Categoria::find($id);

        return view('categoria.editando')->with('categoria', $categoria);
    }

    public function alterandoCategoria(Request $request, $id){
        $categoria = Categoria::find($id);

        $request->validate([
            "descricao" => "required|max:50"
        ]);

        $categoria->descricao = $request->input('descricao');

        $categoria->save();

        return redirect('/categorias');
    }

    public function removendoCategoria($id){
        $categoria = Categoria::find($id);

        $categoria->delete();

        return redirect('/categorias');
    }

    public function listandoFilmesPorCategoria($id){
        $categorias = Categoria::all();
        $categoriaEscolhido = Categoria::find($id);
        $produtos = Produto::where('categoria_id', '=', $id)->paginate(10);

        return view('catalogo')->with(['categorias' => $categorias, 'categoriaEscolhido' => $categoriaEscolhido, 'produtos' => $produtos]);
    }
}
