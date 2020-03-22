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
  <table class="table">
    <thead class="thead-light">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Categoria</th>
        <th scope="col">Editar</th>
        <th scope="col">Excluir</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($category as $categories)
        <tr>
        <th scope="row">{{$categories->id}}</th>
          <td>{{$categories->name}}</td>
          <td><i class="fas fa-edit"></i></td>
          <td><i class="far fa-trash-alt"></i></td>
        </tr> 
      @endforeach
    </tbody>
  </table>
  <a href="/editar/categoria" class="btn btn-success">Editar Categoria</a>
</div>
@endsection