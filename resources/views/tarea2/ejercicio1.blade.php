@extends('layouts.app')

@section('title', 'Ejercicio 1: Botón')

@section('content')
    <h2 class="mb-4 text-center">Ejercicio 1: Botón</h2>

    <x-button type="primary" label="Primario" class="w-100 mb-2" />
    <x-button type="secondary" label="Secundario" class="w-100 mb-2" />
    <x-button type="success" label="Éxito" class="w-100 mb-2" />
    <x-button type="danger" label="Peligro" class="w-100 mb-2" icon="trash" />
    <x-button type="warning" label="Advertencia" class="w-100 mb-2" outline="true" />
@endsection
