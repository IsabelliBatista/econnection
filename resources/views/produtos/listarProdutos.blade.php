@extends('layouts.master')

@section('title')
  Listando - eConnection
@endsection

@section('content')

@if($produtos->isEmpty())
        <div class="col-12">
            <h1 class="col-12 text-center">Que pena! Não temos produtos cadastrados na plataforma</h1>
        </div>
    @else
        <section class="row">
            <header class="col-12">
                <h1 class="col-12 text-center">Produtos</h1>
                <p class="col-12 d-block text-center"><b>listando todos os produtos da nossa plataforma</b></p>
            </header>
        </section>
        <section class="row">
            <article class="col-12">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Preço</th>
                            <th scope="col">Marca</th>
                            <th scope="col">Imagem</th>
                            <th scope="col">Categoria</th>
                            <th scope="col" colspan="2">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($produtos as $produto)
                        <tr>
                            <td scope="row">
                                <img width="80" height="80" src="{{ $produto->imagem_image }}" alt="">
                            </td>
                            <td scope="row">{{$produto->titulo}}</td>
                            <td scope="row">{{$produto->sinopse}}</td>
                            <td scope="row">{{$produto->marca->nome}}</td>
                            <td scope="row">{{$produto->categoria->descricao}}</td>
                            <td>
                                <a href="/produtos/modificar/{{$produto->id}}">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                            <td>
                                <a href="#" data-toggle="modal" data-target="#modal{{ $produto->id }}">
                                    <i class="fas fa-trash"></i>
                                </a>
                                <div class="modal fade" id="modal{{ $produto->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Deseja excluir o produto {{ $produto->titulo }} ?</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>produto: {{ $produto->titulo }}</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                <form action="/produtos/remover/{{ $produto->id }}" method="POST">
                                                    @csrf
                                                    {{ method_field('DELETE') }}
                                                    <button type="submit" class="btn btn-danger">Excluir</a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-center">
                    {{ $produtos->appends(['search' => isset($search) ? $search : ''])->links() }}
                </div>
            </article>
        </section>
    @endif
@endsection