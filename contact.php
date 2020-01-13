<!doctype html>
<html lang="pt-br">
    
    <?php $title = "Contato"; ?>  
    <?php require_once("assets/inc/head.php"); ?>

<body>
    <?php require_once("assets/inc/header.php"); ?>
    <article class="bg-header-somos"><h1 class="text-center container">Contato</h1></article>
    <div class="container">
        <h2 class="text-center mt-5 mb-5">Fale Conosco</h2>
        <p class="text-center">Talvez a gente já tenha a resposta pra sua pergunta. <a href="FAQ.php">Dá uma olhadinha aqui.</a></p>
        <form class=" col-7 m-auto">
          <div class="form-group">
            <label for="exampleFormControlInput1">Nome</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nome">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Email</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Mensagem</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
           <button type="submit" class="btn btn-card mb-5">Enviar</button>
        </form>
        <p class="text-center">Caso prefira nos ligar, nosso número é: <a href="">(11) 3892 6715</a></p>
        <p class="text-center">Para assessoria de imprensa: <a href="">imprensa@insectashoes.com</a></p>
    </div>

    <?php require_once("assets/inc/footer.php"); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>