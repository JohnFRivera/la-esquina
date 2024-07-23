@extends('layout')

@section('content')
    <div class="row border-bottom pb-3">
        <div class="col">
            <h5 class="fw-normal mb-0">Gestionar</h5>
            <h2 class="fw-bold mb-0">Productos</h2>
        </div>
        <div class="col-auto align-content-end">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                <i class="bi bi-plus-lg"></i>
                Nuevo
            </button>
        </div>
    </div>
    <section class="row py-4">
        @foreach ($productos as $producto)
            @if ($producto->cantidad <= 20)
                <div class="col-12">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="bi bi-exclamation-circle-fill me-2"></i>
                        El producto <b>{{ $producto->nombre }}</b> tiene bajo stock (<b>{{ $producto->cantidad }}</b>)
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            @endif
        @endforeach
        <div class="col">
            <div class="table-responsive bg-body rounded-4 p-4 shadow-sm">
                <table id="myTable" class="table table-hover fs-5 mb-0">
                    <thead>
                        <tr>
                            <th>Categoria</th>
                            <th>Nombre</th>
                            <th>Proveedor</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($productos as $producto)
                            <tr>
                                <td>
                                    <div class="badge bg-warning text-dark">
                                        {{ $producto->categorias->descripcion }}
                                    </div>
                                </td>
                                <td>{{ $producto->nombre }}</td>
                                <td>{{ $producto->proveedores->nombres }}</td>
                                <td>
                                    @if ($producto->cantidad > 20)
                                        {{ $producto->cantidad }}
                                    @else
                                        <div class="badge bg-danger">
                                            {{ $producto->cantidad }}
                                        </div>
                                    @endif
                                </td>
                                <td>$ {{ $producto->precio }}</td>
                                <td>
                                    <div class="d-flex justify-content-end">
                                        <a href="{{ route('productos.show', $producto) }}"
                                            class="link-dark link-opacity-50 link-opacity-100-hover text-decoration-none">
                                            <i class="bi bi-gear-fill"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <div class="modal fade" id="myModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{ route('productos.store') }}" method="POST" class="modal-content">
                @csrf
                @method('POST')
                <div class="modal-header">
                    <h1 class="modal-title text-primary fs-5" id="myModalLabel">
                        <i class="bi bi-plus-lg me-2"></i>
                        Crear Producto
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <select name="id_categoria" class="form-select form-select-lg mb-2" required>
                        <option>Categoria</option>
                        @foreach ($categorias as $categoria)
                            <option value="{{ $categoria->id }}">{{ $categoria->descripcion }}</option>
                        @endforeach
                    </select>
                    <input type="text" name="nombre" class="form-control form-control-lg mb-2" placeholder="Nombre" required>
                    <select name="id_proveedor" class="form-select form-select-lg mb-2" required>
                        <option>Proveedor</option>
                        @foreach ($proveedores as $proveedore)
                            <option value="{{ $proveedore->id }}">{{ $proveedore->nombres }}</option>
                        @endforeach
                    </select>
                    <div class="row row-cols-1 row-cols-md-2 g-2">
                        <div class="col">
                            <input type="number" name="cantidad" class="form-control form-control-lg mb-2 mb-md-0"
                                placeholder="Cantidad" min="1" pattern="^[0-9]*$" required>
                        </div>
                        <div class="col">
                            <input type="number" name="precio" class="form-control form-control-lg" placeholder="Precio" min="0" pattern="^[0-9]*$" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary me-auto" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Crear</button>
                </div>
            </form>
        </div>
    </div>
@endsection
