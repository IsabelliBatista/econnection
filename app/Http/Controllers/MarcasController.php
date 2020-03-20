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

        return redirect('/adicionandoM');
    }
}
