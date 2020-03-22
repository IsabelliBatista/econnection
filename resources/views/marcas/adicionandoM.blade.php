@extends('layouts.master')

@section('title', 'Adicionando Marcas')

@section('content')
    <section class="container mt-5 mb-5">
        <h2>Cadastro de marcas</h2>

        <form method="POST" action="/adicionandoM">
            @csrf
            {{ method_field('POST') }}
            <div class="form-group col-md-6 col-sm-12">
                <label for="name">Nome</label>
                <input type="text" name="name" class="form-control{{$errors->has('name') ? ' is-invalid':''}}" value="{{ old('name') }}" id="name">
                <div class="invalid-feedback">{{ $errors->first('name') }}</div>
            </div>

            <div class="form-group col-md-2">
                <button type="submit" class="form-control btn btn-success">Enviar</button>
            </div>
        </form>
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
    </section>

@endsection