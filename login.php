<!DOCTYPE html>
<html lang="pt-BR">

<?php $title = "Login"; ?>  
<?php require_once("assets/inc/head.php"); ?>


<body class="login-body">
<div class="container div-group">
	<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
	    <li class="breadcrumb-item active" aria-current="page">Login</li>
	  </ol>
	</nav>
	<!-- <h3 class="text-center">Login</h3> -->
    	<form class="form-signin">
		  <img class="mb-5 ml-4" src="assets/img/logo.png" alt="">
		  <!-- <h3 class="h3 mb-3 font-weight-normal">Login</h3> -->
		  <label for="inputEmail" class="sr-only">Email</label>
		  <input type="email" id="inputEmail" class="form-control mb-2" placeholder="Email" required autofocus>
		  <label for="inputPassword" class="sr-only">Senha</label>
		  <input type="password" id="inputPassword" class="form-control mb-2" placeholder="Senha" required>
		  <div class="checkbox mb-3">
		    <label>
		      <input type="checkbox" value="remember-me"> Lembrar
		    </label>
		  </div>
		  <button class="btn btn-lg btn-success btn-block" type="submit">Entrar</button>
		  <p class="mt-4 mb-3 text-muted text-center">&copy; 2019-2020</p>
		</form>
    </div>




  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>