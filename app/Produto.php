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
        'name', 'description', 'price', 'image', 'marca_id', 'categoria_id'
    ];

    public function categoria(){
        return $this->hasOne(Categoria::class, 'id', 'categoria_id');
    }

    public function marca(){
        return $this->hasOne(Marca::class, 'id', 'marca_id');
    }

    public function getImagemImageAttribute($value) {
        return $this->imagem == null ? asset('img/null.jpeg') : asset($this->imagem);
    }

}
