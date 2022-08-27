@extends('admin_layouts.app')
@section('title','Admin Job Applications')
    
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
                           
                            <div class="mt-3">
                                <div class="table-responsive">
                                <table class="table table-stripped">
                                    <thead>
                                        <tr>
                                            
                                            
                                            <th>Title</th>
                                            <th>Type</th>
                                            <th>Location</th>
                                            <th>Service name</th>
                                            <th>Service Area</th>
                                            <th>No.Applications</th>
                                            <th>Added</th>
                                            <th>Updated</th>
                                            
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($jobs as $job)
                                        <tr>
                                        
                                            
                                            <td>{{ $job->title}}</td>
                                            <td>{{ $job->job_type}}</td>
                                            <td>{{ $job->job_location}}</td>
                                            <td>{{ $job->service->name??"" }}</td>
                                            <td>{{$job->service->service_area->address??''}}</td>
                                            <td>{{ App\Models\JobApply::where('job_id',$job->id)->get()->count() }}</td>
                                            <td>{{ date('m-d-Y',strtotime($job->created_at)) }}</td>
                                            <td>{{ date('m-d-Y',strtotime($job->updated_at)) }}</td>
                                           
                                            <td class="d-flex">
                                                <button type="button" class="edit_button btn btn-primary mr-2" data-id="{{$job->id}}">Edit</a>
                                                <form action="/jobs/{{$job->id}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
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
  <div class="modal fade" id="exampleModal03" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
         <div class="">
            <h3 class="modal-title justify-content-center" id="exampleModalLabel">Edit Job Application</h3>
         </div>
          <button class="btn" data-bs-dismiss="modal"><i class="fas fa-times-circle"></i></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                  <form id="update_job" method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" id="title1"  name="title">
                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="job_type">Job Type</label>
                                        <input type="text" class="form-control" id="job_type1"  name="job_type">
                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="job_location">Job Location</label>
                                        <input type="text" class="form-control" id="job_location1"  name="job_location">

                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <input type="text" class="form-control" id="description1"  name="description">
                                       
                                    </div>
                                    <div class="form-group">
                                        <label for="service_id">Service</label>
                                        <select class="form-control" id="service_id1" name="service_id">
                                            <option value="">Select Service </option>
                                            @foreach($services as $service)
                                            <option value="{{$service->id}}">{{$service->name}}</option>
                                            @endforeach
                                        </select>
                                       
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
        $('.edit_button').on('click',function(){
            var id = $(this).data('id');
            //alert(id);
            $.ajax({
                type:'GET',
                url:'/jobs/'+id+'/edit',
               
                success:function(data){
                    $('#exampleModal03').modal('show');
                    var url='/jobs/'+id;
                    $('#update_job').attr('action',url);
                   // console.log(data.title);
                    $('#title1').val(data.title);
                   // $('#job_type').text(data.job_type);
                    $('#job_type1').val(data.job_type);
                    $('#job_location1').val(data.job_location);
                    $('#description1').val(data.description);
                    $('#service_id1').val(data.service_id);
                    //alert($('#description').val());
                }
            });
        });
    });
</script>
@endsection