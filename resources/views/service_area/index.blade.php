@extends('admin_layouts.app')
@section('title','Admin Service Area')
    
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
                                    
                                     <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal02" class="btn btn-primary">Add New Service Area</button>
                                </div>
                            </div>
                           
                            <div class="mt-3">
                                <table class="table table-stripped">
                                    <thead>
                                        <tr>
                                            
                                            <th>Address</th>
                                            <th>Distance</th>
                                            <th>Services</th>
                                            <th>Created_at</th>
                                            <th>Updated_at</th>
                                            
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($service_areas as $service_area)
                                        <tr>
                                        
                                            <td>{{$service_area->address}}</td>
                                            <td>{{$service_area->distance}}</td>
                                            <td>{{$service_area->services()->count()??''}}</td>
                                            <td>{{ date('m-d-Y',strtotime($service_area->created_at)) }}</td>
                                            <td>{{ date('m-d-Y',strtotime($service_area->updated_at)) }}</td>
                                           
                                            <td class="d-flex">
                                                <button type="button" class="edit_button btn btn-primary mr-2" data-id="{{$service_area->id}}">Edit</a>
                                                <form action="/service_areas/{{$service_area->id}}" method="POST">
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
            <h3 class="modal-title justify-content-center" id="exampleModalLabel">Add New Service Area</h3>
         </div>
          <button class="btn" data-bs-dismiss="modal"><i class="fas fa-times-circle"></i></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                  <form action="{{url('/service_areas')}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control" id="address" value="{{old('address')}}" name="address" placeholder="Address">
                                    @error('address')
                                        <span class="text-danger">{{$message}}</span>
                                        
                                    @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="distance">Distance</label>
                                        <input type="text" class="form-control" id="distance" value="{{old('distance')}}" name="distance" placeholder="20">
                                    @error('distance')
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
                  <form id="update_service_area" method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control" id="address1"  name="address">
                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="distance">Distance</label>
                                        <input type="text" class="form-control" id="distance1"  name="distance">
                                        
                                    </div>
                                    
                                    <div class="mt-1">
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
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
                url:'/service_areas/'+id+'/edit',
               
                success:function(data){
                    $('#exampleModal03').modal('show');
                    var url='/service_areas/'+id;
                    $('#update_service_area').attr('action',url);
                   // console.log(data.title);
                   
                    $('#address1').val(data.address);
                    $('#distance1').val(data.distance);
                    //alert($('#description').val());
                }
            });
        });
    });
</script>
 

@endsection