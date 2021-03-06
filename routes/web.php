<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|phploaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Rotas Guest
//Route::get('/loja', 'ProdutosController@listarLoja');

Route::get('/', 'ProdutosController@listarLojaIndex');
Route::get('/index', 'ProdutosController@listarLojaIndex');
Route::get('/home', 'ProdutosController@listarLojaIndex');

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

Route::get('/finalCompras', function(){
    return view('comprar.finalCompras');
});

//Rotas do Cadastro do Usuario
Route::get('/cadastrarUsuario', function(){
    return view('usuario.cadastrarUsuario');
});

//Listar Produtos
Route::get('/loja', 'ProdutosController@listarLoja');


// Filtrar 
Route::get('/filtrar/produtos', 'ProdutosController@filtrarProduto')->name('search');


Route::post('/cadastrarUsuario', 'UserController@create')->name('cadastrarUsuario');

Auth::routes();

Route::middleware(['auth'])->group(function (){
    
    Route::get('home', 'HomeController@index')->name('home');

    //Rotas do Usuario
    Route::get('/listar/usuario','UserController@listandoUsuario');
    Route::get('/editar/usuario','UserController@editarUsuario');
    Route::put('/editar/usuario','UserController@atualizarUsuario');

    //Rotas Categorias
    Route::get('/adicionar/categoria', function(){
        return view('categorias.adicionarCategoria');
    });
    Route::post('/adicionar/categoria', 'CategoriasController@create');
    Route::get('/listar/categoria','CategoriasController@listandoCategoria');
    Route::get('/editar/categoria/{id}','CategoriasController@editarCategoria');
    Route::put('/editar/categoria/{id}','CategoriasController@atualizarCategoria');
    Route::delete('/excluir/categoria/{id}','CategoriasController@excluirCategoria');

    //Rotas Produtos
    Route::get('/cadastrar/produtos', 'ProdutosController@pegarCategoriaMarca');
    Route::post('/cadastrar/produtos', 'ProdutosController@create');

    Route::get('/listar/produtos','ProdutosController@listandoProduto');
    Route::get('/editar/produtos/{id}','ProdutosController@editarProduto');
    Route::put('/editar/produtos/{id}','ProdutosController@atualizarProduto');
    Route::delete('/excluir/produtos/{id}','ProdutosController@excluirProduto');

    //Rotas Marcas
    Route::get('/adicionar/marca', function(){
        return view('marcas.adicionarMarca');
    });
    Route::post('/adicionar/marca', 'MarcasController@create')->name('adicionarMarca');
    Route::get('/listar/marca','MarcasController@listandoMarca');
    Route::get('/editar/marca/{id}','MarcasController@editarMarca');
    Route::put('/editar/marca/{id}','MarcasController@atualizarMarca');
    Route::delete('/excluir/marca/{id}','MarcasController@excluirMarca');

    
});

    
Route::get('/minha-conta', function(){
    return view('minhaConta');
});

Route::get('/minha-conta?type=pedidos', function(){
    return view('minhaConta');
});

