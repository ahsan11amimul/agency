@extends('admin_layouts.app')
@section('title','Admin Services')
    
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
                                    
                                     <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal02" class="btn btn-primary">Add New Service</button>
                                </div>
                            </div>
                           
                            <div class="mt-3">
                                <table class="table table-stripped">
                                    <thead>
                                        <tr>
                                            
                                            <th>Name</th>
                                            <th>Rate</th>
                                            <th>Description</th>
                                            <th>Area</th>
                                            <th>Added</th>
                                            <th>Updated</th>
                                            
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($services as $service)
                                        <tr>
                                        
                                            <td>{{$service->name}}</td>
                                            <td>{{$service->rate}}</td>
                                            <td>{{$service->description}}</td>
                                            <td>{{$service->service_area->address??''}}</td>
                                            <td>{{ date('m-d-Y',strtotime($service->created_at)) }}</td>
                                            <td>{{ date('m-d-Y',strtotime($service->updated_at)) }}</td>
                                           
                                            <td class="d-flex">
                                                <button type="button" class="edit_button btn btn-primary mr-2" data-id="{{$service->id}}">Edit</a>
                                                <form action="/services/{{$service->id}}" method="POST">
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
                  <form action="{{url('/services')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" value="{{old('name')}}" name="name" placeholder="Service name">
                                         @error('name')
                                        <span class="text-danger">{{$message}}</span>
                                         @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="rate">Rate</label>
                                        <input type="text" class="form-control" id="rate" value="{{old('rate')}}" name="rate" placeholder="hourly/monthly rate">
                                         @error('rate')
                                        <span class="text-danger">{{$message}}</span>
                                         @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <input type="text" class="form-control" id="description" value="{{old('description')}}" name="description" placeholder="Service Description">
                                         @error('description')
                                        <span class="text-danger">{{$message}}</span>
                                         @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="service_area_id">Service Area</label>
                                        <select class="form-control" id="service_area_id" name="service_area_id">
                                            <option value="">Select Service Area</option>
                                            @foreach($service_areas as $service_area)
                                            <option value="{{$service_area->id}}">{{$service_area->address}}</option>
                                            @endforeach
                                        </select>
                                        @error('service_area_id')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <input type="file" class="form-control" id="image" name="image">
                                        @error('image')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="mt-1">
                                        <button type="submit" class="btn btn-primary w-100">Submit</button>
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
            <h3 class="modal-title justify-content-center" id="exampleModalLabel">Edit Service</h3>
         </div>
          <button class="btn" data-bs-dismiss="modal"><i class="fas fa-times-circle"></i></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                  <form id="update_service" method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name1"  name="name" placeholder="Service name">
                                    </div>
                                    <div class="form-group">
                                        <label for="rate">Rate</label>
                                        <input type="text" class="form-control" id="rate1"  name="rate" placeholder="Service Rate">
                                    </div>
                                    <div class="form-group">
                                        <label for="decription">Description</label>
                                        <input type="text" class="form-control" id="description1"  name="description" placeholder="Service Description">
                                    </div>
                                     <div class="form-group">
                                        <label for="service_area_id">Service Area</label>
                                        <select class="form-control" id="service_area_id" name="service_area_id">
                                            <option value="" id="service_area_id1">Select Service Area</option>
                                            @foreach($service_areas as $service_area)
                                            <option value="{{$service_area->id}}">{{$service_area->address}}</option>
                                            @endforeach
                                        </select>
                                        @error('service_area_id')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    {{-- <div class="form-group">
                                        <label for="image">Add New Image</label>
                                        <input type="file" class="form-control" id="image" name="image">
                                         <div class="mt-1">
                                            <img src="{{asset('images/'.$service->image)}}" id="image1" class="image-fluid" width="50px" height="50px" alt="">
                                         </div>
                                    </div> --}}
                                    <div class="mt-1">
                                        <button type="submit" class="btn btn-primary w-100">Save Changes</button>
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
                url:'/services/'+id+'/edit',
               
                success:function(data){
                    $('#exampleModal03').modal('show');
                    var url='/services/'+id;
                    $('#update_service').attr('action',url);
                   // console.log(data.title);
                   
                    $('#name1').val(data.name);
                    $('#rate1').val(data.rate);
                    $('#description1').val(data.description);
                    $('#service_area_id1').val(data.service_area_id);
                    //alert($('#description').val());
                }
            });
        });
    });
</script>
 

@endsection