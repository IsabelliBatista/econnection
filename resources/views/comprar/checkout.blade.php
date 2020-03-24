@extends('layouts.master')

@section('title')
  Checkout - eConnection
@endsection


@section('content')
  <article class="bg-header-somos">
    <h1 class="text-center pt-5 container">Checkout</h1>
  </article>
  <div class="container">
    <!-- CAMINHO DE PÁGINAS-->
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/index">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Checkout</li>
      </ol>
    </nav>
    <div class="col-md-12 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Seu carrinho</span>
        <span class="badge badge-secondary badge-pill">1</span>
      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">KIT Eco Copo e Talheres</h6>
          </div>
          <span class="text-muted">R$30</span>
        </li>
        <li class="list-group-item d-flex justify-content-between">
          <span>Total</span>
          <strong>R$30</strong>
        </li>
      </ul>
    </div>
    <div class="col-md-12">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Identificação</span>
      </h4>
      <form class="needs-validation" action="/finalCompras" novalidate>
        <div class="row">
        </div>

        <div class="mb-3">
          <label for="username">Nome Completo:</label>
          <div class="input-group">
            <input type="text" class="form-control" id="username" required>
            <div class="invalid-feedback" style="width: 100%;">
              Your username is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="email">Email:</label>
          <input type="text" class="form-control" id="email" required>
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>

        <div class="mb-3">
          <label for="address">Endereço:</label>
          <input type="text" class="form-control" id="address" required>
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="address">Estado</label>
            <input type="text" class="form-control" id="addresse" required>
            <div class="invalid-feedback">
              Please enter your shipping address.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="address">Cidade</label>
            <input type="text" class="form-control" id="addresses" required>
            <div class="invalid-feedback">
              Please enter your shipping address.
            </div>
          </div>
        </div>

        <hr class="mb-4">

        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-muted">Pagamento</span>
        </h4>

        <div class="form-check form-check-inline mb-3 mt-2 justify-content-center">
          <div class="custom-control custom-radio">
            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
            <label class="custom-control-label" for="credit">Cartão de Crédito</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="debit">Cartão de Debito</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="paypal">PayPal</label>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="cc-name">Nome cartão</label>
            <input type="text" class="form-control" id="cc-name" placeholder="" required>
            <small class="text-muted">Full name as displayed on card</small>
            <div class="invalid-feedback">
              Name on card is required
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="cc-number">Número cartão</label>
            <input type="text" class="form-control" id="cc-number" placeholder="" required>
            <div class="invalid-feedback">
              Credit card number is required
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="cc-expiration">Validade</label>
            <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
            <div class="invalid-feedback">
              Expiration date required
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="cc-cvv">CVV</label>
            <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
            <div class="invalid-feedback">
              Security code required
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <button type="button" class="btn btn-success btn-lg btn-block" onClick="setLocalStorage()">Finalizar</button>
      </form>
    </div>

  </div>

<script>
    function setLocalStorage(){
      debugger;
      var nome = document.getElementById('username').value;
      var email = document.getElementById('email').value;
      var end = document.getElementById('address').value;
      var estado = document.getElementById('addresse').value;
      var cidade = document.getElementById('addresses').value;

      var metodo;

      let input = document.getElementById('credit');
      let input2 = document.getElementById('debit');
      let input3 = document.getElementById('paypal');

      if(input.checked)
        metodo = "Cartão de Crédito";
      
      if(input2.checked)
        metodo = "Cartão de Debito";
      
      if(input3.checked)
        metodo = "PayPal";
      
      var nomecard = document.getElementById('cc-name').value;
      var numcard = document.getElementById('cc-number').value;
      var val = document.getElementById('cc-expiration').value;
      var cvv = document.getElementById('cc-cvv').value;

      let jDados = {
            "nome": nome,
            "email": email,
            "endereco": end,
            "estado": estado,
            "cidade": cidade,
            "metodo": metodo,
        };

      let validation = document.getElementById('save-info');
        
    //console.log(JSON.stringify(jDados));
    localStorage.setItem("Infos", JSON.stringify(jDados));
    window.location.href = "/finalCompras"; 
    }
</script>
@endsection