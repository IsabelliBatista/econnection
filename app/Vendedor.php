<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    protected $table = 'vendedor';
    protected $primaryKey = 'id';
    protected $fillable = [
        'razao_social', 'nome_fantasia', 'cnpj', 'users_id', 'endereco_id'
    ];

    public function user(){
        return $this->hasOne('App\User', 'id', 'users_id');
    }

    public function endereco(){
        return $this->hasOne('App\User', 'id', 'endereco_id');
    }

}
