<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<title>{{ $title ?? config('app.name') }}</title>
	
	<!-- Stylesheets -->
	<link href="{{ asset('assets') }}/css/bootstrap.css" rel="stylesheet">
	<link href="{{ asset('assets') }}/css/style.css" rel="stylesheet">
	<link href="{{ asset('assets') }}/css/meanmenu.min.css" rel="stylesheet">
	<link href="{{ asset('assets') }}/css/responsive.css" rel="stylesheet">
	<link href="{{ asset('assets') }}/css/modal.css" rel="stylesheet">
	<link href="{{ asset('assets') }}/css/custom.css" rel="stylesheet">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

	<!-- FontAwesome Icons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

	<!-- Favicon -->
	<link rel="shortcut icon" href="{{ asset('assets') }}/images/icono.png" type="image/x-icon">
	<link rel="icon" href="{{ asset('assets') }}/images/icono.png" type="image/x-icon">

	<!-- Responsive Meta -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>

<body>

	<div class="page-wrapper">

		<!-- Preloader -->
		<div class="preloader"></div>
		<!-- End Preloader -->

		<!-- Main Header -->
		<header class="main-header header-style-three">

			<!-- Header Top -->
			<div class="header-top">
				<div class="auto-container">
					<div class="inner-container">
						<div class="d-flex justify-content-between align-items-center flex-wrap">
							<div class="left-box d-flex align-items-center flex-wrap">
								<!-- Info List -->
								<ul class="header-top_list">
									<li><span class="icon"><img src="{{ asset('assets') }}/images/icons/map.svg" alt="Ubicación" /></span>¡Encuéntranos ahora! Abancay - Apurímac</li>
									<li><span class="icon"><img src="{{ asset('assets') }}/images/icons/phone.svg" alt="Teléfono" /></span><a href="tel:914159947">914 159 947</a></li>
								</ul>
							</div>
							<div class="header-social_box">
								<span>¡Síguenos!</span>
								<a class="fa-brands fa-facebook-f fa-fw" href="https://www.facebook.com/profile.php?id=100051148966458&locale=es_LA" target="_blank"></a>
								<a class="fa-brands fa-tiktok fa-fw" href="https://www.tiktok.com/@corp.jurid.penalito?_t=8nrTXvJUJSH&_r=1" target="_blank"></a>
								<a class="fa-brands fa-linkedin-in fa-fw" href="https://www.linkedin.com/" target="_blank"></a>
								<a class="fa-brands fa-youtube fa-fw" href="https://www.youtube.com/@rogertquispealegria831" target="_blank"></a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Header Upper -->
			<div class="header-upper">
				<div class="auto-container">
					<div class="inner-container">
						<div class="d-flex justify-content-between align-items-center flex-wrap">

							<div class="logo-box d-flex align-items-center flex-wrap">
								<div>
									<a href="{{ url('/') }}/">
										<img src="{{ asset('assets') }}/images/logo1.png" alt="CJP Penalito Logo" style="max-height: 72px; width: auto;">
									</a>
								</div>
							</div>

							<div class="nav-outer d-flex flex-wrap">
								<!-- Main Menu -->
								<nav class="main-menu navbar-expand-md">
									<div class="navbar-header">
										<!-- Toggle Button -->
										<button class="navbar-toggler" type="button" data-toggle="collapse"
											data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
											aria-expanded="false" aria-label="Toggle navigation">
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
									</div>

									<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
										<ul class="navigation clearfix">
											
											<!--li>
												<a href="{{ url('/') }}/">
													<i class="fa-solid fa-house"></i>Inicio
												</a>
											</li -->

											<li>
												<a href="{{ url('/') }}/about">
													<i class="fa-solid fa-circle-info"></i>¿Quiénes somos?
												</a>
											</li>

											<li>
												<a href="{{ url('/') }}/about#equipo">
													<i class="fa-solid fa-users"></i>Congreso
												</a>
											</li>

											<li>
												<a href="{{ url('/') }}/capacitacion#diplomados">
													<i class="fa-solid fa-certificate"></i>Diplomados
												</a>
											</li>

											<li class="menu-item-has-children">
												<a href="{{ url('/') }}/#">
													<i class="fa-solid fa-book-bookmark"></i>
													Cursos
													<i class="fa-solid fa-chevron-down"></i>
												</a>

												<ul class="sub-menu">
													<li>
														<a href="{{ url('/') }}/#">
															DERECHO PROCESAL PENAL
														</a>
													</li>
													<li>
														<a href="{{ url('/') }}/#">
															DIPLOMADO DE ALTA ESPECIALIZACIÓN EN ASISTENTE EN FUNCIÓN FISCAL Y ASISTENTE JURISDICCIONAL
														</a>
													</li>
													<li>
														<a href="{{ url('/') }}/#">
															II CONGRESO REGIONAL DE ABOGADOS PENALISTAS DE APURIMAC
														</a>
													</li>
												</ul>
											</li>

											<li>
												<a href="{{ url('/') }}/inscripcion">
													<i class="fa-solid fa-file-signature"></i>Inscripción
												</a>
											</li>
											<li>
												<a href="{{ url('/') }}/libros">
													<i class="fa-solid fa-book"></i>Libros
												</a>
											</li>

											<li>
												<a href="{{ url('/') }}/verificador">
													<i class="fa-solid fa-square-check"></i>Verificador de certificado
												</a>
											</li>

										</ul>
									</div>
								</nav>
								<!-- Main Menu End-->

								<div class="outer-box d-flex align-items-center flex-wrap">
									<!-- Login Button -->
									<a href="{{ url('/') }}/login" class="login-btn-header">
										<i class="fa-solid fa-right-to-bracket"></i> Iniciar Sesión
									</a>
									<!-- Mobile Navigation Toggler -->
									<div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
								</div>

							</div>

						</div>
					</div>
				</div>
			</div>
			<!--End Header Upper-->

			<!-- Mobile Menu  -->
			<div class="mobile-menu">
				<div class="menu-backdrop"></div>
				<div class="close-btn"><span class="icon flaticon-close-1"></span></div>

				<nav class="menu-box">
					<div class="nav-logo"><a href="{{ url('/') }}/"><img src="{{ asset('assets') }}/images/logo1.png" alt="" title=""></a>
					</div>
					<div class="menu-outer">
						<!-- Here Menu Will Come Automatically Via Javascript / Same Menu as in Header -->
					</div>
				</nav>
			</div>
			<!-- End Mobile Menu -->

		</header>
		<!-- End Main Header -->


        @yield('content')

		<!-- Main Footer -->
		<footer class="footer-style-two">
			<div class="footer-two_circle"></div>
			<div class="footer-two_circle-two"></div>
			<div class="auto-container">
				<div class="inner-container">
					
					<!-- Upper Box: Newsletter Rediseñado -->
					<div class="footer-newsletter-box">
						<div class="row align-items-center justify-content-between">
							<div class="col-lg-5 col-md-12 mb-3 mb-lg-0 d-flex align-items-center gap-3">
								<div class="p-2 bg-white rounded shadow-sm" style="display: inline-block; border: 2px solid #d9222a;">
									<img src="{{ asset('assets') }}/images/logo2.png" alt="CJP Penalito Logo" style="max-height: 48px; width: auto;">
								</div>
								<h3 class="mb-0 text-white" style="font-family: 'Outfit', sans-serif; font-weight: 700;">
									Suscríbete al <span style="color: var(--primary-gold);">Boletín</span>
								</h3>
							</div>
							<div class="col-lg-6 col-md-12">
								<form id="newsletterForm" class="newsletter-form-style ms-auto">
									<input type="email" name="email" placeholder="Ingresa tu correo electrónico" required>
									<button type="submit">
										<i class="fa-solid fa-paper-plane"></i>
									</button>
								</form>
							</div>
						</div>
					</div>

					<!-- Widgets Section -->
					<div class="widgets-section">
						<div class="row clearfix">

							<!-- Big Column 1 -->
							<div class="big-column col-lg-6 col-md-12 col-sm-12">
								<div class="row clearfix">

									<!-- Footer Column: Contacto -->
									<div class="footer_column col-lg-7 col-md-6 col-sm-12">
										<div class="footer-widget contact-widget">
											<h4 class="footer-two_title" style="font-family: 'Outfit', sans-serif; font-weight: 700; color: #fff;">Ponte en Contacto</h4>
											<ul class="footer-contact_list-two">
												<li>
													<span class="icon fa-solid fa-location-dot"></span>
													<span>Abancay - Apurímac, Perú.</span>
												</li>
												<li>
													<span class="icon fa-solid fa-phone"></span>
													<a href="tel:914159947">914 159 947</a>
												</li>
												<li>
													<span class="icon fa-solid fa-envelope"></span>
													<a href="mailto:corporacionjuridicapenalito@gmail.com" style="word-break: break-all;">corporacionjuridicapenalito@gmail.com</a>
												</li>
											</ul>
										</div>
									</div>

									<!-- Footer Column: Enlaces -->
									<div class="footer_column col-lg-5 col-md-6 col-sm-12">
										<div class="footer-widget links-widget">
											<h4 class="footer-two_title" style="font-family: 'Outfit', sans-serif; font-weight: 700; color: #fff;">Enlaces Rápidos</h4>
											<ul class="footer-list_two">
												<li><a href="{{ url('/') }}/pages/about"><i class="fa-solid fa-chevron-right fs-xs me-2 opacity-50"></i>Sobre Nosotros</a></li>
												<li><a href="{{ url('/') }}/pages/capacitacion"><i class="fa-solid fa-chevron-right fs-xs me-2 opacity-50"></i>Capacitaciones</a></li>
												<li><a href="{{ url('/') }}/pages/blog"><i class="fa-solid fa-chevron-right fs-xs me-2 opacity-50"></i>Blogs y Revistas</a></li>
												<li><a href="{{ url('/') }}/pages/contact"><i class="fa-solid fa-chevron-right fs-xs me-2 opacity-50"></i>Contactos</a></li>
											</ul>
										</div>
									</div>

								</div>
							</div>

							<!-- Big Column 2 -->
							<div class="big-column col-lg-6 col-md-12 col-sm-12">
								<div class="row clearfix">

									<!-- Footer Column: Libro de Reclamaciones -->
									<div class="footer_column col-lg-6 col-md-6 col-sm-12">
										<div class="footer-widget links-widget">
											<h4 class="footer-two_title" style="font-family: 'Outfit', sans-serif; font-weight: 700; color: #fff; margin-bottom: 20px;">Reclamaciones</h4>
											<div class="libro-reclamaciones-badge">
												<a href="#">
													<img src="{{ asset('assets') }}/images/resource/libro_reclamo.png" alt="Libro de Reclamaciones">
													<p class="mb-0 mt-2 text-white small" style="font-weight: 500;">Libro de Reclamaciones</p>
												</a>
											</div>
										</div>
									</div>

									<!-- Footer Column: Galería -->
									<div class="footer_column col-lg-6 col-md-6 col-sm-12">
										<div class="footer-widget gallery-widget">
											<h4 class="footer-two_title" style="font-family: 'Outfit', sans-serif; font-weight: 700; color: #fff;">Nuestra Galería</h4>
											<div class="footer-gallery-grid mt-3">
												<div class="gallery-item">
													<a class="lightbox-image" href="{{ asset('assets') }}/images/gallery/gallery-3.jpeg">
														<img src="{{ asset('assets') }}/images/gallery/gallery-3.jpeg" alt="Imagen de Galería 1">
													</a>
												</div>
												<div class="gallery-item">
													<a class="lightbox-image" href="{{ asset('assets') }}/images/gallery/gallery-5.jpeg">
														<img src="{{ asset('assets') }}/images/gallery/gallery-5.jpeg" alt="Imagen de Galería 2">
													</a>
												</div>
												<div class="gallery-item">
													<a class="lightbox-image" href="{{ asset('assets') }}/images/gallery/gallery-6.jpeg">
														<img src="{{ asset('assets') }}/images/gallery/gallery-6.jpeg" alt="Imagen de Galería 3">
													</a>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>

						</div>
					</div>

				</div>
			</div>
			
			<div class="footer-bottom">
				<div class="auto-container">
					<div class="d-flex justify-content-between align-items-center flex-wrap">

						<!-- Copyright -->
						<div class="main-footer_copyright" style="font-size: 13px;">
							Derechos de Autor &copy; {{ date('Y') }} <a href="#" class="text-white fw-bold">CJP</a> Todos los Derechos Reservados.
						</div>

						<!-- Social Box -->
						<div class="footer-social_box">
							<a class="fa-brands fa-facebook-f fa-fw" href="https://www.facebook.com/profile.php?id=100051148966458&locale=es_LA" target="_blank"></a>
							<a class="fa-brands fa-tiktok fa-fw" href="https://www.tiktok.com/@corp.jurid.penalito?_t=8nrTXvJUJSH&_r=1" target="_blank"></a>
							<a class="fa-brands fa-whatsapp fa-fw" href="https://chat.whatsapp.com/JjsnVL71fd7Hpo6yB7LEIg" target="_blank"></a>
							<a class="fa-brands fa-youtube fa-fw" href="https://www.youtube.com/@rogertquispealegria831" target="_blank"></a>
						</div>

						<ul class="footer-bottom_nav" style="font-size: 13px;">
							<li><a href="#">Política & Privacidad</a></li>
							<li><a href="#">Términos & Condiciones</a></li>
						</ul>

					</div>
				</div>
			</div>
		</footer>
		<!-- End Footer Style -->

		<!-- Search Popup -->
		<div class="search-popup">
			<div class="color-layer"></div>
			<button class="close-search"><span class="flaticon-close-1"></span></button>
			<form method="post" action="#">
				<div class="form-group">
					<input type="search" name="search-field" value="" placeholder="Buscar aquí..." required="">
					<button class="fa fa-solid fa-magnifying-glass fa-fw" type="submit"></button>
				</div>
			</form>
		</div>
		<!-- End Search Popup -->

	</div>
	<!-- End PageWrapper -->

	<div class="progress-wrap">
		<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
			<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
		</svg>
	</div>

	<!-- Core JS Scripts -->
	<script src="{{ asset('assets') }}/js/jquery.js"></script>
	<script src="{{ asset('assets') }}/js/popper.min.js"></script>
	<script src="{{ asset('assets') }}/js/bootstrap.min.js"></script>
	<script src="{{ asset('assets') }}/js/appear.js"></script>
	<script src="{{ asset('assets') }}/js/parallax.min.js"></script>
	<script src="{{ asset('assets') }}/js/tilt.jquery.min.js"></script>
	<script src="{{ asset('assets') }}/js/jquery.paroller.min.js"></script>
	<script src="{{ asset('assets') }}/js/wow.js"></script>
	<script src="{{ asset('assets') }}/js/swiper.min.js"></script>
	<script src="{{ asset('assets') }}/js/backtotop.js"></script>
	<script src="{{ asset('assets') }}/js/odometer.js"></script>
	<script src="{{ asset('assets') }}/js/parallax-scroll.js"></script>

	<!-- Animation Scripts -->
	<script src="{{ asset('assets') }}/js/gsap.min.js"></script>
	<script src="{{ asset('assets') }}/js/SplitText.min.js"></script>
	<script src="{{ asset('assets') }}/js/ScrollTrigger.min.js"></script>
	<script src="{{ asset('assets') }}/js/ScrollToPlugin.min.js"></script>
	<script src="{{ asset('assets') }}/js/ScrollSmoother.min.js"></script>

	<!-- SweetAlert2 CDN -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	<!-- Additional JS Scripts -->
	<script src="{{ asset('assets') }}/js/magnific-popup.min.js"></script>
	<script src="{{ asset('assets') }}/js/jquery.meanmenu.min.js"></script>
	<script src="{{ asset('assets') }}/js/nav-tool.js"></script>
	<script src="{{ asset('assets') }}/js/jquery-ui.js"></script>
	<script src="{{ asset('assets') }}/js/script.js"></script>
	<script src="{{ asset('assets') }}/js/modal.js"></script>

	<!-- Botón Flotante de WhatsApp -->
<a href="https://wa.me/51997370339?text=Hola,%20quiero%20más%20información:%0A%E2%9C%93%20Cursos.%0A%E2%9C%93%20Diplomado.%0A%E2%9C%93%20Congreso."
   class="whatsapp-float"
   target="_blank"
   aria-label="Contacto por WhatsApp">
    <i class="fa-brands fa-whatsapp whatsapp-icon"></i>
    <span class="whatsapp-tooltip">¡Más información al WhatsApp!</span>
</a>

	<!-- Botón Flotante de Inscripción -->
	<a href="{{ url('/') }}/inscripcion" class="inscription-float" aria-label="Inscripción en Línea">
		<i class="fa-solid fa-file-signature inscription-icon"></i>
		<span class="inscription-tooltip">¡Inscríbete Online!</span>
	</a>

	<!-- Modal de Login Flotante -->
	<div class="login-overlay" id="loginOverlay"></div>
	<div class="login-popup" id="loginPopup">
		<button id="closeLoginPopup" class="close-login-btn" aria-label="Cerrar">&times;</button>
		
		<div class="login-popup-header">
			<div class="login-logo">
				<img src="{{ asset('assets') }}/images/logo2.png" alt="CJP Penalito Logo">
			</div>
			<h4>Iniciar Sesión</h4>
			<p>Ingresa a tu cuenta de Aula Virtual</p>
		</div>

		<form id="loginFormPopup">
			<div class="form-group mb-3">
				<label for="loginUser" class="login-label">Usuario o Correo</label>
				<div class="input-group">
					<span class="input-group-text"><i class="fa-solid fa-user"></i></span>
					<input type="text" id="loginUser" class="form-control login-input" placeholder="ejemplo@correo.com" required>
				</div>
			</div>
			<div class="form-group mb-3">
				<label for="loginPass" class="login-label">Contraseña</label>
				<div class="input-group">
					<span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
					<input type="password" id="loginPass" class="form-control login-input" placeholder="••••••••" required>
					<button class="btn btn-outline-secondary border-start-0" type="button" id="toggleLoginPass" style="border-color: rgba(15, 19, 86, 0.12); border-left: none;">
						<i class="fa-regular fa-eye"></i>
					</button>
				</div>
			</div>
			<button type="submit" class="login-submit-btn">
				Ingresar <i class="fa-solid fa-right-to-bracket ms-2"></i>
			</button>
			<div class="text-center mt-3">
				<a href="#" class="forgot-pass-link">¿Olvidaste tu contraseña?</a>
			</div>
		</form>
	</div>

	<!-- Lógica para copiar al portapapeles -->
	<script>
		function copyToClipboard(text, message) {
			navigator.clipboard.writeText(text).then(() => {
				Swal.fire({
					toast: true,
					position: 'top-end',
					icon: 'success',
					title: message,
					showConfirmButton: false,
					timer: 1500
				});
			}).catch(err => {
				console.error('Error al copiar: ', err);
			});
		}
	</script>

	<!-- Lógica para abrir/cerrar y enviar el formulario de inscripción -->
	<script>
		document.addEventListener('DOMContentLoaded', function () {
			// Redirigir clicks de trigger-inscription a la página de inscripción con el parámetro del curso
			document.addEventListener('click', function(e) {
				const trigger = e.target.closest('.trigger-inscription');
				if (trigger) {
					e.preventDefault();
					const plan = trigger.getAttribute('data-plan');
					let url = '{{ url('/') }}/inscripcion';
					if (plan) {
						url += '?curso=' + encodeURIComponent(plan);
					}
					window.location.href = url;
				}
			});
		});
	</script>

	<!-- Interceptar Formulario de Boletín con SweetAlert2 -->
	<script>
		document.addEventListener('DOMContentLoaded', function () {
			const newsletterForm = document.getElementById('newsletterForm');
			if (newsletterForm) {
				newsletterForm.addEventListener('submit', function (e) {
					e.preventDefault();
					const emailInput = newsletterForm.querySelector('input[type="email"]');
					if (emailInput && emailInput.value) {
						Swal.fire({
							title: '¡Suscripción Exitosa!',
							text: 'Gracias por suscribirte a nuestro boletín jurídico.',
							icon: 'success',
							confirmButtonText: 'Aceptar',
							confirmButtonColor: '#0f1356',
							customClass: {
								popup: 'premium-swal-popup'
							}
						});
						emailInput.value = ''; // Limpiar campo
					}
				});
			}
		});
	</script>

	<!-- JavaScript para Modal de Iniciar Sesión -->
	<script>
		document.addEventListener('DOMContentLoaded', function () {
			const loginOverlay = document.getElementById('loginOverlay');
			const loginPopup = document.getElementById('loginPopup');
			const closeLoginBtn = document.getElementById('closeLoginPopup');
			const toggleLoginPass = document.getElementById('toggleLoginPass');
			const loginPassInput = document.getElementById('loginPass');
			const loginForm = document.getElementById('loginFormPopup');

			// Abrir Modal al hacer clic en cualquier botón de Iniciar Sesión o enlaces a /login
			document.addEventListener('click', function (e) {
				const trigger = e.target.closest('.login-btn-header, a[href$="/login"]');
				if (trigger) {
					e.preventDefault();
					if (loginOverlay && loginPopup) {
						loginOverlay.classList.add('active');
						loginPopup.classList.add('active');
					}
				}
			});

			// Cerrar Modal
			function closeLogin() {
				if (loginOverlay && loginPopup) {
					loginOverlay.classList.remove('active');
					loginPopup.classList.remove('active');
				}
			}

			if (closeLoginBtn) {
				closeLoginBtn.addEventListener('click', closeLogin);
			}
			if (loginOverlay) {
				loginOverlay.addEventListener('click', closeLogin);
			}

			// Ocultar/Mostrar Contraseña
			if (toggleLoginPass && loginPassInput) {
				toggleLoginPass.addEventListener('click', function () {
					const type = loginPassInput.getAttribute('type') === 'password' ? 'text' : 'password';
					loginPassInput.setAttribute('type', type);
					const icon = toggleLoginPass.querySelector('i');
					if (icon) {
						icon.classList.toggle('fa-eye');
						icon.classList.toggle('fa-eye-slash');
					}
				});
			}

			// Manejar el submit del Formulario con SweetAlert2
			if (loginForm) {
				loginForm.addEventListener('submit', function (e) {
					e.preventDefault();
					const user = document.getElementById('loginUser').value;
					const pass = loginPassInput.value;

					Swal.fire({
						title: 'Validando credenciales...',
						text: 'Por favor, espera un momento.',
						icon: 'info',
						allowOutsideClick: false,
						showConfirmButton: false,
						didOpen: () => {
							Swal.showLoading();
							
							setTimeout(() => {
								if (user === 'demo' && pass === '123456') {
									Swal.fire({
										title: '¡Acceso Concedido!',
										text: 'Bienvenido a la plataforma de Corporación Jurídica Penalito.',
										icon: 'success',
										confirmButtonText: 'Ir al Aula Virtual',
										confirmButtonColor: '#0f1356'
									}).then(() => {
										window.location.reload();
									});
								} else {
									Swal.fire({
										title: 'Error de Autenticación',
										text: 'El usuario o la contraseña ingresados son incorrectos.',
										icon: 'error',
										confirmButtonText: 'Intentar de nuevo',
										confirmButtonColor: '#dc3545'
									});
								}
							}, 1500);
						}
					});
				});
			}
		});
	</script>
</body>

</html>
