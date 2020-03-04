<!doctype html>
<html lang="pt-BR">
<head>
  <!-- Configurações como characters, viewport, cache... -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge"> <!-- Compativel com o IE -->
  <meta http-equiv="Cache-control" content="public">
  <meta name="revisit-after" content="1 year">

  <!-- Meta título e descrição para crawlers (SEO) e mídias (Open Graph, utilizado pelo Facebook, Whatsapp...) -->
  <meta name="title" content="eConnection">
  <meta name="description" content="Ecommerce de produtos sustentáveis por geolocalização">
  <meta name="abstract" content="Ecommerce de produtos sustentáveis">
  <meta property="og:site_name" content="Grupo JIMI - Projeto Digital House">
  <meta property="og:locale" content="pt-BR">
  <meta name="og:locality" content="São Paulo">
  <meta name="og:region" content="SP">
  <meta name="og:country-name" content="BR">
  <meta property="og:type" content="website">
  <meta property="og:image" content="public/img/logo.png">

  <!-- Indica se deve ou não ser indexado e 'seguido' pelos mecanismos de busca. Há um arquivo para isso também, o robots.txt. -->
  <meta name="robots" content="index,follow">

  <!-- Meta sobre a autoria do site -->
  <meta name="author" content="Ingrid, Isabelli, Joyce, Mayara ">
  <meta name="copyright" content="JIMI group">
  <meta name="web_author" content="JIMI group">

  <!-- Meta para baixar o site para o celular (web app, um 'semi-app' - NÃO é o PWA - Progressive Web Application) -->
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-title" content="eConnection">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <link rel="shortcut icon" sizes="60x60" href="assets/img/logo.png">

  <!-- Favicon - Validar caminho da imagem-->
  <link rel="icon" type="image/png" sizes="60x60" href="assets/img/favicon.png">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title')</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans&display=swap" rel="stylesheet">

  <!-- Estilo do Foundation -->
  <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">

  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  
  <!-- Estilo Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- Styles -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body>
  <header>
    {{-- Barra do topo --}}
    <div class="container-md d-flex justify-content-between mt-1 mb-1 div-header-itens">
      <div>
        <a class="logo-nav" href="index.php">
          <img src="{{ asset('img/logo.png') }}" alt="Logo eConnection">
        </a>
      </div>
      <div class="icons-nav">
        <form class="form-inline">
          <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Search">
          <button class="btn" type="submit"><i class="fas fa-search"></i></button>
        </form>
        <span>
          <a href="#login" class="p-2 text-reset" data-toggle="modal" data-target="#login"><i class="fas fa-user"></i></a>
          <a href="/carrinho" class="p-2 text-reset"><i class="fas fa-shopping-cart"></i></a>    
        </span>
      </div>
    </div>

    {{-- Menu de navegação --}}
    <div>
      <nav class="navbar navbar-expand-lg">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
          <ul class="navbar-nav justify-content-around">
            <li class="nav-item  active">
              <div class="dropdown">
                <a class="btn text-white text-uppercase" href="/">Início</a>
              </div>
            </li>
            <li class="nav-item  active">
              <div class="dropdown">
                <a href="/quemsomos" class="btn text-white text-uppercase">Quem Somos</a>
              </div>
            </li>
            <li class="nav-item  active">
              <div class="dropdown">
                <a href="/parceiros" class="btn text-white text-uppercase">Parceiros</a>
              </div>
            </li>
            <li class="nav-item  active">
              <div class="dropdown">
                <button class="btn dropdown-toggle text-white text-uppercase" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Casa
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Composteira Residencial</a>
                  <a class="dropdown-item" href="#">Limpeza Ecológica</a>
                  <a class="dropdown-item" href="#">Rotina Sustentável</a>
                </div>
              </div>
            </li>
            <li class="nav-item ">
              <div class="dropdown">
                <button class="btn dropdown-toggle text-white text-uppercase" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Cuidados 
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Cabelos</a>
                  <a class="dropdown-item" href="#">Barbear Clássico</a>
                  <a class="dropdown-item" href="#">Higiene Bucal</a>
                </div>
              </div>
            </li>
            <li class="nav-item ">
              <div class="dropdown">
                <button class="btn dropdown-toggle text-white text-uppercase" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  100 Plástico
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Canudos e Copos Reutilizáveis</a>
                  <a class="dropdown-item" href="#">Ecobags, Kit Hortifruti e Compras a granel</a>
                  <a class="dropdown-item" href="#">Kits Lixo Zero</a>
                </div>
              </div>        
            </li>
            <li class="nav-item ">
              <div class="dropdown">
                <button class="btn dropdown-toggle text-white text-uppercase" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Acessórios
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Acessórios para Yoga e Meditação</a>
                  <a class="dropdown-item" href="#">Brinquedos Educativos</a>
                  <a class="dropdown-item" href="#">Decoração</a>
                </div>
              </div> 
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </header>

  {{-- Modal de login --}}
  <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Fazer Login:</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            @csrf
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Digite seu email.">
            </div>
            <div class="form-group">
              <label for="senha">Senha:</label>
              <input type="password" class="form-control" id="senha" placeholder="Digite sua senha.">
              <button type="button" class="btn btn-link btn-sm" data-dismiss="modal" data-toggle="modal" data-target="#lembrarSenha">Esqueci minha senha</button>
            </div>
          </form>
        </div>
        <button class="btn btn-link btn-sm" data-dismiss="modal" data-toggle="modal" data-target="#cadastro">Não possui cadastro? Cadastre-se!</button>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          <button type="button" class="btn btn-success">Login</button>
        </div>
      </div>
    </div>
  </div>

  {{-- Modal de cadastro --}}
  <div class="modal fade" id="cadastro" tabindex="-1" role="dialog" aria-labelledby="cadastro" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Fazer cadastro: </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            @csrf
            <div class="form-group">
              <label for="nomeCliente">Nome Completo:</label>
              <input type="text" class="form-control" id="nomeCliente" aria-describedby="nomeCliente" placeholder="Digite seu nome completo.">
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Digite seu email.">
            </div>
            <div class="form-group">
              <label for="senha">Senha:</label>
              <input type="password" class="form-control" id="senha" placeholder="Digite sua senha.">
              <small id="passwordHelpInline" class="text-muted">Senha deve ter entre 8 e 20 caracteres.</small>
            </div>
          </form>
        </div>     
        <button class="btn btn-link btn-sm" data-dismiss="modal" data-toggle="modal" data-target="#login">Já possui cadastro? Faça login!</button>   
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          <button type="button" class="btn btn-success">Cadastrar</button>
        </div>
      </div>
    </div>
  </div>

  {{-- Modal de Esqueci minha senha --}}
  <div class="modal fade" id="lembrarSenha" tabindex="-1" role="dialog" aria-labelledby="lembrarSenha" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Não lembra sua senha?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              @csrf
              <div class="form-group">
                <label for="email">Digite seu email:</label>
                <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Digite seu email.">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#login">Login</button> 
            <button type="submit" class="btn btn-success">Redefinir senha</button>
          </div>
        </div>
      </div>
  </div>

  {{-- Conteúdo principal --}}
    <main>
        @yield('content')
    </main>
  </div>

  {{-- Rodapé da página --}}
  <footer class="footer text-white mt-5">
    <div class="container p-3">
      <h4 class="text-center mt-2 mb-3">RECEBA NOSSAS OFERTAS E NOVIDADES POR E-MAIL.</h4>
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Digite seu e-mail aqui." aria-label="Recipient's username" aria-describedby="button-addon2">
        <div class="input-group-append">
          <button class="btn btn-outline-secondary" type="button" id="button-addon2">ASSINE</button>
        </div>
      </div>
    </div>
    <div class="container pb-1">
      <div class="row">
        <div class="col-sm">
          <h6 class="text-uppercase mb-3">Categorias</h6>
          <p><a href="#" class="text-white-50">Casa</a></p>
          <p><a href="#" class="text-white-50">Cuidados</a>
          <p><a href="#" class="text-white-50">100Plástico</a>
          <p><a href="#" class="text-white-50">Acessórios</a>
        </div>
        <div class="col-sm">
          <h6 class="text-uppercase mb-3">Ajuda</h6>
          <p><a href="/faq" class="text-white-50">Dúvidas Frequentes</a></p>
          <p><a href="/contato" class="text-white-50">Atendimento</a></p>
          <p><a href="#" class="text-white-50">Mapa do Site</a></p>
          <p><a href="#" class="text-white-50">Glossário da Sustentabilidade</a></p>
        </div>
        <div class="col-sm">
          <h6 class="text-uppercase mb-3">eConnection</h6>
          <p><a href="/quemsomos" class="text-white-50">Sobre nós</a></p>
          <p><a href="#" class="text-white-50">Institucional</a></p>
          <p><a href="/parceiros" class="text-white-50">Seja nosso parceiro</a></p>
          <p><a href="/politica" class="text-white-50">Políticas de troca e devoluções</a></p>
          </div>
        <div class="col-sm">
          <h6 class="text-uppercase mb-3">Social</h6>
          <a href="#" class="p-2 text-reset"><i class="fab fa-facebook"></i></a>
          <a href="#" class="p-2 text-reset"><i class="fab fa-twitter"></i></a>    
          <a href="#" class="p-2 text-reset"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
    </div>
    <div class="footer-copy"><p class="p-copy">© 2020 E-Connection. Todos os direitos reservados</p></div>
  </footer>

  {{-- Scripts --}}
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>

