@extends('layouts.app')
@section('content')
		<!-- End Main Header -->

	<!-- Page Title -->
    <section class="page-title" style="background-image:url({{ asset('assets') }}/images/background/1.jpg)">
		<div class="page-title_pattern" style="background-image:url({{ asset('assets') }}/images/background/page-title_pattern.png)"></div>
		<div class="page-title_gradient"></div>
        <div class="auto-container">
			<h2>Frequently Asked Questions</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="{{ url('/') }}/"><i class="fa-solid fa-house fa-fw"></i> Home</a></li>
				<li>Faq's</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->

	<!-- Faq Two -->
	<section class="faq-two">
		<div class="auto-container">
			<div class="row clearfix">
				<!-- Column -->
				<div class="column col-lg-6 col-md-12 col-sm-12">
					<div class="sec-title">
						<div class="sec-title_title">general questions</div>
						<h2 class="sec-title_heading">Frequently Asked Question.</h2>
						<div class="sec-title_text">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et <br> massa  Aliquam in hendrerit urna.</div>
					</div>
					
					<div class="faq-two_button">
						<a href="{{ url('/') }}/pages/contact" class="theme-btn btn-style-one">
							<span class="btn-wrap">
								<span class="text-one">Contact Us Now <i class="fa-solid fa-angle-right fa-fw"></i></span>
								<span class="text-two">Contact Us Now <i class="fa-solid fa-angle-right fa-fw"></i></span>
							</span>
						</a>
					</div>
					
				</div>
				<!-- Column -->
				<div class="column col-lg-6 col-md-12 col-sm-12">
					<!-- Accordion Box -->
					<ul class="accordion-box style-two">
							
						<!-- Block -->
						<li class="accordion block active-block">
							<div class="acc-btn active"><div class="icon-outer"><span class="icon fa-solid fa-angle-down fa-fw"></span></div>Q: Can I patent an idea?</div>
							<div class="acc-content current">
								<div class="content">
									<p>No, patents are granted for tangible invention processes, not abstract ideas. An idea needs to be developed into a concrete invention process to be eligible.</p>
								</div>
							</div>
						</li>
									
						<!-- Block -->
						<li class="accordion block">
							<div class="acc-btn"><div class="icon-outer"><span class="icon fa-solid fa-angle-down fa-fw"></span></div>Q: Do I need to register for copyright protection?</div>
							<div class="acc-content">
								<div class="content">
									<p>No, patents are granted for tangible invention processes, not abstract ideas. An idea needs to be developed into a concrete invention process to be eligible.</p>
								</div>
							</div>
						</li>

						<!-- Block -->
						<li class="accordion block">
							<div class="acc-btn"><div class="icon-outer"><span class="icon fa-solid fa-angle-down fa-fw"></span></div>Q: What can I trademark?</div>
							<div class="acc-content">
								<div class="content">
									<p>No, patents are granted for tangible invention processes, not abstract ideas. An idea needs to be developed into a concrete invention process to be eligible.</p>
								</div>
							</div>
						</li>

						<!-- Block -->
						<li class="accordion block">
							<div class="acc-btn"><div class="icon-outer"><span class="icon fa-solid fa-angle-down fa-fw"></span></div>Q: How long do trademarks last?</div>
							<div class="acc-content">
								<div class="content">
									<p>No, patents are granted for tangible invention processes, not abstract ideas. An idea needs to be developed into a concrete invention process to be eligible.</p>
								</div>
							</div>
						</li>


						<!-- Block -->
						<li class="accordion block">
							<div class="acc-btn"><div class="icon-outer"><span class="icon fa-solid fa-angle-down fa-fw"></span></div>Q: What rights do copyright holders have?</div>
							<div class="acc-content">
								<div class="content">
									<p>No, patents are granted for tangible invention processes, not abstract ideas. An idea needs to be developed into a concrete invention process to be eligible.</p>
								</div>
							</div>
						</li>

						<!-- Block -->
						<li class="accordion block">
							<div class="acc-btn"><div class="icon-outer"><span class="icon fa-solid fa-angle-down fa-fw"></span></div>Q: How do I obtain a trademark?</div>
							<div class="acc-content">
								<div class="content">
									<p>No, patents are granted for tangible invention processes, not abstract ideas. An idea needs to be developed into a concrete invention process to be eligible.</p>
								</div>
							</div>
						</li>

						<!-- Block -->
						<li class="accordion block">
							<div class="acc-btn"><div class="icon-outer"><span class="icon fa-solid fa-angle-down fa-fw"></span></div>Q: Can a trademark expire or lose its protection?</div>
							<div class="acc-content">
								<div class="content">
									<p>No, patents are granted for tangible invention processes, not abstract ideas. An idea needs to be developed into a concrete invention process to be eligible.</p>
								</div>
							</div>
						</li>

					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- End Faq Two -->

	<!-- Main Footer Two -->
@endsection
