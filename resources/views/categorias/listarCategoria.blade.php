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
              <td><a href="/excluir/categoria/{{$categorias->id}}"><i class="far fa-trash-alt"></i></a></td>
            </tr> 
          @endforeach
        </tbody>
      </table>
    @endif
    <a class="btn btn-success btn-md mt-3" href="/adicionar/categoria" role="button">Cadastrar novas categorias</a>
  </div>
@endsection