<?php

namespace App\Http\Controllers;

use App\User;
use App\Endereco;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
    protected function create(Request $request)
    {
        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'password' => ['required', 'string', 'min:8', 'confirmed'],
        // ]);
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'cpf' => $request->input('cpf'),
            'telefone' => $request->input('telefone'),
            'data_nasc' => '2020-02-02',
            //'data_nasc' => $request->input('data_nasc'),
            'sexo' => $request->input('sexo'),
        ]);

        $user->save();

        $endereco = Endereco::create([
            'rua' => $request->input('rua'),
            'numero' => $request->input('numero'),
            'bairro' => $request->input('bairro'),
            'cidade' => $request->input('cidade'),
            'cep' => $request->input('cep'),
            'complemento' => 'complemento teste',
            'user_id' => 1
        ]);
        
       $endereco->save();



        return redirect('/home');
    }
}

