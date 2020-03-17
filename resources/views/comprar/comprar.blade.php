@extends('layouts.master')

@section('title')
  Comprar - eConnection
@endsection

@section('content')
<main>
  <article class="bg-header-somos"><h1 class="text-center container">Comprar</h1></article>
  
  <div class="container-sm">
      <!-- CAMINHO DE PÁGINAS-->
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Quem Somos</li>
          </ol>
        </nav>


  <div class="section-comprar">
      <section class="mb-5 section-comprar float-sm-left">
          <!-- IMAGENS DOS PRODUTOS-->
          <div>
              <div class="mt-2 ml-2">
                  <div id="#carouselExampleControls" class="carousel slide carousel-slide" data-ride="carousel">
                      <div class="carousel-inner">
                          <div class="carousel-item active">
                              <img src="{{asset ('/img/prodAmostra1.jpg')}}" class="rounded img-amostra " alt="Copo Black" width="400" height="400">
                          </div>
                          <div class="carousel-item">
                              <img src="{{asset ('/img/prodAmostra2.jpg')}}" class="rounded " alt="Copo Pink" width="400" height="400">
                          </div>
                          <div class="carousel-item">
                              <img src="{{asset ('/img/prodAmostra3.jpg')}}" class="rounded " alt="Copo Yellow" width="400" height="400">
                          </div>
                          <div class="carousel-item">
                              <img src="{{asset ('/img/prodAmostra4.jpg')}}" class="rounded " alt="Copo Yellow" width="400" height="400">
                          </div>
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                      </a>
                  </div>           
              </div>
          </div>
      </section>

      <section class="d-flex desc-prod">
          <div class="desc-produto">
              <!-- DESCRIÇÃO DO PRODUTO -->
              <h2>COPO SUSTENTAVEL DIVERSAS CORES</h2>
              <h2>R$ 0,00</h2>
              <p class="text-justify">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, 
                  como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado.</p>
              <div>
                  <div class="form-group col-md-5">
                    <select id="cor" class="form-control">
                      <option selected>Escolha a Cor:</option>
                      <option>Preto</option>
                      <option>Azul</option>
                      <option>Rosa</option>
                      <option>Amarelo</option>
                      <option>Verde</option>
                      <option>Vermelho</option>
                    </select>
                  </div> 
              </div>
              <div>
                  <div class="col-auto">
                    <label class="sr-only" for="inlineFormInputGroup">CEP</label>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-truck"></i></span>
                      </div>
                      <input type="text" class="form-control col-5" id="inlineFormInputGroup" placeholder="Informe o CEP">
                    </div>
                  </div>
              </div>
              <a href="#" class="btn btn-success mt-3 col-6">Adicionar ao carrinho<br><i class="fas fa-shopping-cart"></i></a> 
          </div>
      </section>
  </div> 

  <!-- CARD COM EXPLICAÇÃO BREVE -->
    <section class="container row row-cols-1 row-cols-md-3 home-section-card text-center mt-5 mb-5">
      <div class="col mb-4">
        <div class="card border-light h-100">
          <img src="{{asset ('/img/itens1.png')}}" class="m-auto" alt="e-connection" width="100" height="100">
          <div class="card-body">
            <h5 class="card-title">Marketplace</h5>
            <p class="card-text">Somos um Marketplace de empresas sustentáveis</p>
          </div>
        </div>
      </div>
      <div class="col mb-4">
        <div class="card border-light h-100">
          <img src="{{asset ('/img/itens2.png')}}" class="m-auto" alt="e-connection"  width="100" height="100">
          <div class="card-body">
            <h5 class="card-title">Produtos Sustentáveis</h5>
            <p class="card-text">Fortaler as marcas e Divulgar produtos ecológicos</p>
          </div>
        </div>
      </div>
      <div class="col mb-4">
        <div class="card border-light h-100">
          <img src="{{asset ('/img/itens3.png')}}" class="m-auto" alt="e-connection"  width="100" height="100">
          <div class="card-body">
            <h5 class="card-title">Loja</h5>
            <p class="card-text">Encontre aqui uma loja perto de você</p>
          </div>
        </div>
      </div>
    </section>

          <!-- MAPA -->
      <div class="container mt-5">
          <div class="container map-responsive">
              <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
      </div>
  </div>

  
  <!-- CARD PRODUTOS EM DESTAQUE -->
  <section class="container mt-5 ">
      <h2 class="text-bold p-5"> 
          Produtos Similares
      </h2>
      <div class="row row-cols-1 row-cols-md-3">
        <div class="col mb-4">
          <div class="card border-light h-100 text-center">
            <img src="{{asset ('/img/Produto1.jpg')}}" class="card-img-top" alt="Canudo" width="300" height="200">
            <div class="card-body">
              <h5 class="card-title">Produto</h5>
              <p class="card-text txt-preco">R$ 10,00</p>
              <a href="/comprar.php" class="btn btn-card">Ver detalhes</a>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card border-light h-100 text-center">
            <img src="{{asset ('/img/Produto2.jpg')}}" class="card-img-top" alt="Canudo" width="300" height="200">
            <div class="card-body">
              <h5 class="card-title">Produto</h5>
              <p class="card-text txt-preco">R$ 10,00</p>
              <a href="/comprar.php" class="btn btn-card">Ver detalhes</a>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card border-light h-100 text-center">
            <img src="{{asset ('/img/Produto3.jpg')}}" class="card-img-top" alt="Canudo" width="300" height="200">
            <div class="card-body">
              <h5 class="card-title">Produto</h5>
              <p class="card-text txt-preco">R$ 10,00</p>
              <a href="/comprar.php" class="btn btn-card">Ver detalhes</a>
            </div>
          </div>
        </div>
  </section>
</main>
@endsection