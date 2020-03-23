@extends('layouts.app')

@section('title', 'Editando marca')

@section('content')
    <h1>Modificando marca</h1>

    <form method="POST" action="/marca/modificar/{{$marca->id}}">
        @csrf
        {{ method_field('PUT') }}

        <div class="form-group col-md-6 col-sm-12">
            <label for="name">Descrição</label>
            <input type="text" name="name" value="{{ $marca->name }}" class="form-control{{$errors->has('name') ? ' is-invalid':''}}" id="name">
            <div class="invalid-feedback">{{ $errors->first('name') }}</div>
        </div>

        <div class="form-group col-md-2">
            <button type="submit" class="form-control btn btn-primary">Enviar</button>
        </div>
    </form>
@endsection
