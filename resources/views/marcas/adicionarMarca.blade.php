@extends('layouts.master')

@section('title', 'Adicionando Marcas ')

@section('content')
  <section class="container mt-5 mb-5">
    <h2>Cadastro de Marcas</h2>

    <form method="POST" action="/adicionar/marca">
      @csrf
      {{ method_field('POST') }}
      <div class="form-row mb-2">
        <div class="col-md-6 col-sm-12">
          <label for="name">{{ __('Descrição:') }}</label>
          <input type="text" id="name" class="form-control" name="name" value="{{old('name') }}" > 
        </div>
      </div>
        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="/listar/marca" type="submit" class="btn btn-dark">Cancelar</a>
    </form>
    @if(session()->has('mensagem'))
      <div class="alert alert-success mt-2">
        {{ session()->get('mensagem') }}
      </div>
    @endif
  </section>
@endsection
