<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bienvenido</title>

    <!-- Link a Bootstrap 5 desde CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container text-center mt-5">
        <div class="card shadow-sm">
            <div class="card-body">
                <h1 class="display-4 text-primary">Lista de Post</h1>
                <a href="{{ url('/') }}" class="btn btn-primary mt-3">Volver al Inicio</a>
            </div>
        </div>

        {{-- Aquí se muestra el componente de alerta --}}
        <x-alert type="warning">
            <x-slot name="titulo">Lista de posts</x-slot>
            <x-slot name="contenido">Esta es la informacion de todos los posts</x-slot>
        </x-alert>

        

        <!-- Ejemplo alternativo comentado -->
        {{--
        <x-alert>
            <x-slot name="titulo">Lista de Posts</x-slot>
            <x-slot name="contenido">Esta es la información de todos los posts</x-slot>
        </x-alert>
        --}}
    </div>

    <!-- Script de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
