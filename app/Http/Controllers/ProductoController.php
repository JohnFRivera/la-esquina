<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Proveedore;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::with(['categorias','proveedores'])->get();
        $categorias = Categoria::all();
        $proveedores = Proveedore::all();
        return view('productos.index', compact(['productos','categorias','proveedores']));
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

    public function show(Producto $producto)
    {
        $categorias = Categoria::all();
        $proveedores = Proveedore::all();
        return view('productos.show', compact(['producto','categorias','proveedores']));
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
        return redirect()->route('productos.show');
    }

    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('productos.index');
    }
}
