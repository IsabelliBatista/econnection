<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Marca;
use App\Categoria;

class Produto extends Model
{
    protected $table = 'produtos';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nome', 'descricao', 'imagem', 'preco', 'categoria_id', 'marca_id'
    ];

    public function categoria(){
        return $this->hasOne(Categoria::class, 'id', 'categoria_id');
    }

    public function marca(){
        return $this->hasOne(Marca::class, 'id', 'marca_id');
    }
}
