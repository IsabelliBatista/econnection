@extends('layouts.master')

@section('title')
    Carrinho - eConnection
@endsection

@section('content')  
  <div class="container mt-2">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-2">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Perfil</li>
      </ol>
    </nav>
    <ul class="nav nav-tabs mb-3" id="meuPerfilTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="info-tab" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="true">Dados Pessoais</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="endereco-tab" data-toggle="tab" href="#endereco" role="tab" aria-controls="endereco" aria-selected="false">Endereço</a>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      {{-- Tab Dados Pessoais --}}
      <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info-tab">
        <div class="form-row mb-2">
          <div class="col-md-6 col-sm-12">
            <label>{{ __('Nome Completo:') }}</label>
            <input class="form-control" value="{{ $user->name }}" disabled> 
          </div>
          <div class="col-md-6 col-sm-12">
            <label>{{ __('Email:') }}</label>
            <input class="form-control" value="{{ $user->email }}" disabled> 
          </div>
        </div>
        <div class="form-row mb-2">
          <div class="form-group col-md-6">
            <label>{{ __('CPF:') }}</label>
            <input class="form-control" value="{{ $user->cpf }}" disabled> 
          </div>
          <div class="form-group col-md-6">
            <label>{{ __('Telefone:') }}</label>
            <input class="form-control" value="{{ $user->telefone }}" disabled> 
          </div>
        </div>
        <div class="form-row mb-3">
          <div class="col-md-6 col-sm-12">
            <label>{{ __('Data de Nascimento:') }}</label>
            <input class="form-control" value="{{$user->data_nasc}}" type="date" disabled> 
          </div>
          <div class="col-md-6 col-sm-12">
            <label>{{ __('Gênero:') }}</label>
            <input class="form-control" value="{{ $user->sexo }}" disabled> 
          </div>
        </div>
      </div>

      {{-- Tab Endereco --}}
      <div class="tab-pane fade" id="endereco" role="tabpanel" aria-labelledby="endereco-tab">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>{{ __('Endereço:') }}</label>
            <input class="form-control" value="{{ $endereco[0]->rua }}" disabled>         
          </div>
          <div class="form-group col-md-2">
            <label>{{ __('Número:') }}</label>
            <input class="form-control" value="{{ $endereco[0]->numero }}" disabled>         
          </div>
          <div class="form-group col-md-4">
            <label>{{ __('Bairro:') }}</label>
            <input class="form-control" value="{{ $endereco[0]->bairro }}" disabled>         
            </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>{{ __('Cidade:') }}</label>
            <input class="form-control" value="{{ $endereco[0]->cidade }}" disabled>         
          </div>
          <div class="form-group col-md-4">
            <label>{{ __('Estado:') }}</label>
            <input class="form-control" value="{{ $endereco[0]->estado }}" disabled>
          </div>
          <div class="form-group col-md-2">
            <label>{{ __('CEP:') }}</label>
            <input class="form-control" value="{{ $endereco[0]->cep }}" disabled>         
          </div>
        </div>
        <div class="form-group">
          <label>{{ __('Complemento:') }}</label>
          <input class="form-control" value="{{ $endereco[0]->complemento }}" disabled>         
        </div>
      </div>
    <a href="/editar/usuario" class="btn btn-success">Editar Cadastro</a>
  </div>
@endsection