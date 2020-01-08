<!doctype html>
<html lang="pt-br">
    
    <?php $title = "eConnection - Produtos sustentáveis"; ?>  
    <?php require_once("assets/inc/head.php"); ?>

<body>
    <?php require_once("assets/inc/header.php"); ?>
    <main>
        <!-- NOME E PREÇO DO PRODUTO-->
        <div class="container-sm">
            <!-- CAMINHO DE PÁGINAS-->
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Quem Somos</li>
                </ol>
              </nav>

            <div class="container-fluid col mb-2  text-center">
                <h2 class="mt-5 mb-5">Copo Sustentavel Diversas Cores</h2>
                <h3>R$ 0,00</h3>
            </div>
            <!-- IMAGENS DOS PRODUTOS-->
            <div class="mt-2 ml-2 float-left">
                <div id="#carouselExampleControls" class="carousel slide" data-ride="carousel"  style= "width: 500px; height:400px; margin: 0 auto">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/img/copo-black.png" class="rounded float-right" alt="Copo Black" width="500" height="400">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/copo-pink.jpg" class="rounded float-right" alt="Copo Pink" width="500" height="400">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/copo-yellow.jpg" class="rounded float-right" alt="Copo Yellow" width="500" height="400">
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
        <!-- DESCRIÇÃO DO PRODUTO -->
            <div class="container col mb-2  text-justify col-8">
                <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado.</p>
                <div class="form-inline col-sm-2 my-1">
                    <div class="form-group mt-2 mb-2">   
                        <label for="cor" class="mr-3">Escolha a Cor:   </label>
                        <select class="form-control" id="cor">
                            <option>Preto</option>
                            <option>Azul</option>
                            <option>Rosa</option>
                            <option>Amarelo</option>
                            <option>Verde</option>
                            <option>Vermelho</option>
                        </select>
                    </div>
                </div>
                <div class="input row col-sm-3 my-1">
                    <div class="input-group-prepend ">
                        <span class="input-group-text"><i class="fas fa-truck"></i></span>
                        <input type="text" class="form-control" aria-label="CEP"placeholder="Informe seu CEP">
                    </div>
                </div>
                <a href="#" class="btn btn-success mt-3">Adicionar ao carrinho<br><i class="fas fa-shopping-cart"></i></a> 
            </div>
                <!-- MAPA -->
            <div class="container mt-5">
                <div class="container map-responsive">
                    <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        
        <!-- CARD PRODUTOS EM DESTAQUE -->
        <div class=" card border-light h-100">
        <h2 class="text-bold text-center p-5"> 
            Produtos Similares
        </h2>
        </div>  
        <section class="container mt-4">
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>