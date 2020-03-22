<?php

namespace App\Http\Controllers;

use App\User;
use App\Endereco;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'cpf' => ['required', 'integer', 'max:11', 'unique:users'],
            'cep' => ['required', 'integer', 'max:8']
        ]);
    }

    protected function create(Request $request)
    {

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'cpf' => $request->input('cpf'),
            'telefone' => $request->input('telefone'),
            'data_nasc' => $request->input('dataNasc'),
            'sexo' => $request->input('sexo'),
        ]);
        
        $user->save();

        $endereco = Endereco::create([
            'rua' => $request->input('rua'),
            'numero' => $request->input('numero'),
            'bairro' => $request->input('bairro'),
            'cidade' => $request->input('cidade'),
            'cep' => $request->input('cep'),
            'estado' => $request->input('estado'),
            'complemento' => $request->input('complemento'),
            'user_id' => $user->id,
        ]);
        
       $endereco->save();

       auth()->login($user);

       $user = Auth::user();

       return redirect()->to('/home');


    }
    
    public function listandoUsuario() 
    {
        $user = Auth::user();
        $endereco = Endereco::where('user_id', $user->id)->get();
        return view('usuario.listarUsuario')->with(['user' => $user, 'endereco' => $endereco]);
    }

    public function editarUsuario()
    {
        $user = Auth::user();
        $endereco = Endereco::where('user_id', $user->id)->get();
        return view('usuario.editarUsuario')->with(['user' => $user, 'endereco' => $endereco]);
    }

    public function atualizarUsuario(Request $request) 
    {
        $user = Auth::user();
        $user->update([
            'name' => $request->input('name'),
            'telefone' => $request->input('telefone'),
            'data_nasc' => $request->input('dataNasc'),
            'sexo' => $request->input('sexo'),
        ]);

        Endereco::where('user_id', $user->id)->update([
            'rua' => $request->input('rua'),
            'numero' => $request->input('numero'),
            'bairro' => $request->input('bairro'),
            'cidade' => $request->input('cidade'),
            'cep' => $request->input('cep'),
            'estado' => $request->input('estado'),
            'complemento' => $request->input('complemento'),
            ]);
        
        $endereco = Endereco::where('user_id', $user->id)->get();

        return redirect()->to('/listar/usuario')->with(['user' => $user, 'endereco' => $endereco, 'mensagem' => 'Dados atualizados com sucesso!']);

    }
    
}

