<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',  'cpf', 'telefone', 'data_nasc', 'sexo', 'endereco_id', 'endereco_entrega_id'
    ];

    public function endereco(){
        return $this->hasOne('App\Endereco', 'id', 'endereco_id');
    }

    public function endereco_entrega(){
        return $this->hasMany('App\EnderecoEntrega', 'id', 'endereco_entrega_id');
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

}
