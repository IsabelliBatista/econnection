<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produtos';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nome', 'descricao', 'imagem', 'preco', 'categoria_id', 'marca_id'
    ];

    public function categoria(){
        return $this->hasOne('App\Categoria', 'id', 'categoria_id');
    }

    public function marca(){
        return $this->hasOne('App\Marca', 'id', 'marca_id');
    }
}
