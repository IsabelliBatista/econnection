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
  <ul class="nav nav-tabs mb-3" id="categoriaTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="info-tab" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="true">cadastrar categorias</a>
    </li>
  </ul>
  <div class="tab-content" id="myTabContent">
    {{-- Tab cadastrar categ --}}
    <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info-tab">
      <div class="form-row mb-2">
        <div class="col">
          <label>{{ __('category:') }}</label>
          <input class="form-control" value="{{ $category->name }}" disabled> 
        </div>
      </div>
    </div>
  <a href="/editar/categoria" class="btn btn-success">Editar Categoria</a>
</div>
@endsection