@props(['title' => '', 'footer' => null])

<div class="card shadow rounded-4 border-0 mb-4">
    @if($title)
        <div class="card-header bg-primary text-white fw-semibold rounded-top-4">
            {{ $title }}
        </div>
    @endif

    <div class="card-body bg-light">
        {{ $slot }}
    </div>

    @if($footer)
        <div class="card-footer text-muted text-end bg-white rounded-bottom-4">
            {{ $footer }}
        </div>
    @endif
</div>
