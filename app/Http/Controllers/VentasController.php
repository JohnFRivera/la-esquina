<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta;

class VentasController extends Controller
{
    public function create()
    {
        return view('ventas.create');
    }
}
