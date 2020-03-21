@extends('layouts.master')

@section('title')
  Contato - eConnection
@endsection

@section('content')
<article class="bg-header-somos"><h1 class="text-center container">Contato</h1></article>
<div class="container">
    <h2 class="text-center mt-5 mb-5">Fale Conosco</h2>
    <p class="text-center">Talvez a gente já tenha a resposta pra sua pergunta. <a href="/faq">Dá uma olhadinha aqui.</a></p>
    <form class=" col-7 m-auto">
      <div class="form-group">
        <label for="exampleFormControlInput1">Nome</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nome">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Email</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Mensagem</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
        <button type="submit" class="btn btn-card mb-5">Enviar</button>
    </form>
    <p class="text-center">Caso prefira nos ligar, nosso número é: <a href="">(11) 4321 1234</a></p>
    <p class="text-center">Para assessoria de imprensa: <a href="">imprensa@econnection.com.br</a></p>
</div>
@endsection