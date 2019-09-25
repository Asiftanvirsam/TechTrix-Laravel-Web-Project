@extends ('frontend.master')

@section('homeContent')

<!-- Hero section -->
	<section class="hero-section set-bg" data-setbg="{{asset('/lib/')}}/img/1st.jpg">
		<div class="container">
			<div class="hero-text text-white">
				<h2 style="color: #ff8000">Ahead to Develop the Future</h2>
				<p>Grow With US,Be Skilled & Build Your Career <br> We offer various training program to raise opportunity & growth among our future leader who will serve the society with best interest.</p>
			</div>
			<div class="">
				
				<center><a href="{{url('/register')}}" type="button" class="btn btn-warning">SignUp</a></center>
					
				</div>
			</div>
	</section>
	<!-- Hero section end -->


	<!-- categories section -->
	<section class="categories-section pt-3 pb-5">
		<div class="container">
			<div class="section-title">
				<h2>Our Course Categories </h2>
				<p>We are commited to nurture you by sharing knowledge, providing supports, co-operating in projects and driving towards a bright future.</p>
				<b>Admission is Going On!</b>
			</div>
			<div class="row">
				<!-- categorie -->
				<div class="col-lg-4 col-md-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="{{asset('/lib/')}}/img/Androiddevelopment.jpg"></div>
						<div class="ci-text">
							<h5>Android Application Development</h5>
							<p>Lorem ipsum dolor sit amet, consectetur</p>
						</div>
					</div>
				</div>
				<!-- categorie -->
				<div class="col-lg-4 col-md-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="{{asset('/lib/')}}/img/webdev.jpeg"></div>
						<div class="ci-text">
							<h5>Web Application Development with Laravel</h5>
							<p>Lorem ipsum dolor sit amet, consectetur</p>
						</div>
					</div>
				</div>
				<!-- categorie -->
				<div class="col-lg-4 col-md-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="{{asset('/lib/')}}/img/computer.jpg"></div>
						<div class="ci-text">
							<h5>Fundamental & Basic Programmings</h5>
							<p>Lorem ipsum dolor sit amet, consectetur</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- categories section end -->


	<!-- course section -->
	<section class="course-section">
		<div class="container">
			<div class="section-title mb-0">
				<h2>Featured Courses</h2>
				<p>We are commited to nurture you by sharing knowledge, providing supports, co-operating in projects and driving towards a bright future.</p>
				<b>Admission is Going On!</b>
			</div>
		</div>
		<div class="course-warp">
			<ul class="course-filter controls">
				<li class="control active" data-filter="all">All</li>
				<li class="control" data-filter=".1">Basic Programing</li>
				<li class="control" data-filter=".2">Android</li>
				<li class="control" data-filter=".3">Web Development</li>
				<li class="control" data-filter=".4">Others</li>
			</ul>                                       
			<div class="row course-items-area">

		@foreach($fecourses as $fecourse)
          
				<!-- course -->
				<div class="mix col-lg-3 col-md-4 col-sm-6 ">
					<div class="course-item">
						<div class="course-thumb set-bg" data-setbg="{{asset('/upload/'.$fecourse->thum_image)}}">
						</div>
						<div class="course-info">
							<div class="course-text">
								<h5>{{$fecourse->name}}</h5>
								<p>{{$fecourse->description}}</p>
								<div class="students">{{$fecourse->students}} Students</div>
								<a class="btn btn-primary mt-2" href="{{url('/register-course/'.$fecourse->id)}}" role="button">Register Now</a>
							</div>
							<div class="course-author">
								<div class="ca-pic set-bg" data-setbg="{{asset('/lib/')}}/img/authors/1.jpg"></div>
								<p>{{$fecourse->trainer}}, <span>Developer</span></p>
							</div>
						</div>
					</div>
				</div>
			@endforeach

			</div>
		</div>
	</section>
	<!-- course section end -->

	<!-- search section -->
	<section class="search-section mt-1">
		<div class="container mb-1">
			
				<div class="section-title text-white">
					<h2 style="color: orange">Search your course</h2>
				
					<div class="col-md-12 offset-md-1">
						<!-- search form -->
						<form action="{{url('/search')}}" class="course-search-form" method="post">
							@csrf
							<input type="text" name="search" placeholder="Course">
							<button class="site-btn" type="submit">Search Couse</button>
						</form>
					</div>
				
			</div>
		</div>
	</section>
	<!-- search section end -->


	<!-- signup section -->
	<section class="signup-section spad">
		<div class="signup-bg set-bg" data-setbg="{{asset('/lib/')}}/img/signup-bg.jpg"></div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6">
					<div class="signup-warp">
						<div class="section-title text-white text-left">
							<h2>Sign up to became a teacher</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
						</div>
						<!-- signup form -->
						<form class="signup-form">
							<input type="text" placeholder="Your Name">
							<input type="text" placeholder="Your E-mail">
							<input type="text" placeholder="Your Phone">
							<label for="v-upload" class="file-up-btn">Upload Course</label>
							<input type="file" id="v-upload">
							<button class="site-btn">Search Couse</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- signup section end -->



@endsection