@extends('layouts.app')
@section('content')
		<!-- End Main Header -->

		<!-- Page Title -->
		<section class="page-title" style="background-image:url({{ asset('assets') }}/images/videos/ada-f-024952-0000_full.jpg)">
			<div class="page-title_pattern"
				style="background-image:url({{ asset('assets') }}/images/background/page-title_pattern.png)"></div>
			<div class="page-title_gradient"></div>
			<div class="auto-container">
				<h2>Videos</h2>
				<ul class="bread-crumb clearfix">
					<li><a href="{{ url('/') }}/"><i class="fa-solid fa-house fa-fw"></i> Home</a></li>
					<li>videos</li>
				</ul>
			</div>
		</section>
		<!-- End Page Title -->

		<!--table-->
		<section class="bg-grey">
			<div class="sec-title">
				<h2>VIDEOS PUBLICADOS</h2>
			</div>
			<table class="styled-table">
				<tr>
					<td class="videos-td youtube" colspan="1" rowspan="2">
						<div class="video-container">
							<div class="media media-element-container media-default">
								<div
									class="field field-name-field-html-code field-type-text-long field-label-hidden view-mode-default">
									<div class="field-items">
										<div class="field-item even">
											<div style="padding:56.25% 0 0 0;position:relative;">
												<iframe src="https://www.youtube.com/embed/GShZessapqU" frameborder="0"
													allow="autoplay; fullscreen; picture-in-picture"
													style="position:absolute;top:0;left:0;width:100%;height:100%;"
													title="Masterclass: The Museo Bargello's Ethiopian Processional Cross"></iframe>
											</div>
											<script src="../../player.vimeo.com/api/player.js"></script>
										</div>
									</div>
								</div>
							</div>
						</div>
					</td>
					<td class="videos-titles-td grey-background" colspan="3">
						<h4>
							<span style="color:#aa182c; font-weight:500"><a
									href="https://www.youtube.com/@rogertquispealegria831" target="_blank"
									title="">CASOS EN QUE SE PUEDE REABRIR UNA INVESTIGACIÃ“N FISCAL ARCHIVADA</a></span>
						</h4>
						<p>"Abog. Rogert Quispe Alegria"</p>
						<p></p>
					</td>
				</tr>

				<tr>
					<td class="videos-titles-td-bottom grey-background" colspan="3"></td>
				</tr>
				<tr>
					<td colspan="4" rowspan="1"></td>
				</tr>

			</table>
		</section>
		<!--table fin-->
		<!-- Main Footer -->
@endsection
