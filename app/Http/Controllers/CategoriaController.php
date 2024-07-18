<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();
        return view('categorias.index', compact('categorias'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'descripcion' => 'required',
        ]);
        Categoria::create($request->all());
        return redirect()->route('categorias.index');
    }

    public function update(Request $request, Categoria $categoria)
    {
        $request->validate([
            'descripcion' => 'required',
        ]);
        $categoria->update($request->all());
        return redirect()->route('categorias.index');
    }

    public function destroy(Categoria $categoria)
    {
        $categoria->delete();
        return redirect()->route('categorias.index');
    }
}
