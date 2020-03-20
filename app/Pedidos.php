<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    protected $table = 'pedidos';
    protected $primaryKey = 'id';
    protected $fillable = [
        'status_pedido', 'users_id', 'produtos_id',
    ];

    public function user(){
        return $this->hasOne('App\User', 'id', 'user_id');
    }

    public function produtos(){
        return $this->hasMany('App\Produto', 'id', 'produtos_id');
    }
}
