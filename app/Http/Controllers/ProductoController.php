<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::with(['categorias','proveedores'])->get();
        return view('productos.index', compact('productos'));
    }

    public function edit(Producto $producto)
    {
        return view('productos.edit', compact('producto'));
    }

    public function show(Producto $producto)
    {
        return view('productos.delete', compact('producto'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'id_categoria' => 'required',
            'id_proveedor' => 'required',
            'cantidad' => 'required',
            'precio' => 'required',
        ]);
        Producto::create($request->all());
        return redirect()->route('productos.index');
    }

    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'nombre' => 'required',
            'id_categoria' => 'required',
            'id_proveedor' => 'required',
            'cantidad' => 'required',
            'precio' => 'required',
        ]);
        $producto->update($request->all());
        return redirect()->route('productos.index');
    }

    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('productos.index');
    }
}
