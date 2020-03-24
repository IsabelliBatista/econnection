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
                <th scope="col">Endereço</th>
                <th scope="col">Estado</th>
                <th scope="col">Cidade</th>
                <th scope="col">Método de Pagamento</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                        <td id="username"></td>
                        <td id="address"></td>
                        <td id="addresse"></td>
                        <td id="addresses"></td>
                        <td id="option"></td>
                    </tr>
                <tr>
            </tbody>
        </table>
    </div>
<script>
    let infos = JSON.parse(localStorage.getItem("Infos"));

    document.getElementById('username').innerHTML = infos.nome;
    document.getElementById('address').innerHTML = infos.endereco;
    document.getElementById('addresse').innerHTML = infos.estado;
    document.getElementById('addresses').innerHTML = infos.cidade;
    document.getElementById('option').innerHTML = infos.metodo;

    
</script>
@endsection