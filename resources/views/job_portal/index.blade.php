@extends('user_layouts.app')
@section('title', 'Job Portal')
@section('content')
  <body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar main-content-01" data-open="click" data-menu="vertical-menu" data-col="2-columns">

  
   
    <!-- fixed-top-->
@include('user_layouts.partials.navbar')
   

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
            <div class="row mt-3">
                <div class="col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">ALL Jobs</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Recently Viewed</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">My Jobs</button>
                                        </li>
                                      </ul>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-0">
                <div class="col-md-12">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                          <div class="row">
                            <div class="col-md-12">
                                <div class="row mt-1">
                                    <div class="col-md-8">
                                       @foreach ($jobs as $item)
                                           <div class="card">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="mt-1">
                                                                <h2>{{$item->title}} <span style="color: lightblue;font-size: 11px;border: 1px solid lightblue;border-radius: 10px;padding: 1px 4px;">New</span></h2>
                                                                <span>{{$item->job_type}}</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                <span>{{$item->job_location}}</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                <span>{{$item->created_at->diffForHumans()??''}}</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                <span><i class="fa fa-heart" style="font-size: 13px;"></i></span>
                                                            </div>
                                                            <div class="mt-2">
                                                                <b>Description</b>
                                                                <p>{{$item->description}}</p>
                                                                <div class="mt-2">
                                                                   {{-- <form action="/job_apply" method="post">
                                                                    @csrf
                                                                    <input type="hidden" name="job_id" value="{{$item->id}}">
                                                                    <button class="btn btn-primary" type="submit">Apply</button>
                                                                   </form> --}}
                                                                    <a href="/job_application/{{$item->id}}" class="btn btn-primary"> Apply Now</a>
                            
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                        @endforeach 
                                    </div>
                                    <div class="col-md-4">
                                      <div class="mt-1">
                                        <img src="./app-assets/images/job1.jpg" class="img-fluid" alt="">
                                      </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
    
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                          <div class="row">
                            <div class="col-md-12">
                                <div class="row mt-1">
                                    <div class="col-md-8">
                                        @foreach ($jobs as $item)
                                           <div class="card">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="mt-1">
                                                                <h2>{{$item->title}} <span style="color: lightblue;font-size: 11px;border: 1px solid lightblue;border-radius: 10px;padding: 1px 4px;">New</span></h2>
                                                                <span>{{$item->job_type}}</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                <span>{{$item->job_location}}</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                <span>{{$item->created_at->diffForHumans()??''}}</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                <span><i class="fa fa-heart" style="font-size: 13px;"></i></span>
                                                            </div>
                                                            <div class="mt-2">
                                                                <b>Description</b>
                                                                <p>{{$item->description}}</p>
                                                                <div class="mt-2">
                                                                   {{-- <form action="/job_apply" method="post">
                                                                    @csrf
                                                                    <input type="hidden" name="job_id" value="{{$item->id}}">
                                                                    <button class="btn btn-primary" type="submit">Apply</button>
                                                                   </form>
                             --}}                                  <a href="/job_application/{{$item->id}}" class="btn btn-primary"> Apply Now</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                        @endforeach
                                    </div>
                                    <div class="col-md-4">
                                      <div class="mt-1">
                                        <img src="./app-assets/images/job1.jpg" class="img-fluid" alt="">
                                      </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                          <div class="row">
                            <div class="col-md-12">
                                <div class="row mt-1">
                                    <div class="col-md-8">
                                         @foreach ($my_jobs as $item)
                                           <div class="card">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="mt-1">
                                                                <h2>{{$item->job->title??''}} <span style="color: lightblue;font-size: 11px;border: 1px solid lightblue;border-radius: 10px;padding: 1px 4px;">New</span></h2>
                                                                <span>{{$item->job->job_type??""}}</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                <span>{{$item->job->job_location??''}}</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                <span>{{$item->job->created_at->diffForHumans()??''}}</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                <span><i class="fa fa-heart" style="font-size: 13px;"></i></span>
                                                            </div>
                                                            <div class="mt-2">
                                                                <b>Description</b>
                                                                <p>{{$item->job->description}}</p>
                                                                <div class="mt-2">
                                                                   {{-- <form action="/job_apply" method="post">
                                                                    @csrf
                                                                    <input type="hidden" name="job_id" value="{{$item->job->id}}">
                                                                    <button class="btn btn-primary" type="submit">Apply</button>
                                                                   </form> --}}
                                                                   <a href="/job_application/{{$item->job->id}}" class="btn btn-primary"> Apply Now</a>
                            
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                        @endforeach
                                    </div>
                                    <div class="col-md-4">
                                      <div class="mt-1">
                                        <img src="./app-assets/images/job1.jpg" class="img-fluid" alt="">
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
  @endsection
   