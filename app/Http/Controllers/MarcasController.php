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

    public function atualizarMarca(Request $request, $id) 
    {
        $marca = Marca::find($id);
        $marca->update([
            'name' => $request->input('name')
        ]);

        $marca = Marca::all();
        return view('marcas.listandoMarca')->with('marca', $marca);
    }

    public function excluirMarca($id)
    {
        $marca = Marca::find($id);
        dd($marca);
        $marca->delete();

        $marca = Marca::all();
        return view('marcas.listandoMarca')->with('marca', $marca);

    }
}
