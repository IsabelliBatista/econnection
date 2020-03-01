<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
    <meta property="og:image" content="assets/img/logo.png">

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

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <header>
        <div class="container-md d-flex justify-content-between mt-1 mb-1 div-header-itens">
          <div>
            <a class="logo-nav" href="index.php">
              <img src="assets/img/logo.png" alt="Logo eConnection">
            </a>
          </div>
          <div class="icons-nav">
            <form class="form-inline">
              <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Search">
              <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            </form>
            <span>
                <a href="login.php" class="p-2 text-reset"><i class="fas fa-user"></i></a>
                <a href="carrinho.php" class="p-2 text-reset"><i class="fas fa-shopping-cart"></i></a>    
            </span>
          </div>
        </div>
        
      
        <div>
          <nav class="navbar navbar-expand-lg">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
              <ul class="navbar-nav justify-content-around">
                <li class="nav-item  active">
                    <div class="dropdown">
                        <a class="btn text-white text-uppercase" href="./index.php">Início</a>
                    </div>
                </li>
                <li class="nav-item  active">
                    <div class="dropdown">
                        <a href="./quemsomos.php" class="btn text-white text-uppercase">Quem Somos</a>
                    </div>
                </li>
                <li class="nav-item  active">
                    <div class="dropdown">
                        <a href="./parceiros.php" class="btn text-white text-uppercase">Parceiros</a>
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

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
