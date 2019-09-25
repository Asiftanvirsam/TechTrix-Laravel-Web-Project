<script src="https://kit.fontawesome.com/c427e7e4c5.js"></script>
@extends('admin.master')


@section('libcss')

   <link rel="stylesheet" type="text/css" href="{{asset('/adminlib/')}}/assets/libs/quill/dist/quill.snow.css">

@endsection



@section('homeContent')


		  <div class="container-fluid offset-2">

               <div class="col-md-6">
		  	 <div class="card">

             @if(session()->has('success'))
		  	 	<div class="alert alert-success alert-dismissible fade show mt-3 ml-2" role="alert">
  <strong>Success!</strong>{{session()->get('success')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
  @endif
                            <form action="{{url('/save-course')}}" method="post" class="form-horizontal mt-5 ml-5" style="border: 3px solid green" enctype="multipart/form-data">
                             @csrf
                                <div class="card-body">
                                    <h4 class="card-title">Course Info</h4>
                                    <div class="form-group row">
                                        <label for="fname" class="
                                      
                                      @error('name')

                                       text-danger
                                      @enderror


                                        col-sm-3 text-right control-label col-form-label">Course Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="name" class="form-control

                                          @error('name')

                                       border-danger
                                      @enderror


                                            " id="fname" placeholder="Course Name Here" value="{{old('name')}}">

                                             @error('name')
                                      
                                      <span class="text-danger">{{$message}}</span>

                                       @enderror
                                        </div>



                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Trainer</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="trainer" class="form-control" id="lname" placeholder="Trainer Name Here" value="{{old('trainer')}}">
                                        </div>
                                    </div>
                                        <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Category</label>
                                        <div class="col-sm-9">
                                          <select class="custom-select" name="category">
								  <option selected>Select Category</option>
								  <option @if(old('category')==1) selected @endif value="1"> Basic Programing</option>
								  <option @if(old('category')==2) selected @endif value="2">Android</option>
								  <option @if(old('category')==3) selected @endif value="3">Web</option>
                  <option @if(old('category')==3) selected @endif value="4">Others</option>
								</select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Students</label>
                                        <div class="col-sm-9">
                                            <input type="number" min="0" class="form-control" name="students" id="lname" placeholder="No. of students" value="{{old('students')}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Register Fee</label>
                                        <div class="col-sm-9">
                                            <input type="number" name="registerfee" class="form-control" id="email1" placeholder="Register Fee Here" value="{{old('registerfee')}}">
                                        </div>
                                    </div>


                                      <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Thum Image</label>
                                        <div class="col-sm-9">

                                        	    
                                            <input type="file" name="thum_image" id="validatedCustomFile">
                                           
                                    </div>
                                    </div>
                                
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Description</label>
                                        <div class="col-sm-9">
                                            <textarea id="editor" name="description" class="form-control">{{old('description')}}</textarea>
                                        </div>
                                    </div>
                                </div>


                                 <div class="card-body ml-5">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                             
                            </form>




                        </div>
               </div>

		  </div>




@endsection

@section('libjs')



    <script src="{{asset('/adminlib/')}}/assets/libs/quill/dist/quill.min.js"></script>

    <script>
               
        var quill = new Quill('#editor', {
            theme: 'snow'
        });

    </script>

@endsection