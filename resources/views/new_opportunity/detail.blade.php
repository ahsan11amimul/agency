@extends('user_layouts.app')
@section('title', 'New Opportunity')
@section('content')
  <body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar main-content-01" data-open="click" data-menu="vertical-menu" data-col="2-columns">

  
   
    <!-- fixed-top-->
@include('user_layouts.partials.navbar')
   

   

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
                    <div class="row mb-55">
    
                        <div class="col-lg-12">
                            <div class="card" style="height: 100%;">
                            
                              <div class="card-content collapse show">
                                  <div class="card-body card-dashboard">
                                     <h5 style="">Details information of service types:
                                    
                                         {{$service->name}}
                                     
                                     </h5>
                                     
                                      <div class="mt-2 mb-1">
                                        <h3 style="font-weight: bold;padding: 3px;background-color: #203468;color: #fff;">{{$service->service_area->address}} - </h3>
                                    
                                       
                                         <div class="row">
                                         <div class="col-md-4">
                                             <a href="#">{{$service->rate}}</a><br>
                                             <p>{{$service->description}}</p>
                                             <p>{{$service->job->title??''}}</p>
                                             <p>{{$service->job->job_location??''}}</p>
                                             <p>{{$service->job->job_type??''}}</p>
                                            <button  data-bs-toggle="modal" data-bs-target="#exampleModal01" data-id="{{$service->id}}" class="btn btn-danger serviceBtn w-100">Decline</button>
                                        </div>
                                      
                                         
                                         <div class="col-md-8">
                                            <img src="{{asset('images/'.$service->image)}}" style="width: 100%;height:450px;" class="rounded float-right" alt="service">
                                         </div>
                                     </div>   

                                     </div>
                                    
                                    
                                     
                                     <hr>
                                  </div>
                              </div>
                          </div>
                          </div>
                        <div class="">
                        
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
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <!-- <footer class="footer footer-static footer-light navbar-border">
      <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright  &copy; 2018 <a class="text-bold-800 grey darken-2" href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">PIXINVENT </a>, All rights reserved. </span><span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Hand-crafted & Made with <i class="ft-heart pink"></i></span></p>
    </footer> -->
  <!-- Modal -->
  <div class="modal fade" id="exampleModal01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
         <div class="">
            <h3 class="modal-title justify-content-center" id="exampleModalLabel">Do You Really Want to Decline?</h3>
         </div>
          <button class="btn" data-bs-dismiss="modal"><i class="fas fa-times-circle"></i></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{url('/service_decline')}}" method="POST">
                      @csrf
                      <input type="hidden" name="service_id" id="service_id">
                      <div class="form-group row">
                        <div class="mt-1 d-flex justify-content-center">
                          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>&nbsp;&nbsp;
                          <button type="submit" class="btn btn-primary">Yes</button>
                        </div>
                      </div>
                      </form>
                </div>
            </div>
        </div>
        <div class="modal-footer">
        
        </div>
      </div>
    </div>
  </div>
  <script>
    $(document).ready(function(){
        $('.serviceBtn').click(function(){
           var id=$(this).attr('data-id');
               $('#service_id').val(id);
           
        });
    });
  
  </script>
 
@endsection