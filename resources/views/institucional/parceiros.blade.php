@extends('layouts.master')

@section('title')
    Parceiros - eConnection
@endsection

@section('content')
<article class="bg-header-somos"><h1 class="text-center container">Parceiros</h1></article>

<!-- CAMINHO DE PÁGINAS-->
<div class="container">
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/index">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Parceiros</li>
    </ol>
    </nav>
</div>
<section class="container mt-5 ">
    <div>
        <p class="text-center">Somos um Ecommerce de empresas sustentáveis</p>
    </div>
<div class="row row-cols-1 row-cols-md-3">
    <div class="col mb-4">
        <div class="card border-light h-100 text-center">
            <a href="https://ecoconsumo.com.br/"> <img src="{{asset ('/img/Parceiro1.jpg')}}" class="card-img-top" alt="Canudo" width="300" height="200"> </a>
            <div class="card-body">
            <h5 class="card-title">Produto</h5>
            <p class="card-text">Somos um Ecommerce de empresas sustentáveis</p>
            <a class="card-text" href="https://ecoconsumo.com.br/" target="_blank">https://ecoconsumo.com.br/</a>
            </div>
        </div>
    </div>
    <div class="col mb-4">
        <div class="card border-light h-100 text-center">
            <a href="https://www.pazemgaia.com.br/"> <img src="{{asset ('/img/Parceiro2.jpg')}}" class="card-img-top" alt="Canudo" width="300" height="200"> </a>
            <div class="card-body">
            <h5 class="card-title">Produto</h5>
            <p class="card-text">Somos um Ecommerce de empresas sustentáveis</p>
            <a class="card-text" href="https://www.pazemgaia.com.br/" target="_blank">https://www.pazemgaia.com.br/</a>
            </div>
        </div>
    </div>
    <div class="col mb-4">
        <div class="card border-light h-100 text-center">
            <a href="https://insectashoes.com/"> <img src="{{asset ('/img/Parceiro3.jpg')}}" class="card-img-top" alt="Canudo" width="300" height="200"> </a>
            <div class="card-body">
            <h5 class="card-title">Produto</h5>
            <p class="card-text">Somos um Ecommerce de empresas sustentáveis</p>
            <a class="card-text" href="https://insectashoes.com/" target="_blank">https://insectashoes.com/</a>
            </div>
        </div>
    </div>
</section>
<section class="container mt-5 mb-5">
<div class="row row-cols-1 row-cols-md-3">
    <div class="col mb-4">
        <div class="card border-light h-100 text-center">
            <a href="https://ecoconsumo.com.br/"> <img src="{{asset ('/img/Parceiro1.jpg')}}" class="card-img-top" alt="Canudo" width="300" height="200"> </a>
            <div class="card-body">
            <h5 class="card-title">Produto</h5>
            <p class="card-text">Somos um Ecommerce de empresas sustentáveis</p>
            <a class="card-text" href="https://ecoconsumo.com.br/" target="_blank">https://ecoconsumo.com.br/</a>
            </div>
        </div>
    </div>
    <div class="col mb-4">
        <div class="card border-light h-100 text-center">
            <a href="https://www.pazemgaia.com.br/"> <img src="{{asset ('/img/Parceiro2.jpg')}}" class="card-img-top" alt="Canudo" width="300" height="200"> </a>
            <div class="card-body">
            <h5 class="card-title">Produto</h5>
            <p class="card-text">Somos um Ecommerce de empresas sustentáveis</p>
            <a class="card-text" href="https://www.pazemgaia.com.br/" target="_blank">https://www.pazemgaia.com.br/</a>
            </div>
        </div>
    </div>
    <div class="col mb-4">
        <div class="card border-light h-100 text-center">
            <a href="https://insectashoes.com/"> <img src="{{asset ('/img/Parceiro3.jpg')}}" class="card-img-top" alt="Canudo" width="300" height="200"> </a>
            <div class="card-body">
            <h5 class="card-title">Produto</h5>
            <p class="card-text">Somos um Ecommerce de empresas sustentáveis</p>
            <a class="card-text" href="https://insectashoes.com/" target="_blank">https://insectashoes.com/</a>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container banner-card ser-parceiro">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset ('/img/fundo3.jpg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="mb-5">Seja Nosso Parceiro</h5>
                        <p class="mb-5">Clique aqui para saber mais</p>
                        <a href="/contato" class="btn btn-card mb-4">Saber Mais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form class="container">
        <div class="row mt-5">
            <div class="col">
                <input type="text" class="form-control" placeholder="Nome Empresa">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Email">
            </div>
            <button type="submit" class="btn btn-card mb-4">Entrar em Contato </button>
        </div>
    </form>
</section>

@endsection
