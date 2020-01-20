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


        <table class="table table-hover">
            <thead>
            <tr>
                <th>Foto</th>
                <th>Nome</th>
                <th>Código</th>
                <th>Quantidade</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><img src="assets/img/canudo.jpg" alt="some text" width=60 height=40></td>
                <td>Copo</td>
                <td>123456</td>
                <td>55</td>
                <td><a class="btn btn-danger"><img src="assets/img/delete.png" title="Excluir"  width=20 height=20></a></td>
                <td><a class="btn btn-success"><img src="assets/img/add.png" title="Adicionar"  width=20 height=20></a></td>
                <td><a class="btn btn-primary"><img src="assets/img/update.png"  title="Alterar"  width=20 height=20></a></td>
            </tr>
            <tr>
                <td><img src="assets/img/canudo.jpg" alt="some text" width=60 height=40></td>
                <td>Canudo</td>
                <td>654321</td>
                <td>75</td>
                <td><a class="btn btn-danger"><img src="assets/img/delete.png" title="Excluir"  width=20 height=20></a></td>
                <td><a class="btn btn-success"><img src="assets/img/add.png" title="Adicionar" width=20 height=20></a></td>
                <td><a class="btn btn-primary"><img src="assets/img/update.png"  title="Alterar"  width=20 height=20></a></td>
            </tr>
            <tr>
                <td><img src="assets/img/canudo.jpg" alt="some text" width=60 height=40></td>
                <td>Barbear Clássico</td>
                <td>352654</td>
                <td>44</td>
                <td><a class="btn btn-danger"><img src="assets/img/delete.png" title="Excluir"  width=20 height=20></a></td>
                <td><a class="btn btn-success"><img src="assets/img/add.png" title="Adicionar"  width=20 height=20></a></td>
                <td><a class="btn btn-primary"><img src="assets/img/update.png" title="Alterar"  width=20 height=20></a></td>
            </tr>
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
