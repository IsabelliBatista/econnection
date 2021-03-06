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

    public function listarLoja() 
    {
        $marcas = Marca::all();
        $categorias = Categoria::all();
        $produtos = Produto::orderBy('id', 'ASC')->paginate(9);
        return view('produtos.loja')->with([
            'marcas' => $marcas, 
            'categorias' => $categorias, 
            'produtos' => $produtos]);
    }

    public function listarLojaIndex2() 
    {
        $produtos = Produto::orderBy('id', 'ASC')->paginate(3);
        return view('home')->with('produtos', $produtos);
    }

    public function listarLojaIndex() 
    {
        $produtos = Produto::orderBy('id', 'ASC')->paginate(3);
        return view('index')->with('produtos', $produtos);
    }

    public function listandoProduto() 
    {
        $produtos = Produto::all();
        return view('produtos.listarProdutos')->with('produtos', $produtos);
    }

    public function editarProduto($id)
    {
        $marca = Marca::all();
        $categoria = Categoria::all();
        $produtos = Produto::find($id);
        return view('produtos.editarProdutos')->with([
            'produtos' => $produtos, 
            'marcas' => $marca, 
            'categorias' => $categoria]);
    }

    public function atualizarProduto(Request $request, $id) 
    {
        $produtos = Produto::find($id);

        $arquivo = $request->file('image');

        if (empty($arquivo)) {
            $caminhoRelativo = $produtos->image;
        } else {
            $arquivo->storePublicly('uploads');
            $caminhoAbsoluto = public_path()."/storage/uploads";
            $nomeArquivo = $arquivo->getClientOriginalName();
            $caminhoRelativo = "storage/uploads/$nomeArquivo";
            $arquivo->move($caminhoAbsoluto, $nomeArquivo);
        }

        $produtos->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'image' => $caminhoRelativo,
            'marca_id' => $request->input('marca'),    
            'categoria_id' => $request->input('category')
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