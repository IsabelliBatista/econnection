<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $table = 'endereco';
    protected $primaryKey = 'id';
    protected $fillable = [
        'rua', 'numero', 'bairro', 'cidade', 'cep', 'complemento'
    ];
}
