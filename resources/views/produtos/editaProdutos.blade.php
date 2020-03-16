@extends('layouts.master')

@section('title')
  Editando - eConnection
@endsection

@section('content')
<section class="container mt-5">
    <form method="POST" action="/produtos/modificar/{{$produto->id}}" enctype="multipart/form-data">
        @csrf
        {{ method_field('PUT') }}

        <div class="form-group col-md-6 col-sm-12">
            <label for="nome">Nome Produto</label>
            <input type="text" name="nome"  value="{{ old('nome') }}" class="form-control{{$errors->has('nome') ? ' is-invalid':''}}" id="nome">
            <div class="invalid-feedback">{{ $errors->first('nome') }}</div>
        </div>

        <div class="form-group col-md-6 col-sm-12">
            <label for="descricao">Descrição</label>
            <input type="text" name="descricao"  value="{{ old('descricao') }}" class="form-control{{$errors->has('descricao') ? ' is-invalid':''}}" id="descricao">
            <div class="invalid-feedback">{{ $errors->first('descricao') }}</div>
        </div>
        
        <div class="form-group col-md-6 col-sm-12">
            <label for="preco">Preço</label>
            <input type="text" name="preco"  value="{{ old('preco') }}" class="form-control{{$errors->has('preco') ? ' is-invalid':''}}" id="preco">
            <div class="invalid-feedback">{{ $errors->first('preco') }}</div>
        </div>

        <div class="form-group col-md-6 col-sm-12">
            <label for="imagem">Imagem</label>
            <input type="file" name="imagem" class="form-control" id="imagem">
        </div>

        <div class="form-group col-md-6 col-sm-12">
            <img class="w-100" src="{{ $produto->imagem_image }}" alt="">
        </div>
        <div class="form-group col-md-6 col-sm-12">
            <label for="imagem">Imagem</label>
            <input type="file" name="imagem" class="form-control" id="imagem">
        </div>

        <div class="form-group col-md-6 col-sm-12">
            <label for="categoria">Categoria</label>
            <select class="form-control{{$errors->has('categoria') ? ' is-invalid':''}}" name="categoria" id="categoria">
                <option value="">Selecione um gênero</option>
                @foreach ($errors as $categoria)
                    <option value="{{$categoria->id}}">{{$categoria->descricao}}</option>
                @endforeach
            </select>
            <div class="invalid-feedback">{{ $errors->first('categoria') }}</div>
        </div>

        <div class="form-group col-md-6 col-sm-12">
            <label for="marca">Marca</label>
            <select class="form-control{{$errors->has('marca') ? ' is-invalid':''}}" name="marca" id="marca">
                <option value="">Selecione um protagonista</option>
                @foreach ($marcas as $marca)
                    <option value="{{$marca->id}}">{{$marca->nome}}</option>
                @endforeach
            </select>
            <div class="invalid-feedback">{{ $errors->first('marca') }}</div>
        </div>

        <div class="form-group col-md-2">
            <button type="submit" class="form-control btn btn-primary">Enviar</button>
        </div>
    </form>
</section>
@endsection