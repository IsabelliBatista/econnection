@extends('layouts.master')

@section('title')
  Listando - eConnection
@endsection

@section('content')
  <div class="container mt-2">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-2">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Produtos</li>
      </ol>
    </nav>
    @if ($produtos->isEmpty())
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <p class="lead">Não encontramos nenhum produto cadastrado.</p>
          <a class="btn btn-success btn-md mt-3" href="/cadastrar/produtos" role="button">Clique aqui para cadastrar</a>
        </div>
      </div>
    @else
      <table class="table">
        <thead>
          <tr>
            <th scope="col" class="">ID</th>
            <th scope="col" class="">Produto</th>
            <th scope="col" class="">Descrição</th>
            <th scope="col" class="">Preço</th>
            <th scope="col" class="">Marca</th>
            <th scope="col" class="">Categoria</th>
            <th scope="col" class="">Editar</th>
            <th scope="col" class="">Excluir</th>
          </tr>
        </thead>
        <tbody>  
          @foreach ($produtos as $produto)
            <tr>
              <th>{{$produto->id}}</th>
              <td>{{$produto->name}}</td>
              <td>{{$produto->description}}</td>
              <td>R${{$produto->price}}</td>
              <td>{{$produto->marca->name}}</td>
              <td>{{$produto->categoria->name}}</td>
              <td><a href="/editar/produtos/{{$produto->id}}"><i class="fas fa-edit"></i></a></td>
              <td><a href="#" data-toggle="modal" data-target="#excluirproduto"><i class="far fa-trash-alt"></i></a></td>
              <!-- Modal Excluir produto -->
              <div class="modal fade" id="excluirproduto" tabindex="-1" role="dialog" aria-labelledby="excluirprodutoTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="excluirprodutoTitle">Excluir produto</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <p>Deseja realmente excluir a produto <strong>{{ $produto->name }}</strong>?</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                      <form method="POST" action="/excluir/produtos/{{$produto->id}}">
                        @csrf
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-primary">Excluir</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </tr> 
          @endforeach
        </tbody>
      </table>
    @endif
    <a class="btn btn-success btn-md mt-3" href="/cadastrar/produtos" role="button">Cadastrar novas categorias</a>
  </div>
@endsection