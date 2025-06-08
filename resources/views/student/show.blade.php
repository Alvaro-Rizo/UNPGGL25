<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Estudiante</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" 
    rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #fce4ec, #f3e5f5);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center font-family: 'Segoe UI', sans-serif; }
        .card {
border-radius: 20px;border: none; }
        .card-title {font-size: 2rem; font-weight: bold; }
        .student-data {font-size: 1.4rem;color: #6a1b9a; font-weight: bold;}
    </style>
</head>
<body>
    <div class="card shadow p-4 w-100" style="max-width: 500px;">
        <div class="card-body text-center">
            <h3 class="card-title text-purple">Datos del Estudiante</h3>
            <p class="student-data">Nombre: {{ $name }}</p>
            <p class="student-data">Edad: {{ $age }} años</p>
        </div>
    </div>
</body>
</html>
