<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("titulo", "Mi Sitio")</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Estilos personalizados -->
    <style>
        body {
            background-color: #121212;
            font-family: 'Segoe UI', sans-serif;
            color: #0f86fd;
        }

        /* NAVBAR */
        .navbar {
            background-color: #1f1f1f;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        }

        .navbar .nav-link {
            color: #f8f9fa;
            transition: 0.3s;
        }

        .navbar .nav-link:hover,
        .navbar .nav-link.active {
            color: #ffc107;
            font-weight: 600;
        }

        /* HERO */
        .hero {
            background-color: #2a2a2a;
            color: #f8f9fa;
            padding: 60px 20px;
            text-align: center;
            border-bottom: 1px solid #333;
        }

        /* CONTENIDO */
        main.container {
            background-color: #1e1e1e;
            padding: 2rem 1rem;
            border-radius: 8px;
        }

        /* FOOTER */
        footer {
            background-color: #1f1f1f;
            color: #cccccc;
            font-size: 0.9rem;
        }

        footer small {
            font-weight: 500;
        }

        a {
            color: #0d6efd;
        }

        a:hover {
            color: #66b2ff;
        }
    </style>
</head>
<body>

    <!-- Menú -->
    @include('components.menu')

    <!-- Hero opcional -->
    @hasSection('hero')
        @yield('hero')
    @endif

    <!-- Contenido principal -->
    <main class="container py-4">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="text-center py-4 mt-5 border-top border-secondary">
        <div class="container">
            @yield('autores', '© 2025 <strong>Mi Sitio</strong> | Desarrollado con 💻 por Alvaro')
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Scripts adicionales -->
    @hasSection('scripts')
        @yield('scripts')
    @endif
</body>
</html>
