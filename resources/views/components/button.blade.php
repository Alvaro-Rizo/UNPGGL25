@props([
    'type' => 'primary',
    'label' => 'Botón',
    'size' => 'md',
    'outline' => false,
    'icon' => null,
])

@php
    $base = $outline ? "btn btn-outline-$type" : "btn btn-$type";
    $sizeClass = match($size) {
        'sm' => 'btn-sm',
        'lg' => 'btn-lg',
        default => ''
    };
@endphp

<button {{ $attributes->merge(['class' => "$base $sizeClass d-flex align-items-center gap-2 shadow-sm rounded-pill"]) }}>
    @if($icon)
        <i class="bi bi-{{ $icon }}"></i>
    @endif
    {{ $label }}
</button>
