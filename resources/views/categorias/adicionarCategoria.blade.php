@extends('layouts.master')

@section('title', 'Adicionando Categorias ')

@section('content')
    <section class="container mt-5 mb-5">
        <h2>Cadastro de Categorias</h2>

        <form method="POST" action="/adicionar/categoria">
            @csrf
            {{ method_field('POST') }}
            <div class="form-group col-md-6 col-sm-12">
                <label for="name">Descrição</label>
                <input type="text" name="name" value="{{ old('name') }}" class="form-control{{$errors->has('name') ? ' is-invalid':''}}" id="name">
                <div class="invalid-feedback">{{ $errors->first('name') }}</div>
            </div>
            <div class="form-group col-md-2">
                <button type="submit" class="form-control btn btn-primary btn-success">Enviar</button>
            </div>
        </form>
    </section>
@endsection
