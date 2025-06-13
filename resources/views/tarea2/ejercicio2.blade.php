@extends('layouts.app')

@section('title', 'Ejercicio 2: Tarjeta')

@section('content')
    <h2 class="mb-4 text-center">Ejercicio 2: Tarjeta</h2>

    <x-card title="Título de la tarjeta" footer="Pie de la tarjeta">
        <p>Este es el contenido de la tarjeta. Puedes personalizarlo como desees.</p>
    </x-card>
@endsection
