@extends('layouts.master')

@section('title')
  Minha Conta - eConnection
@endsection

@section('content')
<main>
  <article class="bg-header-somos"><h1 class="text-center container">Minha conta</h1></article>
  
  <div class="container-sm">
      <!-- CAMINHO DE PÁGINAS-->
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Minha conta</li>
          </ol>
        </nav>
        <ul class="nav nav-tabs mb-3">
          <li class="nav-item">
            <a class="nav-link <?php if(empty($_GET['type'])) {
              echo 'active';
            } ?>" href="/minha-conta">Meus Dados</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if(!empty($_GET['type']) and $_GET['type'] == 'pedidos') {
              echo 'active';
            } ?>" href="?type=pedidos">Pedidos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if(!empty($_GET['type']) and $_GET['type'] == 'enderecos') {
              echo 'active';
            } ?>" href="?type=enderecos">Endereços</a>
          </li>
        </ul>

        <?php
          if(empty($_GET['type'])) {
        ?>
          <form action="#">
            <div class="row">
              <div class="col-6">
                <label for="name">Nome:</label>
                <input type="text" id="name" class="form-control">
              </div>
              <div class="col-6">
                <label for="name">E-mail:</label>
                <input type="text" id="name" class="form-control">
              </div>
              <div class="col-3">
                <label for="name">Telefone 1:</label>
                <input type="text" id="name" class="form-control">
              </div>
              <div class="col-3">
                <label for="name">Telefone 2:</label>
                <input type="text" id="name" class="form-control">
              </div>
              <div class="col-3">
                <label for="name">CPF/CNPJ:</label>
                <input type="text" id="name" class="form-control">
              </div>
              <div class="col-3">
                <label for="name">Tipo:</label>
                <input type="text" id="name" class="form-control">
              </div>
            </div>
            <button class="btn btn-primary" type="submit">Atualizar dados</button>
          </form>
        <?php
          } elseif(!empty($_GET['type']) and $_GET['type'] == 'pedidos') {
        ?>
        <div class="alert alert-warning">
            <p class="m-0">Nenhum pedido encontrado!</p>
        </div>
        <?php
          } elseif(!empty($_GET['type']) and $_GET['type'] == 'enderecos') {
        ?>
        <div class="row mb-3">
            <div class="col-3">
              <button class="btn btn-primary" data-toggle="modal" data-target="#cadastroEnderecoModal">
                Adicionar endereço
              </button>
            </div>
        </div>
        <div class="row">
          <div class="col-6">
            <div class="card p-3">
              <h4 class="text-left">CEP: 000-0000</h4>
              <p class="m-0">Rua exemplo, 123</p>
              <p class="m-0">Perdizes - SP</p>
              <div class="row mt-3">
                <div class="col-6">
                  <button class="btn btn-primary btn-block">Editar</button>
                </div>
                <div class="col-6">
                  <button class="btn btn-danger btn-block">Remover</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="cadastroEnderecoModal" tabindex="-1" role="dialog" aria-labelledby="cadastroEnderecoModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="cadastroEnderecoModalLabel">Novo endereço</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="#">
                  <div class="row">
                    <div class="col-12">
                      <label for="cep">
                        CEP:
                      </label>
                      <input type="text" class="form-control" id="cep">
                    </div>
                    <div class="col-9">
                      <label for="rua">
                        Rua:
                      </label>
                      <input type="text" class="form-control" id="rua">
                    </div>
                    <div class="col-3">
                      <label for="numero">
                        Número:
                      </label>
                      <input type="text" class="form-control" id="numero">
                    </div>
                    <div class="col-12">
                      <label for="bairro">
                        Bairro:
                      </label>
                      <input type="text" class="form-control" id="bairro">
                    </div>
                    <div class="col-12">
                      <label for="cidade">
                        Cidade:
                      </label>
                      <input type="text" class="form-control" id="cidade">
                    </div>
                    <div class="col-12">
                      <label for="estado">
                        Estado:
                      </label>
                      <input type="text" class="form-control" id="estado">
                    </div>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Salvar</button>
              </div>
            </div>
          </div>
        </div>
        <?php
          }
        ?>
  </div>
</main>
@endsection