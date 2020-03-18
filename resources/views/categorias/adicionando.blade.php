@extends('layouts.app')

@section('title', 'Adicionando Categorias ')

@section('content')
    <h1>Cadastro de Categorias</h1>

    <form method="POST" action="/adicionando">
        @csrf
        {{ method_field('POST') }}
        <div class="form-group col-md-6 col-sm-12">
            <label for="name">Descrição</label>
            <input type="text" name="name" value="{{ old('name') }}" class="form-control{{$errors->has('name') ? ' is-invalid':''}}" id="name">
            <div class="invalid-feedback">{{ $errors->first('name') }}</div>
        </div>

        <div class="form-group col-md-2">
            <button type="submit" class="form-control btn btn-primary">Enviar</button>
        </div>
    </form>
@endsection
