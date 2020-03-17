<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Categoria;
use App\Marca;


class ProdutosController extends Controller
{
//     public function listandoProdutos(){
//         $produtos = Produto::orderBy('id', 'ASC')->paginate(10);

//         return view('produto.listarProdutos')->with('produto', $produtos);
//     }

//     public function listandoCatalogo(){
//         $produtos = Produto::orderBy('titulo', 'ASC')->paginate(9);
//         $categorias = Categoria::all();

//         return view('catalogo')->with(['produtos' => $produtos, 'categorias' => $categorias]);
//     }

//     public function adicionandoProdutos(Request $request){
//         $produto = new Produto;
//         $produto = $request->all();
//         $marcas = Marca::orderBy('nome', 'ASC')->get();
//         $categorias = Categoria::orderBy('descricao', 'ASC')->get();

//         return view('produto.adicionando')->with(['marcas' => $marcas, 'categorias' => $categorias]);
//     }

//     public function salvandoProdutos(ProdutosRequest $request){
//         $request->all();

//         $arquivo = $request->file('imagem');
//         if (empty($arquivo)) {
//             $caminhoRelativo = null;
//         } else {
//             $arquivo->storePublicly('uploads');
//             $caminhoAbsoluto = public_path()."/storage/uploads";
//             $nomeArquivo = $arquivo->getClientOriginalName();
//             $caminhoRelativo = "storage/uploads/$nomeArquivo";
//             $arquivo->move($caminhoAbsoluto, $nomeArquivo);
//         }

//         $produto = Produto::create([
//             "titulo" => $request->input('titulo'),
//             "sinopse" => $request->input('sinopse'),
//             "imagem" => $caminhoRelativo,
//             "categoria_id" => $request->input('categoria'),
//             "id_protagonista" => $request->input('marca')
//         ]);

//         $produto->save();

//         return redirect('/produtos');
//     }

//     public function modificandoProdutos($id){
//         $produto = Produto::find($id);

//         $marcas = Marcas::orderBy('nome', 'ASC')->get();
//         $categorias = Categoria::orderBy('descricao', 'ASC')->get();

//         return view('produto.editando')->with(
//             ["produto" => $produto, "marcas" => $marcas, "categorias" => $categorias]
//         );
//     }

//     public function alterandoProdutos(ProdutosRequest $request, $id){
//         $produto = Produto::find($id);

//         $request->all();

//         $arquivo = $request->file('imagem');
//         if (empty($arquivo)) {
//             $caminhoRelativo = $produto->imagem;
//         } else {
//             $arquivo->storePublicly('uploads');
//             $caminhoAbsoluto = public_path()."/storage/uploads";
//             $nomeArquivo = $arquivo->getClientOriginalName();
//             $caminhoRelativo = "storage/uploads/$nomeArquivo";
//             $arquivo->move($caminhoAbsoluto, $nomeArquivo);
//         }

//         $produto->nome = $request->input('nome');
//         $produto->descricao = $request->input('descricao');
//         $produto->preco = $request->input('preco');
//         $produto->imagem = $caminhoRelativo;
//         $produto->marca_id = $request->input('marcas');
//         $produto->categoria_id = $request->input('categoria');

//         $produto->save();

//         return redirect('/produtos');
//     }

//     public function removendoProduto($id){
//         $produto = Produto::find($id);

//         $produto->delete();

//         return redirect('/produtos');
//     }

//     public function filtrarProdutos(Request $request){
//         $categorias = Categoria::all();

//         $search = $request->input('search');

//         $produtos = Produto::
//               where('titulo', 'like', '%'.$search.'%')
//               ->orWhere('sinopse', 'like', '%'.$search.'%')
//               ->paginate(9);

//         return view('catalogo')->with(['produtos' => $produtos, 'search' => $search, 'categorias' => $categorias]);
//     }
// }
    protected function create(Request $request)
    {

        $produtos = Produto::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'image' => $request->input('image'),
            'brand' => $request->input('brand'),    
            'category' => $request->input('category')
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