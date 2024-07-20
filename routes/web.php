<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\ProductoController;

Route::resource('categorias', CategoriaController::class);
Route::resource('proveedores', ProveedorController::class);
Route::resource('productos', ProductoController::class);