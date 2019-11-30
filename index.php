<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <!-- Configurações como characters, viewport, cache... -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> <!-- Compativel com o IE -->
    <meta http-equiv="Cache-control" content="public">
    <meta name="revisit-after" content="1 year">
    
    <!-- Meta título e descrição para crawlers (SEO) e mídias (Open Graph, utilizado pelo Facebook, Whatsapp...) -->
    <meta name="title" content="eConnection">
    <meta name="description" content="Ecommerce de produtos sustentáveis por geolocalização">
    <meta name="abstract" content="Template Boostrap Customizado">
    <meta property="og:site_name" content="Grupo JIMI - Projeto Digital House">
    <meta property="og:locale" content="pt-BR">
    <meta name="og:locality" content="São Paulo">
    <meta name="og:region" content="SP">
    <meta name="og:country-name" content="BR">
    <meta property="og:type" content="website">
    <meta property="og:image" content="assets/img/logo.png">
    
    <!-- Indica se deve ou não ser indexado e 'seguido' pelos mecanismos de busca. Há um arquivo para isso também, o robots.txt. -->
    <meta name="robots" content="index,follow">

    <!-- Meta sobre a autoria do site -->
    <meta name="author" content="Ingrid, Isabelli, Joyce, Mayara ">
    <meta name="copyright" content="JIMI">
    <meta name="web_author" content="JIMI">

    <!-- Meta para baixar o site para o celular (web app, um 'semi-app' - NÃO é o PWA - Progressive Web Application) -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="eConnection">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="shortcut icon" sizes="60x60" href="assets/img/logo.png">

    <!-- Favicon (imagem que fica na aba do navegador) -->
    <link rel="icon" type="image/png" sizes="60x60" href="assets/img/logo.png">
    
    <!-- Título da aba do navegador -->
    <title>eConnection | Produtos Sustentáveis</title>
    
    <!-- Estilo Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <!-- Estilo FontAweomse -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Nosso estilo -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
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

    <!-- CARD COM TEXTO QUEM SOMOS -->
    <section class="container mt-5">         
      <article class="container d-flex align-content-center">
          <div class="sm-6">
            <h2>Lorem title</h2>
            <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado.</p>
          </div class="sm-6">
          <img src="assets/img/eco.jpeg" >
        </article>
      </section>
    
    <!-- CARD PRODUTOS EM DESTAQUE -->
    <div class="container mt-5">
      <h1 class="text-uppercase text-bold text-center p-5"> 
        Destaques
      </h1>
    </div>  
    <section class="container mt-5">
        <div class="row row-cols-1 row-cols-md-3">
          <div class="col mb-4">
            <div class="card border-light h-100">
              <img src="assets/img/destaq-canudo.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Produto</h5>
                <p class="card-text">This is a longer card with supporting text.</p>
                <a href="#" class="btn btn-outline-secondary">Detalhes</a>
                <a href="#" class="btn btn-outline-secondary">Comprar</a>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card border-light h-100">
                <img src="assets/img/destaq-canudo.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Produto</h5>
                  <p class="card-text">This is a longer card with supporting text.</p>
                  <a href="#" class="btn btn-outline-secondary">Detalhes</a>
                  <a href="#" class="btn btn-outline-secondary">Comprar</a>
                </div>
              </div>
          </div>
          <div class="col mb-4">
            <div class="card border-light h-100">
              <img src="assets/img/destaq-canudo.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Produto</h5>
                <p class="card-text">This is a longer card with supporting text.</p>
                <a href="#" class="btn btn-outline-secondary">Detalhes</a>
                <a href="#" class="btn btn-outline-secondary">Comprar</a>
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