@extends('layouts.master')

@section('title')
  Loja - eConnection
@endsection

@section('content')
<!-- Selecionar por categoria --> 
<header class="header-somos">
    <article class="bg-header-somos">
      <h1 class="text-center container">Loja</h1>
    </article>
</header>
<section class="container categorias">
  
    <form action=""  class="mt-5 form-filtrar">
      <div class="form-row">
          <div class="form-group col-sm-12 col-md-9">
            <label for="categoria"><h2>Categoria</h2></label>
            <select name="categoria" id="categoria">
                <option selected>Selecione a Categoria</option>
                @foreach ($categorias as $categoria)
                  <option value="{{$categoria->name}}">{{$categoria->name}}</option>
                @endforeach
            </select>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-sm-12 col-md-9">
            <label for="marca"><h2>Marca</h2></label>
            <select name="marca" id="marca">
              <option selected>Selecione a Marca</option>
              @foreach ($marcas as $marca)
                <option value="{{$marca->name}}">{{$marca->name}}</option>
              @endforeach
            </select>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-sm-12 col-md-9">
            <label for="preco"><h2>Preço</h2></label>
            <select name="preco" id="preco">
                <option value="">Até R$50,00</option>
                <option value="">De R$50,00 até R$100,00</option>
            </select>
          </div>
        </div>
    </form>
    
</section>

<section class="card-produtos">
  <div class="container mt-5 ">
      <h2 class="text-bold mt-5 mb-5"> 
        Loja
      </h2>
  </div>
  {{-- Primeira seção de produtos --}}
  <section class="container mt-5 mb-5">
    <div class="row row-cols-1 row-cols-md-3">
      @foreach ($produtos as $produto)
        <div class="col mb-4">
          <div class="card border-white h-100 text-center">
            <img src="{{$produto->image}}" class="card-img-top" width="300" height="200">
            <div class="card-body">
              <h5 class="card-title">{{$produto->name}}</h5>
              <p class="card-text txt-preco">R${{$produto->price}}</p>
              <a href="/comprar" class="btn btn-card">Ver detalhes</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    <div class="d-flex justify-content-center align-content-center">
      {{ $produtos->links() }}
    </div>
  </section>
</section>


@endsection
