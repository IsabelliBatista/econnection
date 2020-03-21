@extends('layouts.master')

@section('title')
  Cadastro - eConnection
@endsection

@section('content')
  <div class="container mt-2">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-2">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Perfil</li>
      </ol>
    </nav>
    <ul class="nav nav-tabs" id="meuPerfilTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="info-tab" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="true">Dados Pessoais</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="endereco-tab" data-toggle="tab" href="#endereco" role="tab" aria-controls="endereco" aria-selected="false">Endereco</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pedidos-tab" data-toggle="tab" href="#pedidos" role="tab" aria-controls="pedidos" aria-selected="false">Pedidos</a>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      {{-- Tab Dados Pessoais --}}
      <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info-tab">
        <div class="form-row">
          <div class="col">
            <label for="inputEmail4">Nome</label>
            <input type="text" class="form-control" placeholder="First name">
          </div>
          <div class="col">
            <label for="inputEmail4">Sobrenome</label>
            <input type="text" class="form-control" placeholder="Last name">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">CPF:</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Telefone</label>
            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
          </div>
        </div>
        <div class="form-row">
          <div class="col">
            <label for="inputEmail4">Nome</label>
            <input type="text" class="form-control" placeholder="First name">
          </div>
          <div class="col">
            <label for="inputEmail4">Sobrenome</label>
            <input type="text" class="form-control" placeholder="Last name">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Password</label>
            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
          </div>
        </div>
      </div>

      {{-- Tab Endereco --}}
      <div class="tab-pane fade" id="endereco" role="tabpanel" aria-labelledby="endereco-tab">
        <div class="form-group">
          <label for="inputAddress">Address</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="form-group">
          <label for="inputAddress2">Address 2</label>
          <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" id="inputCity">
          </div>
          <div class="form-group col-md-4">
            <label for="inputState">State</label>
            <select id="inputState" class="form-control">
              <option selected>Choose...</option>
              <option>...</option>
            </select>
          </div>
          <div class="form-group col-md-2">
            <label for="inputZip">Zip</label>
            <input type="text" class="form-control" id="inputZip">
          </div>
        </div>
      </div>

      {{-- Tab Pedidos --}}
      <div class="tab-pane fade" id="pedidos" role="tabpanel" aria-labelledby="pedidos-tab">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Cadastro</button>
  </div>

@endsection