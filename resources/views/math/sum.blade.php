<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Suma</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" 
    rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #e0f7fa, #fff3e0);
            min-height: 100vh;display: flex;
justify-content: center;align-items: center;font-family: 'Segoe UI', sans-serif;
        }
        .card {
            border-radius: 20px;  border: none;
        }
        .card-title {font-size: 2rem;font-weight: bold;
        }
        .result { font-size: 1.5rem;font-weight: bold; color: #388e3c;  }
    </style>
</head>
<body>
    <div class="card shadow p-4 w-100" style="max-width: 500px;">
        <div class="card-body text-center">
            <h3 class="card-title text-info">Operación: Suma</h3>
            <p class="card-text mb-2">Número A: <span class="fw-semibold">{{ $a }}</span></p>
            <p class="card-text mb-2">Número B: <span class="fw-semibold">{{ $b }}</span></p>
            <hr>
            <p class="result">Resultado: {{ $result }}</p>
        </div>
    </div>
</body>
</html>
