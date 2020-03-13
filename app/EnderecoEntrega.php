<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnderecoEntrega extends Model
{
    protected $table = 'filmes';
    protected $primaryKey = 'id';
    protected $fillable = [
        'rua', 'numero', 'bairro', 'cidade', 'cep', 'complemento'
    ];
}
