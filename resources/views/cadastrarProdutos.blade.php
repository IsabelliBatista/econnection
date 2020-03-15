@extends('layouts.master')

@section('title')
  Cadastrar Produtos - eConnection
@endsection

@section('content')
<section class="container mt-5">
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
</section>

@endsection
