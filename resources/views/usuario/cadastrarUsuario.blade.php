@extends('layouts.master')

@section('title')
  Cadastro - eConnection
@endsection

@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10 p-2">
      <div class="card">
        <div class="card-body">
          <h2 class="card-title text-xl-center p-2">{{ __('Fazer Cadastro:') }}</h2>
          <form method="POST" action="/cadastrarUsuario">
            @csrf
            {{ method_field('POST') }}
            <div class="form-row mb-2">
              <div class="col">
                <label for="name">{{ __('Nome Completo:') }}</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                  @error('name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="col">
                <label for="email">{{ __('Email:') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                  @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror             
               </div>
            </div>

            <div class="form-row mb-2">
              <div class="col">
                <label for="password">{{ __('Senha:') }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                  @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="col">
                <label for="password-confirm">{{ __('Confirme a senha:') }}</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">            
               </div>
            </div>

            <div class="form-row mb-2">
              <div class="form-group col-md-6">
                <label for="cpf">{{ __('CPF:') }}</label>
                <input id="cpf" type="text" class="form-control" name="cpf" value="{{ old('cpf') }}" required autocomplete="cpf">
              </div>
              <div class="form-group col-md-6">
                <label for="telefone">{{ __('Telefone:') }}</label>
                <input id="telefone" type="text" class="form-control"  name="telefone" value="{{ old('telefone') }}" required autocomplete="telefone">
              </div>
            </div>

            <div class="form-row mb-3">
              <div class="col">
                <label for="dataNasc">{{ __('Data de Nascimento:') }}</label>
                <input id="dataNasc" type="date" class="form-control"  name="dataNasc" value="{{ old('dataNasc') }}" autocomplete="dataNasc">
              </div>
              <div class="col">
                <label for="sexo">{{ __('Gênero:') }}</label>
                <select id="sexo" class="form-control" name="sexo" value="{{ old('sexo') }}" required autocomplete="sexo">
                  <option selected>Selecione seu Gênero</option>
                  <option>Feminino</option>
                  <option>Masculino</option>
                  <option>Não Binário</option>
                </select>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="rua">{{ __('Endereço:') }}</label>
                <input id="rua" type="text" class="form-control"  name="rua" value="{{ old('rua') }}" required autocomplete="rua">
              </div>
              <div class="form-group col-md-2">
                <label for="numero">{{ __('Número:') }}</label>
                <input id="numero" type="text" class="form-control"  name="numero" value="{{ old('numero') }}" required autocomplete="numero">
              </div>
              <div class="form-group col-md-4">
                <label for="bairro">{{ __('Bairro:') }}</label>
                <input id="bairro" type="text" class="form-control"  name="bairro" value="{{ old('bairro') }}" required autocomplete="bairro">
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="cidade">{{ __('Cidade:') }}</label>
                <input id="cidade" type="text" class="form-control"  name="cidade" value="{{ old('cidade') }}" required autocomplete="cidade">
              </div>
              <div class="form-group col-md-4">
                <label for="estado">{{ __('Estado:') }}</label>
                <input id="estado" type="text" class="form-control"  name="estado" value="{{ old('estado') }}" required autocomplete="estado">
              </div>
              <div class="form-group col-md-2">
                <label for="cep">{{ __('CEP:') }}</label>
                <input id="cep" type="text" class="form-control"  name="cep" value="{{ old('cep') }}" required autocomplete="cep">
              </div>
            </div>

            <div class="form-group">
              <label for="complemento">{{ __('Complemento:') }}</label>
              <input id="complemento" type="text" class="form-control"  name="complemento" value="{{ old('complemento') }}" autocomplete="complemento">
            </div>
            
            <div class="form-group row p-5">
              <button type="submit" class="btn btn-success btn-lg btn-block">
                {{ __('Cadastrar-se!') }}
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection