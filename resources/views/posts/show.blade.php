@extends('layouts.appp')

@section('title', 'Detalle del Post')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Detalle del Post</h4>
        </div>
        <div class="card-body">
            <p><strong>ID del post:</strong> {{ $id }}</p>
            <p><strong>Categoría:</strong> {{ $categoria }}</p>

            <a href="{{ url('/') }}" class="btn btn-outline-primary">Volver al inicio</a>
        </div>
    </div>
@endsection
