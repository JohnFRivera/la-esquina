<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class EmpleadoController extends Controller
{
    public function index()
    {
        $empleados = Empleado::all();
        return view('empleados.index', compact('empleados'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombres' => 'required',
            'puesto' => 'required',
            'fecha_contratacion' => 'required',
            'telefono' => 'required',
        ]);
        Empleado::create($request->all());
        return redirect()->route('empleados.index');
    }

    public function show(Empleado $empleado)
    {
        return view('empleados.show', compact('empleado'));
    }

    public function update(Request $request, Empleado $empleado)
    {
        $request->validate([
            'nombres' => 'required',
            'puerto' => 'required',
            'fecha_contratacion' => 'required',
            'telefono' => 'required',
        ]);
        $empleado->update($request->all());
        return redirect()->route('empleados.show', compact('empleado'));
    }

    public function destroy(Empleado $empleado)
    {
        $empleado->delete();
        return redirect()->route('empleados.index');
    }
}
