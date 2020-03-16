@extends('layouts.app')

@section('title', 'Blockbuster DH - marcas')

@section('content')
    @if($marcas->isEmpty())
        <div class="col-12">
            <h1 class="col-12 text-center">Que pena! Não temos marcas cadastrados na plataforma</h1>
        </div>
    @else
        <section class="row">
            <header class="col-12">
                <h1 class="col-12 text-center">marcas</h1>
                <p class="col-12 d-block text-center"><b>listando todos os marcas da nossa plataforma</b></p>
            </header>
        </section>
        <section class="row">
            <article class="col-12">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col" colspan="2">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($marcas as $marca)
                        <tr>
                            <td scope="row">{{$marca->nome}}</td>
                            <td>
                                <a href="/marcas/modificar/{{$marca->id}}">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                            <td>
                                <a href="#" data-toggle="modal" data-target="#modal{{ $marca->id }}">
                                    <i class="fas fa-trash"></i>
                                </a>
                                <div class="modal fade" id="modal{{ $marca->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Deseja excluir o marca {{ $marca->nome }} ?</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Nome: {{ $marca->nome }}</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                <form action="/marcas/remover/{{ $marca->id }}" method="POST">
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
                    {{ $marcas->links() }}
                </div>
            </article>
        </section>
    @endif
@endsection
