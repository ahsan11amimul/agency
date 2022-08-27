@extends('user_layouts.app')
@section('title', 'Dashboard')
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
          <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-3 col-sm-12 border-right-blue-grey border-right-lighten-5">
                                    <div class="pb-1">
                                        @php
                                            $total=0;
                                            foreach($my_invoices as $order){
                                                $total+=$order->amount;
                                            }
                                        @endphp
                                        <div class="clearfix mb-1">
                                            <i class="icon-star font-large-1 blue-grey float-left mt-1"></i>
                                            <span class="font-large-2 text-bold-300 info float-right">${{$total}}</span>
                                        </div>
                                        <div class="clearfix">
                                            <span class="text-muted">Invoices</span>
                                            <span class="info float-right"><i class="ft-arrow-up info"></i> {{$my_invoices->count()}}</span>
                                        </div>
                                    </div>
                                    <div class="progress mb-0" style="height: 7px;">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-12 border-right-blue-grey border-right-lighten-5">
                                    <div class="pb-1">
                                        <div class="clearfix mb-1">
                                            <i class="icon-user font-large-1 blue-grey float-left mt-1"></i>
                                            <span class="font-large-2 text-bold-300 danger float-right">423</span>
                                        </div>
                                        <div class="clearfix">
                                            <span class="text-muted">Ready to be Invoiced</span>
                                            <span class="danger float-right"><i class="ft-arrow-up danger"></i> 5</span>
                                        </div>
                                    </div>
                                    <div class="progress mb-0" style="height: 7px;">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-12 border-right-blue-grey border-right-lighten-5">
                                    <div class="pb-1">
                                        <div class="clearfix mb-1">
                                            <i class="icon-shuffle font-large-1 blue-grey float-left mt-1"></i>
                                            <span class="font-large-2 text-bold-300 success float-right">61</span>
                                        </div>
                                        <div class="clearfix">
                                            <span class="text-muted">Draft Invoices</span>
                                            <span class="success float-right"><i class="ft-arrow-down success"></i> 2</span>
                                        </div>
                                    </div>
                                    <div class="progress mb-0" style="height: 7px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-12">
                                    <div class="pb-1">
                                        <div class="clearfix mb-1">
                                            <i class="icon-wallet font-large-1 blue-grey float-left mt-1"></i>
                                            <span class="font-large-2 text-bold-300 warning float-right">687</span>
                                        </div>
                                        <div class="clearfix">
                                            <span class="text-muted">Disputed Invoices</span>
                                            <span class="warning float-right"><i class="ft-arrow-up warning"></i> 43</span>
                                        </div>
                                    </div>
                                    <div class="progress mb-0" style="height: 7px;">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
               

              <!-- Map Based Selling -->
<div class="row">
  <div class="col-12">
      <div class="">
          <div class="card-content">
              <div class="row">
                  <div class="col-xl-6 col-lg-6">
                    <div class="card box-shadow-0">

                        <div class="card-body">
                            <h4 class="card-title py-1 text-center">Over All</h4>
                            <div class="">

                              <div class="row">
                                  <div class="col-xl-12 col-lg-12 col-sm-12">
                                      <div class="media">
                                          <div class="media-body">
                                              <span>Jobs Applied <i class="ft-arrow-up success"></i> <span class="teal accent-3">6</span></span>
                                              <h2 class="mb-0">{{$my_jobs->count()}}</h2>
                                          </div>
                                          <div class="media-right media-top pr-2">
                                              <i class="ft-trending-up font-large-1"></i>
                                          </div>
                                      </div>
                                      <div id="map-total-profit" class="mt-3"></div>
                                  </div>
                                  <div class="col-xl-12 col-lg-4 col-sm-12">
                                      <div class="media">
                                          <div class="media-body">
                                              <span>New Jobs <i class="ft-arrow-down deep-orange accent-3"></i> <span class="deep-orange accent-3">4</span></span>
                                              <h2 class="mb-0">{{$todays_jobs->count()}}</h2>
                                          </div>
                                          <div class="media-right media-top pr-2">
                                              <i class="fa fa-building-o font-large-1"></i>
                                          </div>
                                      </div>
                                      <div id="map-total-orders" class="mt-3"></div>
                                  </div>
                                  <div class="col-xl-12 col-lg-4 col-sm-12">
                                      <div class="media">
                                          <div class="media-body">
                                              <span>Pending Application </span>
                                              <h2 class="mb-0">{{$pending_jobs->count()}}</h2>
                                          </div>
                                          <div class="media-right media-top pr-2">
                                              <i class="fa fa-newspaper-o font-large-1"></i>
                                          </div>
                                      </div>
                                      <div id="map-total-orders" class="mt-3"></div>
                                  </div>
                                  <div class="col-xl-12 col-lg-4 col-sm-12">
                                      <div class="sales pr-2">
                                          <div class="sales-today mb-1">
                                              <p class="m-0">Today <span class="sucess float-right"><i class="ft-arrow-up success"></i>{{$todays_jobs->count()}}</span></p>
                                              <div class="progress mt-1 mb-0" style="height: 7px;">
                                                  <div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                              </div>
                                          </div>
                                          <div class="sales-yesterday">
                                              <p class="m-0">Yesterday <span class="deep-orange accent-2 float-right"><i class="ft-arrow-down deep-orange accent-3"></i>{{$yestarDays_jobs->count()}}</span></p>
                                              <div class="progress mt-1 mb-0" style="height: 7px;">
                                                  <div class="progress-bar bg-deep-orange" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6">
                  <div class="card">
                    <div class="p-3">
                      <div id="pie-chart" class="height-400"></div>
                     </div>
                     <div id="map-total-orders" class="mt-1"></div>
                  </div>
 
                   </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!--/ Map Based Selling -->


  <div class="row mt-5">
   
   
      <div class="col-md-3">
       <div class="mt-1">
           <div class="card card2" style="background: #5f6cda;color: #fff!important;">
           <!-- <div class="card card2" style="background: lightblue;"> -->
            <div class="btn-group p-3" style="margin: 0;">
                       <a href="" style="padding: 5px;width: 100%;height: 90px;background: transparent;color: #000;font-weight: bold;border: none;" class="btn btn-secondary dropdown-toggle" type="button" >
                         <i style="font-size: 35px;" class="fa fa-newspaper-o mb-1"></i> 
                         <!-- <h5 style="text-align: center;color: #fff!important;"></h5> -->
                         <h5 style="text-align: center;color: #fff!important;">Pending Jobs Application</h5>
                       </a>
                     </div>
         </div>
         </div>
      </div>
      <div class="col-md-3">
       <div class="mt-1">
           <div class="card card2" style="background: #171E73;">
           <!-- <div class="card card2" style="background: lightblue;"> -->
            <div class="btn-group p-3" style="margin: 0;">
                       <a href="" style="padding: 10px;width: 100%;height: 90px;background: transparent;color: #000;font-weight: bold;border: none;" class="btn btn-secondary dropdown-toggle" type="button" >
                         <i style="font-size: 35px;" class="fa fa-building-o mb-1"></i> 
                         <!-- <h5 style="text-align: center;color: #fff!important;"></h5> -->
                         <h5 style="text-align: center;color: #fff!important;">No New Oppertunities</h5>
                       </a>
                     </div>
         </div>
         </div>
      </div>
    <div class="col-md-3">
     <div class="mt-1">
      <div class="card p-3 card2" style="background: #171E73;color: #000!important;">
        <!-- <div class="card card2" style="background: lightblue;"> -->
         <div class="btn-group p-0" style="margin: -4px!important;">
                    <a  style="padding: 0px 25px;width: 100%;height: 95px;background: transparent;color: #000;font-weight: bold;border: none;" class="btn btn-secondary dropdown-toggle" type="button" >
                       <h5 style="text-align: center;color: #fff!important;">Manage Your Work Orders</h5>
                       <h5 style="text-align: center;color: #fff!important;">and Customer Communication</h5>
                      <h5 style="text-align: center;color: #fff!important;">Unread Messages</h5>
                    </a>
                  </div>
      </div>
     </div>
    </div>
    <div class="col-md-3">
   <div class="mt-1">
    <div class="card p-3 card2" style="background: #5f6cda;">
      <!-- <div class="card card2" style="background: lightblue;"> -->
       <div class="btn-group p-0" style="margin: -4px 0!important;">
                  <a style="padding: 0px 25px;width: 100%;height: 95px;background: transparent;color: #000;font-weight: bold;border: none;" class="btn btn-secondary dropdown-toggle" type="button" >
                    <h1 style="text-align: center;color: #fff!important;">0</h1>
                    <h5 style="text-align: center;color: #fff!important;">Your Average Score</h5>
                  </a>
                </div>
    </div>
   </div>
    </div>

    </div>
    <div class="row">
       
    </div>

        </div>
      </div>
    </div>
@endsection
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <!-- <footer class="footer footer-static footer-light navbar-border">
      <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright  &copy; 2018 <a class="text-bold-800 grey darken-2" href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">PIXINVENT </a>, All rights reserved. </span><span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Hand-crafted & Made with <i class="ft-heart pink"></i></span></p>
    </footer> -->

