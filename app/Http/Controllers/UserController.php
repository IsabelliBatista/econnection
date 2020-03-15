<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'cpf' => '123456789',
            'telefone' => '1233132',
            'data_nasc' => ' 2020-03-15',
            'sexo' => 'F',
            'endereco_id' => $endereco->id, //deletar DB
            'endereco_entrega_id' => $endereco, //detar DB
        ]);

        $user->save();
        $userId = $user->id

        $endereco = Endereco::create([
            'rua' => 'teste',
            'numero' => 123,
            'bairro' => 'bairro teste',
            'cidade' => 'cidade',
            'cep' => '123123',
            'complemento' => 'complemento teste'
            'user_id' => $userId
        ]);
        
        $endereco->save();
}
