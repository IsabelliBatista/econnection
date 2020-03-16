@extends('layouts.master')

@section('title')
  Cadastrar Produtos - eConnection
@endsection

@section('content')
<section class="container mt-5">
<!-- @csrf
    <form>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="nome">Nome do produto</label>
        <input type="text" class="form-control" id="nome">
        </div>
        <div class="form-group col-md-6">
        <label for="descricao">Descrição</label>
        <input type="text" class="form-control" id="descricao">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="preco">Preço</label>
            <input type="text" class="form-control" id="preco" placeholder="R$ 00,00">
        </div>
        <div class="form-group col-md-6">
            <label for="marca">Marca</label>
            <input type="text" class="form-control" id="marca" placeholder="Insecta">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputAddress2">Imagem</label>
            <input type="file" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div>
        <div class="form-group col-md-6">
            <label for="categoria">Categoria</label>
            <select name="categoria" id="categoria" class="">
                <option value="Copo">Copo</option>
                <option value="Toalha">Toalha</option>
                <option value="Dental">Dental</option>
                <option value="Canudo">Canudo</option>
                <option value="Cabelo">Cabelo</option>
                <option value="Sabonete">Sabonete</option>
                <option value="Absorvente">Absorvente</option>
            </select>
        </div>
    </div>
    <button type="submit" class="btn btn-card col-12">Cadastrar</button>
    </form>
     -->


    <form method="POST" action="/produtos/adicionar" enctype="multipart/form-data">
        @csrf
        {{ method_field('POST') }}
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
           
        </div>

        <div class="form-group col-md-2">
            <button type="submit" class="form-control btn btn-primary">Enviar</button>
        </div>
    </form>
</section>

@endsection
