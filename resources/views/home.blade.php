@extends('layout.master')

@section('title_1','Centro Enlace')
@section('title_2','Inicio')
@section('class-body','bg-surface')

@section('pre_css')
@endsection

@section('css')
    @vite('resources/less/app.less')
@endsection

@section('content')

	<section id="hero" class="hero-section">
		<div class="container-xl p-4 p-lg-5">
			<div class="row align-items-center g-5">
				<div class="col-lg-7">
					<div class="hero-highlight" data-aos="zoom-in-down">
						<i class="fa-solid fa-plug-circle-bolt"></i>
						<span>Conectando la energía y el conocimiento regional</span>
					</div>
					<h1 class="hero-title mb-4" data-aos="fade-up" data-aos-delay="100">Centro ENLACE</h1>
					<p class="hero-description" data-aos="fade-up" data-aos-delay="200">Conectando la Energía y el Conocimiento de América Latina y el Caribe para impulsar soluciones energéticas sostenibles, resilientes y equitativas.</p>

					<div class="d-flex flex-wrap align-items-center gap-3" data-aos="zoom-in" data-aos-delay="320">
						<a href="#areas" class="btn btn-lg btn-enlace-outline btn-light text-dark">
							<i class="fa-solid fa-compass me-2"></i>
							Explora nuestras áreas
						</a>
					</div>
				</div>
				<div class="col-lg-5" data-aos="zoom-in" data-aos-delay="160">
					<div class="hero-insight p-lg-4 p-md-3 p-xxl-5 p-4">
						<p class="headline mb-3">Impulso colectivo</p>
						<div class="d-flex flex-column gap-4">
							<div class="row" data-aos="fade-up" data-aos-delay="220">
								<div class="col-xxl-3 col-3 col-md-2 d-flex align-items-center">
									<span class="icon-circle mx-auto">
                                        <i class="fa-solid fa-earth-americas"></i>
                                    </span>
                                </div>
								<div class="col-xxl-9 col-9 col-md-10">
									<p class="metric mb-1">Datos</p>
									<p class="mb-0">Generación y análisis de estadísticas, para entender la evolución del sector.</p>
								</div>
							</div>
							<div class="row" data-aos="fade-up" data-aos-delay="280">
								 <div class="col-xxl-3 col-3 col-md-2 d-flex align-items-center">
									<span class="icon-circle mx-auto">
                                        <i class="fa-solid fa-circle-nodes"></i>
                                    </span>
                                </div>
								<div class="col-xxl-9 col-9 col-md-10">
									<p class="metric mb-1">Hub</p>
									<p class="mb-0">Articulamos el diálogo técnico entre gobiernos, academia, organismos multilaterales y sector privado.</p>
								</div>
							</div>
							<div class="row" data-aos="fade-up" data-aos-delay="340">
								 <div class="col-xxl-3 col-3 col-md-2 d-flex align-items-center">
									<span class="icon-circle mx-auto">
                                        <i class="fa-solid fa-bolt"></i>
                                    </span>
                                </div>
								<div class="col-xxl-9 col-9 col-md-10">
									<p class="metric mb-1">Transición</p>
									<p class="mb-0">Aceleramos soluciones energéticas sostenibles, resilientes y costo-efectivas.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="quienes-somos">
		<div class="container-xl">
			<div class="row align-items-center g-5" data-aos="fade-up">
				<div class="col-lg-5">
					<span class="section-subtitle">Quiénes Somos</span>
					<h2 class="section-title mt-3">Un hub regional de conocimiento y asistencia técnica</h2>
				</div>
				<div class="col-lg-7" data-aos="fade-up" data-aos-delay="120">
					<p class="content-lead mb-4">El Centro Latinoamericano y del Caribe de Energía – ENLACE, es un hub regional impulsado por OLADE, la Universidad de Chile y una red creciente de universidades, centros de investigación y socios estratégicos de toda la región.</p>
					<p class="mb-4">Nuestra misión es generar y transferir conocimiento científico y técnico que apoye la toma de decisiones del sector energético, promoviendo soluciones efectivas con una visión sistémica que equilibre sostenibilidad, resiliencia, eficiencia económica y equidad.</p>
					<p class="mb-0">Trabajamos para transformar el futuro energético de América Latina y el Caribe, conectando capacidades, datos y experiencias que potencian políticas públicas y proyectos que marcan la diferencia.</p>
				</div>
			</div>
		</div>
	</section>

	<section id="propuesta" class="bg-surface">
		<div class="container-xl">
			<div class="row justify-content-center text-center mb-5" data-aos="fade-up">
				<div class="col-lg-8">
					<span class="section-subtitle">Nuestra Propuesta de Valor</span>
					<h2 class="section-title mt-3">Conexión estratégica para acelerar la transición energética</h2>
					<p class="content-lead mt-3">Acompañamos a los actores clave del sector energético con conocimientos independientes, redes de expertos y soluciones de alto impacto.</p>
				</div>
			</div>
			<div class="row g-4">
				<div class="col-md-6 col-xl-3" data-aos="zoom-in" data-aos-delay="0">
					<div class="value-card h-100 text-lg-start text-center">
						<span class="icon-circle mb-4 mx-lg-0 mx-auto">
							<i class="fa-solid fa-people-group"></i>
						</span>
						<h5 class="fw-bold mb-3">Un puente regional</h5>
						<p class="mb-0">Articulamos el diálogo técnico entre gobiernos, academia, organismos multilaterales y sector privado.</p>
					</div>
				</div>
				<div class="col-md-6 col-xl-3" data-aos="zoom-in" data-aos-delay="120">
					<div class="value-card h-100 text-lg-start text-center">
						<span class="icon-circle mb-4 mx-lg-0 mx-auto">
							<i class="fa-solid fa-award"></i>
						</span>
						<h5 class="fw-bold mb-3">Excelencia independiente</h5>
						<p class="mb-0">Sostenemos un respaldo institucional de primer nivel garantizando rigor técnico y objetividad.</p>
					</div>
				</div>
				<div class="col-md-6 col-xl-3" data-aos="zoom-in" data-aos-delay="200">
					<div class="value-card h-100 text-lg-start text-center">
						<span class="icon-circle mb-4 mx-lg-0 mx-auto">
							<i class="fa-solid fa-user-tie"></i>
						</span>
						<h5 class="fw-bold mb-3">Red de expertos</h5>
						<p class="mb-0">Integramos especialistas latinoamericanos en ingeniería, economía y políticas públicas.</p>
					</div>
				</div>
				<div class="col-md-6 col-xl-3" data-aos="zoom-in" data-aos-delay="280">
					<div class="value-card h-100 text-lg-start text-center">
						<span class="icon-circle mb-4 mx-lg-0 mx-auto">
							<i class="fa-solid fa-leaf"></i>
						</span>
						<h5 class="fw-bold mb-3">Soluciones sostenibles</h5>
						<p class="mb-0">Diseñamos estrategias costo-efectivas que aceleran la transición energética con impacto duradero.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="areas">
		<div class="container-xl">
			<div class="row justify-content-center text-center mb-5" data-aos="fade-up">
				<div class="col-lg-8">
					<span class="section-subtitle">Áreas de Acción</span>
					<h2 class="section-title mt-3">Capacidades integrales para transformar el sector energético</h2>
				</div>
			</div>

			<div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-4">
				<div class="col" data-aos="zoom-in-up" data-aos-delay="0">
					<div class="area-card h-100 text-lg-start text-center">
						<span class="icon-circle mb-4 mx-lg-0 mx-auto">
							<i class="fa-solid fa-chart-line"></i>
						</span>
						<h5 class="fw-bold mb-3">Datos y Modelación Energética</h5>
						<p class="mb-0">Generamos y analizamos estadísticas, proyecciones y metodologías avanzadas para anticipar la evolución del sector.</p>
					</div>
				</div>
				<div class="col" data-aos="zoom-in-up" data-aos-delay="120">
					<div class="area-card h-100 text-lg-start text-center">
						<span class="icon-circle mb-4 mx-lg-0 mx-auto">
							<i class="fa-solid fa-binoculars"></i>
						</span>
						<h5 class="fw-bold mb-3">Prospectiva y Planificación Energética</h5>
						<p class="mb-0">Construimos escenarios de expansión, planificación de infraestructura crítica y estrategias de largo plazo.</p>
					</div>
				</div>
				<div class="col" data-aos="zoom-in-up" data-aos-delay="200">
					<div class="area-card h-100 text-lg-start text-center">
						<span class="icon-circle mb-4 mx-lg-0 mx-auto">
							<i class="fa-solid fa-scale-balanced"></i>
						</span>
						<h5 class="fw-bold mb-3">Mercados, Regulación y Política Energética</h5>
						<p class="mb-0">Desarrollamos estudios comparados, diseño de mercado y marcos regulatorios para impulsar la armonización regional.</p>
					</div>
				</div>
				<div class="col" data-aos="zoom-in-up" data-aos-delay="260">
					<div class="area-card h-100 text-lg-start text-center">
						<span class="icon-circle mb-4 mx-lg-0 mx-auto">
							<i class="fa-solid fa-network-wired"></i>
						</span>
						<h5 class="fw-bold mb-3">Redes e Integración Energética Regional</h5>
						<p class="mb-0">Evaluamos redes nacionales e interconexiones internacionales con enfoque técnico, económico y regulatorio.</p>
					</div>
				</div>
				<div class="col" data-aos="zoom-in-up" data-aos-delay="320">
					<div class="area-card h-100 text-lg-start text-center">
						<span class="icon-circle mb-4 mx-lg-0 mx-auto">
							<i class="fa-solid fa-wind"></i>
						</span>
						<h5 class="fw-bold mb-3">Descarbonización, Resiliencia y Transición Energética</h5>
						<p class="mb-0">Diseñamos estrategias costo-efectivas centradas en sostenibilidad, resiliencia y reducción de emisiones.</p>
					</div>
				</div>
				<div class="col" data-aos="zoom-in-up" data-aos-delay="380">
					<div class="area-card h-100 text-lg-start text-center">
						<span class="icon-circle mb-4 mx-lg-0 mx-auto">
							<i class="fa-solid fa-lightbulb"></i>
						</span>
						<h5 class="fw-bold mb-3">Innovación y Desarrollo Tecnológico</h5>
						<p class="mb-0">Impulsamos tecnologías emergentes, I+D aplicada e innovación para enfrentar los desafíos energéticos del futuro.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="aliados" class="bg-surface">
		<div class="container-xl">
			<div class="row justify-content-center text-center mb-5" data-aos="fade-up">
				<div class="col-lg-8">
					<span class="section-subtitle">Aliados Estratégicos</span>
					<h2 class="section-title mt-3">Trabajamos con instituciones líderes</h2>
					<p class="content-lead mt-3">Contamos con el patrocinio de OLADE y de la Universidad de Chile, además de una red creciente de universidades, centros de investigación y socios estratégicos en toda la región.</p>
				</div>
			</div>
			<div class="allies-wall">
				<img src="{{ asset('images/olade.png') }}" alt="Logo OLADE" data-aos="zoom-in" data-aos-delay="40">
				<img src="{{ asset('images/fcfm.png') }}" alt="Logo FCFM - Universidad de Chile" data-aos="zoom-in" data-aos-delay="140">
			</div>
		</div>
	</section>

	<section id="contacto">
		<div class="container-xl">
			<div class="row justify-content-center" data-aos="fade-up">
				<div class="col-lg-10">
					<div class="contact-card" data-aos="flip-up" data-aos-delay="120">
						<div class="d-flex flex-column flex-lg-row align-items-start align-items-lg-center justify-content-between gap-3">
							<div data-aos="fade-up" data-aos-delay="160">
								<span class="section-subtitle">Contáctanos</span>
								<h2 class="section-title mt-3 mb-0">Construyamos juntos el futuro energético de la región</h2>
							</div>
							<div class="d-grid gap-2" data-aos="zoom-in" data-aos-delay="220">
								<a href="https://centroenlace.org" target="_blank" rel="noreferrer" class="btn btn-outline-dark rounded-pill px-4 py-2">
									<i class="fa-solid fa-globe me-2"></i>
									centroenlace.org
								</a>
								<a href="mailto:contacto@centroenlace.org" class="btn btn-outline-dark rounded-pill px-4 py-2">
									<i class="fa-solid fa-envelope me-2"></i>
									contacto@centroenlace.org
								</a>
								<a href="https://www.linkedin.com/company/centro-enlace/" target="_blank" rel="noreferrer" class="btn btn-outline-dark rounded-pill px-4 py-2">
									<i class="fa-brands fa-linkedin-in me-2"></i>
									LinkedIn: centro-enlace
								</a>
							</div>
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
