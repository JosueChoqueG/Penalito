@extends('layouts.app')
@section('content')
		<!-- End Main Header -->

	<!-- Page Title -->
    <section class="page-title" style="background-image:url({{ asset('assets') }}/images/background/1.jpg)">
		<div class="page-title_pattern" style="background-image:url({{ asset('assets') }}/images/background/page-title_pattern.png)"></div>
		<div class="page-title_gradient"></div>
        <div class="auto-container">
			<h2>Services</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="{{ url('/') }}/"><i class="fa-solid fa-house fa-fw"></i> Home</a></li>
				<li>Services</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->

	<!-- Services Six -->
	<section class="services-six">
		<div class="auto-container">
			<div class="row clearfix">

				<!-- Service Block Three -->
				<div class="service-block_three col-lg-4 col-md-6 col-sm-12">
					<div class="service-block_three-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="service-block_three-image">
							<a href="service-detail.html"><img src="{{ asset('assets') }}/images/resource/service-1.jpg" alt="" /></a>
						</div>
						<div class="service-block_three-content">
							<div class="service-block_three-icon icon-Frame"></div>
							<h3 class="service-block_three-heading"><a href="service-detail.html">Utility Patents</a></h3>
							<div class="service-block_three-text">Our team comprises seasoned patent professionals with years</div>
							<a class="service-block_three-more" href="service-detail.html">Know More <i class="fa-solid fa-angle-right fa-fw"></i></a>
						</div>
					</div>
				</div>

				<!-- Service Block Three -->
				<div class="service-block_three col-lg-4 col-md-6 col-sm-12">
					<div class="service-block_three-inner wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="service-block_three-image">
							<a href="service-detail.html"><img src="{{ asset('assets') }}/images/resource/service-2.jpg" alt="" /></a>
						</div>
						<div class="service-block_three-content">
							<div class="service-block_three-icon icon-controlxpert_svgrepocom-3"></div>
							<h3 class="service-block_three-heading"><a href="service-detail.html">Design Patent</a></h3>
							<div class="service-block_three-text">Our team comprises seasoned patent professionals with years</div>
							<a class="service-block_three-more" href="service-detail.html">Know More <i class="fa-solid fa-angle-right fa-fw"></i></a>
						</div>
					</div>
				</div>

				<!-- Service Block Three -->
				<div class="service-block_three col-lg-4 col-md-6 col-sm-12">
					<div class="service-block_three-inner wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="service-block_three-image">
							<a href="service-detail.html"><img src="{{ asset('assets') }}/images/resource/service-3.jpg" alt="" /></a>
						</div>
						<div class="service-block_three-content">
							<div class="service-block_three-icon icon-controlxpert_svgrepocom-4"></div>
							<h3 class="service-block_three-heading"><a href="service-detail.html">Brand Protection</a></h3>
							<div class="service-block_three-text">Our team comprises seasoned patent professionals with years</div>
							<a class="service-block_three-more" href="service-detail.html">Know More <i class="fa-solid fa-angle-right fa-fw"></i></a>
						</div>
					</div>
				</div>

				<!-- Service Block Three -->
				<div class="service-block_three style-two col-lg-4 col-md-6 col-sm-12">
					<div class="service-block_three-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="service-block_three-image">
							<a href="service-detail.html"><img src="{{ asset('assets') }}/images/resource/service-8.jpg" alt="" /></a>
						</div>
						<div class="service-block_three-content">
							<div class="service-block_three-icon icon-Frame-2"></div>
							<h3 class="service-block_three-heading"><a href="service-detail.html">IP Translations</a></h3>
							<div class="service-block_three-text">Our team comprises seasoned patent professionals with years</div>
							<a class="service-block_three-more" href="service-detail.html">Know More <i class="fa-solid fa-angle-right fa-fw"></i></a>
						</div>
					</div>
				</div>

				<!-- Service Block Three -->
				<div class="service-block_three style-two col-lg-4 col-md-6 col-sm-12">
					<div class="service-block_three-inner wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="service-block_three-image">
							<a href="service-detail.html"><img src="{{ asset('assets') }}/images/resource/service-9.jpg" alt="" /></a>
						</div>
						<div class="service-block_three-content">
							<div class="service-block_three-icon icon-Path-184"></div>
							<h3 class="service-block_three-heading"><a href="service-detail.html">Business Litigation</a></h3>
							<div class="service-block_three-text">Our team comprises seasoned patent professionals with years</div>
							<a class="service-block_three-more" href="service-detail.html">Know More <i class="fa-solid fa-angle-right fa-fw"></i></a>
						</div>
					</div>
				</div>

				<!-- Service Block Three -->
				<div class="service-block_three style-two col-lg-4 col-md-6 col-sm-12">
					<div class="service-block_three-inner wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="service-block_three-image">
							<a href="service-detail.html"><img src="{{ asset('assets') }}/images/resource/service-10.jpg" alt="" /></a>
						</div>
						<div class="service-block_three-content">
							<div class="service-block_three-icon icon-currency-revenue-solid_svgrepocom"></div>
							<h3 class="service-block_three-heading"><a href="service-detail.html">Trade Secrets</a></h3>
							<div class="service-block_three-text">Our team comprises seasoned patent professionals with years</div>
							<a class="service-block_three-more" href="service-detail.html">Know More <i class="fa-solid fa-angle-right fa-fw"></i></a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Services Six -->

	<!-- Video One -->
	<section class="video-one" style="background-image:url({{ asset('assets') }}/images/background/video-one_bg.jpg)">
		<div class="auto-container">
			<a href="https://www.youtube.com/watch?v=YS3PwmOQ1Fc" class="lightbox-video video-one_play"><span class="fa fa-play"><i class="ripple"></i></span></a>
		</div>
	</section>
	<!-- End Video One -->

<!-- Main Footer -->
@endsection
