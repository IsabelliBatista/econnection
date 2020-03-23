<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Produto;
use App\Categoria;
use App\Marca;

class ProdutosController extends Controller
{
        
    protected function pegarCategoriaMarca()
    {
        $marca = Marca::all();
        $categoria = Categoria::all();
        
        return view('produtos.cadastrarProdutos')->with(['marcas' => $marca, 'categorias' => $categoria]);
    }

    protected function create(Request $request)
    {
        $arquivo = $request->file('image');
        if (empty($arquivo)) {
            $caminhoRelativo = null;
        } else {
            $arquivo->storePublicly('uploads');
            $caminhoAbsoluto = public_path()."/storage/uploads";
            $nomeArquivo = $arquivo->getClientOriginalName();
            $caminhoRelativo = "storage/uploads/$nomeArquivo";
            $arquivo->move($caminhoAbsoluto, $nomeArquivo);
        }

        $produtos = Produto::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'image' => $caminhoRelativo,
            'marca_id' => $request->input('marca'),    
            'categoria_id' => $request->input('category')
        ]);
    
        $produtos->save();

        return redirect()->to('/listar/produtos')->with('message', 'Produto cadastrado com sucesso!');

    }
    
    public function update(Request $request)
    {
        $path = $request->file('image')->store('image');

        return $path;
    }
    public function listandoProduto() 
    {
        $produtos = Produto::all();
        return view('produtos.listarProdutos')->with('produtos', $produtos);
    }

    public function editarProduto($id)
    {
        $produtos = Produto::find($id);
        return view('produtos.editarProdutos')->with('produtos', $produtos);
    }

    public function atualizarProduto(Request $request, $id) 
    {
        $produtos = Produto::find($id);
        $produtos->update([
            'name' => $request->input('name')
        ]);

        $produtos = Produto::all();
        return view('produtos.listarProdutos')->with('produtos', $produtos);
    }

    public function excluirProduto($id)
    {
        $produtos = Produto::find($id);
        $produtos->delete();

        $produtos = Produto::all();
        return view('produtos.listarProdutos')->with('produtos', $produtos);

    }
    public function filtrarProduto(Request $request){
        $categoria = Produto::all();

        $search = $request->input('search');

        $marca = Produto::
              where('name', 'like', '%'.$search.'%')
              ->orWhere('descricao', 'like', '%'.$search.'%')
              ->paginate(2);

        return view('catalogo')->with(['marca' => $marca, 'search' => $search, 'categoria' => $categoria]);
    }
}