<footer class="pt-5 pb-4 footer-light">
    <div class="container-xl">
        <div class="row gy-4 align-items-start">
            <div class="col-lg-4">
                <img src="{{ asset('images/logo-centroenlace-2.png') }}" class="img-fluid mb-3" alt="Centro ENLACE" style="max-height: 100px;">
                <p class="mb-0">Conectando la energía y el conocimiento de América Latina y el Caribe.</p>
            </div>
            <div class="col-lg-3 col-md-4">
                <h6 class="text-uppercase text-secondary fw-semibold mb-3">Explora</h6>
                <ul class="list-unstyled mb-0 d-grid gap-2">
                    <li><a href="{{ route('home') }}">Inicio</a></li>
                    <li><a href="{{ route('home').'#quienes-somos' }}">Quiénes Somos</a></li>
                    <li><a href="{{ route('home').'#propuesta' }}">Propuesta de Valor</a></li>
                    <li><a href="{{ route('home').'#areas' }}">Áreas de Acción</a></li>
                    <li><a href="{{ route('home').'#contacto' }}">Contacto</a></li>
                </ul>
            </div>
            <div class="col-lg-5 col-md-8">
                <h6 class="text-uppercase text-secondary fw-semibold mb-3">Conversemos</h6>
                <div class="d-grid gap-2">
                    <a href="https://centroenlace.org" target="_blank" rel="noreferrer" class="d-flex align-items-center gap-3">
                        <span class="icon-circle icon-circle--outline mb-0"><i class="fa-solid fa-globe"></i></span>
                        <span>centroenlace.org</span>
                    </a>
                    <a href="mailto:contacto@centroenlace.org" class="d-flex align-items-center gap-3">
                        <span class="icon-circle icon-circle--outline mb-0"><i class="fa-solid fa-envelope"></i></span>
                        <span>contacto@centroenlace.org</span>
                    </a>
                    <a href="https://www.linkedin.com/company/centro-enlace/" target="_blank" rel="noreferrer" class="d-flex align-items-center gap-3">
                        <span class="icon-circle icon-circle--outline mb-0"><i class="fa-brands fa-linkedin-in"></i></span>
                        <span>LinkedIn: centro-enlace</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="footer-divider my-4"></div>

        <div class="d-flex flex-column flex-md-row align-items-center justify-content-between gap-3">
            <small class="mb-0">© {{ now()->year }} Centro ENLACE. Todos los derechos reservados.</small>
            <small class="mb-0">Impulsado por OLADE y Universidad de Chile.</small>
        </div>
    </div>
</footer>
