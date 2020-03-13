<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    protected $table = 'vendedor';
    protected $primaryKey = 'id';
    protected $fillable = [
        'razao_social', 'nome_fantasia', 'cnpj', 'telefone', 'email', 'senha', 'endereco_id'
    ];

    public function endereco(){
        return $this->hasOne('App\Endereco', 'id', 'endereco_id');
    }

}
