<script src="https://kit.fontawesome.com/c427e7e4c5.js"></script>
@extends('admin.master')

@section('homeContent')

 <div class="page-wrapper">



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
                                <h5 class="card-title">Registered Students</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Uid</th>
                                                <th>Email</th>
                                                <th>Cid</th>
                                                <th>Course Name</th>
                                                <th>Registerfee Paid tk</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

        @foreach($alldatas as $alldata)
        
                   <tr>
                        <td>{{$alldata->uname}}</td>
                        <td>{{$alldata->uid}}</td>
                        <td>{{$alldata->email}}</td>
                        <td>{{$alldata->cid}}</td>
                        <td>{{$alldata->cname}}</td>
                        <td>{{$alldata->total}}</td>
                        <td>
                            <a href="{{url('/co-edit_'.$alldata->id)}}" class="btn btn-success btn-sm"><i class="fas fa-edit"></i>Edit</a>
                            <a href="{{url('/co-delete_'.$alldata->id)}}" onclick="return confirm('are you sure to delete?')" class="btn btn-danger btn-sm mt-1">Delete</a>
                       </td>
                    </tr>



         @endforeach




                
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                              <th>Name</th>
                                                <th>Uid</th>
                                                <th>Email</th>
                                                <th>Cid</th>
                                                <th>Course Name</th>
                                                <th>Registerfee Paid tk</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>


  </div>


@endsection