@extends('layouts.app')

@section('title', 'Editando Marcas')

@section('content')
    <h1>Modificando Marcas</h1>

    <form method="POST" action="/marcas/modificar/{{$marca->id}}">
        @csrf
        {{ method_field('PUT') }}

        <div class="form-group col-md-6 col-sm-12">
            <label for="nome">Nome</label>
            <input type="text" name="nome" value="{{ $marca->nome }}" class="form-control{{$errors->has('nome') ? ' is-invalid':''}}" id="nome">
            <div class="invalid-feedback">{{ $errors->first('nome') }}</div>
        </div>

        <div class="form-group col-md-2">
            <button type="submit" class="form-control btn btn-primary">Enviar</button>
        </div>
    </form>
@endsection
