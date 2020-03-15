<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CadastrarProdutosController extends Controller
{
    public function index(){
        $produtos = Produto::all();

        return view('listarProdutos')->with('produtos', $produtos);
    }

    // retornando formulario para criar filmes
    public function create(){
        return view('cadastrarProdutos');
    }

    // criando registro na tabela filmes
    public function store(Request $request){
        $request->validate([
            'nome' => 'required',
            'descricao' => 'required',
            'preco' => 'required',
            'marca' => 'required',
            'imagem' => 'required',
            'categoria' => 'required'
        ]);

        Produto::create([
            'nome' => $request->input('nome'),
            'descricao' => $request->input('descricao'),
            'preco' => $request->input('preco'),
            'marca' => $request->input('marca'),
            'imagem' => 'caminho_imagem',
            'categoria' => $request->input('categoria'),
        ]);

        return redirect('/listarProdutos');
    }

    //retornando formulario para editar filmes
    public function edit($id){
        $produtos = Produto::find($id);

        return view('editaProduto')->with('produtos', $produtos);
    }

    // alterando filme
    public function update(Request $request, $id){
        $request->validate([
            'nome' => 'required',
            'descricao' => 'required',
            'preco' => 'required',
            'marca' => 'required',
            'imagem' => 'required',
            'categoria' => 'required'
        ]);

        $produtos = Produto::find($id);

        $produtos->nome = $request->input('nome');
        $produtos->descricao = $request->input('descricao');
        $produtos->preco = $request->input('preco');
        $produtos->marca = $request->input('marca');
        $produtos->imagem = $request->input('imagem');
        $produtos->categoria = $request->input('categoria');

        $produtos->save();

        return redirect('/listarProdutos');
    }
 
    // excluindo filme
    public function delete($id){
        $produtos = Produto::find($id);

        $cadastrarprodutos->delete();

        return redirect('/listarProdutos');
    }    
}
