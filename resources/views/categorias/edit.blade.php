@extends('layout')

@section('content')
    <div class="row border-bottom pb-3 mb-3">
        <div class="col">
            <h5 class="fw-normal mb-0">Modificar</h5>
            <h2 class="fw-bold mb-0">Categorias</h2>
        </div>
    </div>
    <a href="{{ route('categorias.index') }}" class="btn btn-primary">
        <i class="bi bi-arrow-left"></i>
    </a>
    <div class="row">
        <div class="col-4 mx-auto">
            <form action="{{ route('categorias.update', $categoria) }}" method="POST" class="bg-body-tertiary rounded-3 shadow-sm p-3">
                @csrf
                @method('PUT')
                <label for="" class="fw-semibold fs-5 mb-1">Descripción</label>
                <input type="text" name="descripcion" class="form-control form-control-lg mb-3" value="{{ $categoria->descripcion }}">
                <button type="submit" class="btn btn-primary w-100">Modificar</button>
            </form>
        </div>
    </div>
@endsection
