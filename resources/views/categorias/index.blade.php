@extends('layout')

@section('content')
    <div class="row border-bottom pb-3">
        <div class="col">
            <h5 class="fw-normal mb-0">Gestionar</h5>
            <h2 class="fw-bold mb-0">Categorias</h2>
        </div>
        <div class="col-auto align-content-end">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                <i class="bi bi-plus-lg"></i>
                Nuevo
            </button>
        </div>
    </div>
    <section class="row row-cols-2 row-cols-md-4 g-4 py-4">
        @foreach ($categorias as $categoria)
            <div class="col">
                <div class="bg-body-tertiary rounded-2 border shadow-sm p-3">
                    <div class="row">
                        <div class="col fw-semibold text-truncate fs-5">
                            {{ $categoria->descripcion }}
                        </div>
                        <div class="col-auto align-content-center">
                            <a href="{{ route('categorias.edit', $categoria) }}"
                                class="link-primary text-decoration-none me-1">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <a href="{{ route('categorias.show', $categoria) }}"
                                class="link-danger text-decoration-none">
                                <i class="bi bi-trash-fill"></i>
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
            <form action="{{ route('categorias.store') }}" method="POST" class="modal-content">
                @csrf
                <div class="modal-header">
                    <h1 class="modal-title text-primary fs-5" id="myModalLabel">
                        <i class="bi bi-plus-lg me-2"></i>
                        Crear Categoria
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="text" name="descripcion" class="form-control form-control-lg"
                        placeholder="Descripción..." required>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary me-auto" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Crear</button>
                </div>
            </form>
        </div>
    </div>
@endsection
