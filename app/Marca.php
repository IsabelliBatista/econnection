<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Produto;

class Marca extends Model
{
    protected $table = 'marca';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name'
    ];

    public function produto(){
        return $this->hasMany(Produto::class, 'produto_id', 'id');
    }

}
