# eConnection

eConnetion é um marketplace para venda de produtos sustentáveis, onde os clientes podem comprar produtos de pequenos produtores da sua região.

Aplicação desenvolvida durante o curso de Desenvolvimento Web Full Stack na Digital House. Visando integrar todo o conteúdo aprendido durante as aulas. Usando Laravel 6.


## Como Instalar

```sh
$ composer install
```

## Como rodar o dump-autoload

```sh
$ composer dump-autoload
```

## Como conectar com o banco de dados

### crie um novo arquivo .env e configure as seguintes variáveis

```sh
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=econnection
DB_USERNAME=root
DB_PASSWORD=eco
```

## Como rodar as migrations

```sh
$ php artisan migrate
```

## Como rodar os seeders

```sh
$ php artisan db:seed
```

## Como criar a chave

```sh
$ php artisan key:generate
```

## Como iniciar a aplicação

```sh
$ php artisan serve
```

### Entrar na porta 8000

```sh
$ http://localhost:8000/
```
