@extends('layouts.app')

@section('title', 'Editando Categorias')

@section('content')
    <h1>Modificando Categorias</h1>

    <form method="POST" action="/categorias/modificar/{{$categorias->id}}">
        @csrf
        {{ method_field('PUT') }}

        <div class="form-group col-md-6 col-sm-12">
            <label for="descricao">Descrição</label>
            <input type="text" name="descricao" value="{{ $categoria->descricao }}" class="form-control{{$errors->has('descricao') ? ' is-invalid':''}}" id="descricao">
            <div class="invalid-feedback">{{ $errors->first('descricao') }}</div>
        </div>

        <div class="form-group col-md-2">
            <button type="submit" class="form-control btn btn-primary">Enviar</button>
        </div>
    </form>
@endsection
