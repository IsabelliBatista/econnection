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

Route::get('/finalCompras', function(){
    return view('comprar.finalCompras');
});

Route::get('/cadastrarUsuario', function(){
    return view('usuario.cadastrarUsuario');
});

Route::post('/cadastrarUsuario', 'UserController@create')->name('cadastrarUsuario');

//add categoria
Route::get('/adicionando', function(){
    return view('categorias.adicionando');
});

Route::post('/adicionando', 'CategoriasController@create')->name('adicionando');

//add marca
Route::get('/adicionando', function(){
    return view('marcas.adicionando');
});

Route::post('/adicionando', 'MarcasController@create')->name('adicionando');


Route::get('/listarUsuario', function(){
    return view('usuario.listarUsuario');
});

// Rotas dos Produtos

Route::get('/cadastrarProdutos', 'ProdutosController@pegarCategoriaMarca');
// return view('produtos.cadastrarProdutos');

Route::post('/cadastrarProdutos', 'ProdutosController@create')->name('produtos');

// Route::get('/listarProdutos', function(){
//     return view('produtos.listarProdutos');
// });

