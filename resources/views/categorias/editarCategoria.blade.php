@extends('layouts.master')

@section('title', 'Editar Categorias ')

@section('content')
  <section class="container mt-5 mb-5">
    <h2>Editar Categorias:</h2>
    <form method="POST" action="/editar/categoria/{{$categoria->id}}">
        @csrf
        {{ method_field('PUT') }}
        <div class="form-row mb-2">
            <div class="col-md-6 col-sm-12">
              <label for="id">{{ __('ID:') }}</label>
              <input class="form-control" value="{{ $categoria->id }}" disabled > 
            </div>
            <div class="col-md-6 col-sm-12">
                <label for="name">{{ __('Descrição:') }}</label>
                <input type="text" id="name" class="form-control" name="name" value="{{ $categoria->name }}" > 
            </div>
        </div>
        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="/listar/categoria" type="submit" class="btn btn-dark">Cancelar</a>
    </form>
  </section>
@endsection

