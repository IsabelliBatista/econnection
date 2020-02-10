<!doctype html>
<html lang="pt-br">
    
    <?php $title = "Lista de Produtos"; ?>  
    <?php require_once("assets/inc/head.php"); ?>

<body>
    <?php require_once("assets/inc/header.php"); ?>
    <article class="bg-header-somos"><h1 class="text-center container">Lista de Produtos</h1></article>
    
    <!-- CAMINHO DE PÁGINAS-->
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Lista de Produtos</li>
        </ol>
      </nav>

      <?php

      $produtos = [
        ['nome'=>'Copo','codigo'=>12345, 'quantidade' => 55, 'imagem'=>'./assets/img/canudo.jpg'],
        ['nome'=>'Canudo','codigo'=>54321, 'quantidade' => 75, 'imagem'=>'./assets/img/canudo.jpg'],
        ['nome'=>'Barbear Clássico','codigo'=>22222, 'quantidade' => 100,  'imagem'=>'./assets/img/canudo.jpg']
      ]

      ?>

      <table class="table">
        <thead>
          <tr>
            <th>Foto</th>
            <th>Nome</th>
            <th>Código</th>
            <th>Qtd.</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
        <?php foreach($produtos as $produto): ?>
          <tr>
            <td>
              <img
                src="<?php echo $produto['imagem']; ?>"
                alt="some text"
                width="60"
                height="40"
              />
            </td>
            <td><?php echo $produto['nome']; ?></td>
            <td><?php echo $produto['codigo']; ?></td>
            <td><?php echo $produto['quantidade']; ?></td>
            <td>
          
              <div class="space-button">
                <i class="fas fa-plus"></i>
                <i class="fas fa-pen"></i>
                <i class="fas fa-trash-alt"></i>
              </div>
              <div class="dropdown mobile-dropdown">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Adicionar</a>
                  <a class="dropdown-item" href="#">Alterar</a>
                  <a class="dropdown-item" href="#">Excluir</a>
                </div>
              </div>
              
            </td>
    
            
          </tr>
          <?php endforeach; ?>
          
        </tbody>
      </table>
</div>
        <?php require_once("assets/inc/footer.php"); ?>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
