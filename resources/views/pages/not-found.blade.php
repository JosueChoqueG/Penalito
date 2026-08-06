@extends('layouts.app')
@section('content')

	<!-- Page Title -->
    <section class="page-title" style="background-image:url({{ asset('assets') }}/images/background/1.jpg)">
		<div class="page-title_pattern" style="background-image:url({{ asset('assets') }}/images/background/page-title_pattern.png)"></div>
		<div class="page-title_gradient"></div>
        <div class="auto-container">
			<h2>Error 404</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="{{ url('/') }}/"><i class="fa-solid fa-house fa-fw"></i> Inicio</a></li>
				<li>Página no encontrada</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->

	<!-- Error One -->
	<section class="error-one">
		<div class="auto-container">
			<h1 style="color: var(--primary-gold);">404</h1>
			<h2>¡Ups! Página no encontrada.</h2>
			<div class="text">Lo sentimos mucho, pero no pudimos encontrar la página que estabas buscando. <br> Verifica que la dirección URL sea correcta.</div>
			<!-- Button Box -->
			<div class="button-box text-center">
				<a href="{{ url('/') }}/" class="theme-btn btn-style-one">
					<span class="btn-wrap">
						<span class="text-one">Volver al Inicio <i class="fa-solid fa-angle-right fa-fw"></i></span>
						<span class="text-two">Volver al Inicio <i class="fa-solid fa-angle-right fa-fw"></i></span>
					</span>
				</a>
			</div>
		</div>
	</section>
	<!-- End Error One -->

@endsection
