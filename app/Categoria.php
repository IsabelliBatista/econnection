<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Produto;

class Categoria extends Model
{
    protected $table = 'categoria';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name'
    ];

    public function produto(){
        return $this->hasMany(Produto::class, 'produto_id', 'id');
    }

}
