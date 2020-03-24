@extends('layouts.master')

@section('title')
  Logado eConnection - Produtos sustentáveis
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
    <div class="card border-white h-100">
      <img src="{{asset ('/img/itens1.png')}}" class="m-auto" alt="e-connection" id="image-card">
      <div class="card-body">
        <h5 class="card-title">Ecommerce</h5>
        <p class="card-text">Somos um Ecommerce de empresas sustentáveis</p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card border-white h-100">
      <img src="{{asset ('/img/itens2.png')}}" class="m-auto" alt="e-connection"  width="100" height="100">
      <div class="card-body">
        <h5 class="card-title">Produtos Sustentáveis</h5>
        <p class="card-text">Fortaler as marcas e Divulgar produtos ecológicos</p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card border-white h-100">
      <img src="{{asset ('/img/itens3.png')}}" class="m-auto" alt="e-connection"  width="100" height="100">
      <div class="card-body">
        <h5 class="card-title">Loja</h5>
        <p class="card-text">Encontre aqui uma loja perto de você</p>
      </div>
    </div>
  </div>
</section>

<!-- CARD PRODUTOS --> 
<section class="card-produtos">
  <div class="container mt-5 ">
      <h2 class="text-bold mt-5 mb-5"> 
        Conheça nossos produtos
      </h2>
  </div>
  {{-- Primeira seção de produtos --}}
  <section class="container mt-5 mb-5">
    <div class="row row-cols-1 row-cols-md-3">
      <div class="col mb-4">
        <div class="card border-light h-100 text-center">
          <img src="{{asset ('/img/Produto1.jpg')}}" class="card-img-top" alt="Canudo" width="300" height="200">
          <div class="card-body">
            <h5 class="card-title">Produto</h5>
            <p class="card-text txt-preco">R$ 10,00</p>
            <a href="comprar.php" class="btn btn-card">Ver detalhes</a>
          </div>
        </div>
      </div>
      <div class="col mb-4">
        <div class="card border-light h-100 text-center">
          <img src="{{asset ('/img/Produto3.jpg')}}" class="card-img-top" alt="Canudo" width="300" height="200">
          <div class="card-body">
            <h5 class="card-title">Produto</h5>
            <p class="card-text txt-preco">R$ 10,00</p>
            <a href="comprar.php" class="btn btn-card">Ver detalhes</a>
          </div>
        </div>
      </div>
      <div class="col mb-4">
        <div class="card border-light h-100 text-center">
          <img src="{{asset ('/img/Produto2.jpg')}}" class="card-img-top" alt="Canudo" width="300" height="200">
          <div class="card-body">
            <h5 class="card-title">Produto</h5>
            <p class="card-text txt-preco">R$ 10,00</p>
            <a href="comprar.php" class="btn btn-card">Ver detalhes</a>
          </div>
        </div>
      </div>
    </div>
    <div class="card-body btn-ver-mais">
      <a href="/loja" class="btn btn-card col-3 ">Ver Mais</a>
    </div>
  </section>
  
<!--PARCEIROS-->
<section class="container mt-5 ">
  <h2 class="text-bold mt-5 mb-5"> 
    Alguns Parceiros
  </h2>
  <div class="row row-cols-1 row-cols-md-3">
    <div class="col mb-4">
      <div class="card border-white h-100 text-center">
        <img src="{{asset ('/img/Parceiro1.jpg')}}" class="card-img-top" alt="Canudo" width="300" height="200">
        <div class="card-body">
          <h5 class="card-title">Produto</h5>
          <a href="/parceiros" class="btn btn-card">Ver Mais</a>
        </div>
      </div>
    </div>
    <div class="col mb-4">
      <div class="card border-white h-100 text-center">
        <img src="{{asset ('/img/Parceiro2.jpg')}}" class="card-img-top" alt="Canudo" width="300" height="200">
        <div class="card-body">
          <h5 class="card-title">Produto</h5>
          <a href="/parceiros" class="btn btn-card">Ver Mais</a>
        </div>
      </div>
    </div>
    <div class="col mb-4">
      <div class="card border-white h-100 text-center">
        <img src="{{asset ('/img/Parceiro3.jpg')}}" class="card-img-top" alt="Canudo" width="300" height="200">
        <div class="card-body">
          <h5 class="card-title">Produto</h5>
          <a href="/parceiros" class="btn btn-card">Ver Mais</a>
        </div>
      </div>
    </div>
</section>
</div>

@endsection
