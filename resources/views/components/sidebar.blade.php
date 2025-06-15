<div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark shadow" style="width: 240px; height: 100vh;">
    <a href="/" class="d-flex align-items-center mb-3 text-white text-decoration-none">
        <i class="bi bi-speedometer2 me-2"></i>
        <span class="fs-5">Panel Laravel</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="{{ url('/') }}" class="nav-link text-white">
                <i class="bi bi-house-door me-2"></i> Inicio
            </a>
        </li>
        <li>
            <a href="{{ url('/post/create') }}" class="nav-link text-white">
                <i class="bi bi-file-earmark-plus me-2"></i> Crear Post
            </a>
        </li>
        <li>
            <a href="{{ url('/post/1/edit') }}" class="nav-link text-white">
                <i class="bi bi-pencil-square me-2"></i> Editar Post
            </a>
        </li>
        <li>
            <a href="{{ url('/post/1/tecnologia') }}" class="nav-link text-white">
                <i class="bi bi-eye me-2"></i> Ver Post
            </a>
        </li>
    </ul>
    <hr>
    <div class="text-white-50 small">
        <i class="bi bi-person-circle me-1"></i> Alvaro
    </div>
</div>
