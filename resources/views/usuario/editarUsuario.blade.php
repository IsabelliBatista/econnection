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
    <ul class="nav nav-tabs mb-3" id="meuPerfilTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="info-tab" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="true">Dados Pessoais</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="endereco-tab" data-toggle="tab" href="#endereco" role="tab" aria-controls="endereco" aria-selected="false">Endereço</a>
      </li>
    </ul>
    <form method="POST" action="/editar/usuario" enctype="multipart/form-data">
      @csrf
      {{ method_field('PUT') }}
    <div class="tab-content" id="myTabContent">
      {{-- Tab Dados Pessoais --}}
      <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info-tab">
        <div class="form-row mb-2">
          <div class="col">
            <label for="name">{{ __('Nome Completo:') }}</label>
            <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" autofocus>
          </div>
          <div class="col">
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
            <label for="telefone">{{ __('Telefone:') }}</label>
            <input id="telefone" type="text" class="form-control"  name="telefone" value="{{ $user->telefone }}">
          </div>
        </div>
        <div class="form-row mb-3">
          <div class="col">
            <label for="dataNasc">{{ __('Data de Nascimento:') }}</label>
            <input id="dataNasc" type="date" class="form-control"  name="dataNasc" value="{{ $user->data_nasc }}">
          </div>
          <div class="col">
            <label for="sexo">{{ __('Gênero:') }}</label>
            <select id="sexo" class="form-control" name="sexo" value="{{ $user->sexo}}">
              <option disabled>Selecione seu Gênero</option>
              <option>Feminino</option>
              <option>Masculino</option>
              <option>Não Binário</option>
            </select>
          </div>
        </div>
      </div>

      {{-- Tab Endereco --}}
      <div class="tab-pane fade" id="endereco" role="tabpanel" aria-labelledby="endereco-tab">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="rua">{{ __('Endereço:') }}</label>
            <input id="rua" type="text" class="form-control"  name="rua" value="{{ $endereco[0]->rua }}">
          </div>
          <div class="form-group col-md-2">
            <label for="numero">{{ __('Número:') }}</label>
            <input id="numero" type="text" class="form-control"  name="numero" value="{{ $endereco[0]->numero }}">
          </div>
          <div class="form-group col-md-4">
            <label for="bairro">{{ __('Bairro:') }}</label>
            <input id="bairro" type="text" class="form-control"  name="bairro" value="{{ $endereco[0]->bairro }}">
        </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="cidade">{{ __('Cidade:') }}</label>
            <input id="cidade" type="text" class="form-control"  name="cidade" value="{{ $endereco[0]->cidade }}">
          </div>
          <div class="form-group col-md-4">
            <label for="estado">{{ __('Estado:') }}</label>
            <select id="estado" class="form-control"  name="estado"  selected value="{{ $endereco[0]->estado }}">
              <option  selected value="{{ $endereco[0]->estado }}">{{ $endereco[0]->estado }}</option>
              <option disabled>Selecione o Estado</option>
              <option value="Acre">Acre</option>
              <option value="Alagoas">Alagoas</option>
              <option value="Amapá">Amapá</option>
              <option value="Amazonas">Amazonas</option>
              <option value="Bahia">Bahia</option>
              <option value="Ceará">Ceará</option>
              <option value="Distrito Federal">Distrito Federal</option>
              <option value="Espírito Santo">Espírito Santo</option>
              <option value="Goiás">Goiás</option>
              <option value="Maranhão">Maranhão</option>
              <option value="Mato Grosso">Mato Grosso</option>
              <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
              <option value="Minas Gerais">Minas Gerais</option>
              <option value="Pará">Pará</option>
              <option value="Paraíba">Paraíba</option>
              <option value="Paraná">Paraná</option>
              <option value="Pernambuco">Pernambuco</option>
              <option value="Piauí">Piauí</option>
              <option value="Rio de Janeiro">Rio de Janeiro</option>
              <option value="Rio Grande do Sul">Rio Grande do Sul</option>
              <option value="Rio Grande do Norte">Rio Grande do Norte</option>
              <option value="Rondônia">Rondônia</option>
              <option value="Roraima">Roraima</option>
              <option value="Santa Catarina">Santa Catarina</option>
              <option value="São Paulo">São Paulo</option>
              <option value="Sergipe">Sergipe</option>
              <option value="Tocantins">Tocantins</option>
            </select>
          </div>
          <div class="form-group col-md-2">
            <label for="cep">{{ __('CEP:') }}</label>
            <input id="cep" type="text" class="form-control"  name="cep" value="{{ $endereco[0]->cep }}">
          </div>
        </div>
        <div class="form-group">
          <label for="complemento">{{ __('Complemento:') }}</label>
          <input id="complemento" type="text" class="form-control"  name="complemento" value="{{ $endereco[0]->complemento }}">     
        </div>
      </div>
      <button type="submit" class="btn btn-success">Salvar Cadastro</button>
      <a href="/listar/usuario" type="submit" class="btn btn-dark">Cancelar</a>
    </form>
  </div>

@endsection