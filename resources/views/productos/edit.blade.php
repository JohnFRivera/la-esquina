@extends('layout')

@section('content')
    <div class="row border-bottom pb-3 mb-3">
        <div class="col">
            <h5 class="fw-normal mb-0">Modificar</h5>
            <h2 class="fw-bold mb-0">Productos</h2>
        </div>
    </div>
    <a href="{{ route('productos.index') }}" class="btn btn-primary">
        <i class="bi bi-arrow-left"></i>
    </a>
    <div class="row py-4">
        <div class="col">
            <form action="{{ route('productos.update', $producto) }}" method="POST" class="bg-body-tertiary rounded-3 shadow-sm p-3">
                @csrf
                @method('PUT')
                <div class="row row-cols-1 row-cols-md-3 g-2 mb-3 mb-md-0">
                    <div class="col">
                        <label for="" class="fw-semibold fs-5 mb-1">Nombre</label>
                        <input type="text" name="nombre" class="form-control form-control-lg" value="{{ $producto->nombre }}">
                    </div>
                    <div class="col">
                        <label for="" class="fw-semibold fs-5 mb-1">Categoria</label>
                        <select name="id_categoria" class="form-select form-select-lg">
                            <option value="">Seleccionar...</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="id_proveedor" class="fw-semibold fs-5 mb-1">Proveedor</label>
                        <select name="" class="form-select form-select-lg">
                            <option value="">Seleccionar...</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="" class="fw-semibold fs-5 mb-1">Cantidad</label>
                        <input type="number" name="cantidad" class="form-control form-control-lg" value="{{ $producto->cantidad }}">
                    </div>
                    <div class="col">
                        <label for="" class="fw-semibold fs-5 mb-1">Precio</label>
                        <input type="number" name="precio" class="form-control form-control-lg" value="{{ $producto->precio }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col col-md-2 ms-auto">
                        <button type="submit" class="btn btn-primary w-100">Modificar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
