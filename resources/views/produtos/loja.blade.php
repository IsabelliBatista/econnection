@extends('layouts.master')

@section('title')
  Loja - eConnection
@endsection

@section('content')


<!-- Selecionar por categoria --> 
<section class="container categorias">
    <form action="" >
        <label for="categoria" class="categoria"><h2>Categoria</h2></label>
        <select name="categoria" id="categoria" class="select-categ">
            <option value="Copo" class="select-categ">Copo</option>
            <option value="Toalha">Toalha</option>
            <option value="Dental">Dental</option>
            <option value="Canudo">Canudo</option>
            <option value="Cabelo">Cabelo</option>
            <option value="Sabonete">Sabonete</option>
            <option value="Absorvente">Absorvente</option>
        </select>

        <label for="marca"><h2>Marca</h2></label>
        <select name="marca" id="marca" class="">
            <option value="pazemgaia">Paz em Gaia</option>
            <option value="insecta">Insecta</option>
            <option value="ideiacrua">Ideia Crua</option>
            <option value="ecoconsumo">Eco Consumo</option>
        </select>

        <label for="preco"><h2>Preço</h2></label>
        <select name="preco" id="preco">
            <option value="">Até R$50,00</option>
            <option value="">De R$50,00 até R$100,00</option>
        </select>
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
      <div class="col mb-4">
        <div class="card border-light h-100 text-center">
          <img src="{{asset ('/img/Produto1.jpg')}}" class="card-img-top" alt="Canudo" width="300" height="200">
          <div class="card-body">
            <h5 class="card-title">Produto</h5>
            <p class="card-text txt-preco">R$ 10,00</p>
            <a href="comprar.php" class="btn btn-card">Ver detalhes</a>
          </div>
        </div>
      </div>
      <div class="col mb-4">
        <div class="card border-light h-100 text-center">
          <img src="{{asset ('/img/Produto3.jpg')}}" class="card-img-top" alt="Canudo" width="300" height="200">
          <div class="card-body">
            <h5 class="card-title">Produto</h5>
            <p class="card-text txt-preco">R$ 10,00</p>
            <a href="comprar.php" class="btn btn-card">Ver detalhes</a>
          </div>
        </div>
      </div>
      <div class="col mb-4">
        <div class="card border-light h-100 text-center">
          <img src="{{asset ('/img/Produto2.jpg')}}" class="card-img-top" alt="Canudo" width="300" height="200">
          <div class="card-body">
            <h5 class="card-title">Produto</h5>
            <p class="card-text txt-preco">R$ 10,00</p>
            <a href="comprar.php" class="btn btn-card">Ver detalhes</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Segunda seção de produtos --}}
  <section class="container mt-5 mb-5">
    <div class="row row-cols-1 row-cols-md-3">
      <div class="col mb-4">
        <div class="card border-light h-100 text-center">
          <img src="{{asset ('/img/Produto3.jpg')}}" class="card-img-top" alt="Canudo" width="300" height="200">
          <div class="card-body">
            <h5 class="card-title">Produto</h5>
            <p class="card-text txt-preco">R$ 10,00</p>
            <a href="comprar.php" class="btn btn-card">Ver detalhes</a>
          </div>
        </div>
      </div>
      <div class="col mb-4">
        <div class="card border-light h-100 text-center">
          <img src="{{asset ('/img/Produto2.jpg')}}" class="card-img-top" alt="Canudo" width="300" height="200">
          <div class="card-body">
            <h5 class="card-title">Produto</h5>
            <p class="card-text txt-preco">R$ 10,00</p>
            <a href="comprar.php" class="btn btn-card">Ver detalhes</a>
          </div>
        </div>
      </div>
      <div class="col mb-4">
        <div class="card border-light h-100 text-center">
          <img src="{{asset ('/img/Produto1.jpg')}}" class="card-img-top" alt="Canudo" width="300" height="200">
          <div class="card-body">
            <h5 class="card-title">Produto</h5>
            <p class="card-text txt-preco">R$ 10,00</p>
            <a href="comprar.php" class="btn btn-card">Ver detalhes</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</section>


@endsection
