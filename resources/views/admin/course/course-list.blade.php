<script src="https://kit.fontawesome.com/c427e7e4c5.js"></script>
@extends('admin.master')

@section('homeContent')

 <div class="page-wrapper">


      <a href="{{url('/add-course')}}" class="btn btn-success mt-3 ml-3 mb-2"><i class="fas fa-plus-square mr-1"></i>Add Course</a>

 	<div class="card">
                            <div class="card-body">


              @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show mt-3 ml-2" role="alert">
  <strong>Success!</strong>{{session()->get('success')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
  @endif                          
                                <h5 class="card-title">Basic Datatable</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Trainer</th>
                                                <th>Category</th>
                                                <th>Students</th>
                                                <th>Registerfee</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

        @foreach($alldatas as $alldata)
        
                   <tr>
                        <td><img src="{{asset('/upload/'.$alldata->thum_image)}}" width="50" alt=""></td>
                        <td>{{$alldata->name}}</td>
                        <td>{{$alldata->trainer}}</td>
                        <td>{{$alldata->category}}</td>
                        <td>{{$alldata->students}}</td>
                        <td>{{$alldata->registerfee}}</td>
                        <td>{{$alldata->description}}</td>
                        <td>
                            <a href="{{url('/co-edit_'.$alldata->id)}}" class="btn btn-success btn-sm"><i class="fas fa-edit"></i>Edit</a>
                            <a href="{{url('/co-delete_'.$alldata->id)}}" onclick="return confirm('are you sure to delete?')" class="btn btn-danger btn-sm mt-1">Delete</a>
                       </td>
                    </tr>



         @endforeach




                
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Trainer</th>
                                                <th>Category</th>
                                                <th>Students</th>
                                                <th>Registerfee</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>


  </div>


@endsection