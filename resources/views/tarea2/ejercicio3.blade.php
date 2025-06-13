@extends('layouts.app')

@section('title', 'Ejercicio 3: Modal')

@section('content')
    <h2 class="mb-4 text-center">Ejercicio 3: Modal</h2>

    <x-button type="primary" label="Mostrar Modal" class="w-100 mb-4" data-bs-toggle="modal" data-bs-target="#modalConfirmar" />

    <x-modal id="modalConfirmar" title="¿Estás seguro?">
        Esta acción no se puede deshacer.
        <x-slot name="footer">
            <button class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button class="btn btn-danger">Confirmar</button>
        </x-slot>
    </x-modal>
@endsection
