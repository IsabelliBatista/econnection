<!doctype html>
<html lang="pt-br">
    
    <?php $title = "FAQ"; ?>  
    <?php require_once("assets/inc/head.php"); ?>

<body>
    <?php require_once("assets/inc/header.php"); ?>
    <article class="bg-header-somos"><h1 class="text-center container">Perguntas Frequentes</h1></article>
    
    <!-- CAMINHO DE PÁGINAS-->
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Perguntas Frequentes</li>
        </ol>
      </nav>

      <!--PARA AS PERGUNTAS-->
      <div class="accordion" id="accordionExample">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h2 class="mb-0 faq-h2">
              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                COMO SEI QUAL É O MEU TAMANHO?
              </button>
            </h2>
          </div>

          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
             Mas para ter certeza qual numeração Insecta vai lhe servir, você pode medir o seu pé e conferir o tamanho na nossa tabela de medidas. Ao abrir a página de um sapato, você vai ver ao lado dele uma tabela de números para tirar as suas dúvidas. E se ainda assim comprar um tamanho que não ficar bom, a primeira troca é gratuita.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingTwo">
            <h2 class="mb-0 faq-h2">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                QUAIS SÃO AS FORMAS DE PAGAMENTO?
              </button>
            </h2>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
              Para loja digital:

              Boleto (à vista)

              Cartão de crédito (até 10 vezes) – Visa, Mastercard, Diners, Amex, Elo

              Para lojas físicas:

              Dinheiro (à vista)

              Cartão de débito ou crédito (até 3 vezes) – Visa, Mastercard, Elo
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h2 class="mb-0 faq-h2">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                QUAL O PRAZO DA ENTREGA?
              </button>
            </h2>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
              Depende de onde você está no Brasil:
              Moradores de São Paulo receberão mais rápido, já que o centro de distribuição da Insecta fica na cidade. No resto do Brasil, geralmente demora em média entre 5 e 15 dias úteis via transportadora, que é a forma de entrega gratuita que usamos. Esse prazo é uma média. Nossos produtos são enviados de SP, então para estados mais distantes como, por exemplo, Norte e Nordeste, esse prazo pode ser ultrapassado em algumas situações. Caso você tenha pressa e queira receber o produto antes desse prazo, pode solicitar a entrega expressa.
            </div>
          </div>
        </div>
      </div>

    </div>
    

    <?php require_once("assets/inc/footer.php"); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>