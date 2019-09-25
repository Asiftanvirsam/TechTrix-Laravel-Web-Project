
 @extends('frontend.master')
 @section('homeContent')


  <div class="page-info-section set-bg" data-setbg="{{asset('/lib/')}}/img/page-bg/i5.jpg">
        <div class="container">
            <div class="site-breadcrumb">
                <a href="">Home</a>
                <span>Login</span>
            </div>
        </div>
    </div>
    <!-- Page info end -->

       <!-- Page -->
    <section class="contact-page pt-2 pb-0">

        <center class="mt-4"><b>Log Into Your Account</b></center>
        <div class="col-md-12">
            
                <div class="col-lg-8 p-5 offset-2">
                    <form method="POST" action="{{ route('login') }}" class="p-3" style="border: 3px solid orange">
                    
                    @csrf

  <div class="form-group">
    <label class="ml-3" for="exampleInputEmail1"><b>Email address</b></label>
    
        <div class="col-md-12">
                                <input id="email" placeholder="Enter your email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>




    <small id="emailHelp" class="form-text text-muted ml-3">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label class="ml-3" for="exampleInputPassword1"><b>Password</b></label>
      <div class="col-md-12">
                                <input id="password" placeholder="Enter your password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
  </div>
  
        <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>


  <button type="submit" class="btn btn-warning ml-3 mt-2">Login</button>
</form>
                </div>
            </div>

        
    </section>




 @endsection







