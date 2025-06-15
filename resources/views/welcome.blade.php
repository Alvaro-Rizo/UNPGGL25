@extends('layouts.appp')

@section('title', 'Inicio')

@section('content')
    <div class="text-center">
        <h1 class="display-4 text-primary">Bienvenido a Laravel</h1>
        <p class="lead mt-3">
            Esta es la página de inicio de tu aplicación. <br>
            Laravel te permite desarrollar sitios modernos y potentes.
        </p>


        <div class="mt-4">
            <a href="{{ url('/post/1/tecnologia') }}" class="btn btn-outline-info me-2">Ver Post (Show)</a>
            <a href="{{ url('/post/create') }}" class="btn btn-outline-success me-2">Crear Post</a>
            <a href="{{ url('/post/1/edit') }}" class="btn btn-outline-warning">Editar Post</a>
        </div>
    </div>
@endsection
