@extends('layouts.app')
@section('content')

<!-- Page Title -->
<section class="page-title" style="background-image:url({{ asset('assets') }}/images/background/1.jpg)">
	<div class="page-title_pattern" style="background-image:url({{ asset('assets') }}/images/background/page-title_pattern.png)"></div>
	<div class="page-title_gradient"></div>
	<div class="auto-container">
		<h2>Acceso de Alumnos</h2>
		<ul class="bread-crumb clearfix">
			<li><a href="{{ url('/') }}/"><i class="fa-solid fa-house fa-fw"></i> Inicio</a></li>
			<li>Iniciar Sesión</li>
		</ul>
	</div>
</section>
<!-- End Page Title -->

<!-- Login Area Premium -->
<section class="login-section py-5 my-5">
	<div class="auto-container">
		<div class="row justify-content-center">
			<div class="col-lg-5 col-md-8 col-sm-12">
				
				<!-- Glassmorphic Login Card -->
				<div class="login-card-premium" style="background: rgba(15, 19, 86, 0.95); border: 1px solid rgba(197, 168, 128, 0.25); border-radius: 20px; padding: 40px; box-shadow: 0 20px 45px rgba(0, 0, 0, 0.4);">
					
					<!-- Header de Tarjeta -->
					<div class="text-center mb-4">
						<div class="p-3 bg-white rounded shadow-sm d-inline-block mb-3" style="border-radius: 12px !important;">
							<img src="{{ asset('assets') }}/images/logo2.png" alt="CJP Penalito" style="max-height: 54px; width: auto;">
						</div>
						<h3 class="text-white fw-bold mb-1" style="font-family: 'Outfit', sans-serif;">Aula Virtual</h3>
						<p class="text-muted-premium" style="color: #cbd5e1; font-size: 14px;">Ingresa tus credenciales de alumno registrado</p>
					</div>

					<!-- Formulario -->
					<form id="premium-login-form">
						<!-- Campo Usuario -->
						<div class="form-group mb-3">
							<label class="text-white-50 mb-1" style="font-size: 13px; font-weight: 500;">Correo Electrónico / DNI</label>
							<div class="input-group">
								<span class="input-group-text bg-transparent border-secondary text-white-50" style="border-color: rgba(197, 168, 128, 0.2) !important;"><i class="fa-solid fa-user"></i></span>
								<input type="text" class="form-control bg-transparent text-white border-secondary" placeholder="ejemplo@correo.com" required style="border-color: rgba(197, 168, 128, 0.2) !important; color: white !important; font-size: 14px;">
							</div>
						</div>

						<!-- Campo Contraseña -->
						<div class="form-group mb-4">
							<label class="text-white-50 mb-1" style="font-size: 13px; font-weight: 500;">Contraseña</label>
							<div class="input-group">
								<span class="input-group-text bg-transparent border-secondary text-white-50" style="border-color: rgba(197, 168, 128, 0.2) !important;"><i class="fa-solid fa-lock"></i></span>
								<input type="password" class="form-control bg-transparent text-white border-secondary" placeholder="••••••••" required style="border-color: rgba(197, 168, 128, 0.2) !important; color: white !important; font-size: 14px;">
							</div>
						</div>

						<!-- Recuerdame y Olvido -->
						<div class="d-flex justify-content-between align-items-center mb-4" style="font-size: 13px;">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" id="rememberMe">
								<label class="form-check-label text-white-50" for="rememberMe">
									Recordarme
								</label>
							</div>
							<a href="#" class="forgot-link" style="color: var(--primary-gold); transition: var(--transition);">¿Olvidó su contraseña?</a>
						</div>

						<!-- Botón Ingreso -->
						<button type="submit" class="btn-style-one w-100 theme-btn py-3 border-0" style="border-radius: 30px !important;">
							<span class="btn-wrap">
								<span class="text-one w-100 text-center">Acceder al Aula Virtual <i class="fa-solid fa-right-to-bracket fa-fw"></i></span>
								<span class="text-two w-100 text-center">Acceder al Aula Virtual <i class="fa-solid fa-right-to-bracket fa-fw"></i></span>
							</span>
						</button>
					</form>
					
					<!-- Registro / Info adicional -->
					<div class="text-center mt-4 pt-2 border-top border-secondary" style="border-top-color: rgba(255, 255, 255, 0.1) !important;">
						<p class="text-white-50 mb-0" style="font-size: 13px;">¿No tienes cuenta? 
							<a href="{{ url('/') }}/contact" style="color: var(--primary-gold); font-weight: 600;">Regístrate aquí</a>
						</p>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>

<script>
	document.addEventListener('DOMContentLoaded', function() {
		const loginForm = document.getElementById('premium-login-form');
		if (loginForm) {
			loginForm.addEventListener('submit', function(e) {
				e.preventDefault();
				Swal.fire({
					title: 'Iniciando Sesión',
					text: 'Validando tus credenciales con el aula virtual...',
					icon: 'info',
					allowOutsideClick: false,
					showConfirmButton: false,
					didOpen: () => {
						Swal.showLoading();
					},
					timer: 2000
				}).then(() => {
					Swal.fire({
						title: '¡Acceso Correcto!',
						text: 'Bienvenido de nuevo a la Corporación Jurídica Penalito.',
						icon: 'success',
						confirmButtonText: 'Ir al Aula Virtual',
						confirmButtonColor: '#0f1356'
					});
				});
			});
		}
	});
</script>

@endsection
