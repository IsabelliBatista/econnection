<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
  </head>
  <body>

    <?php $titulo = "Home";?>
    
    <!-- INCLUDE, continua rodando a pagina, so nao vai exibir a parte que estiver com erro. -->
    <?php include("header.php") ?> 

    <section>
      <h1>Pagina Home</h1>
    </section>
    <!-- REQUIRE, se tiver algum erro, a pagina toda nao é exibida -->
    <!-- REQUIRE_ONCE exibe apenas uma vez mesmo que o require esteja repidido-->
    <?php require_once("footer.php") ?>

  </body>
</html>