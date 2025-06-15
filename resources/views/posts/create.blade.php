@extends('layouts.appp')

@section('title', 'Crear')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Página de creación</h4>
        </div>
        <div class="card-body">
            <p>Aquí podrías mostrar una descripción o instrucciones para crear un nuevo registro.</p>

              <a href="{{ url('/') }}" class="btn btn-outline-primary">Volver al inicio</a>
        </div>
    </div>
@endsection
