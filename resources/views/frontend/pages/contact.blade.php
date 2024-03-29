@extends('frontend.master')

@section('homeContent')

<div class="page-info-section set-bg" data-setbg="{{asset('/lib/')}}/img/page-bg/2.jpg">
		<div class="container">
			<div class="site-breadcrumb">
				<a href="{{url('/')}}">Home</a>
				<span>Contact</span>
			</div>
		</div>
	</div>
	<!-- Page info end -->

       <!-- Page -->
	<section class="contact-page pt-2 pb-0">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="contact-form-warp">
						<div class="section-title text-white text-left">
							<h2>Get in Touch</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. </p>
						</div>
						<form class="contact-form">
							<input type="text" placeholder="Your Name">
							<input type="text" placeholder="Your E-mail">
							<input type="text" placeholder="Subject">
							<textarea placeholder="Message"></textarea>
							<button class="site-btn">Sent Message</button>
						</form>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="contact-info-area">
						<div class="section-title text-left p-0">
							<h2>Contact Info</h2>
							<p>Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendi sse cursus faucibus finibus.</p>
						</div>
						<div class="phone-number">
							<span>Direct Line</span>
							<h2>+53 345 7953 32453</h2>
						</div>
						<ul class="contact-list">
							<li>1481 Creekside Lane <br>Avila Beach, CA 931</li>
							<li>+53 345 7953 32453</li>
							<li>yourmail@gmail.com</li>
						</ul>
						<div class="social-links">
							<a href="#"><i class="fa fa-pinterest"></i></a>
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div id="map-canvas"></div>
		</div>
	</section>



@endsection

  @section('libjs')
   <!-- load for map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWTIlluowDL-X4HbYQt3aDw_oi2JP0Krc&sensor=false"></script>
	<script src="{{asset('/lib/')}}/js/map.js"></script>


  @endsection