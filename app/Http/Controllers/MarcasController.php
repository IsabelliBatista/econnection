<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marca;
use App\Produto;

class MarcasController extends Controller
{
    protected function create(Request $request)
    {
        $marca = Marca::create([
            'name' => $request->input('name')
        ]);

        $marca->save();

        return redirect()->to('/listar/marca')->with('message', 'Marca Cadastrada com sucesso!');
    }
    public function listandoMarca() 
    {
        $marca = Marca::all();
        //dd($marca);
        return view('marcas.listandoMarca')->with('marca', $marca);
    }

    public function editarMarca()
    {
        $marca = Marca::all();
        return view('marcas.listandoMarca')->with('marca', $marca);
    }

    public function atualizarMarca(Request $request, Marca $marca) 
    {
        $marca->update([
            'name' => $request->input('name')
        ]);
        
        return view('marcas.listandoMarca')->with('marca', $marca);

    }
    public function excluirMarca(){
        $marca = Marca::all();

        $marca->delete();

        return redirect('/listar/marca');
    }
}
