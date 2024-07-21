@extends('layout')

@section('content')
    <div class="row border-bottom pb-3 mb-3">
        <div class="col">
            <h5 class="fw-normal mb-0">Gestionar</h5>
            <h2 class="fw-bold mb-0">Productos</h2>
        </div>
    </div>
    <a href="{{ route('productos.index') }}" class="btn btn-primary">
        <i class="bi bi-arrow-left"></i>
    </a>
    <section class="row py-3">
        <div class="col">
            <div class="bg-body rounded-4 p-4 shadow-sm">
                <div class="clearfix">
                    <div class="badge bg-warning text-dark fs-5 mb-3 shadow-sm float-start">
                        {{ $producto->categorias->descripcion }}</div>
                    <div class="float-end fs-3">
                        <button type="button" class="bg-transparent border-0 text-primary p-0" data-bs-toggle="modal"
                            data-bs-target="#editModal">
                            <i class="bi bi-pencil-square"></i>
                        </button>
                        <button type="button" class="bg-transparent border-0 text-danger p-0" data-bs-toggle="modal"
                            data-bs-target="#deleteModal">
                            <i class="bi bi-trash-fill"></i>
                        </button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4 col-md-1">
                        <h5 class="text-secondary mb-0">Nombre</h5>
                        <h2>{{ $producto->nombre }}</h2>
                    </div>
                    <div class="col-12 col-md-4 align-content-center">
                        <h5 class="text-secondary mb-1">Proveedor</h5>
                        <h3>{{ $producto->proveedores->nombres }}</h3>
                    </div>
                    <div class="col-6 col-md-2 align-content-center">
                        <h5 class="text-secondary mb-1">Cantidad</h5>
                        <h3>{{ $producto->cantidad }}</h3>
                    </div>
                    <div class="col-6 col-md-2 align-content-center">
                        <h5 class="text-secondary mb-1">Precio</h5>
                        <h3>$ {{ $producto->precio }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="editModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{ route('productos.update', $producto) }}" method="POST" class="modal-content">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h1 class="modal-title text-primary fs-4" id="editModalLabel">
                        <i class="bi bi-pencil-fill me-2"></i>
                        Editar Producto
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-body-secondary">
                    <label for="nombre" class="text-secondary fs-5 ms-1">Categoria</label>
                    <select name="id_categoria" class="form-select form-select-lg mb-1" required>
                        <option>Seleccionar...</option>
                        @foreach ($categorias as $categoria)
                            @if ($producto->id_categoria == $categoria->id)
                                <option value="{{ $categoria->id }}" selected>{{ $categoria->descripcion }}</option>
                            @else
                                <option value="{{ $categoria->id }}">{{ $categoria->descripcion }}</option>
                            @endif
                        @endforeach
                    </select>
                    <label for="nombre" class="text-secondary fs-5 ms-1">Nombre</label>
                    <input type="text" name="nombre" class="form-control form-control-lg mb-1"
                        value="{{ $producto->nombre }}" required>
                    <label for="nombre" class="text-secondary fs-5 ms-1">Proveedor</label>
                    <select name="" class="form-select form-select-lg mb-1" required>
                        <option>Seleccionar...</option>
                        @foreach ($proveedores as $proveedore)
                            @if ($producto->id_proveedor == $proveedore->id)
                                <option value="{{ $proveedore->id }}" selected>{{ $proveedore->nombres }}</option>
                            @else
                                <option value="{{ $proveedore->id }}">{{ $proveedore->nombres }}</option>
                            @endif
                        @endforeach
                    </select>
                    <div class="row row-cols-1 row-cols-md-2">
                        <div class="col">
                            <label for="nombre" class="text-secondary fs-5 ms-1">Cantidad</label>
                            <input type="number" name="cantidad" class="form-control form-control-lg mb-1"
                                value="{{ $producto->cantidad }}" required>
                        </div>
                        <div class="col">
                            <label for="nombre" class="text-secondary fs-5 ms-1">Precio</label>
                            <input type="number" name="precio" class="form-control form-control-lg"
                                value="{{ $producto->precio }}" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary me-auto" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Modificar</button>
                </div>
            </form>
        </div>
    </div>
    <div class="modal fade" id="deleteModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{ route('productos.destroy', $producto) }}" method="POST" class="modal-content">
                @csrf
                @method('DELETE')
                <div class="modal-header">
                    <h1 class="modal-title text-danger fs-4" id="editModalLabel">
                        <i class="bi bi-exclamation-circle-fill me-2"></i>
                        ¡Advertencia!
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5 class="fw-normal">¿Seguro que deseas eliminar el producto <b>{{ $producto->nombre }}</b>?</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary me-auto" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
