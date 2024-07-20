<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedore;

class ProveedorController extends Controller
{
    public function index()
    {
        $proveedores = Proveedore::all();
        return view('proveedores.index', compact('proveedores'));
    }

    public function edit(Proveedore $proveedore)
    {
        return view('proveedores.edit', compact('proveedore'));
    }

    public function show(Proveedore $proveedore)
    {
        return view('proveedores.delete', compact('proveedore'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'telefono' => 'required',
        ]);
        Proveedore::create($request->all());
        return redirect()->route('proveedores.index');
    }

    public function update(Request $request, Proveedore $proveedore)
    {
        $request->validate([
            'nombre' => 'required',
            'telefono' => 'required',
        ]);
        $proveedore->update($request->all());
        return redirect()->route('proveedores.index');
    }

    public function destroy(Proveedore $proveedore)
    {
        $proveedore->delete();
        return redirect()->route('proveedores.index');
    }
}
