@extends('layouts.master')

@section('title')
    Marca - eConnection
@endsection

@section('content')  
  <div class="container mt-2">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-2">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Marca</li>
      </ol>
    </nav>
    @if ($marca->isEmpty())
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <p class="lead">Não encontramos nenhuma marca cadastrada.</p>
          <a class="btn btn-success btn-md mt-3" href="/adicionar/marca" role="button">Clique aqui para cadastrar</a>
        </div>
      </div>
    @else
    <table class="table">
        <thead>
          <tr>
            <th scope="col" class="">ID</th>
            <th scope="col" class="">Marca</th>
            <th scope="col" class="">Editar</th>
            <th scope="col" class="">Excluir</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($marca as $marcas)
            <tr>
            <th>{{$marcas->id}}</th>
              <td>{{$marcas->name}}</td>
              <td><a href="/editar/marca/{{$marcas->id}}"><i class="fas fa-edit"></i></a></td>
              <td><a href="#" data-toggle="modal" data-target="#excluirMarca"><i class="far fa-trash-alt"></i></a></td>
              <!-- Modal Excluir marca -->
              <div class="modal fade" id="excluirMarca" tabindex="-1" role="dialog" aria-labelledby="excluirMarcaTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="excluirMarcaTitle">Excluir Marca</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <p>Deseja realmente excluir a marca <strong>{{ $marcas->name }}</strong>?</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                      <form method="POST" action="/excluir/marca/{{$marcas->id}}">
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
    <a class="btn btn-success btn-md mt-3" href="/adicionar/marca" role="button">Cadastrar novas marca</a>
  </div>
@endsection