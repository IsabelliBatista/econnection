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
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                <tr>
            </tbody>
        </table>
    </div>
@endsection