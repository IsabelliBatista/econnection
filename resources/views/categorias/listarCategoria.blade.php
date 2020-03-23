@extends('layouts.master')

@section('title')
    Categorias - eConnection
@endsection

@section('content')  
  <div class="container mt-2">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-2">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Categorias</li>
      </ol>
    </nav>
    @if ($categoria->isEmpty())
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <p class="lead">Não encontramos nenhuma categoria cadastrada.</p>
          <a class="btn btn-success btn-md mt-3" href="/adicionar/categoria" role="button">Clique aqui para cadastrar</a>
        </div>
      </div>
    @else
    <table class="table">
        <thead>
          <tr>
            <th scope="col" class="">ID</th>
            <th scope="col" class="">Categoria</th>
            <th scope="col" class="">Editar</th>
            <th scope="col" class="">Excluir</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($categoria as $categorias)
            <tr>
            <th>{{$categorias->id}}</th>
              <td>{{$categorias->name}}</td>
              <td><a href="/editar/categoria/{{$categorias->id}}"><i class="fas fa-edit"></i></a></td>
              <td><a href="#" data-toggle="modal" data-target="#excluirCategoria"><i class="far fa-trash-alt"></i></a></td>
              <!-- Modal Excluir categoria -->
              <div class="modal fade" id="excluirCategoria" tabindex="-1" role="dialog" aria-labelledby="excluirCategoriaTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="excluirCategoriaTitle">Excluir Categoria</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <p>Deseja realmente excluir a categoria {{ $categorias->name }}?</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                      <form method="POST" action="/excluir/categoria/{{$categorias->id}}">
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
    <a class="btn btn-success btn-md mt-3" href="/adicionar/categoria" role="button">Cadastrar novas categorias</a>
  </div>
@endsection