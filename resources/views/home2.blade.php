@extends('layout.master')

@section('title_1','Centro Enlace')
@section('title_2','Propuesta Alternativa')
@section('class-body','bg-surface')

@section('pre_css')
@endsection

@section('css')
    @vite('resources/less/app2.less')
@endsection

@section('content')

    {{-- Hero Section Alternative --}}
    <section id="hero" class="hero-section-v2">
        <div class="container-xl">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="hero-badge" data-aos="fade-up">
                        <i class="fa-solid fa-bolt"></i>
                        <span>Transformando el futuro energético regional</span>
                    </div>

                    <h1 class="hero-title-v2" data-aos="fade-up" data-aos-delay="100">
                        Centro <span style="color: #fff;">ENLACE</span>
                    </h1>

                    <p class="hero-subtitle" data-aos="fade-up" data-aos-delay="200">
                        El hub latinoamericano que conecta conocimiento, instituciones y soluciones para acelerar la transición energética sostenible en América Latina y el Caribe.
                    </p>

                    <div class="cta-group" data-aos="fade-up" data-aos-delay="300">
                        <a href="#contacto" class="btn btn-hero-primary">
                            <i class="fa-solid fa-rocket me-2"></i>
                            Impulsa tu proyecto
                        </a>
                        <a href="#propuesta" class="btn btn-hero-secondary">
                            <i class="fa-solid fa-play me-2"></i>
                            Conoce más
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- About Section with Visual Stats --}}
    <section id="quienes-somos">
        <div class="container-xl">
            <div class="section-header-v2" data-aos="fade-up">
                <div class="section-badge">
                    <i class="fa-solid fa-users"></i>
                    <span>Quiénes Somos</span>
                </div>
                <h2 class="section-title-v2">El puente que conecta la energía con el conocimiento</h2>
                <p class="section-description">
                    Somos el hub regional que articula capacidades técnicas, académicas e institucionales para acelerar soluciones energéticas transformadoras.
                </p>
            </div>

            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-up">
                    <div class="about-visual">
                        <div class="stats-card" style="top: 20px; left: 20px;" data-aos="zoom-in" data-aos-delay="200">
                            <div class="stat-number">+20</div>
                            <div class="stat-label">Instituciones Aliadas</div>
                        </div>
                        <div class="stats-card" style="bottom: 30px; right: 30px;" data-aos="zoom-in" data-aos-delay="400">
                            <div class="stat-number">6</div>
                            <div class="stat-label">Áreas Especializadas</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-down" data-aos-delay="200">
                    <div class="mb-4">
                        <h3 class="h4 fw-bold mb-3">Nuestra Misión</h3>
                        <p class="mb-4">
                            Generar y transferir conocimiento científico y técnico que apoye la toma de decisiones del sector energético, promoviendo soluciones efectivas con una visión sistémica.
                        </p>
                    </div>

                    <div class="mb-4">
                        <h3 class="h4 fw-bold mb-3">Nuestro Enfoque</h3>
                        <p class="mb-0">
                            Equilibramos sostenibilidad, resiliencia, eficiencia económica y equidad para transformar el panorama energético de América Latina y el Caribe.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Value Proposition Alternative --}}
    <section id="propuesta" class="bg-surface">
        <div class="container-xl">
            <div class="section-header-v2" data-aos="fade-up">
                <div class="section-badge">
                    <i class="fa-solid fa-diamond"></i>
                    <span>Nuestra Propuesta</span>
                </div>
                <h2 class="section-title-v2">Valor diferencial para la transición energética</h2>
                <p class="section-description">
                    Combinamos excelencia técnica, independencia institucional y una red regional única para ofrecer soluciones de alto impacto.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="0">
                    <div class="feature-card-v2">
                        <div class="feature-icon-v2">
                            <i class="fa-solid fa-handshake"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Articulación Regional</h4>
                        <p class="mb-0">
                            Facilitamos el diálogo técnico entre gobiernos, academia, organismos multilaterales y sector privado, creando sinergias que potencian resultados.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="150">
                    <div class="feature-card-v2">
                        <div class="feature-icon-v2">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Independencia & Excelencia</h4>
                        <p class="mb-0">
                            Respaldo institucional de primer nivel que garantiza rigor técnico, objetividad y credibilidad en cada análisis y recomendación.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="300">
                    <div class="feature-card-v2">
                        <div class="feature-icon-v2">
                            <i class="fa-solid fa-brain"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Red de Expertise</h4>
                        <p class="mb-0">
                            Especialistas latinoamericanos que integran ingeniería, economía y políticas públicas en un enfoque multidisciplinario único.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="450">
                    <div class="feature-card-v2">
                        <div class="feature-icon-v2">
                            <i class="fa-solid fa-seedling"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Soluciones Sostenibles</h4>
                        <p class="mb-0">
                            Estrategias costo-efectivas que aceleran la transición energética con impacto duradero y enfoque en la sustentabilidad integral.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Areas of Action --}}
    <section id="areas">
        <div class="container-xl">
            <div class="section-header-v2" data-aos="fade-up">
                <div class="section-badge">
                    <i class="fa-solid fa-cogs"></i>
                    <span>Áreas de Impacto</span>
                </div>
                <h2 class="section-title-v2">Capacidades integrales para la transformación energética</h2>
                <p class="section-description">
                    Seis áreas especializadas que cubren todo el espectro de necesidades del sector energético regional.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6" data-aos="flip-up" data-aos-delay="0">
                    <div class="area-card-v2">
                        <div class="area-icon-v2">
                            <i class="fa-solid fa-chart-area"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Datos & Modelación</h5>
                        <p class="mb-0">
                            Generación y análisis de estadísticas, proyecciones y metodologías avanzadas para anticipar la evolución del sector energético.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="flip-up" data-aos-delay="100">
                    <div class="area-card-v2">
                        <div class="area-icon-v2">
                            <i class="fa-solid fa-street-view"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Prospectiva & Planificación</h5>
                        <p class="mb-0">
                            Escenarios de expansión, planificación de infraestructura crítica y estrategias de largo plazo para la transformación energética.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="flip-up" data-aos-delay="200">
                    <div class="area-card-v2">
                        <div class="area-icon-v2">
                            <i class="fa-solid fa-balance-scale"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Mercados & Regulación</h5>
                        <p class="mb-0">
                            Estudios comparados, diseño de mercados y marcos regulatorios que fomentan la armonización regional.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="flip-up" data-aos-delay="300">
                    <div class="area-card-v2">
                        <div class="area-icon-v2">
                            <i class="fa-solid fa-project-diagram"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Integración Regional</h5>
                        <p class="mb-0">
                            Evaluación técnica, económica y regulatoria de redes energéticas e interconexiones internacionales.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="flip-up" data-aos-delay="400">
                    <div class="area-card-v2">
                        <div class="area-icon-v2">
                            <i class="fa-solid fa-leaf"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Descarbonización</h5>
                        <p class="mb-0">
                            Estrategias costo-efectivas para la transición, con foco en sostenibilidad, resiliencia y reducción de emisiones.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="flip-up" data-aos-delay="500">
                    <div class="area-card-v2">
                        <div class="area-icon-v2">
                            <i class="fa-solid fa-rocket"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Innovación & Tecnología</h5>
                        <p class="mb-0">
                            Impulso a tecnologías emergentes, I+D aplicada e innovación para enfrentar los desafíos del futuro.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Strategic Partners --}}
    <section id="aliados" class="bg-surface">
        <div class="container-xl">
            <div class="section-header-v2" data-aos="fade-up">
                <div class="section-badge">
                    <i class="fa-solid fa-hands-helping"></i>
                    <span>Aliados Estratégicos</span>
                </div>
                <h2 class="section-title-v2">Respaldados por instituciones líderes</h2>
                <p class="section-description">
                    Contamos con el patrocinio de OLADE y la Universidad de Chile, además de una red creciente de universidades y centros de investigación.
                </p>
            </div>

            <div class="partners-grid" data-aos="zoom-in" data-aos-delay="200">
                <img src="{{ asset('images/olade.png') }}" alt="Logo OLADE" class="partner-logo">
                <img src="{{ asset('images/fcfm.png') }}" alt="Logo FCFM - Universidad de Chile" class="partner-logo">
            </div>
        </div>
    </section>

    {{-- Contact Section Alternative --}}
    <section id="contacto">
        <div class="container-xl">
            <div class="contact-section-v2" data-aos="zoom-in">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="section-badge mx-auto">
                            <i class="fa-solid fa-comments"></i>
                            <span>Construyamos Juntos</span>
                        </div>

                        <h2 class="contact-title">
                            Impulsa el futuro energético de tu región
                        </h2>

                        <p class="section-description mb-0">
                            Conecta con nuestros expertos y descubre cómo podemos acelerar tus proyectos de transición energética con soluciones innovadoras y sostenibles.
                        </p>

                        <div class="contact-actions" data-aos="fade-up" data-aos-delay="300">
                            <a href="https://centroenlace.org" target="_blank" rel="noreferrer" class="contact-btn">
                                <i class="fa-solid fa-globe"></i>
                                <span>Visita nuestro sitio</span>
                            </a>
                            <a href="mailto:contacto@centroenlace.org" class="contact-btn">
                                <i class="fa-solid fa-envelope"></i>
                                <span>Escríbenos directamente</span>
                            </a>
                            <a href="https://www.linkedin.com/company/centro-enlace/" target="_blank" rel="noreferrer" class="contact-btn">
                                <i class="fa-brands fa-linkedin-in"></i>
                                <span>Síguenos en LinkedIn</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('pre_js')
@endsection

@section('js')
@endsection
