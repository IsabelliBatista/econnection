<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    protected $table = 'pedidos';
    protected $primaryKey = 'id';
    protected $fillable = [
        'status_pedido'
    ];

    public function clientes(){
        return $this->hasOne('App\Cliente', 'id', 'clientes_id');
    }
    public function produtos(){
        return $this->hasOne('App\Produto', 'id', 'produtos_id');
    }
    public function vendedor(){
        return $this->hasOne('App\Vendedor', 'id', 'vendedor_id');
    }
}
