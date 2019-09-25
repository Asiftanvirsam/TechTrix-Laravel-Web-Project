@extends('frontend.master')


@section('homeContent')



    <div class="page-info-section set-bg" data-setbg="{{asset('/lib/')}}/img/page-bg/8.jpg">
		<div class="container">
			<div class="site-breadcrumb">
				<a href="{{url('/')}}">Home</a>
				<span>Courses</span>
			</div>
		</div>
	</div>
	<!-- Page info end -->
   
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









@endsection