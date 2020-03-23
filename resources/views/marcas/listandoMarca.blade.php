@extends('layouts.master')

@section('title')
    Marcas - eConnection
@endsection
@section('content')  
<div class="container mt-2">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-2">
      <li class="breadcrumb-item"><a href="/">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Marcas</li>
    </ol>
  </nav>
  <table class="table">
    <thead class="thead-light">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Marcas</th>
        <th scope="col">Editar</th>
        <th scope="col">Excluir</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($marca as $marcas)
        <tr>
        <th scope="row">{{$marcas->id}}</th>
          <td>{{$marcas->name}}</td>
          <td><a href="/editar/marca/{{$marcas->id}}"><i class="fas fa-edit"></i></a></td>
          <td><a href="/excluir/marca/{{$marcas->id}}"><i class="far fa-trash-alt"></i></a></td>
        </tr> 
      @endforeach
    </tbody>
  </table>
  <a href="/adicionandoMarca" class="btn btn-success col-5 mx-auto">CADASTRAR MARCA</a>
</div>
@endsection