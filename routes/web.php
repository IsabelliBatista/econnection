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
    return view('comprar.comprar');
});


Route::get('/comprar', function(){
    return view('comprar.comprar');
});

Route::get('/checkout', function(){
    return view('comprar.checkout');
});

Route::get('/loja', function(){
    return view('produto.loja');
});
Route::get('/cadastrarProdutos', function(){
    return view('produtos.cadastrarProdutos');
});

Route::get('/listarProdutos', function(){
    return view('listarProdutos');
});

Route::get('/cadastrarUsuario', function(){
    return view('usuario.cadastrarUsuario');
});
Route::post('/cadastrarUsuario', 'UserController@create')->name('user');



// Cátalogo de Filmes
Route::get('/catalogo', 'FilmeController@listandoCatalogo')->name('catalogo');
Route::get('/catalogo/genero/{id}', 'GeneroController@listandoFilmesPorGenero');

// Filtrar Filme
Route::get('/filtrar-filmes', 'FilmeController@filtrarFilme')->name('search');

// Usuários Logados
Auth::routes();

Route::middleware(['auth'])->group(function (){
    // Listar Filmes
    Route::get('/filmes', 'FilmeController@listandoFilmes')->name('filmes');

    // Adicionar Filme
    Route::get('/filmes/adicionar', 'FilmeController@adicionandoFilme')->name('filmes-adicionar');
    Route::post('/filmes/adicionar', 'FilmeController@salvandoFilme');

    // Modificando Filme
    Route::get('/filmes/modificar/{id}', 'FilmeController@modificandoFilme');
    Route::put('/filmes/modificar/{id}', 'FilmeController@alterandoFilme');

    // Excluindo Filme
    Route::delete('/filmes/remover/{id}', 'FilmeController@removendoFilme');

    // Excluindo Filme
    Route::delete('/generos/remover/{id}', 'GeneroController@removendoGenero');



});