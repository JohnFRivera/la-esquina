@extends('layout')

@section('content')
    <div class="row border-bottom pb-3 mb-3">
        <div class="col">
            <h5 class="fw-normal mb-0">Eliminar</h5>
            <h2 class="fw-bold mb-0">Categorias</h2>
        </div>
    </div>
    <a href="{{ route('categorias.index') }}" class="btn btn-primary">
        <i class="bi bi-arrow-left"></i>
    </a>
    <div class="row">
        <div class="col-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    ¡Advertencia!
                </div>
                <div class="card-body">
                  <p class="fs-5">¿Seguro que quieres eliminar <b>{{ $categoria->descripcion }}</b>?</p>
                </div>
                <div class="card-footer">
                    <div class="clearfix">
                        <a href="{{ route('categorias.index') }}" class="btn btn-secondary float-start">Cancelar</a>
                        <form action="{{ route('categorias.destroy', $categoria) }}" method="POST" class="float-end">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </div>
                  </div>
              </div>
        </div>
    </div>
@endsection