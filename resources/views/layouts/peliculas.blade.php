<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

    <main class="container-fluid bg-light">
        <div class="row min-vh-100">
            <div class="col-2 d-flex flex-column align-items-center bg-dark text-white p-3">
                <img src="{{asset('img/perfil.jpeg')}}" class="rounded-circle w-50 mb-3" alt="logo">

                <h4 class="fw-bold text-center"></h4>
                <ul class="nav flex-column w-100 mt-3">
                    <a href="#" class="text-decoration-none fw-bold text-white">
                        <li class="nav-item py-2"><i class="fa-solid fa-chart-line me-2"></i> Analisis</li>
                    </a>
                    <a href="#" class="text-decoration-none fw-bold text-white">
                        <li class="nav-item py-2"><i class="fa-solid fa-users me-2"></i> Usuarios</li>
                    </a>
                    <a href="#" class="text-decoration-none fw-bold text-white">
                        <li class="nav-item py-2"><i class="fa-solid fa-server me-2"></i> Servidores</li>
                    </a>
                    <a href="#" class="text-decoration-none fw-bold text-white">
                        <li class="nav-item py-2"><i class="fa-solid fa-cloud me-2"></i> Almacenaje en la Nube</li>
                    </a>
                    <a href="#" class="text-decoration-none fw-bold text-white">
                        <li class="nav-item py-2"><i class="fa-solid fa-cogs me-2"></i> Configuracion</li>
                    </a>
                </ul>
                <div class="mt-auto">
                    <button class="btn btn-azul w-100"><i class="fa-solid fa-sign-out-alt"></i> Logout</button>
                </div>
            </div>
            <div class="col pt-4">
                @yield('content')
            </div>

        </div>
    </main>

    <footer class="bg-dark text-white text-center py-3">
        <p>Todos los derechos reservados</p>
    </footer>
</body>

</html>