<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/parceiros', function(){
    return view('institucional.parceiros');
});

Route::get('/quemsomos', function(){
    return view('institucional.quemsomos');
});

Route::get('/politica', function(){
    return view('institucional.politica');
});

Route::get('/contato', function(){
    return view('institucional.contato');
});

Route::get('/faq', function(){
    return view('institucional.faq');
});

Route::get('/carrinho', function(){
    return view('comprar.carrinho');
});


Route::get('/comprar', function(){
    return view('comprar.comprar');
});

Route::get('/checkout', function(){
    return view('comprar.checkout');
});

Route::get('/loja', function(){
    return view('produtos.loja');
});
Route::get('/cadastrarProdutos', function(){
    return view('produtos.cadastrarProdutos');
});

Route::get('/listarProdutos', function(){
    return view('produtos.listarProdutos');
});

Route::get('/cadastrarUsuario', function(){
    return view('usuario.cadastrarUsuario');
});
Route::post('/cadastrarUsuario', 'UserController@create')->name('user');



// Cátalogo de Produtos
Route::get('/catalogo', 'ProdutosController@listandoCatalogo')->name('catalogo');
Route::get('/catalogo/categoria/{id}', 'CategoriaController@listandoProdutoPorCategoria');

// Filtrar Produto
Route::get('/filtrar-produtos', 'ProdutosController@filtrarProduto')->name('search');


Route::middleware(['auth'])->group(function (){
    // Listar Produtos
    Route::get('/produtos', 'ProdutosController@listarProdutos')->name('produtos');

    // Adicionar Produto
    Route::get('/produtos/adicionar', 'ProdutosController@cadastrarProdutos')->name('produtos-adicionar');
    Route::post('/produtos/adicionar', 'ProdutosController@salvandoProduto');

    // Modificando produto
    Route::get('/produtos/modificar/{id}', 'ProdutosController@modificandoProduto');
    Route::put('/produtos/modificar/{id}', 'ProdutosController@alterandoProduto');

    // Excluindo produto
    Route::delete('/produtos/remover/{id}', 'ProdutoController@removendoProduto');

    // Listar Gêneros
    Route::get('/categorias', 'CategoriaController@listandocategorias')->name('categorias');

     // Adicionar Gênero
    Route::get('/categorias/adicionar', 'CategoriaController@adicionandoCategoria')->name('categorias-adicionar');
    Route::post('/categorias/adicionar', 'CategoriaController@salvandoCategoria');

    // Modificando Gênero
    Route::get('/categorias/modificar/{id}', 'CategoriaController@modificandoCategoria');
    Route::put('/categorias/modificar/{id}', 'CategoriaController@alterandoCategoria');

    // Excluindo Produto
    Route::delete('/categoria/remover/{id}', 'CategoriaController@removendoCategoria');

    


    // Listar marcas
    Route::get('/marcas', 'MarcaController@listandoMarcas')->name('marcas');

    // Adicionar marca
    Route::get('/marcas/adicionar', 'MarcaController@adicionandoMarca')->name('marcas-adicionar');
    Route::post('/marcas/adicionar', 'MarcaController@salvandoMarca');

    // Modificando marca
    Route::get('/marcas/modificar/{id}', 'MarcaController@modificandoMarca');
    Route::put('/marcas/modificar/{id}', 'MarcaController@alterandoMarca');

    // Excluindo marca
    Route::delete('/marcas/remover/{id}', 'MarcaController@removendoMarca');


});