<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Edad</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
     rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #e3f2fd, #fffde7);
            min-height: 100vh;display: flex;justify-content: center;
            align-items: center;font-family: 'Segoe UI', sans-serif;}
        .card {
            border-radius: 20px;border: none;}
        .card-title {font-size: 2rem;font-weight: bold;}
        .age-info {font-size: 1.4rem;color: #0277bd;font-weight: bold;}
        .age-result { font-size: 1.6rem; color: #2e7d32; font-weight: bold;}
    </style>
</head>
<body>
    <div class="card shadow p-4 w-100" style="max-width: 500px;">
        <div class="card-body text-center">
            <h3 class="card-title text-primary">Calculadora de Edad</h3>
            <p class="age-info">Año de Nacimiento: {{ $birthYear }}</p>
            <hr>
            <p class="age-result">Edad: {{ $age }} años</p>
        </div>
    </div>
</body>
</html>
