<!DOCTYPE html>
<html lang="pt-BR">

<?php $title = "eConnection - Produtos sustentáveis"; ?>  
<?php require_once("assets/inc/head.php"); ?>

<body>
    <?php require_once("assets/inc/header.php"); ?>
  <header>
    <!-- BANNER COM CARROSSEL -->
    <section class="banner">
      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="assets/img/canudo-inox.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="assets/img/fundo1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="assets/img/fundo3.jpg" class="d-block w-100" alt="...">
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

</header>
<main>
  <!-- CARD COM EXPLICAÇÃO BREVE -->
  <section class="container row row-cols-1 row-cols-md-3 home-section-card text-center mt-5 mb-5">
    <div class="col mb-4">
      <div class="card border-light h-100">
        <img src="assets/img/itens1.png" class="m-auto image-card" alt="e-connection" width="100" height="100">
        <div class="card-body">
          <h5 class="card-title">Marketplace</h5>
          <p class="card-text">Somos um Marketplace de empresas sustentáveis</p>
        </div>
      </div>
    </div>
    <div class="col mb-4">
      <div class="card border-light h-100">
        <img src="assets/img/itens2.png" class="m-auto" alt="e-connection"  width="100" height="100">
        <div class="card-body">
          <h5 class="card-title">Produtos Sustentáveis</h5>
          <p class="card-text">Fortaler as marcas e Divulgar produtos ecológicos</p>
        </div>
      </div>
    </div>
    <div class="col mb-4">
      <div class="card border-light h-100">
        <img src="assets/img/itens3.png" class="m-auto" alt="e-connection"  width="100" height="100">
        <div class="card-body">
          <h5 class="card-title">Loja</h5>
          <p class="card-text">Encontre aqui uma loja perto de você</p>
        </div>
      </div>
    </div>
  </section>
  
  <!-- CARD PRODUTOS --> 
  <div class="card-produtos">
    <section class="container mt-5 ">
        <h2 class="text-bold mt-5 mb-5"> 
          Conheça nossos produtos
        </h2>
        <div class="row row-cols-1 row-cols-md-3">
          <div class="col mb-4">
            <div class="card border-light h-100 text-center">
              <img src="assets/img/Produto1.jpg" class="card-img-top" alt="Canudo" width="300" height="200">
              <div class="card-body">
                <h5 class="card-title">Produto</h5>
                <p class="card-text txt-preco">R$ 10,00</p>
                <a href="comprar.php" class="btn btn-card">Ver detalhes</a>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card border-light h-100 text-center">
              <img src="assets/img/Produto2.jpg" class="card-img-top" alt="Canudo" width="300" height="200">
              <div class="card-body">
                <h5 class="card-title">Produto</h5>
                <p class="card-text txt-preco">R$ 10,00</p>
                <a href="comprar.php" class="btn btn-card">Ver detalhes</a>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card border-light h-100 text-center">
              <img src="assets/img/Produto3.jpg" class="card-img-top" alt="Canudo" width="300" height="200">
              <div class="card-body">
                <h5 class="card-title">Produto</h5>
                <p class="card-text txt-preco">R$ 10,00</p>
                <a href="comprar.php" class="btn btn-card">Ver detalhes</a>
              </div>
            </div>
          </div>
    </section>
    <section class="container mt-5 mb-5">
        <div class="row row-cols-1 row-cols-md-3">
          <div class="col mb-4">
              <div class="card border-light h-100 text-center">
                <img src="assets/img/Produto4.jpg" class="card-img-top" alt="Canudo" width="300" height="200">
                <div class="card-body">
                  <h5 class="card-title">Produto</h5>
                  <p class="card-text txt-preco">R$ 10,00</p>
                  <a href="comprar.php" class="btn btn-card">Ver detalhes</a>
                </div>
              </div>
            </div>
            <div class="col mb-4">
            <div class="card border-light h-100 text-center">
              <img src="assets/img/Produto5.jpg" class="card-img-top" alt="Canudo" width="300" height="200">
              <div class="card-body">
                <h5 class="card-title">Produto</h5>
                <p class="card-text txt-preco">R$ 10,00</p>
                <a href="comprar.php" class="btn btn-card">Ver detalhes</a>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card border-light h-100 text-center">
              <img src="assets/img/Produto6.jpg" class="card-img-top" alt="Canudo" width="300" height="200">
              <div class="card-body">
                <h5 class="card-title">Produto</h5>
                <p class="card-text txt-preco">R$ 10,00</p>
                <a href="comprar.php" class="btn btn-card">Ver detalhes</a>
              </div>
            </div>
          </div>
    </section>

    <!--BANNER-->
    <div class="container banner-card">
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/img/banner1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/img/banner2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/img/banner3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/img/banner4.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
<!--PARCEIROS-->
    <section class="container mt-5 ">
        <h2 class="text-bold mt-5 mb-5"> 
          Alguns Parceiros
        </h2>
        <div class="row row-cols-1 row-cols-md-3">
          <div class="col mb-4">
            <div class="card border-light h-100 text-center">
              <img src="assets/img/Parceiro1.jpg" class="card-img-top" alt="Canudo" width="300" height="200">
              <div class="card-body">
                <h5 class="card-title">Produto</h5>
                <a href="parceiros.php" class="btn btn-card">Ver Mais</a>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card border-light h-100 text-center">
              <img src="assets/img/Parceiro2.jpg" class="card-img-top" alt="Canudo" width="300" height="200">
              <div class="card-body">
                <h5 class="card-title">Produto</h5>
                <a href="parceiros.php" class="btn btn-card">Ver Mais</a>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card border-light h-100 text-center">
              <img src="assets/img/Parceiro3.jpg" class="card-img-top" alt="Canudo" width="300" height="200">
              <div class="card-body">
                <h5 class="card-title">Produto</h5>
                <a href="parceiros.php" class="btn btn-card">Ver Mais</a>
              </div>
            </div>
          </div>
      </section>
    </div>

  </main>
    <?php require_once("assets/inc/footer.php"); ?>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>