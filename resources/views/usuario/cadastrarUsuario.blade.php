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
                  <form method="POST" action={{ route('register') }}>
                      @csrf
                      {{ method_field('POST') }}
                      <div class="form-group row">
                          <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome Completo:') }}</label>

                          <div class="col-md-6">
                              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

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
                              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                            <label for="complemento" class="col-md-4 col-form-label text-md-right">{{ __('Complemento:') }}</label>
    
                            <div class="col-md-6">
                                <input id="complemento" type="text" class="form-control"  name="complemento" value="{{ old('complemento') }}" required autocomplete="complemento" autofocus>
                            </div>
                        </div>

                        <div class="form-row">

                            <div class="col-md-6 mb-3">
                              <label for="rua">{{ __('Rua, Av ou Logradouro:') }}</label>
                              <input type="text" class="form-control" id="rua" name="rua" value="{{ old('rua') }}" required autocomplete="rua" autofocus>
                            </div>

                            <div class="col-md-3 mb-3">
                              <label for="numero">{{ __('Numero:') }}</label>
                              <input type="text" class="form-control" id="numero" name="numero" value="{{ old('numero') }}" required autocomplete="numero" autofocus>
                            </div>

                            <div class="col-md-3 mb-3">
                              <label for="bairro">{{ __('Bairro:') }}</label>
                              <input type="text" class="form-control" id="ceo" name="bairro" value="{{ old('bairro') }}" required autocomplete="bairro" autofocus>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                              <label for="cidade">{{ __('Cidade:') }}</label>
                              <input type="text" class="form-control" id="cidade" name="cidade" value="{{ old('cidade') }}" required autocomplete="cidade" autofocus>
                            </div>

                            <div class="col-md-3 mb-3">
                              <label for="estado">{{ __('Estado:') }}</label>
                              <input type="text" class="form-control" id="estado" name="estado" value="{{ old('estado') }}" required autocomplete="estado" autofocus>
                            </div>


                            <div class="col-md-3 mb-3">
                                <label for="cep">{{ __('CEP:') }}</label>
                                <input type="text" class="form-control" id="ceo" name="cep" value="{{ old('cep') }}" required autocomplete="cep" autofocus>
                            </div>

                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Cadastrar-se!') }}
                                </button>
                            </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>

@endsection