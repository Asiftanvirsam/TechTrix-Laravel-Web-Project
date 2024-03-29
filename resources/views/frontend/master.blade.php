<!DOCTYPE html>
<html lang="en">
<head>
	<title>TechTrix</title>
	<meta charset="UTF-8">
	<meta name="description" content="WebUni Education Template">
	<meta name="keywords" content="webuni, education, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<script src="https://kit.fontawesome.com/c427e7e4c5.js"></script>
	<!-- Favicon -->   
	<link href="{{asset('/lib/')}}/img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">



	@section('libcss')
	@show

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{asset('/lib/')}}/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="{{asset('/lib/')}}/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="{{asset('/lib/')}}/css/owl.carousel.css"/>
	<link rel="stylesheet" href="{{asset('/lib/')}}/css/style.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3">
					<div class="site-logo">
						<img src="{{asset('/lib/')}}/img/tech.png" alt="">
					</div>
					<div class="nav-switch">
						<i class="fa fa-bars"></i>
					</div>
				</div>
				<div class="col-lg-9 col-md-9">


		@if(Auth::check())



       @if(Auth::user()->type=="admin")
        <a href="{{url('/login')}}" class="site-btn header-btn">Login</a>
       
       @else

       <a href="{{url('/login')}}" onclick="event.preventDefault();
 document.getElementById('logout-form').submit();" 
 href="{{ route('logout') }}" class="site-btn header-btn">Logout</a>

           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

        @endif


         @else

        <a href="{{url('/login')}}" class="site-btn header-btn">Login</a>


		@endif



					<nav class="main-menu">
						<ul>
							<li><a href="{{url('/')}}">Home</a></li>
							<li><a href="http://techtrixbd.com/">About us</a></li>
							<li><a href="{{url('/courses')}}">Courses</a></li>
							<li><a href="{{url('/contact')}}">Contact</a></li>
							<li>

					@if(Auth::check())

					@if(Auth::user()->type=="admin")
                      <a href=""><i class="fas fa-user-alt mr-1"></i>Account</a>

                      @else
                      <a href=""><i class="fas fa-user-alt mr-1"></i>{{Auth::user()->name}}</a>

					@endif

                     @else

                     <a href=""><i class="fas fa-user-alt mr-1"></i>Account</a>


					@endif


								


							</li>
							
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- Header section end -->


	@section('homeContent')
	@show


	<!-- banner section -->
	<section class="banner-section spad">
		<div class="container">
			<div class="section-title mb-0 pb-2">
				<h2>Join Our Community Now!</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
			</div>
			<div class="text-center pt-5">
				<a href="{{url('/register')}}" class="site-btn">Register Now</a>
			</div>
		</div>
	</section>
	<!-- banner section end -->


	<!-- footer section -->
	<footer class="footer-section spad pb-0">
		<div class="footer-top">
			<div class="footer-warp">
				<div class="row">
					<div class="widget-item">
						<h4>Contact Info</h4>
						<ul class="contact-list">
							<li>1481 Creekside Lane <br>Avila Beach, CA 931</li>
							<li>+53 345 7953 32453</li>
							<li>yourmail@gmail.com</li>
						</ul>
					</div>
					<div class="widget-item">
						<h4>Engeneering</h4>
						<ul>
							<li><a href="">Applied Studies</a></li>
							<li><a href="">Computer Engeneering</a></li>
							<li><a href="">Software Engeneering</a></li>
							<li><a href="">Informational Engeneering</a></li>
							<li><a href="">System Engeneering</a></li>
						</ul>
					</div>
					<div class="widget-item">
						<h4>Graphic Design</h4>
						<ul>
							<li><a href="">Applied Studies</a></li>
							<li><a href="">Computer Engeneering</a></li>
							<li><a href="">Software Engeneering</a></li>
							<li><a href="">Informational Engeneering</a></li>
							<li><a href="">System Engeneering</a></li>
						</ul>
					</div>
					<div class="widget-item">
						<h4>Development</h4>
						<ul>
							<li><a href="">Applied Studies</a></li>
							<li><a href="">Computer Engeneering</a></li>
							<li><a href="">Software Engeneering</a></li>
							<li><a href="">Informational Engeneering</a></li>
							<li><a href="">System Engeneering</a></li>
						</ul>
					</div>
					<div class="widget-item">
						<h4>Newsletter</h4>
						<form class="footer-newslatter">
							<input type="email" placeholder="E-mail">
							<button class="site-btn">Subscribe</button>
							<p>*We don’t spam</p>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="footer-warp">
				<ul class="footer-menu">
					<li><a href="#">Terms & Conditions</a></li>
					<li><a href="#">Register</a></li>
					<li><a href="#">Privacy</a></li>
				</ul>
				<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is developed <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://www.facebook.com/asiftanvir.sayem.1" target="_blank">Asif Tanvir</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
			</div>
		</div>
	</footer> 
	<!-- footer section end -->


       @section('libjs')
	   @show
	<!--====== Javascripts & Jquery ======-->
	<script src="{{asset('/lib/')}}/js/jquery-3.2.1.min.js"></script>
	<script src="{{asset('/lib/')}}/js/bootstrap.min.js"></script>
	<script src="{{asset('/lib/')}}/js/mixitup.min.js"></script>
	<script src="{{asset('/lib/')}}/js/circle-progress.min.js"></script>
	<script src="{{asset('/lib/')}}/js/owl.carousel.min.js"></script>
	<script src="{{asset('/lib/')}}/js/main.js"></script>
</html>