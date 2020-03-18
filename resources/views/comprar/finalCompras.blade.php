@extends('layouts.master')

@section('title')
    Final - eConnection
@endsection

@section('content')
    <article class="bg-header-somos"><h1 class="text-center container">Final</h1></article>
    
    <div class="container">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-5 ">
            <li class="breadcrumb-item"><a href="/index">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Carrinho</li>
          </ol>
        </nav>
        <div class="py-3 text-center">
            <h2>Você finalizou o seu Pedido</h2>
            <p class="lead">Parabéns, aguarde seu pedido chegar!</p>
        </div>

        <table class="table">
            <thead>
                <tr>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Endereço</th>
                <th scope="col">Estado</th>
                <th scope="col">Cidade</th>
                <th scope="col">Método de Pagamento</th>
                <th scope="col">Nome cartão</th>
                <th scope="col">Número cartão</th>
                <th scope="col">Validade</th>
                <th scope="col">CVV</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                        <td id="username"></td>
                        <td id="email"></td>
                        <td id="address"></td>
                        <td id="addresse"></td>
                        <td id="addresses"></td>
                        <td id="option"></td>
                        <td id="cc-name"></td>
                        <td id="cc-number"></td>
                        <td id="cc-expiration"></td>
                        <td id="cc-cvv"></td>
                    </tr>
                <tr>
            </tbody>
        </table>
    </div>
<script>
    let infos = JSON.parse(localStorage.getItem("Infos"));

    document.getElementById('username').innerHTML = infos.nome;
    //document.getElementById('email').innerHTML = infos.email;
    document.getElementById('address').innerHTML = infos.endereco;
    document.getElementById('addresse').innerHTML = infos.estado;
    document.getElementById('addresses').innerHTML = infos.cidade;
    document.getElementById('option').innerHTML = infos.metodo;
    document.getElementById('cc-name').innerHTML = infos.nomecard;
    document.getElementById('cc-number').innerHTML = infos.numcard;
    document.getElementById('cc-expiration').innerHTML = infos.val;
    document.getElementById('cc-cvv').innerHTML = infos.cvv;

    
</script>
@endsection