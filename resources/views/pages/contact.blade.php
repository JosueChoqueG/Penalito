@extends('layouts.app')
@section('content')

	<!-- Page Title -->
    <section class="page-title" style="background-image:url({{ asset('assets') }}/images/background/1.jpg)">
		<div class="page-title_pattern" style="background-image:url({{ asset('assets') }}/images/background/page-title_pattern.png)"></div>
		<div class="page-title_gradient"></div>
        <div class="auto-container">
			<h2>Contacto</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="{{ url('/') }}/"><i class="fa-solid fa-house fa-fw"></i> Inicio</a></li>
				<li>Contacto</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->

	<!-- Contact One -->
	<section class="contact-one">
		<div class="auto-container">
			<div class="row clearfix">
				<!-- Column -->
				<div class="contact-one_title-column col-lg-6 col-md-12 col-sm-12">
					<div class="sec-title">
						<div class="sec-title_title">Atención Inmediata</div>
						<h2 class="sec-title_heading">Preguntas y Consultas Generales</h2>
						<div class="sec-title_text">Ponte en contacto con nosotros si tienes consultas sobre inscripciones a cursos, diplomados, accesos al aula virtual o asesoría legal personalizada.</div>
					</div>
					<ul class="contact-one_list">
						<li>
							<i class="fa-solid fa-location-dot fa-fw"></i>
							Dirección
							<strong>Abancay - Apurímac, Perú.</strong>
						</li>
						<li>
							<i class="fa-solid fa-phone fa-fw"></i>
							Teléfono
							<strong><a href="tel:914159947">914 159 947</a></strong>
						</li>
						<li>
							<i class="fa-solid fa-envelope fa-fw"></i>
							Correo Electrónico
							<strong><a href="mailto:corporacionjuridicapenalito@gmail.com">corporacionjuridicapenalito@gmail.com</a></strong>
						</li>
					</ul>
				</div>
				<!-- Column -->
				<div class="contact-one_form-column col-lg-6 col-md-12 col-sm-12">
					<div class="contact-one_form-outer">
						<h2>Escríbenos tu Consulta</h2>

						<div class="default-form style-two contact-form">
							<form id="contact-form">
								<div class="row clearfix">
									<!--Form Group-->
									<div class="form-group col-lg-6 col-md-6 col-sm-6">
										<input type="text" name="username" value="" placeholder="Nombre Completo" required>
									</div>
									<!--Form Group-->
									<div class="form-group col-lg-6 col-md-6 col-sm-6">
										<input type="email" name="email" value="" placeholder="Correo Electrónico" required>
									</div>
									<div class="form-group col-lg-6 col-md-6 col-sm-6">
										<input type="text" name="phone" value="" placeholder="Teléfono / Celular" required>
									</div>
									<!--Form Group-->
									<div class="form-group col-lg-6 col-md-6 col-sm-6">
										<select name="service" class="custom-select-box" style="display: none;">
											<option>Seleccione Especialidad</option>
											<option>Derecho Penal</option>
											<option>Derecho Constitucional</option>
											<option>Medicina Forense</option>
											<option>Criminalística</option>
										</select>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12 form-group">
										<textarea name="message" placeholder="Escribe tu consulta detallada aquí..." required></textarea>
									</div>
									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<button type="submit" class="theme-btn btn-style-one">
											<span class="btn-wrap">
												<span class="text-one">Enviar Mensaje <i class="fa-solid fa-angle-right fa-fw"></i></span>
												<span class="text-two">Enviar Mensaje <i class="fa-solid fa-angle-right fa-fw"></i></span>
											</span>
										</button>
									</div>
									
								</div>
							</form>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Contact One -->

	<!-- Map One -->
	<section class="map-one style-two">
		<div class="map-one_map">
			<iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Abancay%20Apurimac%20Peru&t=&z=14&ie=UTF8&iwloc=&output=embed" style="border: 0;"></iframe>
		</div>
	</section>
	<!-- End Map One -->

	<script>
		document.addEventListener('DOMContentLoaded', function() {
			const contactForm = document.getElementById('contact-form');
			if (contactForm) {
				contactForm.addEventListener('submit', function(e) {
					e.preventDefault();
					Swal.fire({
						title: '¡Mensaje Enviado!',
						text: 'Tu consulta ha sido enviada exitosamente. Un asesor se comunicará contigo a la brevedad.',
						icon: 'success',
						confirmButtonText: 'Aceptar',
						confirmButtonColor: '#0f1356',
						customClass: {
							popup: 'premium-swal-popup'
						}
					});
					contactForm.reset();
				});
			}
		});
	</script>

@endsection
