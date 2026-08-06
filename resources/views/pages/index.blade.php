@extends('layouts.app')
@section('content')

<!-- Superposición de fondo del Modal -->
<div class="overlay" id="overlay"></div>

<!-- Modal Emergente Rediseñado con Slider -->
<div class="popup" id="popup">
	<button id="closePopup" aria-label="Cerrar">&times;</button>
	
	<div class="popup-image-container">
		<!-- Diapositiva 1 -->
		<div class="popup-slide active">
			<img src="{{ asset('assets') }}/images/flyers/flyer11.jpeg" alt="Conferencia Peritos en Cámara Gessel" />
		</div>
		<!-- Diapositiva 2 (Agrega/modifica las rutas de tus imágenes) -->
		<div class="popup-slide">
			<img src="{{ asset('assets') }}/images/flyers/flyer12.jpeg" alt="Capacitación en Derecho Penal" />
		</div>
		<!-- Diapositiva 3 -->
		<div class="popup-slide">
			<img src="{{ asset('assets') }}/images/flyers/flyer13.jpeg" alt="Diplomado Medicina Forense" />
		</div>
		<!-- Diapositiva 4 -->
		<div class="popup-slide">
			<img src="{{ asset('assets') }}/images/flyers/flyer14.jpeg" alt="Diplomado Medicina Forense" />
		</div>
		<!-- Diapositiva 5 -->
		<div class="popup-slide">
			<img src="{{ asset('assets') }}/images/flyers/flyer15.jpeg" alt="Diplomado Medicina Forense" />
		</div>
		<!-- Diapositiva 6 -->
		<div class="popup-slide">
			<img src="{{ asset('assets') }}/images/flyers/flyer16.jpeg" alt="Diplomado Medicina Forense" />
		</div>

		<!-- Botones de Navegación del Slider -->
		<button type="button" class="popup-nav-btn popup-prev" id="popupPrev" aria-label="Anterior">&#10094;</button>
		<button type="button" class="popup-nav-btn popup-next" id="popupNext" aria-label="Siguiente">&#10095;</button>
	</div>

	<div class="popup-action-bar">
		<a href="https://whatsapp.com/channel/0029VbDOazEBfxo7OIkrKf3y" target="_blank" class="popup-btn-whatsapp">
			<i class="fa-brands fa-whatsapp fs-5"></i> Canal Académico
		</a>
	</div>
</div>

<!-- Estilos Inline para el Popup y Video de Fondo -->
<style>
	/* Estilos para el Slider del Popup */
	.popup-image-container {
		position: relative;
		overflow: hidden;
	}
	.popup-slide {
		display: none;
	}
	.popup-slide.active {
		display: block;
	}
	.popup-slide img {
		width: 100%;
		height: auto;
		display: block;
	}
	.popup-nav-btn {
		cursor: pointer;
		position: absolute;
		top: 50%;
		transform: translateY(-50%);
		width: 36px;
		height: 36px;
		color: #ffffff;
		background-color: rgba(15, 19, 86, 0.65);
		border: none;
		border-radius: 50%;
		z-index: 10;
		display: flex;
		align-items: center;
		justify-content: center;
		font-size: 16px;
		transition: background-color 0.3s ease;
	}
	.popup-nav-btn:hover {
		background-color: rgba(197, 168, 128, 0.9);
	}
	.popup-prev { left: 10px; }
	.popup-next { right: 10px; }

	/* Garantizar que el video de fondo se posicione de forma absoluta y no empuje el contenido */
	.slider-one .swiper-slide {
		position: relative !important;
		overflow: hidden !important;
		background: transparent !important;
		padding: 160px 0px 100px !important;
	}
	.slider-video-wrapper {
		position: absolute !important;
		top: 0 !important;
		left: 0 !important;
		width: 100% !important;
		height: 100% !important;
		z-index: 0 !important;
		overflow: hidden !important;
		pointer-events: none !important;
	}
	.slider-video-bg {
		position: absolute !important;
		top: 50% !important;
		left: 50% !important;
		min-width: 100% !important;
		min-height: 100% !important;
		width: auto !important;
		height: auto !important;
		transform: translate(-50%, -50%) !important;
		object-fit: cover !important;
	}
	/* Overlay oscuro sofisticado con gradiente azul marino de Penalito */
	.slider-video-overlay {
		position: absolute !important;
		top: 0 !important;
		left: 0 !important;
		width: 100% !important;
		height: 100% !important;
		background: linear-gradient(90deg, rgba(15, 19, 86, 0.94) 0%, rgba(15, 19, 86, 0.82) 50%, rgba(15, 19, 86, 0.6) 100%) !important;
		z-index: 1 !important;
	}
	/* Elevar el contenedor para que quede al frente del video */
	.slider-one .auto-container {
		position: relative !important;
		z-index: 2 !important;
	}
	.slider-one_content {
		position: relative !important;
		z-index: 2 !important;
	}
	
	/* Efecto de sombra para legibilidad del título */
	.slider-one_heading {
		text-shadow: 0 4px 20px rgba(0, 0, 0, 0.7) !important;
	}
</style>

<!-- Slider One / Hero Carousel -->
<section class="slider-one">
	<div class="slider-one_pattern" style="background-image:url({{ asset('assets') }}/images/main-slider/pattern-1.png)"></div>
	<div class="slider-one_pattern-two" style="background-image:url({{ asset('assets') }}/images/main-slider/pattern-2.png)"></div>
	
	<div class="main-slider swiper-container">
		<div class="swiper-wrapper">

			<!-- Slide 1 -->
			<div class="swiper-slide">
				<div class="slider-video-wrapper">
					<video autoplay muted loop playsinline class="slider-video-bg">
						<source src="{{ asset('video/') }}uno.mp4" type="video/mp4">
					</video>
					<div class="slider-video-overlay"></div>
				</div>
				<div class="auto-container">
					<div class="row clearfix">
						<div class="slider-one_content col-lg-7 col-md-12 col-sm-12">
							<div class="slider-one_content-inner">
								<h1 class="slider-one_heading">
									<span>Derecho constitucional</span>
									Derecho procesal constitucional
								</h1>
								<div class="slider-one_button">
									<a href="{{ url('/') }}/capacitacion" class="theme-btn btn-style-one">
										<span class="btn-wrap">
											<span class="text-one">Más información <i class="fa-solid fa-angle-right fa-fw"></i></span>
											<span class="text-two">Más información <i class="fa-solid fa-angle-right fa-fw"></i></span>
										</span>
									</a>
								</div>
							</div>
						</div>
						<div class="slider-one_image-column col-lg-5 col-md-12 col-sm-12"></div>
					</div>
				</div>
			</div>

			<!-- Slide 2 -->
			<div class="swiper-slide">
				<div class="slider-video-wrapper">
					<video autoplay muted loop playsinline class="slider-video-bg">
						<source src="{{ asset('video/') }}dos.mp4" type="video/mp4">
					</video>
					<div class="slider-video-overlay"></div>
				</div>
				<div class="auto-container">
					<div class="row clearfix">
						<div class="slider-one_content col-lg-7 col-md-12 col-sm-12">
							<div class="slider-one_content-inner">
								<h1 class="slider-one_heading">
									<span>Derecho penal</span>
									Derecho procesal penal
								</h1>
								<div class="slider-one_button">
									<a href="{{ url('/') }}/capacitacion" class="theme-btn btn-style-one">
										<span class="btn-wrap">
											<span class="text-one">Más información <i class="fa-solid fa-angle-right fa-fw"></i></span>
											<span class="text-two">Más información <i class="fa-solid fa-angle-right fa-fw"></i></span>
										</span>
									</a>
								</div>
							</div>
						</div>
						<div class="slider-one_image-column col-lg-5 col-md-12 col-sm-12"></div>
					</div>
				</div>
			</div>

			<!-- Slide 3 -->
			<div class="swiper-slide">
				<div class="slider-video-wrapper">
					<video autoplay muted loop playsinline class="slider-video-bg">
						<source src="{{ asset('video/') }}tres.mp4" type="video/mp4">
					</video>
					<div class="slider-video-overlay"></div>
				</div>
				<div class="auto-container">
					<div class="row clearfix">
						<div class="slider-one_content col-lg-7 col-md-12 col-sm-12">
							<div class="slider-one_content-inner">
								<h1 class="slider-one_heading">
									<span>Medicina forense</span>
									Criminalística y Criminología
								</h1>
								<div class="slider-one_button">
									<a href="{{ url('/') }}/capacitacion" class="theme-btn btn-style-one">
										<span class="btn-wrap">
											<span class="text-one">Más información <i class="fa-solid fa-angle-right fa-fw"></i></span>
											<span class="text-two">Más información <i class="fa-solid fa-angle-right fa-fw"></i></span>
										</span>
									</a>
								</div>
							</div>
						</div>
						<div class="slider-one_image-column col-lg-5 col-md-12 col-sm-12"></div>
					</div>
				</div>
			</div>

			<!-- Slide 4 -->
			<div class="swiper-slide">
				<div class="slider-video-wrapper">
					<video autoplay muted loop playsinline class="slider-video-bg">
						<source src="{{ asset('video/') }}uno.mp4" type="video/mp4">
					</video>
					<div class="slider-video-overlay"></div>
				</div>
				<div class="auto-container">
					<div class="row clearfix">
						<div class="slider-one_content col-lg-7 col-md-12 col-sm-12">
							<div class="slider-one_content-inner">
								<h1 class="slider-one_heading">
									<span>Derecho policial</span>
									Derecho militar y de intervención
								</h1>
								<div class="slider-one_button">
									<a href="{{ url('/') }}/capacitacion" class="theme-btn btn-style-one">
										<span class="btn-wrap">
											<span class="text-one">Más información <i class="fa-solid fa-angle-right fa-fw"></i></span>
											<span class="text-two">Más información <i class="fa-solid fa-angle-right fa-fw"></i></span>
										</span>
									</a>
								</div>
							</div>
						</div>
						<div class="slider-one_image-column col-lg-5 col-md-12 col-sm-12"></div>
					</div>
				</div>
			</div>

		</div>

		<!-- Slider One Arrows -->
		<div class="slider-one-arrow">
			<div class="main-slider-prev fas fa-arrow-left fa-fw"></div>
			<div class="main-slider-next fas fa-arrow-right fa-fw"></div>
		</div>

		<!-- Scroll Down -->
		<div class="slider-one_scroll-down scroll-to-target" data-target=".services-one">
			<img src="{{ asset('assets') }}/images/main-slider/scroll-down.png" alt="Scroll" />
		</div>
	</div>
</section>

<!-- Services One (Why Choose Us) -->
<section class="services-one">
	<div class="auto-container">
		<div class="sec-title title-anim centered">
			<div class="sec-title_title">POR QUÉ ELEGIRNOS</div>
			<h2 class="sec-title_heading">CORPORACIÓN JURÍDICA</h2> <br>
			<h2 class="sec-title_heading" style="color: var(--primary-gold);">PENALITO</h2>
		</div>
		<div class="services-one_carousel swiper-container">
			<div class="swiper-wrapper">

				<!-- Slide 1 -->
				<div class="swiper-slide">
					<div class="service-block_one">
						<div class="service-block_one-inner">
							<div class="service-block_one-hover"></div>
							<div class="service-block_one_pattern" style="background-image:url({{ asset('assets') }}/images/background/service-one_pattern.png)"></div>
							<div class="service-block_one-background"></div>
							<div class="service-block_one-icon icon-controlxpert_svgrepocom"></div>
							<h4 class="service-block_one-heading"><a href="#">Experiencia Inigualable</a></h4>
							<div class="service-block_one-text">Nuestro equipo está compuesto por profesionales expertos en litigios con años de experiencia en materia constitucional y penal.</div>
						</div>
					</div>
				</div>

				<!-- Slide 2 -->
				<div class="swiper-slide">
					<div class="service-block_one">
						<div class="service-block_one-inner">
							<div class="service-block_one-hover"></div>
							<div class="service-block_one_pattern" style="background-image:url({{ asset('assets') }}/images/background/service-one_pattern.png)"></div>
							<div class="service-block_one-background"></div>
							<div class="service-block_one-icon icon-controlxpert_svgrepocom-1"></div>
							<h4 class="service-block_one-heading"><a href="#">Soluciones a Medida</a></h4>
							<div class="service-block_one-text">Ofrecemos asesoría y defensa legal adaptada a las necesidades específicas de cada caso y cliente.</div>
						</div>
					</div>
				</div>

				<!-- Slide 3 -->
				<div class="swiper-slide">
					<div class="service-block_one">
						<div class="service-block_one-inner">
							<div class="service-block_one-hover"></div>
							<div class="service-block_one_pattern" style="background-image:url({{ asset('assets') }}/images/background/service-one_pattern.png)"></div>
							<div class="service-block_one-background"></div>
							<div class="service-block_one-icon icon-controlxpert_svgrepocom-2"></div>
							<h4 class="service-block_one-heading"><a href="#">Trayectoria Comprobada</a></h4>
							<div class="service-block_one-text">Contamos con un historial sólido y probado de éxito en litigio constitucional y procesal penal.</div>
						</div>
					</div>
				</div>

			</div>
			<!-- Arrows -->
			<div class="services-one-arrow">
				<div class="services-one_carousel-prev fa-solid fa-angle-left fa-fw"></div>
				<div class="services-one_carousel-next fa-solid fa-angle-right fa-fw"></div>
			</div>
			<div class="services-one_carousel-pagination"></div>
		</div>
	</div>
</section>

<!-- Biblioteca Digital y Modelos de Escritos -->
<section class="digital-library-section py-5" style="background-color: #f8fafc; border-top: 1px solid #e2e8f0;">
	<div class="auto-container">
		
		<div class="sec-title text-center mb-5">
			<span class="sub-title text-gold text-uppercase fw-bold letter-spacing-1" style="color: #c5a880 !important; font-size: 13px; text-transform: uppercase;">Material Exclusivo</span>
			<h2 class="sec-title_heading mt-2" style="font-size: 32px; font-weight: 700; color: #0f1356;">Biblioteca Digital y Modelos de Escritos</h2>
			<p class="text-muted mt-2 mx-auto" style="max-width: 650px; font-size: 15px;">
				Accede a nuestra colección de libros digitales especializados, diccionarios y formatos de escritos listos para editar en Word y PDF. ¡Haz clic para solicitarlos!
			</p>
		</div>

		<div class="library-carousel-container position-relative px-md-5">
			<div class="swiper-container library-carousel">
				<div class="swiper-wrapper">
					
					<div class="swiper-slide">
						<div class="library-card">
							<div class="library-image-wrap">
								<img src="{{ asset('assets') }}/images/libros/libro_forense.jpg" alt="Libro Medicina Forense" class="library-img">
								<div class="library-hover-overlay">
									<a href="#" class="btn btn-gold trigger-inscription" data-plan="Medicina Forense">
										Solicitar Descarga <i class="fa-solid fa-download ms-1"></i>
									</a>
								</div>
							</div>
						</div>
					</div>

					<div class="swiper-slide">
						<div class="library-card">
							<div class="library-image-wrap">
								<img src="{{ asset('assets') }}/images/libros/libro_procesal_penal.jpg" alt="Libro Derecho Procesal Penal" class="library-img">
								<div class="library-hover-overlay">
									<a href="#" class="btn btn-gold trigger-inscription" data-plan="Derecho Penal y Procesal Penal">
										Solicitar Descarga <i class="fa-solid fa-download ms-1"></i>
									</a>
								</div>
							</div>
						</div>
					</div>

					<div class="swiper-slide">
						<div class="library-card">
							<div class="library-image-wrap">
								<img src="{{ asset('assets') }}/images/libros/libro_derecho_policial.jpg" alt="Libro Derecho Policial" class="library-img">
								<div class="library-hover-overlay">
									<a href="#" class="btn btn-gold trigger-inscription" data-plan="Derecho Policial e Intervenciones">
										Solicitar Descarga <i class="fa-solid fa-download ms-1"></i>
									</a>
								</div>
							</div>
						</div>
					</div>

					<div class="swiper-slide">
						<div class="library-card">
							<div class="library-image-wrap">
								<img src="{{ asset('assets') }}/images/libros/modelos_escritos.jpg" alt="Modelos de Escritos" class="library-img">
								<div class="library-hover-overlay">
									<a href="#" class="btn btn-gold trigger-inscription" data-plan="Derecho Penal y Procesal Penal">
										Solicitar Descarga <i class="fa-solid fa-download ms-1"></i>
									</a>
								</div>
							</div>
						</div>
					</div>

					<div class="swiper-slide">
						<div class="library-card">
							<div class="library-image-wrap">
								<img src="{{ asset('assets') }}/images/libros/libro_diccionario.jpg" alt="Diccionarios Jurídicos" class="library-img">
								<div class="library-hover-overlay">
									<a href="#" class="btn btn-gold trigger-inscription" data-plan="Derecho Penal y Procesal Penal">
										Solicitar Descarga <i class="fa-solid fa-download ms-1"></i>
									</a>
								</div>
							</div>
						</div>
					</div>

					<div class="swiper-slide">
						<div class="library-card">
							<div class="library-image-wrap">
								<img src="{{ asset('assets') }}/images/libros/libro_miscelaneas.jpg" alt="Misceláneas Jurídicas" class="library-img">
								<div class="library-hover-overlay">
									<a href="#" class="btn btn-gold trigger-inscription" data-plan="Derecho Constitucional y Procesal Const.">
										Solicitar Descarga <i class="fa-solid fa-download ms-1"></i>
									</a>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
			
			<div class="library-carousel-prev swiper-button-prev-custom"><i class="fa-solid fa-chevron-left"></i></div>
			<div class="library-carousel-next swiper-button-next-custom"><i class="fa-solid fa-chevron-right"></i></div>
			<div class="library-carousel-pagination text-center mt-4"></div>
		</div>

	</div>
</section>

<!-- CSS & JS para Library Carousel y Popup Auto-Slider -->
<style>
	.digital-library-section {
		position: relative;
		z-index: 10;
	}
	.library-carousel-container {
		width: 100%;
	}
	.library-card {
		background: #ffffff;
		border-radius: 12px;
		overflow: hidden;
		box-shadow: 0 10px 25px rgba(15, 19, 86, 0.08);
		border: 1px solid #e2e8f0;
		transition: all 0.3s ease;
	}
	.library-card:hover {
		transform: translateY(-5px);
		box-shadow: 0 15px 35px rgba(15, 19, 86, 0.15);
	}
	.library-image-wrap {
		position: relative;
		width: 100%;
		padding-top: 66.67%;
		overflow: hidden;
	}
	.library-img {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		object-fit: cover;
		transition: transform 0.5s ease;
	}
	.library-card:hover .library-img {
		transform: scale(1.05);
	}
	.library-hover-overlay {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background: rgba(15, 19, 86, 0.7);
		display: flex;
		align-items: center;
		justify-content: center;
		opacity: 0;
		transition: opacity 0.3s ease;
	}
	.library-image-wrap:hover .library-hover-overlay {
		opacity: 1;
	}
	
	.swiper-button-prev-custom,
	.swiper-button-next-custom {
		position: absolute;
		top: 50%;
		transform: translateY(-50%);
		width: 44px;
		height: 44px;
		background: #ffffff;
		border: 1px solid #e2e8f0;
		border-radius: 50%;
		color: #0f1356;
		display: flex;
		align-items: center;
		justify-content: center;
		cursor: pointer;
		z-index: 10;
		box-shadow: 0 4px 10px rgba(0,0,0,0.05);
		transition: all 0.3s ease;
	}
	.swiper-button-prev-custom:hover,
	.swiper-button-next-custom:hover {
		background: #c5a880;
		border-color: #c5a880;
		color: #ffffff;
	}
	.swiper-button-prev-custom { left: 10px; }
	.swiper-button-next-custom { right: 10px; }
	
	@media (max-width: 768px) {
		.swiper-button-prev-custom,
		.swiper-button-next-custom {
			display: none !important;
		}
	}
</style>

<script>
	document.addEventListener('DOMContentLoaded', function() {
		// --- Lógica del Popup Auto-Slider (5 Segundos) ---
		const popup = document.getElementById('popup');
		const overlay = document.getElementById('overlay');
		const closeBtn = document.getElementById('closePopup');
		const slides = document.querySelectorAll('.popup-slide');
		const prevBtn = document.getElementById('popupPrev');
		const nextBtn = document.getElementById('popupNext');
		
		let popupIndex = 0;
		let popupTimer = null;

		function showPopupSlide(index) {
			if (!slides.length) return;
			if (index >= slides.length) popupIndex = 0;
			else if (index < 0) popupIndex = slides.length - 1;
			else popupIndex = index;

			slides.forEach(slide => slide.classList.remove('active'));
			slides[popupIndex].classList.add('active');
		}

		function startPopupAuto() {
			stopPopupAuto();
			popupTimer = setInterval(() => {
				showPopupSlide(popupIndex + 1);
			}, 5000);
		}

		function stopPopupAuto() {
			if (popupTimer) clearInterval(popupTimer);
		}

		function openPopup() {
			if (popup) popup.style.display = 'block';
			if (overlay) overlay.style.display = 'block';
			showPopupSlide(popupIndex);
			startPopupAuto();
		}

		function closePopupFunc() {
			if (popup) popup.style.display = 'none';
			if (overlay) overlay.style.display = 'none';
			stopPopupAuto();
		}

		// Abrir modal automáticamente al cargar
		openPopup();

		// Event listeners de cierre
		if (closeBtn) closeBtn.addEventListener('click', closePopupFunc);
		if (overlay) overlay.addEventListener('click', closePopupFunc);

		// Event listeners para los botones de navegación (Manual)
		if (prevBtn) {
			prevBtn.addEventListener('click', function(e) {
				e.stopPropagation();
				showPopupSlide(popupIndex - 1);
				startPopupAuto(); // Reinicia el contador de 5s
			});
		}
		if (nextBtn) {
			nextBtn.addEventListener('click', function(e) {
				e.stopPropagation();
				showPopupSlide(popupIndex + 1);
				startPopupAuto(); // Reinicia el contador de 5s
			});
		}

		// --- Inicializar Carrusel de Biblioteca ---
		var librarySwiper = new Swiper('.library-carousel', {
			slidesPerView: 1,
			spaceBetween: 24,
			loop: true,
			autoplay: {
				delay: 4000,
				disableOnInteraction: false,
			},
			navigation: {
				nextEl: '.library-carousel-next',
				prevEl: '.library-carousel-prev',
			},
			pagination: {
				el: '.library-carousel-pagination',
				clickable: true,
			},
			breakpoints: {
				640: { slidesPerView: 1.5 },
				768: { slidesPerView: 2 },
				1024: { slidesPerView: 3 }
			}
		});
	});
</script>

<!-- Services Two (Practice Areas) -->
<section class="services-two">
	<div class="auto-container">
		<div class="sec-title light centered">
			<div class="sec-title_title title-anim">Área de práctica</div>
			<h2 class="sec-title_heading">Explore especialidades jurídicas constitucionales & Penales</h2>
		</div>
		<div class="row clearfix">

			<!-- Block 1 -->
			<div class="service-block_two col-lg-4 col-md-6 col-sm-12">
				<div class="service-block_two-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
					<div class="service-block_two-image" style="background-image:url({{ asset('assets') }}/images/background/service-1.jpg)"></div>
					<div class="upper-box">
						<div class="d-flex justify-content-between flex-wrap">
							<div class="service-block_two-number">01</div>
							<div class="service-block_two-icon icon-Frame"></div>
						</div>
						<h4 class="service-block_two-heading"><a href="#">Análisis Dogmático y Jurisprudencial</a></h4>
						<div class="service-block_two-text">Desarrollamos estudios profundos de la dogmática penal y constitucional con análisis de precedentes vinculantes.</div>
					</div>
					<div class="lower-box">
						<div class="d-flex justify-content-between align-items-center flex-wrap">
							<a class="service-block_two-arrow icon-Frame" href="#"></a>
							<a class="service-block_two-more" href="#">Saber Más</a>
						</div>
					</div>
				</div>
			</div>

			<!-- Block 2 -->
			<div class="service-block_two col-lg-4 col-md-6 col-sm-12">
				<div class="service-block_two-inner wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
					<div class="service-block_two-image" style="background-image:url({{ asset('assets') }}/images/background/service-1.jpg)"></div>
					<div class="upper-box">
						<div class="d-flex justify-content-between flex-wrap">
							<div class="service-block_two-number">02</div>
							<div class="service-block_two-icon icon-controlxpert_svgrepocom-3"></div>
						</div>
						<h4 class="service-block_two-heading"><a href="#">Labor de Utilidad</a></h4>
						<div class="service-block_two-text">Aportamos valor científico y práctico al desarrollo del derecho y a la formación de operadores de justicia.</div>
					</div>
					<div class="lower-box">
						<div class="d-flex justify-content-between align-items-center flex-wrap">
							<a class="service-block_two-arrow icon-controlxpert_svgrepocom-3" href="#"></a>
							<a class="service-block_two-more" href="#">Saber Más</a>
						</div>
					</div>
				</div>
			</div>

			<!-- Block 3 -->
			<div class="service-block_two col-lg-4 col-md-6 col-sm-12">
				<div class="service-block_two-inner wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
					<div class="service-block_two-image" style="background-image:url({{ asset('assets') }}/images/background/service-1.jpg)"></div>
					<div class="upper-box">
						<div class="d-flex justify-content-between flex-wrap">
							<div class="service-block_two-number">03</div>
							<div class="service-block_two-icon icon-controlxpert_svgrepocom-4"></div>
						</div>
						<h4 class="service-block_two-heading"><a href="#">Tutela de Derechos</a></h4>
						<div class="service-block_two-text">Defensa técnica y activación de mecanismos de tutela y habeas corpus contra detenciones arbitrarias.</div>
					</div>
					<div class="lower-box">
						<div class="d-flex justify-content-between align-items-center flex-wrap">
							<a class="service-block_two-arrow icon-controlxpert_svgrepocom-4" href="#"></a>
							<a class="service-block_two-more" href="#">Saber Más</a>
						</div>
					</div>
				</div>
			</div>

			<!-- Block 4 -->
			<div class="service-block_two col-lg-4 col-md-6 col-sm-12">
				<div class="service-block_two-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
					<div class="service-block_two-image" style="background-image:url({{ asset('assets') }}/images/background/service-1.jpg)"></div>
					<div class="upper-box">
						<div class="d-flex justify-content-between flex-wrap">
							<div class="service-block_two-number">04</div>
							<div class="service-block_two-icon icon-Frameee"></div>
						</div>
						<h4 class="service-block_two-heading"><a href="#">Epistémica Jurisprudencial</a></h4>
						<div class="service-block_two-text">Interpretación avanzada y construcción hermenéutica de criterios jurisprudenciales supremos.</div>
					</div>
					<div class="lower-box">
						<div class="d-flex justify-content-between align-items-center flex-wrap">
							<a class="service-block_two-arrow icon-Frameee" href="#"></a>
							<a class="service-block_two-more" href="#">Saber Más</a>
						</div>
					</div>
				</div>
			</div>

			<!-- Block 5 -->
			<div class="service-block_two col-lg-4 col-md-6 col-sm-12">
				<div class="service-block_two-inner wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
					<div class="service-block_two-image" style="background-image:url({{ asset('assets') }}/images/background/service-1.jpg)"></div>
					<div class="upper-box">
						<div class="d-flex justify-content-between flex-wrap">
							<div class="service-block_two-number">05</div>
							<div class="service-block_two-icon icon-controlxpert_svgrepocom-6"></div>
						</div>
						<h4 class="service-block_two-heading"><a href="#">Litigios en Derecho Penal</a></h4>
						<div class="service-block_two-text">Litigación oral estratégica en juicio, audiencias de prisión preventiva y recursos impugnatorios.</div>
					</div>
					<div class="lower-box">
						<div class="d-flex justify-content-between align-items-center flex-wrap">
							<a class="service-block_two-arrow icon-controlxpert_svgrepocom-6" href="#"></a>
							<a class="service-block_two-more" href="#">Saber Más</a>
						</div>
					</div>
				</div>
			</div>

			<!-- Block 6 -->
			<div class="service-block_two col-lg-4 col-md-6 col-sm-12">
				<div class="service-block_two-inner wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
					<div class="service-block_two-image" style="background-image:url({{ asset('assets') }}/images/background/service-1.jpg)"></div>
					<div class="upper-box">
						<div class="d-flex justify-content-between flex-wrap">
							<div class="service-block_two-number">06</div>
							<div class="service-block_two-icon icon-controlxpert_svgrepocom-7"></div>
						</div>
						<h4 class="service-block_two-heading"><a href="#">Neoconstitucionalismo</a></h4>
						<div class="service-block_two-text">Estudio doctrinario sobre la constitucionalización del derecho y la ponderación de principios.</div>
					</div>
					<div class="lower-box">
						<div class="d-flex justify-content-between align-items-center flex-wrap">
							<a class="service-block_two-arrow icon-controlxpert_svgrepocom-7" href="#"></a>
							<a class="service-block_two-more" href="#">Saber Más</a>
						</div>
					</div>
				</div>
			</div>

		</div>

		<div class="service-one_button text-center mt-4">
			<a href="{{ url('/') }}/pages/capacitacion" class="theme-btn btn-style-one">
				<span class="btn-wrap">
					<span class="text-one">Ver Capacitaciones <i class="fa-solid fa-angle-right fa-fw"></i></span>
					<span class="text-two">Ver Capacitaciones <i class="fa-solid fa-angle-right fa-fw"></i></span>
				</span>
			</a>
		</div>
	</div>
</section>
<!-- End Services Two -->

<!-- Process One (Certification Process) -->
<section class="process-one">
	<div class="auto-container">
		<div class="sec-title centered">
			<div class="sec-title_title">CÓMO FUNCIONA</div>
			<h2>Proceso de Adquisición de <br><span style="color: var(--primary-gold);">Certificado</span></h2>
		</div>
		<div class="row clearfix">

			<!-- Step 1 -->
			<div class="process-block_one col-xl-3 col-lg-6 col-md-6 col-sm-12">
				<div class="process-block_one-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
					<div class="process-block_one-icon icon-controlxpert_svgrepocom"></div>
					<div class="process-block_one-content">
						<div class="process-block_one-number">01</div>
						<h4 class="process-block_one-heading"><a href="#">Contáctenos</a></h4>
						<div class="process-block_one-text">Elige el curso o diplomado de tu interés y ponte en comunicación.</div>
					</div>
				</div>
			</div>

			<!-- Step 2 -->
			<div class="process-block_one col-xl-3 col-lg-6 col-md-6 col-sm-12">
				<div class="process-block_one-inner wow fadeInLeft" data-wow-delay="150ms" data-wow-duration="1500ms">
					<div class="process-block_one-icon icon-Path-184"></div>
					<div class="process-block_one-content">
						<div class="process-block_one-number">02</div>
						<h4 class="process-block_one-heading"><a href="#">Registro</a></h4>
						<div class="process-block_one-text">Realiza tu inscripción oficial al programa a través de nuestros canales oficiales.</div>
					</div>
				</div>
			</div>

			<!-- Step 3 -->
			<div class="process-block_one col-xl-3 col-lg-6 col-md-6 col-sm-12">
				<div class="process-block_one-inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
					<div class="process-block_one-icon icon-controlxpert_svgrepocom-3"></div>
					<div class="process-block_one-content">
						<div class="process-block_one-number">03</div>
						<h4 class="process-block_one-heading"><a href="#">Capacitación</a></h4>
						<div class="process-block_one-text">Asiste a las ponencias especializadas y accede a los materiales de estudio.</div>
					</div>
				</div>
			</div>

			<!-- Step 4 -->
			<div class="process-block_one col-xl-3 col-lg-6 col-md-6 col-sm-12">
				<div class="process-block_one-inner wow fadeInLeft" data-wow-delay="450ms" data-wow-duration="1500ms">
					<div class="process-block_one-icon icon-vectorrr"></div>
					<div class="process-block_one-content">
						<div class="process-block_one-number">04</div>
						<h4 class="process-block_one-heading"><a href="#">Otorgamiento</a></h4>
						<div class="process-block_one-text">Recibe tu certificado digital verificado con valor académico y código QR.</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
<!-- End Process One -->

<!-- News One (Blog) -->
<section class="news-one">
	<div class="auto-container">
		<div class="sec-title">
			<div class="d-flex justify-content-between align-items-center flex-wrap">
				<div class="left-box">
					<div class="sec-title_title">NUESTRO BLOG</div>
					<h2>Últimas Noticias y Artículos</h2>
				</div>
				<div class="team-one_button">
					<a href="{{ url('/') }}/pages/blog" class="theme-btn btn-style-one">
						<span class="btn-wrap">
							<span class="text-one">Ver Todo el Blog <i class="fa-solid fa-angle-right fa-fw"></i></span>
							<span class="text-two">Ver Todo el Blog <i class="fa-solid fa-angle-right fa-fw"></i></span>
						</span>
					</a>
				</div>
			</div>
		</div>
		
		<div class="news-one_carousel swiper-container">
			<div class="swiper-wrapper">

				<!-- Slide 1 -->
				<div class="swiper-slide">
					<div class="news-block_one">
						<div class="news-block_one-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="news-block_one-image">
								<div class="news-block_one-date">26 <span>MAR, 2024</span></div>
								<a href="{{ url('/') }}/pages/blog"><img src="{{ asset('assets') }}/images/resource/news-1.jpg" alt="Noticia 1" /></a>
							</div>
							<div class="news-block_one-content">
								<ul class="news-block_one-meta d-flex align-items-center flex-wrap">
									<li><span class="icon fa-regular fa-user fa-fw"></span>Morens Otem</li>
									<li><span class="icon fa-regular fa-comment-dots fa-fw"></span>03 Comentarios</li>
								</ul>
								<h4 class="news-block_one-heading"><a href="{{ url('/') }}/pages/blog">Criminalística de hoy: Ciencia que goza la plena autonomía científica</a></h4>
								<a class="news-block_one-more" href="{{ url('/') }}/pages/blog">leer más <i class="fa-solid fa-angle-right fa-fw"></i></a>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide 2 -->
				<div class="swiper-slide">
					<div class="news-block_one">
						<div class="news-block_one-inner wow fadeInLeft" data-wow-delay="150ms" data-wow-duration="1500ms">
							<div class="news-block_one-image">
								<div class="news-block_one-date">26 <span>MAR, 2024</span></div>
								<a href="{{ url('/') }}/pages/blog"><img src="{{ asset('assets') }}/images/resource/news-2.jpg" alt="Noticia 2" /></a>
							</div>
							<div class="news-block_one-content">
								<ul class="news-block_one-meta d-flex align-items-center flex-wrap">
									<li><span class="icon fa-regular fa-user fa-fw"></span>Morens Otem</li>
									<li><span class="icon fa-regular fa-comment-dots fa-fw"></span>03 Comentarios</li>
								</ul>
								<h4 class="news-block_one-heading"><a href="{{ url('/') }}/pages/blog">La corriente del garantismo y Neoconstitucionalismo</a></h4>
								<a class="news-block_one-more" href="{{ url('/') }}/pages/blog">leer más <i class="fa-solid fa-angle-right fa-fw"></i></a>
							</div>
						</div>
					</div>
				</div>

			</div>
			<!-- Arrows -->
			<div class="news-one-arrow">
				<div class="news-one_carousel-prev fa-solid fa-angle-left fa-fw"></div>
				<div class="news-one_carousel-next fa-solid fa-angle-right fa-fw"></div>
			</div>
			<div class="news-one_carousel-pagination"></div>
		</div>
	</div>
</section>
<!-- End News One -->

<!-- Clients Section -->
<section class="clients-one bg-light py-5">
	<div class="auto-container">
		<div class="clients-one_slider swiper-container">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<div class="client-image">
						<a href="#"><img src="{{ asset('assets') }}/images/clients/6.jpeg" alt="Client 6" /></a>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="client-image">
						<a href="#"><img src="{{ asset('assets') }}/images/clients/2.png" alt="Client 2" /></a>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="client-image">
						<a href="#"><img src="{{ asset('assets') }}/images/clients/3.png" alt="Client 3" /></a>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="client-image">
						<a href="#"><img src="{{ asset('assets') }}/images/clients/4.png" alt="Client 4" /></a>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="client-image">
						<a href="#"><img src="{{ asset('assets') }}/images/clients/5.png" alt="Client 5" /></a>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="client-image">
						<a href="#"><img src="{{ asset('assets') }}/images/clients/6.jpeg" alt="Client 6" /></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Clients Section -->

@endsection