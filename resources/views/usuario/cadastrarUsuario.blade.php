@extends('layouts.master')

@section('title')
  Cadastro - eConnection
@endsection

@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card border-0">
        <div class="card-body">
          <h2 class="card-title text-xl-center p-2">{{ __('Fazer Cadastro:') }}</h2>
          <form method="POST" action="/cadastrarUsuario" enctype="multipart/form-data">
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
                  <option selected disabled>Selecione seu Gênero</option>
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
                <select id="estado" class="form-control"  name="estado" value="{{ old('estado') }}" required autocomplete="estado">
                  <option selected disabled>Selecione o Estado</option>
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