@extends('frontend.master')


@section('homeContent')

    <div class="page-info-section set-bg" data-setbg="{{asset('/lib/')}}/img/page-bg/i7.jpg">
		<div class="container">
			<div class="site-breadcrumb">
				<a href="{{url('/')}}">Home</a>
				<span>Register</span>
			</div>
		</div>
	</div>
       
      

     <div class="course-meta-area">
				<div class="row">
					<div class="col-lg-10 offset-lg-1">
						<div class="course-note">Featured Course</div>
						<h3>{{$details->name}}</h3>
						<div class="course-metas">
							<div class="course-meta">
								<div class="course-author">
									<div class="ca-pic set-bg" data-setbg="{{asset('/lib/')}}/img/authors/2.jpg"></div>
									<h6>Teacher</h6>
									<p>{{$details->trainer}}, <span>Developer</span></p>
								</div>
							</div>
							<div class="course-meta">
								<div class="cm-info">
									<h6>Category</h6>
									<p>Development</p>
								</div>
							</div>
							<div class="course-meta">
								<div class="cm-info">
									<h6>Students</h6>
									<p>{{$details->students}}</p>
								</div>
							</div>
							<div class="course-meta">
								<div class="cm-info">
									<h6>Reviews</h6>
									<p>5 Reviews <span class="rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star is-fade"></i>
									</span></p>
								</div>
							</div>
						</div>
						<button class="site-btn price-btn">Register fee:{{$details->registerfee}} tk </button>
						{{-- <a href="{{url('/checkout')}}" class="site-btn buy-btn">Complete Registration</a> --}}
@if(Auth::check())

<form action='https://sandbox.2checkout.com/checkout/purchase' method='post'>
<input type='hidden' name='sid' value='901413831' >
<input type='hidden' name='mode' value='2CO' >
<input type='hidden' name='li_0_type' value='product'>




<input type='hidden' name='li_0_name' value='{{$details->name}}' >
<input type='hidden' name='li_0_product_id' value='{{$details->id}}' >
<input type='hidden' name='li_0_price' value='{{$details->registerfee}}'>
<input type='hidden' name='li_0_quantity' value='1'>


<input type='hidden' name='li_0_tangible' value='N' >
<input type='hidden' name='purchase_step' value='payment-method' >
<input name='submit' class="site-btn buy-btn mt-1 " type='submit' value='Confirm Registration' >
</form>

  @else
   <h5 class="mt-2" style="color: red">For registration you have to log in First!</h5>

  @endif 





					</div>
				</div>
			</div>


    <h4 class="ml-4" style="color: orange">Course Description</h4>
	<center><img src="{{asset('/upload/'.$details->thum_image)}}" alt="" class="course-preview"></center>
			<div class="row">
				<div class="col-lg-10 offset-lg-1 course-list">
					<div class="cl-item">
						
						<p>Lorem ipsum dolor sit amet, consectetur. Phasellus sollicitudin et nunc eu efficitur. Sed ligula nulla, molestie quis ligula in, eleifend rhoncus ipsum. Donec ultrices, sem vel efficitur molestie, massa nisl posuere ipsum, ut vulputate mauris ligula a metus. Aenean vel congue diam, sed bibendum ipsum. Nunc vulputate aliquet tristique. Integer et pellentesque urna. Lorem ipsum dolor sit amet, consectetur. Phasellus sollicitudin et nunc eu efficitur. Sed ligula nulla, molestie quis ligula in, eleifend rhoncus ipsum. </p>
					</div>
				</div>
			</div>
       
       <section class="realated-courses">
		<div class="course-warp">
			<h2 class="rc-title mt-2">Other Courses</h2>
			<div class="rc-slider owl-carousel">

				@foreach($fecourses as $fecourse)
				<!-- course -->
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

				@endforeach
			</div>
		</div>
	</section>
	<!-- Page end -->


@endsection