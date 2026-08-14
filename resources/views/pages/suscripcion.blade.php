@extends('layouts.app')
@section('content')

	<!-- Page Title -->
    <section class="page-title" style="background-image:url({{ asset('assets') }}/images/background/1.jpg)">
		<div class="page-title_pattern" style="background-image:url({{ asset('assets') }}/images/background/page-title_pattern.png)"></div>
		<div class="page-title_gradient"></div>
        <div class="auto-container">
			<h2>Suscripción Online</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="{{ url('/') }}/"><i class="fa-solid fa-house fa-fw"></i> Inicio</a></li>
				<li>Suscripción Online</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->

	<!-- Pricing Section -->
	<section class="pricing-section py-5 my-3">
		<div class="auto-container">
			<div class="sec-title text-center mb-5">
				<span class="sub-title text-gold text-uppercase fw-bold letter-spacing-1">Membresías Exclusivas</span>
				<h2 class="sec-title_heading mt-2" style="font-size: 36px; font-weight: 700; color: #1e293b;">Elige el Plan Ideal para tu Desarrollo Profesional</h2>
				<p class="text-muted mt-2 mx-auto" style="max-width: 600px;">
					Accede a nuestra biblioteca digital de libros penales, videoteca especializada, boletines de jurisprudencia y beneficios exclusivos en capacitaciones.
				</p>
			</div>

			<div class="row justify-content-center">
				<!-- Plan Mensual -->
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4 d-flex">
					<div class="pricing-card w-100 p-4 d-flex flex-column justify-content-between">
						<div>
							<div class="plan-header text-center pb-4 mb-4 border-bottom">
								<span class="icon-wrap mb-3"><i class="fa-solid fa-graduation-cap"></i></span>
								<h3 class="plan-name">Plan Mensual</h3>
								<p class="plan-desc text-muted">Ideal para estudiantes y profesionales independientes</p>
								<div class="price-wrap mt-3">
									<span class="currency">S/.</span>
									<span class="price">49</span>
									<span class="period">/ mes</span>
								</div>
							</div>
							<ul class="plan-features list-unstyled">
								<li><i class="fa-solid fa-check text-success mr-2"></i> Acceso a la Videoteca Académica</li>
								<li><i class="fa-solid fa-check text-success mr-2"></i> Lectura Online de Libros seleccionados</li>
								<li><i class="fa-solid fa-check text-success mr-2"></i> Boletín mensual de Jurisprudencia</li>
								<li><i class="fa-solid fa-check text-success mr-2"></i> Acceso básico a Aula Virtual</li>
								<li class="disabled"><i class="fa-solid fa-xmark text-danger mr-2"></i> Descarga directa de Libros y Revistas</li>
								<li class="disabled"><i class="fa-solid fa-xmark text-danger mr-2"></i> Descuentos en Diplomados y Cursos</li>
							</ul>
						</div>
						<div class="text-center mt-4">
							<a href="#" class="btn btn-outline-gold btn-block trigger-inscription" data-plan="Suscripción - Plan Mensual">Suscribirse Ahora</a>
						</div>
					</div>
				</div>

				<!-- Plan Semestral (Destacado) -->
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4 d-flex">
					<div class="pricing-card highlighted w-100 p-4 d-flex flex-column justify-content-between position-relative">
						<span class="badge-featured">Más Popular</span>
						<div>
							<div class="plan-header text-center pb-4 mb-4 border-bottom">
								<span class="icon-wrap mb-3"><i class="fa-solid fa-scale-balanced text-gold"></i></span>
								<h3 class="plan-name text-white">Plan Semestral</h3>
								<p class="plan-desc text-light">Ahorra y potencia tu formación continua</p>
								<div class="price-wrap mt-3">
									<span class="currency text-white">S/.</span>
									<span class="price text-white">229</span>
									<span class="period text-light">/ 6 meses</span>
								</div>
							</div>
							<ul class="plan-features list-unstyled text-white">
								<li><i class="fa-solid fa-check text-gold mr-2"></i> Acceso Completo a la Videoteca Académica</li>
								<li><i class="fa-solid fa-check text-gold mr-2"></i> Lectura Online de TODOS los Libros</li>
								<li><i class="fa-solid fa-check text-gold mr-2"></i> Boletín quincenal de Jurisprudencia</li>
								<li><i class="fa-solid fa-check text-gold mr-2"></i> Acceso completo a Aula Virtual</li>
								<li><i class="fa-solid fa-check text-gold mr-2"></i> Descarga de Libros seleccionados</li>
								<li><i class="fa-solid fa-check text-gold mr-2"></i> 10% de Descuento en Diplomados y Cursos</li>
							</ul>
						</div>
						<div class="text-center mt-4">
							<a href="#" class="btn btn-gold btn-block trigger-inscription" data-plan="Suscripción - Plan Semestral">Suscribirse Ahora</a>
						</div>
					</div>
				</div>

				<!-- Plan Anual -->
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4 d-flex">
					<div class="pricing-card w-100 p-4 d-flex flex-column justify-content-between">
						<div>
							<div class="plan-header text-center pb-4 mb-4 border-bottom">
								<span class="icon-wrap mb-3"><i class="fa-solid fa-award"></i></span>
								<h3 class="plan-name">Plan Anual</h3>
								<p class="plan-desc text-muted">Acceso total sin límites y soporte preferencial</p>
								<div class="price-wrap mt-3">
									<span class="currency">S/.</span>
									<span class="price">399</span>
									<span class="period">/ año</span>
								</div>
							</div>
							<ul class="plan-features list-unstyled">
								<li><i class="fa-solid fa-check text-success mr-2"></i> Todo lo del Plan Semestral</li>
								<li><i class="fa-solid fa-check text-success mr-2"></i> Descarga ilimitada de Libros y Revistas</li>
								<li><i class="fa-solid fa-check text-success mr-2"></i> Acceso prioritario a clases en vivo</li>
								<li><i class="fa-solid fa-check text-success mr-2"></i> Boletín semanal de Jurisprudencia clave</li>
								<li><i class="fa-solid fa-check text-success mr-2"></i> 20% de Descuento en TODOS los Diplomados</li>
								<li><i class="fa-solid fa-check text-success mr-2"></i> Certificado de Suscriptor Premium</li>
							</ul>
						</div>
						<div class="text-center mt-4">
							<a href="#" class="btn btn-outline-gold btn-block trigger-inscription" data-plan="Suscripción - Plan Anual">Suscribirse Ahora</a>
						</div>
					</div>
				</div>
			</div>

			<!-- Formulario de Inscripción y Pago Directo (Reemplazo de sección negra) -->
			<div class="subscription-contact-box mt-5 p-5 rounded" style="background-color: #f8fafc; border: 1px solid #e2e8f0; border-top: 4px solid var(--primary-red);">
				<div class="row align-items-center">
					<div class="col-lg-5 col-md-12 mb-4 mb-lg-0">
						<span class="sub-title text-gold text-uppercase fw-bold" style="font-size: 13px; letter-spacing: 1px;">Inscripción Online</span>
						<h3 class="mt-2 mb-3" style="font-weight: 700; color: #1a253c; font-size: 28px;">Completa tu Registro y Pago de Membresía</h3>
						<p class="text-muted" style="font-size: 15px; line-height: 1.6;">
							Llena tus datos a la derecha para continuar. En el siguiente paso podrás visualizar las cuentas de abono de la corporación (BCP, Yape, Plin) y finalizar enviando tu comprobante por WhatsApp.
						</p>
						<div class="contact-info-list mt-4">
							<div class="d-flex align-items-center mb-3">
								<div class="info-icon mr-3" style="font-size: 20px; color: var(--primary-red);"><i class="fa-solid fa-phone"></i></div>
								<div>
									<span class="text-muted d-block" style="font-size: 12px; text-transform: uppercase; margin-bottom: 2px;">Llámanos</span>
									<a href="tel:914159947" class="fw-bold" style="color: #1a253c; font-size: 16px;">914 159 947</a>
								</div>
							</div>
							<div class="d-flex align-items-center">
								<div class="info-icon mr-3" style="font-size: 20px; color: var(--primary-red);"><i class="fa-solid fa-envelope"></i></div>
								<div>
									<span class="text-muted d-block" style="font-size: 12px; text-transform: uppercase; margin-bottom: 2px;">Escríbenos</span>
									<a href="mailto:corporacionjuridicapenalito@gmail.com" class="fw-bold" style="color: #1a253c; font-size: 16px; word-break: break-all;">corporacionjuridicapenalito@gmail.com</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-7 col-md-12">
						<div class="card border-0 shadow-sm p-4 bg-white" style="border-radius: 10px;" id="embeddedFormCard">
							
							<!-- PASO 1: DATOS PERSONALES -->
							<div id="embStep1">
								<h4 class="mb-4" style="font-weight: 600; color: #1a253c; font-size: 20px;">Formulario de Inscripción</h4>
								<form id="embFormStep1">
									<div class="row">
										<div class="col-md-6 form-group mb-3">
											<label class="form-label text-muted mb-1" style="font-size: 13px;">Nombres</label>
											<input type="text" id="embNombre" class="form-control custom-input" placeholder="Ingresa tus nombres" required>
										</div>
										<div class="col-md-6 form-group mb-3">
											<label class="form-label text-muted mb-1" style="font-size: 13px;">Apellidos</label>
											<input type="text" id="embApellidos" class="form-control custom-input" placeholder="Ingresa tus apellidos" required>
										</div>
										<div class="col-md-6 form-group mb-3">
											<label class="form-label text-muted mb-1" style="font-size: 13px;">Correo Electrónico</label>
											<input type="email" id="embCorreo" class="form-control custom-input" placeholder="ejemplo@correo.com" required>
										</div>
										<div class="col-md-6 form-group mb-3">
											<label class="form-label text-muted mb-1" style="font-size: 13px;">Teléfono / Celular</label>
											<input type="tel" id="embTelefono" class="form-control custom-input" placeholder="Ej. 987654321" required>
										</div>
										<div class="col-md-12 form-group mb-4">
											<label class="form-label text-muted mb-1" style="font-size: 13px;">Plan de Interés</label>
											<select id="embPlan" class="form-select custom-input" required style="height: 44px;">
												<option value="" disabled selected>Selecciona una opción</option>
												<option value="Suscripción - Plan Mensual">Suscripción - Plan Mensual (S/. 49)</option>
												<option value="Suscripción - Plan Semestral">Suscripción - Plan Semestral (S/. 229)</option>
												<option value="Suscripción - Plan Anual">Suscripción - Plan Anual (S/. 399)</option>
											</select>
										</div>
										<div class="col-md-12">
											<button type="submit" class="btn btn-gold btn-block py-2 fw-bold text-white" style="font-size: 15px; height: 46px;">Siguiente: Ver Medios de Pago <i class="fa-solid fa-arrow-right ms-2"></i></button>
										</div>
									</div>
								</form>
							</div>

							<!-- PASO 2: MEDIOS DE PAGO -->
							<div id="embStep2" style="display: none;">
								<div class="text-center mb-3">
									<h5 class="font-weight-bold mb-1" style="font-size: 12px; text-transform: uppercase; color: #0f1356 !important;">Certificado por Ilustre Colegio de Abogados de Ancash</h5>
									<h4 style="font-weight: 700; color: #1a253c; font-size: 22px; margin-top: 10px;">Medios de Pago</h4>
									<p class="text-muted" style="font-size: 13px;">Realiza tu transferencia o pago por Yape/Plin</p>
								</div>
								
								<div class="payment-details-box p-3 rounded mb-3" style="background-color: #f8fafc; border: 1px solid #e2e8f0; font-size: 14px;">
									<div class="d-flex justify-content-between mb-2">
										<span class="text-muted">A nombre de:</span>
										<strong style="color: #1a253c;">Riber Quispe Alegría</strong>
									</div>
									<div class="d-flex justify-content-between align-items-center mb-2">
										<span class="text-muted">BCP N°:</span>
										<span class="copyable-text font-weight-bold" style="color: #1e293b; cursor: pointer;" onclick="copyToClipboard('200-02109862-0-54', 'Número de cuenta BCP copiado')">200-02109862-0-54 <i class="fa-regular fa-copy ms-1 text-gold"></i></span>
									</div>
									<div class="d-flex justify-content-between align-items-center mb-2">
										<span class="text-muted">Cuenta Interbancaria (CCI):</span>
										<span class="copyable-text font-weight-bold" style="color: #1e293b; cursor: pointer; font-size: 13px;" onclick="copyToClipboard('002-20010210986205440', 'CCI copiado')">002-20010210986205440 <i class="fa-regular fa-copy ms-1 text-gold"></i></span>
									</div>
									<div class="d-flex justify-content-between align-items-center">
										<span class="text-muted">Yape y/o Plin N°:</span>
										<span class="copyable-text font-weight-bold" style="color: #1e293b; cursor: pointer;" onclick="copyToClipboard('914159947', 'Número de Yape/Plin copiado')">914 159 947 <i class="fa-regular fa-copy ms-1 text-gold"></i></span>
									</div>
								</div>

								<div class="text-center mb-4">
									<img src="{{ asset('assets') }}/images/resource/yape_qr.png" alt="Yape / Plin QR Code" class="img-fluid rounded border p-1" style="max-height: 180px;">
									<p class="text-muted mt-2 mb-0" style="font-size: 11px; text-transform: uppercase;">Escanea para pagar con Yape o Plin</p>
								</div>

								<div class="row">
									<div class="col-6">
										<button type="button" id="embBackBtn" class="btn btn-outline-secondary btn-block py-2" style="font-size: 14px; height: 46px;"><i class="fa-solid fa-arrow-left mr-1"></i> Atrás</button>
									</div>
									<div class="col-6">
										<button type="button" id="embSendBtn" class="btn btn-gold btn-block py-2 text-white fw-bold" style="font-size: 14px; height: 46px;">Enviar Comprobante <i class="fa-brands fa-whatsapp ml-1"></i></button>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>

		</div>
	</section>

	<style>
		/* Estilos específicos para la sección de Suscripciones */
		.text-gold {
			color: var(--primary-red) !important;
		}
		.btn-gold {
			background-color: var(--primary-red);
			color: #fff;
			border: 2px solid var(--primary-red);
			font-weight: 600;
			text-transform: uppercase;
			font-size: 14px;
			letter-spacing: 0.5px;
			transition: all 0.3s ease;
		}
		.btn-gold:hover {
			background-color: var(--primary-blue);
			border-color: var(--primary-blue);
			color: #fff;
		}
		.btn-outline-gold {
			background-color: transparent;
			color: var(--primary-red);
			border: 2px solid var(--primary-red);
			font-weight: 600;
			text-transform: uppercase;
			font-size: 14px;
			letter-spacing: 0.5px;
			transition: all 0.3s ease;
		}
		.btn-outline-gold:hover {
			background-color: var(--primary-red);
			color: #fff;
		}
		.pricing-card {
			background-color: #ffffff;
			border-radius: 12px;
			border: 1px solid #e2e8f0;
			box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03);
			transition: transform 0.3s ease, box-shadow 0.3s ease;
		}
		.pricing-card:hover {
			transform: translateY(-5px);
			box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
		}
		.pricing-card.highlighted {
			background-color: var(--primary-blue); /* Navy Blue branding color */
			border: 2px solid var(--primary-red);
		}
		.icon-wrap {
			display: inline-block;
			width: 60px;
			height: 60px;
			line-height: 60px;
			background-color: #f1f5f9;
			border-radius: 50%;
			font-size: 24px;
			color: var(--primary-blue);
		}
		.pricing-card.highlighted .icon-wrap {
			background-color: rgba(200, 16, 46, 0.15);
		}
		.plan-name {
			font-size: 22px;
			font-weight: 700;
			color: #1e293b;
			margin-bottom: 5px;
		}
		.price-wrap {
			display: flex;
			align-items: baseline;
			justify-content: center;
		}
		.currency {
			font-size: 20px;
			font-weight: 600;
			color: var(--primary-red);
			align-self: flex-start;
			margin-top: 5px;
		}
		.price {
			font-size: 48px;
			font-weight: 800;
			color: #1e293b;
			line-height: 1;
		}
		.period {
			font-size: 14px;
			color: #64748b;
			margin-left: 4px;
		}
		.plan-features li {
			padding: 10px 0;
			border-bottom: 1px solid #f1f5f9;
			font-size: 14px;
			display: flex;
			align-items: center;
		}
		.pricing-card.highlighted .plan-features li {
			border-bottom: 1px solid rgba(255, 255, 255, 0.08);
		}
		.plan-features li.disabled {
			color: #94a3b8;
			text-decoration: line-through;
		}
		.pricing-card.highlighted .plan-features li.disabled {
			color: rgba(255, 255, 255, 0.4);
		}
		.badge-featured {
			position: absolute;
			top: 15px;
			right: 15px;
			background-color: var(--primary-red);
			color: #fff;
			font-size: 11px;
			font-weight: 700;
			text-transform: uppercase;
			padding: 4px 10px;
			border-radius: 20px;
			letter-spacing: 0.5px;
		}
		.mr-2 {
			margin-right: 8px;
		}

		/* Inputs de Formulario de Consulta */
		.custom-input {
			border: 1px solid #cbd5e1;
			border-radius: 6px;
			padding: 10px 12px;
			font-size: 14px;
			transition: all 0.3s ease;
			background-color: #fff;
		}
		.custom-input:focus {
			border-color: var(--primary-red);
			box-shadow: 0 0 0 3px rgba(200, 16, 46, 0.15);
			outline: 0;
		}

		.copyable-text {
			padding: 2px 6px;
			border-radius: 4px;
			transition: background-color 0.2s ease;
		}
		.copyable-text:hover {
			background-color: #f1f5f9;
		}
	</style>

	<script>
		document.addEventListener('DOMContentLoaded', function() {
			// Lógica para pre-seleccionar plan desde los botones superiores hacia el formulario embebido
			const triggerBtns = document.querySelectorAll('.trigger-inscription');
			const embPlanSelect = document.getElementById('embPlan');
			const embFormCard = document.getElementById('embeddedFormCard');

			triggerBtns.forEach(btn => {
				btn.addEventListener('click', function(e) {
					e.preventDefault();
					const selectedPlan = this.getAttribute('data-plan');
					if (selectedPlan && embPlanSelect) {
						embPlanSelect.value = selectedPlan;
					}
					// Desplazar suavemente hasta el formulario embebido
					if (embFormCard) {
						embFormCard.scrollIntoView({ behavior: 'smooth', block: 'center' });
					}
				});
			});

			// Lógica del paso a paso del formulario embebido
			const embForm1 = document.getElementById('embFormStep1');
			const embStep1 = document.getElementById('embStep1');
			const embStep2 = document.getElementById('embStep2');
			const embBackBtn = document.getElementById('embBackBtn');
			const embSendBtn = document.getElementById('embSendBtn');

			if (embForm1) {
				embForm1.addEventListener('submit', function(e) {
					e.preventDefault();
					embStep1.style.display = 'none';
					embStep2.style.display = 'block';
				});
			}

			if (embBackBtn) {
				embBackBtn.addEventListener('click', function() {
					embStep2.style.display = 'none';
					embStep1.style.display = 'block';
				});
			}

			if (embSendBtn) {
				embSendBtn.addEventListener('click', function() {
					const nombre = document.getElementById('embNombre').value;
					const apellidos = document.getElementById('embApellidos').value;
					const correo = document.getElementById('embCorreo').value;
					const telefono = document.getElementById('embTelefono').value;
					const plan = document.getElementById('embPlan').value;

					const text = `Hola, ya realicé el pago de mi suscripción. Aquí le envío mi comprobante de pago.

Mis datos son:
- Nombres: ${nombre}
- Apellidos: ${apellidos}
- Correo: ${correo}
- Celular: ${telefono}
- Suscripción de Interés: ${plan}

Adjunto el voucher de pago y la captura correspondiente.`;

					const whatsappUrl = `https://wa.me/51914159947?text=${encodeURIComponent(text)}`;
					
					// Abrir whatsapp
					window.open(whatsappUrl, '_blank');

					// Mostrar alerta de éxito
					Swal.fire({
						title: '¡Redirigiendo a WhatsApp!',
						text: 'Envía tu comprobante de pago por el chat para confirmar tu membresía.',
						icon: 'success',
						confirmButtonText: 'Aceptar',
						confirmButtonColor: 'var(--primary-red)',
						customClass: {
							popup: 'premium-swal-popup'
						}
					});

					// Resetear formulario y volver al paso 1
					embForm1.reset();
					embStep2.style.display = 'none';
					embStep1.style.display = 'block';
				});
			}
		});
	</script>

@endsection
