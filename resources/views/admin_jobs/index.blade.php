@extends('admin_layouts.app')
@section('title','Admin Applied Jobs')
    
@section('content')
@include('admin_layouts.partials.navbar')
 <body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar main-content-01" data-open="click" data-menu="vertical-menu" data-col="2-columns">
    <div class="main-menu menu-fixed menu-dark menu-accordion    menu-shadow " data-scroll-to-active="true">
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        
        </ul>
      </div>
    </div>

    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">


  <!-- Sales stats -->
  <div class="row mt-3">
    <div class="col-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 mx-auto">
                            <div class="mt-2">
                                <div class="d-flex justify-content-end">
                                    
                                     <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal02" class="btn btn-primary">Add New Job</button>
                                </div>
                            </div>
                           
                            <div class="mt-1">
                                <div class="table-responsive">
                                <table class="table table-stripped">
                                    <thead>
                                        <tr>
                                            
                                            
                                            <th>Title</th>
                                            <th>Type</th>
                                            <th>Location</th>
                                            <th>Service name</th>
                                            <th>Service Area</th>
                                            <th>Applied</th>
                                            <th>User</th>
                                            <th>Status</th>
                                            
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($jobs as $job)
                                        <tr>
                                        
                                            
                                            <td>{{$job->job->title??''}}</td>
                                            <td>{{$job->job->job_type??''}}</td>
                                            <td>{{$job->job->job_location??''}}</td>
                                            <td>{{ $job->job->service->name??'' }}</td>
                                            <td>{{ $job->job->service->service_area->address??'' }}</td>
                                            <td>{{ date('m-d-Y',strtotime($job->created_at)) }}</td>
                                            <td>{{ $job->user->username??'' }}</td>
                                            <td>{{ $job->status??'' }}</td>
                                           
                                            <td class="d-flex">
                                                
                                                  <button type="button"  class="approve_button btn btn-primary mr-2" data-id="{{$job->id}}">Approve</a>
                                                  
                                               
                                                <form action="/jobs/decline/{{$job->id}}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit" class="btn btn-danger">Decline</button>
                                                </form>   
                                
                                               
                                               
                                             </td>
                                           </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                </div>
                            </div>
                          
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        </div>
      </div>
    </div>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal02" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
         <div class="">
            <h3 class="modal-title justify-content-center" id="exampleModalLabel">Add New Service</h3>
         </div>
          <button class="btn" data-bs-dismiss="modal"><i class="fas fa-times-circle"></i></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                  <form action="{{url('/jobs')}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" id="title" value="{{old('title')}}" name="title" placeholder="Web Developer">
                                         @error('title')
                                        <span class="text-danger">{{$message}}</span>
                                         @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="job_type">Job Type</label>
                                        <input type="text" class="form-control" id="job_type" value="{{old('job_type')}}" name="job_type" placeholder="Full Time">
                                         @error('job_type')
                                        <span class="text-danger">{{$message}}</span>
                                         @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="job_location">Job Location</label>
                                        <input type="text" class="form-control" id="job_location" value="{{old('job_location')}}" name="job_location" placeholder="Service Rate">
                                         @error('job_location')
                                        <span class="text-danger">{{$message}}</span>
                                         @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <input type="text" class="form-control" id="description" value="{{old('description')}}" name="description" placeholder="Service Rate">
                                         @error('description')
                                        <span class="text-danger">{{$message}}</span>
                                         @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="service_id">Service</label>
                                        <select class="form-control" id="service_id" name="service_id">
                                            <option value="">Select Service </option>
                                            @foreach($services as $service)
                                            <option value="{{$service->id}}">{{$service->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('service_id')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="mt-1">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <!-- <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>
          <button type="button" class="btn btn-primary">Yes</button> -->
        </div>
      </div>
    </div>
  </div>
 
<script>
    $(document).ready(function(){
        $('.approve_button').on('click',function(){
            var id = $(this).data('id');
            //alert(id);
            $.ajax({
                type:'POST',
                url:'/jobs/approve/'+id,
                data:{
                    "_token": "{{ csrf_token() }}",
                    "_method": "PUT"
                },
                success:function(data){
                    $('#approve_button').hide();
                    location.reload();
                }
            });
        });
    });
</script>
@endsection