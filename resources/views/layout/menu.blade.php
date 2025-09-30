<div class="fixed-top">
    <nav class="navbar navbar-expand-lg navbar-light navbar-enlace py-0 shadow-sm">
        <div class="container-xl py-2">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('images/logo-centroenlace-2.png') }}" class="img-fluid" style="max-height: 60px;" alt="Centro Enlace">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item px-3 d-flex align-items-center me-3 @if( Request::is('/') ) active @endif">
                        <a class="nav-link" aria-current="page" href="">Inicio</a>
                    </li>
                    <li class="nav-item px-3 d-flex align-items-center me-3">
                        <a class="nav-link" aria-current="page" href="#quienes-somos">Quiénes Somos</a>
                    </li>
                    <li class="nav-item px-3 d-flex align-items-center me-3">
                        <a class="nav-link" aria-current="page" href="#propuesta">Propuesta</a>
                    </li>
                    <li class="nav-item px-3 d-flex align-items-center me-3">
                        <a class="nav-link" aria-current="page" href="#areas">Áreas</a>
                    </li>
                    <li class="nav-item px-3 d-flex align-items-center me-3">
                        <a class="nav-link" aria-current="page" href="#contacto">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
