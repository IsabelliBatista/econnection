<!DOCTYPE html>
<html lang="pt-BR">

<?php $title = "eConnection - Produtos sustentáveis"; ?>  
<?php require_once("assets/inc/head.php"); ?>

<body>
    <?php require_once("assets/inc/header.php"); ?>
  <main>
    <!-- BANNER COM CARROSSEL -->
    <section class="banner">
      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="assets/img/canudo-inox.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="assets/img/copo-retratil.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="assets/img/eco-bag.png" class="d-block w-100" alt="...">
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
    <!-- IMAGENS COM OS DESTAQUES -->
    <div class="destaques container div-destaques">
      <section class="mt-5 mb-5">
        <div class="d-flex justify-content-around">
          <img src="assets/img/takenaka-bento-box-yellow-sleeve_1_2048x2048.jpg">
          <img src="assets/img/takenaka-bento-box-yellow-sleeve_1_2048x2048.jpg">
          <img src="assets/img/takenaka-bento-box-yellow-sleeve_1_2048x2048.jpg">
        </div>
        <div class="d-flex justify-content-around">
          <img src="assets/img/takenaka-bento-box-yellow-sleeve_1_2048x2048.jpg">
          <img src="assets/img/takenaka-bento-box-yellow-sleeve_1_2048x2048.jpg">
          <img src="assets/img/takenaka-bento-box-yellow-sleeve_1_2048x2048.jpg">
        </div>
      </section>

    </div>

    <!-- CARD COM TEXTO QUEM SOMOS -->
    <div class="container p-5 ">
      <div class="row mt-2">
        <div class="col sm-6">
          <h2>Lorem title</h2>
          <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado.</p>
        </div>
        <div class="col sm-6">
          <img src="assets/img/eco.jpeg" class="card-home-img">
        </div>
      </div>
    </div>
  
    
    <!-- CARD PRODUTOS EM DESTAQUE -->
    <div class="container mt-5">
      <h1 class="text-uppercase text-bold text-center p-5"> 
        Destaques
      </h1>
    </div>  
    <section class="container mt-5 ">
        <div class="row row-cols-1 row-cols-md-3">
          <div class="col mb-4">
            <div class="card border-light h-100">
              <img src="assets/img/destaq-canudo.jpg" class="card-img-top" alt="Canudo" width="300" height="200">
              <div class="card-body">
                <h5 class="card-title">Produto</h5>
                <p class="card-text">This is a longer card with supporting text.</p>
                <a href="comprar.php" class="btn btn-outline-secondary">Detalhes</a>
                <a href="comprar.php" class="btn btn-outline-secondary">Comprar</a>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card border-light h-100">
                <img src="assets/img/destaq-canudo.jpg" class="card-img-top" alt="Canudo" width="300" height="200">
                <div class="card-body">
                  <h5 class="card-title">Produto</h5>
                  <p class="card-text">This is a longer card with supporting text.</p>
                  <a href="comprar.php" class="btn btn-outline-secondary">Detalhes</a>
                  <a href="comprar.php" class="btn btn-outline-secondary">Comprar</a>
                </div>
              </div>
          </div>
          <div class="col mb-4">
            <div class="card border-light h-100">
              <img src="assets/img/copo-black.png" class="card-img-top" alt="Copo Black" width="300" height="200">
              <div class="card-body">
                <h5 class="card-title">Produto</h5>
                <p class="card-text">This is a longer card with supporting text.</p>
                <a href="comprar.php" class="btn btn-outline-secondary">Detalhes</a>
                <a href="comprar.php" class="btn btn-outline-secondary">Comprar</a>
              </div>
            </div>
          </div>
    </section>
  </main>
    <?php require_once("assets/inc/footer.php"); ?>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>