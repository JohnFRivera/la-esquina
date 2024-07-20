<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-2.0.8/datatables.min.css" rel="stylesheet">
    <title>La Esquina</title>
</head>

<body class="bg-body-secondary">
    <header class="container-fluid bg-warning shadow-sm">
        <div class="row py-3 px-4">
            <div class="col">
                <h1 class="fw-bold mb-0">
                    <i class="bi bi-shop-window"></i>
                    La Esquina
                </h1>
            </div>
            <div class="col-auto align-content-center">
                <a href="" class="btn btn-danger">Cerrar sesión</a>
            </div>
        </div>
        <div class="row bg-body">
            <nav class="col">
                <ul class="nav nav-underline justify-content-center flex-column flex-md-row gap-0 gap-md-5 fs-5">
                    <li class="nav-item">
                        <a href="{{ route('productos.index') }}"
                            class="nav-link link-dark fw-semibold link-opacity-75 link-opacity-100-hover">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('categorias.index') }}"
                            class="nav-link link-dark fw-semibold link-opacity-75 link-opacity-100-hover">Categorias</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('proveedores.index') }}"
                            class="nav-link link-dark fw-semibold link-opacity-75 link-opacity-100-hover">Proveedores</a>
                    </li>
                    <li class="nav-item">
                        <a href=""
                            class="nav-link link-dark fw-semibold link-opacity-75 link-opacity-100-hover">Empleados</a>
                    </li>
                    <li class="nav-item">
                        <a href=""
                            class="nav-link link-dark fw-semibold link-opacity-75 link-opacity-100-hover">Ventas</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="container-sm py-2 py-md-3">
        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-2.0.8/datatables.min.js"></script>
    <script>
        let table = new DataTable('#myTable', {
            language: {
                "decimal": ",",
                "emptyTable": "No hay datos disponibles en la tabla",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ entradas",
                "infoEmpty": "Mostrando 0 a 0 de 0 entradas",
                "infoFiltered": "(filtrado de _MAX_ entradas totales)",
                "thousands": ".",
                "lengthMenu": "Mostrar _MENU_ entradas",
                "loadingRecords": "Cargando...",
                "search": "Buscar: ",
                "zeroRecords": "No se encontraron registros coincidentes",
                "aria": {
                    "orderable": "Ordenar por esta columna",
                    "orderableReverse": "Ordenar esta columna en orden inverso"
                }
            }
        });
    </script>
</body>

</html>
