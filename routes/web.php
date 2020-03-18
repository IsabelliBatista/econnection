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

Route::get('/final/Compras', function(){
    return view('comprar.finalCompras');
});

//Rotas do Usuario
Route::get('/cadastrarUsuario', function(){
    return view('usuario.cadastrarUsuario');
});

Route::post('/cadastrarUsuario', 'UserController@create')->name('cadastrarUsuario');

//add categoria
Route::get('/adicionandoC', function(){
    return view('categorias.adicionandoC');
});

Route::post('/adicionandoC', 'CategoriasController@create')->name('adicionandoC');

//add marca
Route::get('/adicionandoM', function(){
    return view('marcas.adicionandoM');
});

Route::post('/adicionandoM', 'MarcasController@create')->name('adicionandoM');


Route::get('/listarUsuario', function(){
    return view('usuario.listarUsuario');
});

Route::post('/listar/Usuario', 'UserController@alterandoUsuario')->name('alterandoUsuario');



// Rotas dos Produtos

Route::get('/cadastrarProdutos', 'ProdutosController@pegarCategoriaMarca');

Route::post('/cadastrarProdutos', 'ProdutosController@create')->name('produtos');

// Route::get('/listarProdutos', function(){
//     return view('produtos.listarProdutos');
// });

