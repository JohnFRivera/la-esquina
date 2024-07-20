@extends('layout')

@section('content')
    <div class="row border-bottom pb-3 mb-3">
        <div class="col">
            <h5 class="fw-normal mb-0">Modificar</h5>
            <h2 class="fw-bold mb-0">Proveedores</h2>
        </div>
    </div>
    <a href="{{ route('proveedores.index') }}" class="btn btn-primary">
        <i class="bi bi-arrow-left"></i>
    </a>
    <div class="row py-4">
        <div class="col col-md-5 mx-auto">
            <form action="{{ route('proveedores.update', $proveedore) }}" method="POST" class="bg-body-tertiary rounded-3 shadow-sm p-3">
                @csrf
                @method('PUT')
                <label for="nombre" class="fw-semibold fs-5 mb-1">Nombre</label>
                <input type="text" name="nombre" class="form-control form-control-lg mb-2" value="{{ $proveedore->nombres }}">
                <label for="telefono" class="fw-semibold fs-5 mb-1">Telefono</label>
                <input type="tel" name="telefono" class="form-control form-control-lg mb-3" value="{{ $proveedore->telefono }}">
                <button type="submit" class="btn btn-primary w-100">Modificar</button>
            </form>
        </div>
    </div>
@endsection
