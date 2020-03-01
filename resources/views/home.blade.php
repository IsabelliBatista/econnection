@extends('layouts.master')

@section('title')
  eConnection - Produtos sustentáveis
@endsection

@section('content')
<!-- BANNER COM CARROSSEL -->
<section class="banner">
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{asset ('/img/canudo-inox.jpg')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{asset ('/img/fundo1.jpg')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{asset ('/img/fundo3.jpg')}}" class="d-block w-100" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
  </div>
</section>

<!-- CARD COM EXPLICAÇÃO BREVE -->
<section class="container row row-cols-1 row-cols-md-3 home-section-card text-center mt-5 mb-5">
  <div class="col mb-4">
    <div class="card border-light h-100">
      <img src="{{asset ('/img/Produto1.jpg')}}" class="m-auto" alt="e-connection" width="100" height="100">
      <div class="card-body">
        <h5 class="card-title">Marketplace</h5>
        <p class="card-text">Somos um Marketplace de empresas sustentáveis</p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card border-light h-100">
      <img src="{{asset ('/img/Produto2.jpg')}}" class="m-auto" alt="e-connection"  width="100" height="100">
      <div class="card-body">
        <h5 class="card-title">Produtos Sustentáveis</h5>
        <p class="card-text">Fortaler as marcas e Divulgar produtos ecológicos</p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card border-light h-100">
      <img src="{{asset ('/img/Produto3.jpg')}}" class="m-auto" alt="e-connection"  width="100" height="100">
      <div class="card-body">
        <h5 class="card-title">Loja</h5>
        <p class="card-text">Encontre aqui uma loja perto de você</p>
      </div>
    </div>
  </div>
</section>

@endsection
