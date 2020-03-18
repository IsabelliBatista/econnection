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
        /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'cpf' => ['required', 'integer', 'max:11', 'unique:users']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    
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
            'complemento' => $request->input('complemento'),
            'user_id' => $user->id,
        ]);
        
       $endereco->save();

       auth()->login($user);

       $user = Auth::user();
       
       dd($user);

       //return redirect()->to('/home');

    }

    // public function alterandoUsuario(Request $request, $id){
    //  //$user = Auth::user();
    //     // Get the currently authenticated user's ID...
    //     //$id = Auth::id();
    //     // $user = User::find($id);

    //     // $request->all();

    //     // $user->name => $request->input('name');
    //     // $user->password => Hash::make($request->input('password'));
    //     // $user->telefone => $request->input('telefone');
    //     // $user->data_nasc => $request->input('dataNasc');
    //     // $user->sexo => $request->input('sexo');

    //     // $user->save();

    //     $endereco = Endereco::whereIn('user_id', $id);

    //     // $endereco->rua => $request->input('rua'),
    //     // $endereco->numero => $request->input('numero'),
    //     // $endereco->bairro => $request->input('bairro'),
    //     // $endereco->cidade => $request->input('cidade'),
    //     // $endereco->cep => $request->input('cep'),
    //     // $endereco->complemento => $request->input('complemento'),
    //     // $endereco->user_id => $user->id,

    //     dd($endereco);
    //     // $endereco->save();
        
    //     // auth()->login($user);
        
    //     return redirect()->to('/home');
    // }
}

