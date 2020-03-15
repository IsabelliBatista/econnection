<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'cliente';
    protected $primaryKey = 'id';
    protected $fillable = [
        'cpf', 'telefone', 'data_nasc', 'sexo', 'users_id', 'endereco_id', 'endereco_entrega_id'
    ];
    
    public function user(){
        return $this->hasOne('App\User', 'id', 'users_id')
    }

    public function endereco(){
        return $this->hasOne('App\Endereco', 'id', 'endereco_id');
    }

    public function endereco_entrega(){
        return $this->hasMany('App\EnderecoEntrega', 'id', 'endereco_entrega_id');
    }
}
