@extends('layouts.app')

@section('title', 'Adicionando Marcas')

@section('content')
    <h1>Cadastro de marcas</h1>

    <form method="POST" action="/adicionando">
        @csrf
        {{ method_field('POST') }}
        <div class="form-group col-md-6 col-sm-12">
            <label for="name">Nome</label>
            <input type="text" name="name" class="form-control{{$errors->has('name') ? ' is-invalid':''}}" value="{{ old('name') }}" id="name">
            <div class="invalid-feedback">{{ $errors->first('name') }}</div>
        </div>

        <div class="form-group col-md-2">
            <button type="submit" class="form-control btn btn-primary">Enviar</button>
        </div>
    </form>
@endsection