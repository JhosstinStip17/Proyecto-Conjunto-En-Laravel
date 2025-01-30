<!-- resources/views/layout.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Aplicación')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Proyecto Conjuntos</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{route('conjunto.index')}}">Conjuntos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('torre.index')}}">Torres</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('apartamento.index')}}">Apartamentos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('usuario.index')}}">Usuarios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('sancion.index')}}">Sanciones</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('parqueadero.index')}}">Parqueadero</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('puesto.index')}}">Puestos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container mt-4">
        @yield('content')
    </main>

    <footer class="text-center mt-5">
        <p>&copy; 2025 Conjuntos. Todos los derechos reservados.</p>
    </footer>
</body>

</html>