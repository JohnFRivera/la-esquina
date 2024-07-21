@extends('layout')

@section('content')
    <div class="row border-bottom pb-3">
        <div class="col">
            <h5 class="fw-normal mb-0">Gestionar</h5>
            <h2 class="fw-bold mb-0">Empleados</h2>
        </div>
        <div class="col-auto align-content-end">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                <i class="bi bi-plus-lg"></i>
                Nuevo
            </button>
        </div>
    </div>
    <section class="row row-cols-1 row-cols-md-3 g-4 py-4">
        @foreach ($empleados as $empleado)
            <div class="col">
                <div class="bg-body-tertiary rounded-2 border shadow-sm p-3">
                    <div class="row">
                        <div class="col-10">
                            <h4 class="text-truncate mb-1">{{ $empleado->nombres }}</h4>
                            <div class="hstack gap-2 mb-1">
                                <div class="badge bg-success">
                                    {{ $empleado->puesto }}
                                </div>
                                <small class="text-secondary">
                                    <i class="bi bi-calendar-event-fill me-1"></i>
                                    {{ $empleado->fecha_contratacion }}
                                </small>
                            </div>
                            <h6 class="text-secondary text-truncate fw-normal mb-0">
                                <i class="bi bi-telephone-fill me-1"></i>
                                {{ $empleado->telefono }}
                            </h6>
                        </div>
                        <div class="col-2 align-content-center ms-auto">
                            <a href="{{ route('empleados.show', $empleado) }}" class="link-dark link-opacity-50 link-opacity-100-hover text-decoration-none fs-5 mb-0">
                                <i class="bi bi-gear-fill"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </section>

    <div class="modal fade" id="myModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{ route('empleados.store') }}" method="POST" class="modal-content">
                @csrf
                @method('POST')
                <div class="modal-header">
                    <h1 class="modal-title text-primary fs-5" id="myModalLabel">
                        <i class="bi bi-plus-lg me-2"></i>
                        Crear Proveedor
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="text" name="nombres" class="form-control form-control-lg mb-2"
                        placeholder="Nombres" required>
                    <input type="text" name="puesto" class="form-control form-control-lg mb-2"
                        placeholder="Puesto" required>
                    <input type="date" name="fecha_contratacion" class="form-control form-control-lg mb-2" required>
                    <input type="tel" name="telefono" class="form-control form-control-lg"
                        placeholder="Telefono" minlength="10" maxlength="10" pattern="^[0-9]*$" required>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary me-auto" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Crear</button>
                </div>
            </form>
        </div>
    </div>
@endsection
