@extends('layouts.app')
@section('content')

<!-- Page Title Section -->
<section class="page-title" style="background-image: url({{ asset('assets') }}/images/background/page-title.jpg)">
	<div class="auto-container">
		<ul class="page-breadcrumb">
			<li><a href="{{ url('/') }}/">Inicio</a></li>
			<li>Verificador</li>
		</ul>
		<h2>Verificador de Certificados</h2>
	</div>
</section>

<!-- Verification Section -->
<section class="verification-section py-5" style="background-color: #f8fafc;">
	<div class="auto-container">
		<div class="row justify-content-center">
			<div class="col-lg-8 col-md-10">
				
				<!-- Outer Card -->
				<div class="card border-0 shadow-lg rounded-4 overflow-hidden" style="border-radius: 16px;">
					<div class="p-4 p-md-5 bg-white">
						
						<!-- Header Box -->
						<div class="text-center mb-4">
							<div class="d-inline-flex align-items-center justify-content-center bg-light text-primary rounded-circle mb-3" style="width: 70px; height: 70px; background-color: rgba(15, 19, 86, 0.05) !important;">
								<i class="fa-solid fa-graduation-cap" style="font-size: 32px; color: #0f1356;"></i>
							</div>
							<h3 class="font-weight-bold" style="color: #0f1356; font-family: 'Outfit', sans-serif;">Consulta de Validez Académica</h3>
							<p class="text-muted">Ingresa el código único de tu certificado para verificar su autenticidad y los detalles del curso.</p>
						</div>

						<!-- Search Form -->
						<form id="verifyForm" class="mb-4">
							<div class="input-group input-group-lg" style="box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
								<span class="input-group-text bg-white border-end-0 border-2" style="border-color: #e2e8f0; border-right: none;"><i class="fa-solid fa-key text-muted"></i></span>
								<input type="text" id="certCode" class="form-control border-start-0 border-2 py-3" placeholder="Ej: CJP-2026-001" style="border-color: #e2e8f0; border-left: none; font-weight: 600; text-transform: uppercase;" required>
								<button type="submit" class="btn btn-gold px-4" style="background-color: #c5a880; color: #fff; font-weight: 700; border: none; font-family: 'Outfit', sans-serif;">
									Buscar <i class="fa-solid fa-magnifying-glass ms-1"></i>
								</button>
							</div>
						</form>

						<!-- Results Area (Hidden by Default) -->
						<div id="resultsArea" style="display: none;">
							<!-- Success Alert -->
							<div id="successBox" class="p-4 rounded-4 border-2 border-success" style="background-color: #f0fdf4; border: 2px solid #bbf7d0; border-radius: 12px; display: none;">
								<div class="d-flex align-items-start gap-3">
									<i class="fa-solid fa-circle-check text-success" style="font-size: 28px; margin-top: 3px;"></i>
									<div>
										<h4 class="text-success font-weight-bold mb-3" style="font-family: 'Outfit', sans-serif;">¡Certificado Verificado Exitosamente!</h4>
										
										<div class="row g-3 text-dark">
											<div class="col-sm-6">
												<span class="text-muted d-block small">Participante</span>
												<strong id="resName" style="font-size: 16px;">Juan Pérez Díaz</strong>
											</div>
											<div class="col-sm-6">
												<span class="text-muted d-block small">Código del Certificado</span>
												<strong id="resCode" style="font-size: 16px; color: #0f1356;">CJP-2026-001</strong>
											</div>
											<div class="col-sm-12">
												<span class="text-muted d-block small">Programa de Capacitación</span>
												<strong id="resCourse" style="font-size: 16px;">Diplomado de Especialización en Derecho Procesal Penal</strong>
											</div>
											<div class="col-sm-6">
												<span class="text-muted d-block small">Fecha de Emisión</span>
												<strong id="resDate" style="font-size: 16px;">15 de Mayo, 2026</strong>
											</div>
											<div class="col-sm-6">
												<span class="text-muted d-block small">Horas Académicas</span>
												<strong id="resHours" style="font-size: 16px;">120 Horas Lectivas</strong>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Error Alert -->
							<div id="errorBox" class="p-4 rounded-4 border-2 border-danger" style="background-color: #fef2f2; border: 2px solid #fecaca; border-radius: 12px; display: none;">
								<div class="d-flex align-items-start gap-3">
									<i class="fa-solid fa-circle-xmark text-danger" style="font-size: 28px; margin-top: 3px;"></i>
									<div>
										<h4 class="text-danger font-weight-bold mb-2" style="font-family: 'Outfit', sans-serif;">Código no encontrado</h4>
										<p class="text-muted mb-3">No logramos encontrar ningún certificado registrado con el código ingresado. Por favor, verifica que los caracteres sean correctos.</p>
										
										<a href="https://wa.me/51914159947?text=Hola,%20quisiera%20verificar%20el%20certificado%20con%20código%20" id="whatsappVerifyBtn" target="_blank" class="btn btn-success d-inline-flex align-items-center gap-2" style="background-color: #25d366; border: none; font-weight: 600;">
											<i class="fa-brands fa-whatsapp"></i> Validar con Soporte por WhatsApp
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
</section>

<!-- Logic for Search Form -->
<script>
	document.addEventListener('DOMContentLoaded', function () {
		const verifyForm = document.getElementById('verifyForm');
		const certCodeInput = document.getElementById('certCode');
		const resultsArea = document.getElementById('resultsArea');
		const successBox = document.getElementById('successBox');
		const errorBox = document.getElementById('errorBox');

		// Elementos de resultados
		const resName = document.getElementById('resName');
		const resCode = document.getElementById('resCode');
		const resCourse = document.getElementById('resCourse');
		const resDate = document.getElementById('resDate');
		const resHours = document.getElementById('resHours');
		const whatsappVerifyBtn = document.getElementById('whatsappVerifyBtn');

		// Simulación de base de datos de certificados
		const certificatesDb = {
			'CJP-2026-001': {
				name: 'Roger Quispe Alegría',
				course: 'Diplomado de Especialización en Derecho Procesal Penal',
				date: '15 de Mayo, 2026',
				hours: '120 Horas Lectivas'
			},
			'CJP-2026-002': {
				name: 'Diana Mendoza Flores',
				course: 'Diplomado en Derecho Constitucional y Procesal Constitucional',
				date: '10 de Junio, 2026',
				hours: '120 Horas Lectivas'
			},
			'CJP-2026-003': {
				name: 'Alexander Cáceres Torres',
				course: 'Curso de Especialización en Medicina Forense y Criminalística',
				date: '28 de Junio, 2026',
				hours: '60 Horas Lectivas'
			}
		};

		if (verifyForm) {
			verifyForm.addEventListener('submit', function (e) {
				e.preventDefault();
				
				const codeInput = certCodeInput.value.trim().toUpperCase();
				resultsArea.style.display = 'block';
				
				if (certificatesDb[codeInput]) {
					// Mostrar Éxito
					successBox.style.display = 'block';
					errorBox.style.display = 'none';
					
					// Poblar datos
					resName.textContent = certificatesDb[codeInput].name;
					resCode.textContent = codeInput;
					resCourse.textContent = certificatesDb[codeInput].course;
					resDate.textContent = certificatesDb[codeInput].date;
					resHours.textContent = certificatesDb[codeInput].hours;
				} else {
					// Mostrar Error
					successBox.style.display = 'none';
					errorBox.style.display = 'block';
					
					// Dinamizar enlace de WhatsApp con el código buscado
					whatsappVerifyBtn.href = "https://wa.me/51914159947?text=Hola,%20no%20pude%20encontrar%20mi%20certificado%20con%20código%20" + encodeURIComponent(codeInput) + "%20en%20el%20verificador%20web.%20¿Me%20ayudan%20a%20validarlo?";
				}
			});
		}
	});
</script>

@endsection
