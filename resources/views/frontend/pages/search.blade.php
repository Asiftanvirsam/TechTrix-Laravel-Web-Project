@extends('frontend.master')


@section('homeContent')



    <div class="page-info-section set-bg" data-setbg="{{asset('/lib/')}}/img/page-bg/8.jpg">
		<div class="container">
			<div class="site-breadcrumb">
				<a href="{{url('/')}}">Home</a>
				<span>Search</span>
			</div>
		</div>
	</div>
	<!-- Page info end -->

     @foreach($search as $search)
          
				<!-- course -->
				<div class="mix col-lg-3 col-md-4 col-sm-6 mt-4">
					<div class="course-item">
						<div class="course-thumb set-bg" data-setbg="{{asset('/upload/'.$search->thum_image)}}">
						</div>
						<div class="course-info">
							<div class="course-text">
								<h5>{{$search->name}}</h5>
								<p>{{$search->description}}</p>
								<div class="students">{{$search->students}} Students</div>
								<a class="btn btn-primary mt-2" href="{{url('/register-course/'.$search->id)}}" role="button">Register Now</a>
							</div>
							<div class="course-author">
								<div class="ca-pic set-bg" data-setbg="{{asset('/lib/')}}/img/authors/1.jpg"></div>
								<p>{{$search->trainer}}, <span>Developer</span></p>
							</div>
						</div>
					</div>
				</div>
			@endforeach




@endsection