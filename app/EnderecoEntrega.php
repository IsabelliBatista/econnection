<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnderecoEntrega extends Model
{
    protected $table = 'endereco_entrega';
    protected $primaryKey = 'id';
    protected $fillable = [
        'rua', 'numero', 'bairro', 'cidade', 'cep', 'complemento'
    ];
}
