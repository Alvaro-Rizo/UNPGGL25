@extends('layouts.appp')

@section('title', 'Editar')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Página de edición</h4>
        </div>
        <div class="card-body">
            <p>Aquí podrías mostrar información del registro y permitir su edición si lo deseas más adelante.</p>


              <a href="{{ url('/') }}" class="btn btn-outline-primary">Volver al inicio</a>
        </div>

    </div>
@endsection
