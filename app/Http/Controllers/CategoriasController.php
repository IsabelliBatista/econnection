<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Produto;

class CategoriasController extends Controller
{
    protected function create(Request $request)
    {
        $category = Categoria::create([
            'name' => $request->input('name')
        ]);

        $category->save();

        return redirect('/home');
    }
}
