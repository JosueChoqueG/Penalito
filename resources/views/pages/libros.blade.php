@extends('layouts.app')
@section('content')
		<!-- End Main Header -->

	<!-- Page Title -->
    <section class="page-title" style="background-image:url({{ asset('assets') }}/images/libros/21072021-dsc00412_full.jpg)">
		<div class="page-title_pattern" style="background-image:url({{ asset('assets') }}/images/background/page-title_pattern.png)"></div>
		<div class="page-title_gradient"></div>
        <div class="auto-container">
			<h2>Libros</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="{{ url('/') }}/"><i class="fa-solid fa-house fa-fw"></i> Home</a></li>
				<li>Libros</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->

	<!-- Services Six DERECHO CONSTITUCIONA-->
    <section id="derecho-constitucional" class="services-six">
        <div  class="sec-title">
            <h2>DERECHO CONSTITUCIONAL</h2>
        </div>
    </section>

	<!-- End Services Six -->
    <!-- DERECHO CONSTITUCIONAL-->
    <section class="faq-one style-twoo">
		<div class="auto-container">
			<div class="row clearfix">
				<!-- Libro 1 -->
				<div class="faq-one_image-column col-lg-3 col-md-6 col-sm-12">
					<div class="faq-one_image-outer">
						<div class="faq-one_image">
							<img src="./{{ asset('assets') }}/images/libros/download.jpg" alt="Libro 1" />
						</div>
						<div class="circle">
							<div class="circle-text" data-toggle="modal" data-target="#pdfModal1">Leer mÃ¡s</div>
						</div>
					</div>
				</div>
				<!-- Libro 2 -->
				<div class="faq-one_image-column col-lg-3 col-md-6 col-sm-12">
					<div class="faq-one_image-outer">
						<div class="faq-one_image">
							<img src="./{{ asset('assets') }}/images/libros/1713151864.webp" alt="Libro 2" />
						</div>
						<div class="circle">
							<div class="circle-text" data-toggle="modal" data-target="#pdfModal2">Leer mÃ¡s</div>
						</div>
					</div>
				</div>
				<!-- Libro 3 -->
				<div class="faq-one_image-column col-lg-3 col-md-6 col-sm-12">
					<div class="faq-one_image-outer">
						<div class="faq-one_image">
							<img src="./{{ asset('assets') }}/images/libros/4.-derecho-constitucional.jpg" alt="Libro 3" />
						</div>
						<div class="circle">
							<div class="circle-text" data-toggle="modal" data-target="#pdfModal3">Leer mÃ¡s</div>
						</div>
					</div>
				</div>
				<!-- Libro 4 -->
				<div class="faq-one_image-column col-lg-3 col-md-6 col-sm-12">
					<div class="faq-one_image-outer">
						<div class="faq-one_image">
							<img src="./{{ asset('assets') }}/images/libros/download (1).jpg" alt="Libro 4" />
						</div>
						<div class="circle">
							<div class="circle-text" data-toggle="modal" data-target="#pdfModal4">Leer mÃ¡s</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!-- Modal 1 -->
	<div class="modal fade" id="pdfModal1" tabindex="-1" role="dialog" aria-labelledby="pdfModalLabel1" aria-hidden="true" data-backdrop="true" data-keyboard="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="pdfModalLabel1">PDF Viewer</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!-- AquÃ­ puedes agregar el visor de PDF, por ejemplo, un iframe -->
					<iframe src="./{{ asset('assets') }}/images/libros/libros/lecciones-de-derecho-constitucional--0.pdf" style="width:100%;height:500px;"></iframe>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Modal 2 -->
	<div class="modal fade" id="pdfModal2" tabindex="-1" role="dialog" aria-labelledby="pdfModalLabel2" aria-hidden="true" data-backdrop="true" data-keyboard="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="pdfModalLabel2">PDF Viewer</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!-- AquÃ­ puedes agregar el visor de PDF, por ejemplo, un iframe -->
					<iframe src="ruta_pdf_libro_2.pdf" style="width:100%;height:500px;"></iframe>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Modal 3 -->
	<div class="modal fade" id="pdfModal3" tabindex="-1" role="dialog" aria-labelledby="pdfModalLabel3" aria-hidden="true" data-backdrop="true" data-keyboard="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="pdfModalLabel3">PDF Viewer</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!-- AquÃ­ puedes agregar el visor de PDF, por ejemplo, un iframe -->
					<iframe src="ruta_pdf_libro_3.pdf" style="width:100%;height:500px;"></iframe>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Modal 4 -->
	<div class="modal fade" id="pdfModal4" tabindex="-1" role="dialog" aria-labelledby="pdfModalLabel4" aria-hidden="true" data-backdrop="true" data-keyboard="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="pdfModalLabel4">PDF Viewer</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!-- AquÃ­ puedes agregar el visor de PDF, por ejemplo, un iframe -->
					<iframe src="ruta_pdf_libro_4.pdf" style="width:100%;height:500px;"></iframe>
				</div>
			</div>
		</div>
	</div>
    <!-- End Requirements Section -->
    <!-- Services Six -->
    <!-- End Services Six -->
    <!-- DERECHO PENAL-->
	<section id="derecho-penal" class="services-six" style="position: absolute; top: 1200px; left: 60%; transform: translateX(-80%);">
        <div class="sec-title">
            <h2 style="color: white;">DERECHO PENAL</h2>
        </div>
    </section>
	<section class="bg-greyy">
		<section class=""style="padding-top: 100px;">
			<div class="auto-container">
				<div class="row clearfix">
					<!-- Libro 1 -->
					<div class="faq-one_image-column col-lg-3 col-md-6 col-sm-12">
						<div class="faq-one_image-outer">
							<div class="faq-one_image">
								<img src="./{{ asset('assets') }}/images/libros/derecho penal/uno.jpg" alt="Libro 1" />
							</div>
							<div class="circle">
								<div class="circle-text" data-toggle="modal" data-target="#pdfModal1">Leer mÃ¡s</div>
							</div>
						</div>
					</div>
					<!-- Libro 2 -->
					<div class="faq-one_image-column col-lg-3 col-md-6 col-sm-12">
						<div class="faq-one_image-outer">
							<div class="faq-one_image">
								<img src="./{{ asset('assets') }}/images/libros/derecho penal/dos.png" alt="Libro 2" />
							</div>
							<div class="circle">
								<div class="circle-text" data-toggle="modal" data-target="#pdfModal2">Leer mÃ¡s</div>
							</div>
						</div>
					</div>
					<!-- Libro 3 -->
					<div class="faq-one_image-column col-lg-3 col-md-6 col-sm-12">
						<div class="faq-one_image-outer">
							<div class="faq-one_image">
								<img src="./{{ asset('assets') }}/images/libros/derecho penal/tres.jpg" alt="Libro 3" />
							</div>
							<div class="circle">
								<div class="circle-text" data-toggle="modal" data-target="#pdfModal3">Leer mÃ¡s</div>
							</div>
						</div>
					</div>
					<!-- Libro 4 -->
					<div class="faq-one_image-column col-lg-3 col-md-6 col-sm-12">
						<div class="faq-one_image-outer">
							<div class="faq-one_image">
								<img src="./{{ asset('assets') }}/images/libros/derecho penal/cuatro.jpg" alt="Libro 4" />
							</div>
							<div class="circle">
								<div class="circle-text" data-toggle="modal" data-target="#pdfModal4">Leer mÃ¡s</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</section>
	
	<!-- Modal 1 -->
	<div class="modal fade" id="pdfModal1" tabindex="-1" role="dialog" aria-labelledby="pdfModalLabel1" aria-hidden="true" data-backdrop="true" data-keyboard="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="pdfModalLabel1">PDF Viewer</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!-- AquÃ­ puedes agregar el visor de PDF, por ejemplo, un iframe -->
					<iframe src="./{{ asset('assets') }}/images/libros/libros/lecciones-de-derecho-constitucional--0.pdf" style="width:100%;height:500px;"></iframe>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Modal 2 -->
	<div class="modal fade" id="pdfModal2" tabindex="-1" role="dialog" aria-labelledby="pdfModalLabel2" aria-hidden="true" data-backdrop="true" data-keyboard="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="pdfModalLabel2">PDF Viewer</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!-- AquÃ­ puedes agregar el visor de PDF, por ejemplo, un iframe -->
					<iframe src="ruta_pdf_libro_2.pdf" style="width:100%;height:500px;"></iframe>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Modal 3 -->
	<div class="modal fade" id="pdfModal3" tabindex="-1" role="dialog" aria-labelledby="pdfModalLabel3" aria-hidden="true" data-backdrop="true" data-keyboard="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="pdfModalLabel3">PDF Viewer</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!-- AquÃ­ puedes agregar el visor de PDF, por ejemplo, un iframe -->
					<iframe src="ruta_pdf_libro_3.pdf" style="width:100%;height:500px;"></iframe>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Modal 4 -->
	<div class="modal fade" id="pdfModal4" tabindex="-1" role="dialog" aria-labelledby="pdfModalLabel4" aria-hidden="true" data-backdrop="true" data-keyboard="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="pdfModalLabel4">PDF Viewer</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!-- AquÃ­ puedes agregar el visor de PDF, por ejemplo, un iframe -->
					<iframe src="ruta_pdf_libro_4.pdf" style="width:100%;height:500px;"></iframe>
				</div>
			</div>
		</div>
	</div>
    <!-- DERECHO PENAL -->
	<!-- DERECHO PROCESAL -->
	<section id="derecho-procesal" class="services-six" style="position: absolute; top: 1800px; left: 60%; transform: translateX(-80%);">
        <div class="sec-title">
            <h2 style="color: white;">DERECHO PROCESAL PENAL</h2>
        </div>
    </section>
	<section class="faq-one style-two">
		<div class="auto-container">
			<div class="row clearfix">
				<!-- Libro 1 -->
				<div class="faq-one_image-column col-lg-3 col-md-6 col-sm-12">
					<div class="faq-one_image-outer">
						<div class="faq-one_image">
							<img src="./{{ asset('assets') }}/images/libros/download.jpg" alt="Libro 1" />
						</div>
						<div class="circle">
							<div class="circle-text" data-toggle="modal" data-target="#pdfModal1">Leer mÃ¡s</div>
						</div>
					</div>
				</div>
				<!-- Libro 2 -->
				<div class="faq-one_image-column col-lg-3 col-md-6 col-sm-12">
					<div class="faq-one_image-outer">
						<div class="faq-one_image">
							<img src="./{{ asset('assets') }}/images/libros/1713151864.webp" alt="Libro 2" />
						</div>
						<div class="circle">
							<div class="circle-text" data-toggle="modal" data-target="#pdfModal2">Leer mÃ¡s</div>
						</div>
					</div>
				</div>
				<!-- Libro 3 -->
				<div class="faq-one_image-column col-lg-3 col-md-6 col-sm-12">
					<div class="faq-one_image-outer">
						<div class="faq-one_image">
							<img src="./{{ asset('assets') }}/images/libros/4.-derecho-constitucional.jpg" alt="Libro 3" />
						</div>
						<div class="circle">
							<div class="circle-text" data-toggle="modal" data-target="#pdfModal3">Leer mÃ¡s</div>
						</div>
					</div>
				</div>
				<!-- Libro 4 -->
				<div class="faq-one_image-column col-lg-3 col-md-6 col-sm-12">
					<div class="faq-one_image-outer">
						<div class="faq-one_image">
							<img src="./{{ asset('assets') }}/images/libros/download (1).jpg" alt="Libro 4" />
						</div>
						<div class="circle">
							<div class="circle-text" data-toggle="modal" data-target="#pdfModal4">Leer mÃ¡s</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Modal 1 -->
	<div class="modal fade" id="pdfModal1" tabindex="-1" role="dialog" aria-labelledby="pdfModalLabel1" aria-hidden="true" data-backdrop="true" data-keyboard="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="pdfModalLabel1">PDF Viewer</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!-- AquÃ­ puedes agregar el visor de PDF, por ejemplo, un iframe -->
					<iframe src="./{{ asset('assets') }}/images/libros/libros/lecciones-de-derecho-constitucional--0.pdf" style="width:100%;height:500px;"></iframe>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Modal 2 -->
	<div class="modal fade" id="pdfModal2" tabindex="-1" role="dialog" aria-labelledby="pdfModalLabel2" aria-hidden="true" data-backdrop="true" data-keyboard="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="pdfModalLabel2">PDF Viewer</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!-- AquÃ­ puedes agregar el visor de PDF, por ejemplo, un iframe -->
					<iframe src="ruta_pdf_libro_2.pdf" style="width:100%;height:500px;"></iframe>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Modal 3 -->
	<div class="modal fade" id="pdfModal3" tabindex="-1" role="dialog" aria-labelledby="pdfModalLabel3" aria-hidden="true" data-backdrop="true" data-keyboard="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="pdfModalLabel3">PDF Viewer</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!-- AquÃ­ puedes agregar el visor de PDF, por ejemplo, un iframe -->
					<iframe src="ruta_pdf_libro_3.pdf" style="width:100%;height:500px;"></iframe>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Modal 4 -->
	<div class="modal fade" id="pdfModal4" tabindex="-1" role="dialog" aria-labelledby="pdfModalLabel4" aria-hidden="true" data-backdrop="true" data-keyboard="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="pdfModalLabel4">PDF Viewer</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!-- AquÃ­ puedes agregar el visor de PDF, por ejemplo, un iframe -->
					<iframe src="ruta_pdf_libro_4.pdf" style="width:100%;height:500px;"></iframe>
				</div>
			</div>
		</div>
	</div>
	<!-- DERECHO PROCESAL FIN-->
	<!-- CRIMINALISTICA -->
	<section id="criminalistica" class="services-six" style="position: absolute; top: 2480px; left: 55%; transform: translateX(-80%);">
        <div class="sec-title">
            <h2 style="color: white;">CRIMINALISTICA </h2>
        </div>
    </section>
	<section class="bg-greyy">
		<section class=""style="padding-top: 100px;">
			<div class="auto-container">
				<div class="row clearfix">
					<!-- Libro 1 -->
					<div class="faq-one_image-column col-lg-3 col-md-6 col-sm-12">
						<div class="faq-one_image-outer">
							<div class="faq-one_image">
								<img src="./{{ asset('assets') }}/images/libros/derecho penal/uno.jpg" alt="Libro 1" />
							</div>
							<div class="circle">
								<div class="circle-text" data-toggle="modal" data-target="#pdfModal1">Leer mÃ¡s</div>
							</div>
						</div>
					</div>
					<!-- Libro 2 -->
					<div class="faq-one_image-column col-lg-3 col-md-6 col-sm-12">
						<div class="faq-one_image-outer">
							<div class="faq-one_image">
								<img src="./{{ asset('assets') }}/images/libros/derecho penal/dos.png" alt="Libro 2" />
							</div>
							<div class="circle">
								<div class="circle-text" data-toggle="modal" data-target="#pdfModal2">Leer mÃ¡s</div>
							</div>
						</div>
					</div>
					<!-- Libro 3 -->
					<div class="faq-one_image-column col-lg-3 col-md-6 col-sm-12">
						<div class="faq-one_image-outer">
							<div class="faq-one_image">
								<img src="./{{ asset('assets') }}/images/libros/derecho penal/tres.jpg" alt="Libro 3" />
							</div>
							<div class="circle">
								<div class="circle-text" data-toggle="modal" data-target="#pdfModal3">Leer mÃ¡s</div>
							</div>
						</div>
					</div>
					<!-- Libro 4 -->
					<div class="faq-one_image-column col-lg-3 col-md-6 col-sm-12">
						<div class="faq-one_image-outer">
							<div class="faq-one_image">
								<img src="./{{ asset('assets') }}/images/libros/derecho penal/cuatro.jpg" alt="Libro 4" />
							</div>
							<div class="circle">
								<div class="circle-text" data-toggle="modal" data-target="#pdfModal4">Leer mÃ¡s</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</section>
	
	<!-- Modal 1 -->
	<div class="modal fade" id="pdfModal1" tabindex="-1" role="dialog" aria-labelledby="pdfModalLabel1" aria-hidden="true" data-backdrop="true" data-keyboard="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="pdfModalLabel1">PDF Viewer</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!-- AquÃ­ puedes agregar el visor de PDF, por ejemplo, un iframe -->
					<iframe src="./{{ asset('assets') }}/images/libros/libros/lecciones-de-derecho-constitucional--0.pdf" style="width:100%;height:500px;"></iframe>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Modal 2 -->
	<div class="modal fade" id="pdfModal2" tabindex="-1" role="dialog" aria-labelledby="pdfModalLabel2" aria-hidden="true" data-backdrop="true" data-keyboard="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="pdfModalLabel2">PDF Viewer</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!-- AquÃ­ puedes agregar el visor de PDF, por ejemplo, un iframe -->
					<iframe src="ruta_pdf_libro_2.pdf" style="width:100%;height:500px;"></iframe>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Modal 3 -->
	<div class="modal fade" id="pdfModal3" tabindex="-1" role="dialog" aria-labelledby="pdfModalLabel3" aria-hidden="true" data-backdrop="true" data-keyboard="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="pdfModalLabel3">PDF Viewer</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!-- AquÃ­ puedes agregar el visor de PDF, por ejemplo, un iframe -->
					<iframe src="ruta_pdf_libro_3.pdf" style="width:100%;height:500px;"></iframe>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Modal 4 -->
	<div class="modal fade" id="pdfModal4" tabindex="-1" role="dialog" aria-labelledby="pdfModalLabel4" aria-hidden="true" data-backdrop="true" data-keyboard="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="pdfModalLabel4">PDF Viewer</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!-- AquÃ­ puedes agregar el visor de PDF, por ejemplo, un iframe -->
					<iframe src="ruta_pdf_libro_4.pdf" style="width:100%;height:500px;"></iframe>
				</div>
			</div>
		</div>
	</div>
    <!-- CRIMINALISTICA FIN -->
	<!-- MEDICINA FORENCE -->
	<section id="medicina-forence" class="services-six" style="position: absolute; top: 3050px; left: 55%; transform: translateX(-80%);">
        <div class="sec-title">
            <h2 style="color: white;">MEDICINA FORENCE </h2>
        </div>
    </section>
	<section class="bg-greyyy">
		<section class=""style="padding-top: 100px;">
			<div class="auto-container">
				<div class="row clearfix">
					<!-- Libro 1 -->
					<div class="faq-one_image-column col-lg-3 col-md-6 col-sm-12">
						<div class="faq-one_image-outer">
							<div class="faq-one_image">
								<img src="./{{ asset('assets') }}/images/libros/derecho penal/uno.jpg" alt="Libro 1" />
							</div>
							<div class="circle">
								<div class="circle-text" data-toggle="modal" data-target="#pdfModal1">Leer mÃ¡s</div>
							</div>
						</div>
					</div>
					<!-- Libro 2 -->
					<div class="faq-one_image-column col-lg-3 col-md-6 col-sm-12">
						<div class="faq-one_image-outer">
							<div class="faq-one_image">
								<img src="./{{ asset('assets') }}/images/libros/derecho penal/dos.png" alt="Libro 2" />
							</div>
							<div class="circle">
								<div class="circle-text" data-toggle="modal" data-target="#pdfModal2">Leer mÃ¡s</div>
							</div>
						</div>
					</div>
					<!-- Libro 3 -->
					<div class="faq-one_image-column col-lg-3 col-md-6 col-sm-12">
						<div class="faq-one_image-outer">
							<div class="faq-one_image">
								<img src="./{{ asset('assets') }}/images/libros/derecho penal/tres.jpg" alt="Libro 3" />
							</div>
							<div class="circle">
								<div class="circle-text" data-toggle="modal" data-target="#pdfModal3">Leer mÃ¡s</div>
							</div>
						</div>
					</div>
					<!-- Libro 4 -->
					<div class="faq-one_image-column col-lg-3 col-md-6 col-sm-12">
						<div class="faq-one_image-outer">
							<div class="faq-one_image">
								<img src="./{{ asset('assets') }}/images/libros/derecho penal/cuatro.jpg" alt="Libro 4" />
							</div>
							<div class="circle">
								<div class="circle-text" data-toggle="modal" data-target="#pdfModal4">Leer mÃ¡s</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</section>
	
	<!-- Modal 1 -->
	<div class="modal fade" id="pdfModal1" tabindex="-1" role="dialog" aria-labelledby="pdfModalLabel1" aria-hidden="true" data-backdrop="true" data-keyboard="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="pdfModalLabel1">PDF Viewer</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!-- AquÃ­ puedes agregar el visor de PDF, por ejemplo, un iframe -->
					<iframe src="./{{ asset('assets') }}/images/libros/libros/lecciones-de-derecho-constitucional--0.pdf" style="width:100%;height:500px;"></iframe>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Modal 2 -->
	<div class="modal fade" id="pdfModal2" tabindex="-1" role="dialog" aria-labelledby="pdfModalLabel2" aria-hidden="true" data-backdrop="true" data-keyboard="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="pdfModalLabel2">PDF Viewer</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!-- AquÃ­ puedes agregar el visor de PDF, por ejemplo, un iframe -->
					<iframe src="ruta_pdf_libro_2.pdf" style="width:100%;height:500px;"></iframe>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Modal 3 -->
	<div class="modal fade" id="pdfModal3" tabindex="-1" role="dialog" aria-labelledby="pdfModalLabel3" aria-hidden="true" data-backdrop="true" data-keyboard="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="pdfModalLabel3">PDF Viewer</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!-- AquÃ­ puedes agregar el visor de PDF, por ejemplo, un iframe -->
					<iframe src="ruta_pdf_libro_3.pdf" style="width:100%;height:500px;"></iframe>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Modal 4 -->
	<div class="modal fade" id="pdfModal4" tabindex="-1" role="dialog" aria-labelledby="pdfModalLabel4" aria-hidden="true" data-backdrop="true" data-keyboard="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="pdfModalLabel4">PDF Viewer</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!-- AquÃ­ puedes agregar el visor de PDF, por ejemplo, un iframe -->
					<iframe src="ruta_pdf_libro_4.pdf" style="width:100%;height:500px;"></iframe>
				</div>
			</div>
		</div>
	</div>
    <!-- MEDICINA FORENCE FIN -->
	<!-- Services Six CRIMINOLOGIA-->
    <section id="criminologia" class="services-six">
        <div  class="sec-title">
            <h2>CRIMINOLOGIA</h2>
        </div>
    </section>

	<!-- End Services Six -->
    <!-- CRIMINOLOGIA-->
    <section class="faq-one style-twoo">
		<div class="auto-container">
			<div class="row clearfix">
				<!-- Libro 1 -->
				<div class="faq-one_image-column col-lg-3 col-md-6 col-sm-12">
					<div class="faq-one_image-outer">
						<div class="faq-one_image">
							<img src="./{{ asset('assets') }}/images/libros/download.jpg" alt="Libro 1" />
						</div>
						<div class="circle">
							<div class="circle-text" data-toggle="modal" data-target="#pdfModal1">Leer mÃ¡s</div>
						</div>
					</div>
				</div>
				<!-- Libro 2 -->
				<div class="faq-one_image-column col-lg-3 col-md-6 col-sm-12">
					<div class="faq-one_image-outer">
						<div class="faq-one_image">
							<img src="./{{ asset('assets') }}/images/libros/1713151864.webp" alt="Libro 2" />
						</div>
						<div class="circle">
							<div class="circle-text" data-toggle="modal" data-target="#pdfModal2">Leer mÃ¡s</div>
						</div>
					</div>
				</div>
				<!-- Libro 3 -->
				<div class="faq-one_image-column col-lg-3 col-md-6 col-sm-12">
					<div class="faq-one_image-outer">
						<div class="faq-one_image">
							<img src="./{{ asset('assets') }}/images/libros/4.-derecho-constitucional.jpg" alt="Libro 3" />
						</div>
						<div class="circle">
							<div class="circle-text" data-toggle="modal" data-target="#pdfModal3">Leer mÃ¡s</div>
						</div>
					</div>
				</div>
				<!-- Libro 4 -->
				<div class="faq-one_image-column col-lg-3 col-md-6 col-sm-12">
					<div class="faq-one_image-outer">
						<div class="faq-one_image">
							<img src="./{{ asset('assets') }}/images/libros/download (1).jpg" alt="Libro 4" />
						</div>
						<div class="circle">
							<div class="circle-text" data-toggle="modal" data-target="#pdfModal4">Leer mÃ¡s</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!-- Modal 1 -->
	<div class="modal fade" id="pdfModal1" tabindex="-1" role="dialog" aria-labelledby="pdfModalLabel1" aria-hidden="true" data-backdrop="true" data-keyboard="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="pdfModalLabel1">PDF Viewer</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!-- AquÃ­ puedes agregar el visor de PDF, por ejemplo, un iframe -->
					<iframe src="./{{ asset('assets') }}/images/libros/libros/lecciones-de-derecho-constitucional--0.pdf" style="width:100%;height:500px;"></iframe>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Modal 2 -->
	<div class="modal fade" id="pdfModal2" tabindex="-1" role="dialog" aria-labelledby="pdfModalLabel2" aria-hidden="true" data-backdrop="true" data-keyboard="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="pdfModalLabel2">PDF Viewer</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!-- AquÃ­ puedes agregar el visor de PDF, por ejemplo, un iframe -->
					<iframe src="ruta_pdf_libro_2.pdf" style="width:100%;height:500px;"></iframe>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Modal 3 -->
	<div class="modal fade" id="pdfModal3" tabindex="-1" role="dialog" aria-labelledby="pdfModalLabel3" aria-hidden="true" data-backdrop="true" data-keyboard="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="pdfModalLabel3">PDF Viewer</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!-- AquÃ­ puedes agregar el visor de PDF, por ejemplo, un iframe -->
					<iframe src="ruta_pdf_libro_3.pdf" style="width:100%;height:500px;"></iframe>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Modal 4 -->
	<div class="modal fade" id="pdfModal4" tabindex="-1" role="dialog" aria-labelledby="pdfModalLabel4" aria-hidden="true" data-backdrop="true" data-keyboard="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="pdfModalLabel4">PDF Viewer</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!-- AquÃ­ puedes agregar el visor de PDF, por ejemplo, un iframe -->
					<iframe src="ruta_pdf_libro_4.pdf" style="width:100%;height:500px;"></iframe>
				</div>
			</div>
		</div>
	</div>
    <!-- CRIMINOLOGIA FIN -->
    <!-- Services Six -->
    <!-- End Services Six -->
    <!-- INTERVENCIONES POLICIALES-->
	<section id="intervenciones-policiales" class="services-six" style="position: absolute; top: 4440px; left: 60%; transform: translateX(-80%);">
        <div class="sec-title">
            <h2 style="color: white;">INTERVENCIONES POLICIALES</h2>
        </div>
    </section>
	<section class="bg-greyy">
		<section class=""style="padding-top: 100px;">
			<div class="auto-container">
				<div class="row clearfix">
					<!-- Libro 1 -->
					<div class="faq-one_image-column col-lg-3 col-md-6 col-sm-12">
						<div class="faq-one_image-outer">
							<div class="faq-one_image">
								<img src="./{{ asset('assets') }}/images/libros/derecho penal/uno.jpg" alt="Libro 1" />
							</div>
							<div class="circle">
								<div class="circle-text" data-toggle="modal" data-target="#pdfModal1">Leer mÃ¡s</div>
							</div>
						</div>
					</div>
					<!-- Libro 2 -->
					<div class="faq-one_image-column col-lg-3 col-md-6 col-sm-12">
						<div class="faq-one_image-outer">
							<div class="faq-one_image">
								<img src="./{{ asset('assets') }}/images/libros/derecho penal/dos.png" alt="Libro 2" />
							</div>
							<div class="circle">
								<div class="circle-text" data-toggle="modal" data-target="#pdfModal2">Leer mÃ¡s</div>
							</div>
						</div>
					</div>
					<!-- Libro 3 -->
					<div class="faq-one_image-column col-lg-3 col-md-6 col-sm-12">
						<div class="faq-one_image-outer">
							<div class="faq-one_image">
								<img src="./{{ asset('assets') }}/images/libros/derecho penal/tres.jpg" alt="Libro 3" />
							</div>
							<div class="circle">
								<div class="circle-text" data-toggle="modal" data-target="#pdfModal3">Leer mÃ¡s</div>
							</div>
						</div>
					</div>
					<!-- Libro 4 -->
					<div class="faq-one_image-column col-lg-3 col-md-6 col-sm-12">
						<div class="faq-one_image-outer">
							<div class="faq-one_image">
								<img src="./{{ asset('assets') }}/images/libros/derecho penal/cuatro.jpg" alt="Libro 4" />
							</div>
							<div class="circle">
								<div class="circle-text" data-toggle="modal" data-target="#pdfModal4">Leer mÃ¡s</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</section>
	
	<!-- Modal 1 -->
	<div class="modal fade" id="pdfModal1" tabindex="-1" role="dialog" aria-labelledby="pdfModalLabel1" aria-hidden="true" data-backdrop="true" data-keyboard="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="pdfModalLabel1">PDF Viewer</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!-- AquÃ­ puedes agregar el visor de PDF, por ejemplo, un iframe -->
					<iframe src="./{{ asset('assets') }}/images/libros/libros/lecciones-de-derecho-constitucional--0.pdf" style="width:100%;height:500px;"></iframe>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Modal 2 -->
	<div class="modal fade" id="pdfModal2" tabindex="-1" role="dialog" aria-labelledby="pdfModalLabel2" aria-hidden="true" data-backdrop="true" data-keyboard="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="pdfModalLabel2">PDF Viewer</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!-- AquÃ­ puedes agregar el visor de PDF, por ejemplo, un iframe -->
					<iframe src="ruta_pdf_libro_2.pdf" style="width:100%;height:500px;"></iframe>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Modal 3 -->
	<div class="modal fade" id="pdfModal3" tabindex="-1" role="dialog" aria-labelledby="pdfModalLabel3" aria-hidden="true" data-backdrop="true" data-keyboard="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="pdfModalLabel3">PDF Viewer</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!-- AquÃ­ puedes agregar el visor de PDF, por ejemplo, un iframe -->
					<iframe src="ruta_pdf_libro_3.pdf" style="width:100%;height:500px;"></iframe>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Modal 4 -->
	<div class="modal fade" id="pdfModal4" tabindex="-1" role="dialog" aria-labelledby="pdfModalLabel4" aria-hidden="true" data-backdrop="true" data-keyboard="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="pdfModalLabel4">PDF Viewer</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!-- AquÃ­ puedes agregar el visor de PDF, por ejemplo, un iframe -->
					<iframe src="ruta_pdf_libro_4.pdf" style="width:100%;height:500px;"></iframe>
				</div>
			</div>
		</div>
	</div>
    <!-- INTERVENCIONES POLICIALES FIN-->
	<!-- DICCIONARIOS JURÃDICOS -->
	<section id="dicionarios-jurÃ­dicos" class="services-six" style="position: absolute; top: 5030px; left: 60%; transform: translateX(-80%);">
        <div class="sec-title">
            <h2 style="color: white;">DICCIONARIOS JURÃDICOS</h2>
        </div>
    </section>
	<section class="faq-one style-two">
		<div class="auto-container">
			<div class="row clearfix">
				<!-- Libro 1 -->
				<div class="faq-one_image-column col-lg-3 col-md-6 col-sm-12">
					<div class="faq-one_image-outer">
						<div class="faq-one_image">
							<img src="./{{ asset('assets') }}/images/libros/download.jpg" alt="Libro 1" />
						</div>
						<div class="circle">
							<div class="circle-text" data-toggle="modal" data-target="#pdfModal1">Leer mÃ¡s</div>
						</div>
					</div>
				</div>
				<!-- Libro 2 -->
				<div class="faq-one_image-column col-lg-3 col-md-6 col-sm-12">
					<div class="faq-one_image-outer">
						<div class="faq-one_image">
							<img src="./{{ asset('assets') }}/images/libros/1713151864.webp" alt="Libro 2" />
						</div>
						<div class="circle">
							<div class="circle-text" data-toggle="modal" data-target="#pdfModal2">Leer mÃ¡s</div>
						</div>
					</div>
				</div>
				<!-- Libro 3 -->
				<div class="faq-one_image-column col-lg-3 col-md-6 col-sm-12">
					<div class="faq-one_image-outer">
						<div class="faq-one_image">
							<img src="./{{ asset('assets') }}/images/libros/4.-derecho-constitucional.jpg" alt="Libro 3" />
						</div>
						<div class="circle">
							<div class="circle-text" data-toggle="modal" data-target="#pdfModal3">Leer mÃ¡s</div>
						</div>
					</div>
				</div>
				<!-- Libro 4 -->
				<div class="faq-one_image-column col-lg-3 col-md-6 col-sm-12">
					<div class="faq-one_image-outer">
						<div class="faq-one_image">
							<img src="./{{ asset('assets') }}/images/libros/download (1).jpg" alt="Libro 4" />
						</div>
						<div class="circle">
							<div class="circle-text" data-toggle="modal" data-target="#pdfModal4">Leer mÃ¡s</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Modal 1 -->
	<div class="modal fade" id="pdfModal1" tabindex="-1" role="dialog" aria-labelledby="pdfModalLabel1" aria-hidden="true" data-backdrop="true" data-keyboard="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="pdfModalLabel1">PDF Viewer</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!-- AquÃ­ puedes agregar el visor de PDF, por ejemplo, un iframe -->
					<iframe src="./{{ asset('assets') }}/images/libros/libros/lecciones-de-derecho-constitucional--0.pdf" style="width:100%;height:500px;"></iframe>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Modal 2 -->
	<div class="modal fade" id="pdfModal2" tabindex="-1" role="dialog" aria-labelledby="pdfModalLabel2" aria-hidden="true" data-backdrop="true" data-keyboard="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="pdfModalLabel2">PDF Viewer</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!-- AquÃ­ puedes agregar el visor de PDF, por ejemplo, un iframe -->
					<iframe src="ruta_pdf_libro_2.pdf" style="width:100%;height:500px;"></iframe>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Modal 3 -->
	<div class="modal fade" id="pdfModal3" tabindex="-1" role="dialog" aria-labelledby="pdfModalLabel3" aria-hidden="true" data-backdrop="true" data-keyboard="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="pdfModalLabel3">PDF Viewer</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!-- AquÃ­ puedes agregar el visor de PDF, por ejemplo, un iframe -->
					<iframe src="ruta_pdf_libro_3.pdf" style="width:100%;height:500px;"></iframe>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Modal 4 -->
	<div class="modal fade" id="pdfModal4" tabindex="-1" role="dialog" aria-labelledby="pdfModalLabel4" aria-hidden="true" data-backdrop="true" data-keyboard="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="pdfModalLabel4">PDF Viewer</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!-- AquÃ­ puedes agregar el visor de PDF, por ejemplo, un iframe -->
					<iframe src="ruta_pdf_libro_4.pdf" style="width:100%;height:500px;"></iframe>
				</div>
			</div>
		</div>
	</div>
	<!-- DICCIONARIOS JURÃDICOS FIN-->
	<!-- ENCICLOPEDIA JURÃDICO-->
	<section id="enciclopedia-jurÃ­dico" class="services-six" style="position: absolute; top: 5710px; left: 55%; transform: translateX(-80%);">
        <div class="sec-title">
            <h2 style="color: white;">ENCICLOPEDIA JURÃDICO </h2>
        </div>
    </section>
	<section class="bg-greyy">
		<section class=""style="padding-top: 100px;">
			<div class="auto-container">
				<div class="row clearfix">
					<!-- Libro 1 -->
					<div class="faq-one_image-column col-lg-3 col-md-6 col-sm-12">
						<div class="faq-one_image-outer">
							<div class="faq-one_image">
								<img src="./{{ asset('assets') }}/images/libros/derecho penal/uno.jpg" alt="Libro 1" />
							</div>
							<div class="circle">
								<div class="circle-text" data-toggle="modal" data-target="#pdfModal1">Leer mÃ¡s</div>
							</div>
						</div>
					</div>
					<!-- Libro 2 -->
					<div class="faq-one_image-column col-lg-3 col-md-6 col-sm-12">
						<div class="faq-one_image-outer">
							<div class="faq-one_image">
								<img src="./{{ asset('assets') }}/images/libros/derecho penal/dos.png" alt="Libro 2" />
							</div>
							<div class="circle">
								<div class="circle-text" data-toggle="modal" data-target="#pdfModal2">Leer mÃ¡s</div>
							</div>
						</div>
					</div>
					<!-- Libro 3 -->
					<div class="faq-one_image-column col-lg-3 col-md-6 col-sm-12">
						<div class="faq-one_image-outer">
							<div class="faq-one_image">
								<img src="./{{ asset('assets') }}/images/libros/derecho penal/tres.jpg" alt="Libro 3" />
							</div>
							<div class="circle">
								<div class="circle-text" data-toggle="modal" data-target="#pdfModal3">Leer mÃ¡s</div>
							</div>
						</div>
					</div>
					<!-- Libro 4 -->
					<div class="faq-one_image-column col-lg-3 col-md-6 col-sm-12">
						<div class="faq-one_image-outer">
							<div class="faq-one_image">
								<img src="./{{ asset('assets') }}/images/libros/derecho penal/cuatro.jpg" alt="Libro 4" />
							</div>
							<div class="circle">
								<div class="circle-text" data-toggle="modal" data-target="#pdfModal4">Leer mÃ¡s</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</section>
	
	<!-- Modal 1 -->
	<div class="modal fade" id="pdfModal1" tabindex="-1" role="dialog" aria-labelledby="pdfModalLabel1" aria-hidden="true" data-backdrop="true" data-keyboard="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="pdfModalLabel1">PDF Viewer</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!-- AquÃ­ puedes agregar el visor de PDF, por ejemplo, un iframe -->
					<iframe src="./{{ asset('assets') }}/images/libros/libros/lecciones-de-derecho-constitucional--0.pdf" style="width:100%;height:500px;"></iframe>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Modal 2 -->
	<div class="modal fade" id="pdfModal2" tabindex="-1" role="dialog" aria-labelledby="pdfModalLabel2" aria-hidden="true" data-backdrop="true" data-keyboard="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="pdfModalLabel2">PDF Viewer</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!-- AquÃ­ puedes agregar el visor de PDF, por ejemplo, un iframe -->
					<iframe src="ruta_pdf_libro_2.pdf" style="width:100%;height:500px;"></iframe>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Modal 3 -->
	<div class="modal fade" id="pdfModal3" tabindex="-1" role="dialog" aria-labelledby="pdfModalLabel3" aria-hidden="true" data-backdrop="true" data-keyboard="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="pdfModalLabel3">PDF Viewer</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!-- AquÃ­ puedes agregar el visor de PDF, por ejemplo, un iframe -->
					<iframe src="ruta_pdf_libro_3.pdf" style="width:100%;height:500px;"></iframe>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Modal 4 -->
	<div class="modal fade" id="pdfModal4" tabindex="-1" role="dialog" aria-labelledby="pdfModalLabel4" aria-hidden="true" data-backdrop="true" data-keyboard="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="pdfModalLabel4">PDF Viewer</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!-- AquÃ­ puedes agregar el visor de PDF, por ejemplo, un iframe -->
					<iframe src="ruta_pdf_libro_4.pdf" style="width:100%;height:500px;"></iframe>
				</div>
			</div>
		</div>
	</div>
    <!-- ENCICLOPEDIA JURÃDICO FIN -->
	<!-- End Faq One -->
  		<!-- Main Footer -->
@endsection
