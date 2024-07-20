@extends('layout')

@section('content')
    <div class="row border-bottom pb-3">
        <div class="col">
            <h5 class="fw-normal mb-0">Gestionar</h5>
            <h2 class="fw-bold mb-0">Proveedores</h2>
        </div>
        <div class="col-auto align-content-end">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                <i class="bi bi-plus-lg"></i>
                Nuevo
            </button>
        </div>
    </div>
    <section class="row py-4">
        <div class="col">
            <div class="table-responsive bg-body rounded-4 p-4 shadow-sm">
                <table id="myTable" class="table table-hover fs-5 mb-0">
                    <thead>
                        <tr>
                            <th>Nombres</th>
                            <th>Telefono</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($proveedores as $proveedore)
                            <tr>
                                <td>{{ $proveedore->nombres }}</td>
                                <td>{{ $proveedore->telefono }}</td>
                                <td>
                                    <div class="d-flex justify-content-end">
                                        <a href="{{ route('proveedores.edit', $proveedore) }}" class="link-primary text-decoration-none me-1">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <a href="{{ route('proveedores.show', $proveedore) }}" class="link-danger text-decoration-none">
                                            <i class="bi bi-trash-fill"></i>
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
            <form action="{{ route('proveedores.store') }}" method="POST" class="modal-content">
                @csrf
                <div class="modal-header">
                    <h1 class="modal-title text-primary fs-5" id="myModalLabel">
                        <i class="bi bi-plus-lg me-2"></i>
                        Crear Proveedor
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="text" name="nombre" class="form-control form-control-lg mb-2"
                        placeholder="Nombre..." required>
                    <input type="text" name="telefono" class="form-control form-control-lg"
                        placeholder="Telefono..." required>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary me-auto" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Crear</button>
                </div>
            </form>
        </div>
    </div>
@endsection
