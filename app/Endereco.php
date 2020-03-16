<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Endereco extends Model
{
    protected $table = 'endereco';
    protected $primaryKey = 'id';
    protected $fillable = [
        'rua', 'numero', 'bairro', 'cidade', 'cep', 'complemento', 'user_id'
    ];

    public function user(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
