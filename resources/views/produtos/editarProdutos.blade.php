@extends('layouts.master')

@section('title', 'Editar Produtos ')

@section('content')
  <section class="container mt-5 mb-5">
    <h2>Editar Produtos:</h2>
    <form method="POST" action="/editar/produtos/{{$produtos->id}}">
        @csrf
        {{ method_field('PUT') }}
        <div class="form-row mb-2">
            <div class="col-md-6 col-sm-12">
              <label for="id">{{ __('ID:') }}</label>
              <input class="form-control" value="{{ $produtos->id }}" disabled > 
            </div>
            <div class="col-md-6 col-sm-12">
                <label for="name">{{ __('Nome:') }}</label>
                <input type="text" id="name" class="form-control" name="name" value="{{ $produtos->name }}" > 
            </div>
            <div class="col-md-6 col-sm-12">
                <label for="description">{{ __('Descrição:') }}</label>
                <input type="text" id="description" class="form-control" name="description" value="{{ $produtos->description }}" > 
            </div>
            <div class="col-md-6 col-sm-12">
                <label for="price">{{ __('Preço:') }}</label>
                <input type="text" id="price" class="form-control" name="price" value="{{ $produtos->price }}" > 
            </div>
            <div class="col-md-6 col-sm-12">
                <label for="marca">{{ __('Marca:') }}</label>
                <input type="text" id="marca" class="form-control" name="marca" value="{{ $produtos->marca->name }}" > 
            </div>
            <div class="col-md-6 col-sm-12">
                <label for="category">{{ __('Categoria:') }}</label>
                <input type="text" id="category" class="form-control" name="category" value="{{ $produtos->category_id }}" > 
            </div>
            <div class="col-md-6 col-sm-12">
                <label for="image">{{ __('Imagem:') }}</label>
                <input type="file" id="image" class="form-control" name="image" value="{{ $produtos->image }}" > 
            </div>
        </div>
        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="/listar/produtos" type="submit" class="btn btn-dark">Cancelar</a>
    </form>
  </section>
@endsection

