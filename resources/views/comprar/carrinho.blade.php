@extends('layouts.master')

@section('title')
    Carrinho - eConnection
@endsection

@section('content')
    <article class="bg-header-somos"><h1 class="text-center container">Pedidos</h1></article>
    
    <div class="container">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-5 ">
            <li class="breadcrumb-item"><a href="/index">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Pedidos</li>
          </ol>
        </nav>

      <div class="col-md-12 order-md-2 mb-4 m-auto mt-5">
        <div class="row">
          <div class="col-md-12 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
              <span class="text-muted">Seus Pedidos</span>
              <span class="badge badge-secondary badge-pill">1</span>
            </h4>
            <ul class="list-group mb-3">
              <li class="list-group-item d-flex justify-content-between lh-condensed">
                <div>
                  <h6 class="my-0">Produto nome</h6>
                </div>
                <span class="text-muted">R$12</span>
              </li>
              <li class="list-group-item d-flex justify-content-between">
                <span>Total</span>
                <strong>R$20</strong>
              </li>
            </ul>
        </div>
      </div>
@endsection