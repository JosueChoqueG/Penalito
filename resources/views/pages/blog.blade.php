@extends('layouts.app')
@section('content')

	<!-- Page Title -->
    <section class="page-title" style="background-image:url({{ asset('assets') }}/images/background/1.jpg)">
		<div class="page-title_pattern" style="background-image:url({{ asset('assets') }}/images/background/page-title_pattern.png)"></div>
		<div class="page-title_gradient"></div>
        <div class="auto-container">
			<h2>Nuestro Blog</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="{{ url('/') }}/"><i class="fa-solid fa-house fa-fw"></i> Inicio</a></li>
				<li>Blog</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->

	<!-- News Three -->
    <div class="news-three" id="articulos">
    	<div class="auto-container">
        	<div class="row clearfix">
						
				<!-- Blog 1 -->
				<div class="news-block_one style-two col-lg-4 col-md-6 col-sm-12">
					<div class="news-block_one-inner">
						<div class="news-block_one-image">
							<div class="news-block_one-date">26 <span>MAR, 2024</span></div>
							<a href="#"><img src="{{ asset('assets') }}/images/resource/news-1.jpg" alt="Criminalística" /></a>
						</div>
						<div class="news-block_one-content">
							<ul class="news-block_one-meta d-flex align-items-center flex-wrap">
								<li><span class="icon fa-regular fa-user fa-fw"></span>Dr. Rogert Quispe</li>
								<li><span class="icon fa-regular fa-comment-dots fa-fw"></span>03 Comentarios</li>
							</ul>
							<h4 class="news-block_one-heading"><a href="#">Criminalística de hoy: Ciencia que goza la plena autonomía científica</a></h4>
							<a class="news-block_one-more" href="#">leer más <i class="fa-solid fa-angle-right fa-fw"></i></a>
						</div>
					</div>
				</div>

				<!-- Blog 2 -->
				<div class="news-block_one style-two col-lg-4 col-md-6 col-sm-12">
					<div class="news-block_one-inner">
						<div class="news-block_one-image">
							<div class="news-block_one-date">28 <span>MAR, 2024</span></div>
							<a href="#"><img src="{{ asset('assets') }}/images/resource/news-2.jpg" alt="Garantismo" /></a>
						</div>
						<div class="news-block_one-content">
							<ul class="news-block_one-meta d-flex align-items-center flex-wrap">
								<li><span class="icon fa-regular fa-user fa-fw"></span>Dra. Sayda Quispe</li>
								<li><span class="icon fa-regular fa-comment-dots fa-fw"></span>05 Comentarios</li>
							</ul>
							<h4 class="news-block_one-heading"><a href="#">La corriente del garantismo y Neoconstitucionalismo en el modelo procesal penal</a></h4>
							<a class="news-block_one-more" href="#">leer más <i class="fa-solid fa-angle-right fa-fw"></i></a>
						</div>
					</div>
				</div>

				<!-- Blog 3 -->
				<div class="news-block_one style-two col-lg-4 col-md-6 col-sm-12">
					<div class="news-block_one-inner">
						<div class="news-block_one-image">
							<div class="news-block_one-date">30 <span>MAR, 2024</span></div>
							<a href="#"><img src="{{ asset('assets') }}/images/resource/news-11.jpg" alt="Medicina Forense" /></a>
						</div>
						<div class="news-block_one-content">
							<ul class="news-block_one-meta d-flex align-items-center flex-wrap">
								<li><span class="icon fa-regular fa-user fa-fw"></span>Dr. Luis Romero</li>
								<li><span class="icon fa-regular fa-comment-dots fa-fw"></span>02 Comentarios</li>
							</ul>
							<h4 class="news-block_one-heading"><a href="#">La valoración del informe pericial y la Medicina Forense en juicio oral</a></h4>
							<a class="news-block_one-more" href="#">leer más <i class="fa-solid fa-angle-right fa-fw"></i></a>
						</div>
					</div>
				</div>

			</div>

			<!-- Styled Pagination -->
			<ul class="styled-pagination text-center">
				<li><a href="#" class="active">1</a></li>
				<li><a href="#">2</a></li>
				<li class="next"><a href="#"><span class="fa-solid fa-angle-right fa-fw"></span></a></li>
			</ul>
			<!-- End Styled Pagination -->

		</div>
	</div>
	<!-- End Sidebar Page Container -->

@endsection
