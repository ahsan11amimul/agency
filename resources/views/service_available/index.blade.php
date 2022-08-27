@extends('user_layouts.app')
@section('title', 'Service Available')
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


  <!-- Sales stats -->
  <div class="row mt-3">
    <div class="col-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mt-1">
                                <h2>All Services</h2>
                                <p>These are all of the services Divisions provides</p>
                            </div>
                            <div class="mt-3">
                                <ul>
                                    @foreach ($services as $item)
                                       <li>{{$item->name}}</li> 
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mt-1">
                                <img src="./app-assets/images/service1.jpg" class="img-fluid" alt="">
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