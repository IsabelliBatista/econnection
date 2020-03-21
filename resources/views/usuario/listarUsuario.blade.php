@extends('layouts.master')

@section('title')
    Carrinho - eConnection
@endsection

@section('content')  
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-1 ">
        <li class="breadcrumb-item"><a href="/index">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Perfil</li>
      </ol>
    </nav>
    <div class="card-body">
      <h2 class="card-title text-xl-center p-2">{{ __('Dados Cadastrados:') }}</h2>

    <form method="POST" action="/listar/usuario">
        @csrf
        {{ method_field('POST') }}
        <div class="form-group row">
          <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome Completo:') }}</label>

          <div class="col-md-6">
          <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

            @error('name')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
        </div>

        <div class="form-group row">
          <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-mail:') }}</label>

          <div class="col-md-6">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">

            @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
        </div>

        <div class="form-group row">
          <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha:') }}</label>

          <div class="col-md-6">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
        </div>

        <div class="form-group row">
          <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Senha:') }}</label>

          <div class="col-md-6">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
          </div>
        </div>

        <div class="form-group row">
          <label for="cpf" class="col-md-4 col-form-label text-md-right">{{ __('CPF:') }}</label>

          <div class="col-md-6">
          <input id="cpf" type="text" class="form-control @error('cpf') is-invalid @enderror" name="cpf" value="{{ old('cpf') }}" required autocomplete="cpf" autofocus>

          @error('cpf')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
          </div>
        </div>

        <div class="form-group row">
          <label for="telefone" class="col-md-4 col-form-label text-md-right">{{ __('Telefone:') }}</label>

          <div class="col-md-6">
            <input id="telefone" type="text" class="form-control"  name="telefone" value="{{ old('telefone') }}" required autocomplete="telefone" autofocus>
          </div>
        </div>

        <div class="form-group row">
          <label for="dataNasc" class="col-md-4 col-form-label text-md-right">{{ __('Data de Nascimento:') }}</label>

          <div class="col-md-6">
            <input id="dataNasc" type="date" class="form-control"  name="dataNasc" value="{{ old('dataNasc') }}" autocomplete="dataNasc" autofocus>
          </div>
        </div>

        <div class="form-group row">
          <label for="sexo" class="col-md-4 col-form-label text-md-right">{{ __('Gênero:') }}</label>

          <div class="col-md-6">
            <select id="sexo" class="form-control" name="sexo" value="{{ old('sexo') }}" required autocomplete="sexo" autofocus>
              <option selected>Selecione seu Gênero</option>
              <option>Feminino</option>
              <option>Masculino</option>
              <option>Não Binário</option>
            </select>
          </div>
        </div>

        <div class="form-group row">
          <label for="cep" class="col-md-4 col-form-label text-md-right">{{ __('CEP:') }}</label>

          <div class="col-md-6">
            <input id="cep" type="text" class="form-control"  name="cep" value="{{ old('cep') }}" required autocomplete="cep" autofocus>
          </div>
        </div>

        <div class="form-group row">
          <label for="rua" class="col-md-4 col-form-label text-md-right">{{ __('Rua, Av ou Logradouro:')}}</label>

          <div class="col-md-6">
            <input id="rua" type="text" class="form-control"  name="rua" value="{{ old('rua') }}" required autocomplete="rua" autofocus>
          </div>
        </div>

        <div class="form-group row">
          <label for="numero" class="col-md-4 col-form-label text-md-right">{{ __('Número:')}}</label>

          <div class="col-md-6">
            <input id="numero" type="text" class="form-control"  name="numero" value="{{ old('numero') }}" required autocomplete="numero" autofocus>
          </div>
        </div>

        <div class="form-group row">
          <label for="bairro" class="col-md-4 col-form-label text-md-right">{{ __('Bairro:') }}</label>

          <div class="col-md-6">
            <input id="bairro" type="text" class="form-control"  name="bairro" value="{{ old('bairro') }}" required autocomplete="bairro" autofocus>
          </div>
        </div>

        <div class="form-group row">
          <label for="cidade" class="col-md-4 col-form-label text-md-right">{{ __('Cidade:') }}</label>

          <div class="col-md-6">
            <input id="cidade" type="text" class="form-control"  name="cidade" value="{{ old('cidade') }}" required autocomplete="cidade" autofocus>
          </div>
        </div>

        <div class="form-group row">
          <label for="estado" class="col-md-4 col-form-label text-md-right">{{ __('Estado:') }}</label>

          <div class="col-md-6">
            <input id="estado" type="text" class="form-control"  name="estado" value="{{ old('estado') }}" required autocomplete="estado" autofocus>
          </div>
        </div>

        <div class="form-group row">
          <label for="complemento" class="col-md-4 col-form-label text-md-right">{{ __('Complemento:') }}</label>

          <div class="col-md-6">
            <input id="complemento" type="text" class="form-control"  name="complemento" value="{{ old('complemento') }}" required autocomplete="complemento" autofocus>
          </div>
        </div>
        
        <div class="form-group row mb-0">
          <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-success">
             {{ __('Atualizar Dados') }}
            </button>
            <button type="button" class="btn btn-secondary" href="/home">
              {{ __('Fechar') }}
             </button>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection