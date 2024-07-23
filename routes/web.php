<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\VentasController;

Route::get('/', function () {
    return view('index');
});

Route::resource('categorias', CategoriaController::class);
Route::resource('proveedores', ProveedorController::class);
Route::resource('productos', ProductoController::class);
Route::resource('empleados', EmpleadoController::class);
Route::resource('ventas', VentasController::class);