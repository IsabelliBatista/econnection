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
				<input type="checkbox" value="remember-me"> Lembrar-me
				</label>
				
								<button type="button" class="btn btn-link btn-sm" data-toggle="modal" data-target="#ExemploModalCentralizado">Esqueci minha senha</button>

				<!-- Modal -->
				<div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="TituloModalCentralizado">Reset de Senha</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
					<div class="form-row">
		<div class="form-group col-md-8">
		  <label for="inputEmail4">Digite o Email Cadastrado </label>
		 <input type="email" class="form-control" id="inputEmail4" placeholder="Email"required>
		 <small id="passwordHelpInline" class="text-muted">Digite o mesmo cadastrado no site</small>
		</div>
		</div>
		

					</div>
					
						
						<button type="button" class="btn btn-success">Resetar Senha</button>
						
					
					</div>
				</div>
				</div>
				
		  
		  
		  <button class="btn btn-lg btn-success btn-block" type="submit">Entrar</button>
		  <button type="button" class="btn btn-link btn-sm" data-toggle="modal" data-target="#ExemploModal">Cadastre-se</button>
		 
		  <div class="modal fade" id="ExemploModal" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
           <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content">
           <div class="modal-header">
              <h5 class="modal-title" id="TituloModalCentralizado">Cadastro de Usuario</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                  <span aria-hidden="true">&times;</span>
               </button>
           </div>
             <div class="modal-body">
        

  
		
		
  
</form>
<form>
	<div class="form-row">
	<div class="form-group col-md-6">
		   <label for="inputNome4">Nome</label>
		   <input type="text" class="form-control" placeholder="Nome"required>
		</div>
		<div class="form-group col-md-6">
		   <label for="inputsobrenome4">Sobrenome</label>
		  <input type="text" class="form-control" placeholder="Sobrenome"required>
		</div>
	<div class="form-group col-md-5">
			<label for="inputcpf4">CPF</label>
			<input type="text" class="form-control" placeholder="CPF"required>
			</div>
		<div class="form-group col-md-7">
		  <label for="inputEmail4">Email</label>
		 <input type="email" class="form-control" id="inputEmail4" placeholder="Email"required>
		</div>
		<div class="form-group col-md-6">
		  <label for="inputPassword4">Senha</label>
		 <input type="password" class="form-control" id="inputPassword4" placeholder="Senha" required>
		  <small id="passwordHelpInline" class="text-muted">Deve ter entre 8 e 20 caracteres.</small>
		</div>
		<div class="form-group col-md-6">
		  <label for="inputPassword4">Repetir Senha</label>
		  <input type="password" class="form-control" id="inputPassword4" placeholder="Senha"required>
		 
		</div>
	</div>
</form>
   <div class="modal-footer">
        <button type="button" class="btn btn-success">Criar Usuario</button>
    </div>
</div>
 </div>
</div>

		  <p class="mt-4 mb-3 text-muted text-center">&copy; 2019-2020</p>
		</form>
    </div>




  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>