<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-2.0.8/datatables.min.css" rel="stylesheet">
    <title>La Esquina</title>
</head>

<body>
    <header class="container-fluid bg-warning shadow">
        <div class="row shadow-sm py-3 px-4">
            <div class="col">
                <h1 class="fw-bold mb-0">Tienda La Esquina</h1>
            </div>
            <div class="col-auto align-content-center">
                <a href="" class="btn btn-danger">Cerrar sesión</a>
            </div>
        </div>
        <div class="row">
            <nav class="col">
                <ul class="nav nav-underline justify-content-center flex-column flex-md-row gap-0 gap-md-5 fs-5">
                    <li class="nav-item">
                        <a href="" class="nav-link link-dark fw-semibold link-opacity-50 link-opacity-100-hover">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link link-dark fw-semibold link-opacity-50 link-opacity-100-hover">Empleados</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link link-dark fw-semibold link-opacity-50 link-opacity-100-hover">Proveedores</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link link-dark fw-semibold link-opacity-50 link-opacity-100-hover">Categorias</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link link-dark fw-semibold link-opacity-50 link-opacity-100-hover">Ventas</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="container-sm py-2 py-md-4">
        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-2.0.8/datatables.min.js"></script>
</body>

</html>