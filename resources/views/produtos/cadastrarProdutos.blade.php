@extends('layouts.master')

@section('title')
  Cadastro Produto - eConnection
@endsection

@section('content')

<div class="container">
  <div class="row justify-content-center mt-5 mb-5">
      <div class="col-md-10 p-2">
          <div class="card">
              <div class="card-body">
                <h2 class="card-title text-xl-center p-2">{{ __('Fazer Cadastro do Produto:') }}</h2>
                  <form method="POST" action="/cadastrarProdutos">
                      @csrf
                      {{ method_field('POST') }}
                      <div class="form-group row">
                          <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome Produto:') }}</label>

                          <div class="col-md-7">
                              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                              @error('name')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Descrição:') }}</label>

                          <div class="col-md-7">
                              <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description">

                              @error('description')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Preço:') }}</label>

                          <div class="col-md-7">
                              <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" required autocomplete="new-price">

                              @error('price')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Imagem:') }}</label>

                          <div class="col-md-7">
                              <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" required autocomplete="new-image">

                              @error('image')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="brand" class="col-md-4 col-form-label text-md-right">{{ __('Marca:') }}</label>

                          <div class="col-md-7">
                              <input id="brand" type="text" class="form-control @error('brand') is-invalid @enderror" name="brand" required autocomplete="new-brand">

                              @error('brand')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                        <div class="form-group row">
                            <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('Categoria:') }}</label>

                            <div class="col-md-7">
                                <select id="category" class="form-control" name="category" value="{{ old('category') }}" required autocomplete="category" autofocus>
                                    <option selected>Selecione a Categoria</option>
                                    <option>Copo</option>
                                    <option>Absorvente</option>
                                    <option>Cabelo</option>
                                    <option>Canudo</option>
                                    <option>Dental</option>
                                    <option>Sabonete</option>
                                    <option>Toalha</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-0 ">
                            <div class="col-md-7 offset-md-4">
                                <button type="submit" class="btn btn-success mt-3 col-4 mb-4">
                                    {{ __('Cadastrar') }}
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