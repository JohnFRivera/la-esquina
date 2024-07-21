@extends('layout')

@section('content')
    <div class="row border-bottom pb-3 mb-3">
        <div class="col">
            <h5 class="fw-normal mb-0">Gestionar</h5>
            <h2 class="fw-bold mb-0">Proveedores</h2>
        </div>
    </div>
    <a href="{{ route('proveedores.index') }}" class="btn btn-primary">
        <i class="bi bi-arrow-left"></i>
    </a>
    <section class="row py-3">
        <div class="col">
            <div class="bg-body rounded-4 p-4 shadow-sm">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="w-100">
                        <div class="row">
                            <div class="col">
                                <h5 class="text-secondary mb-0">Nombres</h5>
                                <h2 class="mb-0">{{ $proveedore->nombres }}</h2>
                            </div>
                            <div class="col">
                                <h5 class="text-secondary mb-0">Telefono</h5>
                                <h2 class="mb-0">{{ $proveedore->telefono }}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex gap-2 fs-3">
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
            </div>
        </div>
    </section>

    <div class="modal fade" id="editModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{ route('proveedores.update', $proveedore) }}" method="POST" class="modal-content">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h1 class="modal-title text-primary fs-4" id="editModalLabel">
                        <i class="bi bi-pencil-fill me-2"></i>
                        Editar Categoria
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-body-secondary">
                    <label for="nombres" class="text-secondary fs-5 ms-1">Nombres</label>
                    <input type="text" name="nombres" class="form-control form-control-lg mb-2"
                        value="{{ $proveedore->nombres }}" required>
                    <label for="telefono" class="text-secondary fs-5 ms-1">Telefono</label>
                    <input type="text" name="telefono" class="form-control form-control-lg"
                        minlength="10" maxlength="10" pattern="^[0-9]*$" value="{{ $proveedore->telefono }}" required>
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
            <form action="{{ route('proveedores.destroy', $proveedore) }}" method="POST" class="modal-content">
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
                    <h5 class="fw-normal">¿Seguro que deseas eliminar al proveedor <b>{{ $proveedore->nombres }}</b>?</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary me-auto" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
