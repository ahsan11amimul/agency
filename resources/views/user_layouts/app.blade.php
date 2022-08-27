<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>
      @yield('title','Lyonn Agency')
    </title>
    <script src="https://kit.fontawesome.com/c2605b0aa5.js" crossorigin="anonymous"></script>
    
    <link rel="apple-touch-icon" href="./app-assets/images/logo-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="./app-assets/images/logo-icon.png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CMuli:300,400,500,700" rel="stylesheet">
    
    
    <!-- Bootstrap Files-->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" 
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/vendors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/charts/morris.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/extensions/unslider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/weather-icons/climacons.min.css')}}">
    <!-- END VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/charts/chartist.css')}}">
    <!-- BEGIN ROBUST CSS-->

    <!-- <link rel="stylesheet" type="text/css" href="./app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/core/colors/palette-gradient.css')}}"> -->

    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/app.css')}}">
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/calendars/clndr.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/fonts/meteocons/style.min.css')}}">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <!-- END Custom CSS-->
     <style>
      body.vertical-layout.vertical-menu.menu-expanded .content, body.vertical-layout.vertical-menu.menu-expanded .footer {
    margin-left: 0px;
}
body.vertical-layout.vertical-menu.menu-expanded .main-menu {
    width: 0px;
}
      .dropdown-toggle::after {
    content: '' !important;
}

.nav.nav-pills .nav-item .nav-link.active {
    color: #fff;
    background-color: #203468!important;
}
.nav .nav-item .nav-link {
    color: #203468;
    display: block;
}
.check_1 label, .check_1 p{
  font-size: 9px;
}
.writing-1,.writing-2,.writing-3{
  color: red;
  font-size: 13px;
}
.writing-1{
  margin-left: 20px;
}
.writing-1::before{
  content: '';
  display: block;
  width: 2px;
  height: 50px;
  position: relative;
  left: 90px;
  background-color: red;
}
.writing-2::before{
  content: '';
  display: block;
  width: 2px;
  height: 50px;
  position: relative;
  left: 40px;
  background-color: red;
}
.writing-3::after{
  content: '';
  display: block;
  width: 2px;
  height: 160px;
  position: absolute;
  left: 40px;
  background-color: red;
}
.writing-3::before{
  content: '';
  display: block;
  height: 2px;
  width: 120px;
  position: absolute;
  top: 226px;
  left: 40px;
  background-color: red;
}
@media(max-width: 768px)
{
  .pa-10{
    padding: 0!important;
  }
  .check_1 label, .check_1 p{
  font-size: 8px;
}
.writing-1,.writing-2{
  color: red;
  font-size: 9px;
}
.writing-3{
  color: red;
  font-size: 9px;
  margin-left: -40px;
}
.writing-1::before{
  content: '';
  display: block;
  width: 2px;
  height: 50px;
  position: relative;
  left: 60px;
  background-color: red;
}
.writing-2::before{
  content: '';
  display: block;
  width: 2px;
  height: 50px;
  position: relative;
  left: 30px;
  background-color: red;
}
.writing-3::after{
  content: '';
  display: block;
  width: 2px;
  height: 165px;
  position: absolute;
  left: -20px;
  background-color: red;
}
.writing-3::before{
  content: '';
  display: block;
  height: 2px;
  width: 40px;
  position: absolute;
  top: 227px;
  left: -20px;
  background-color: red;
}
.calc .text
{
  border: 1px solid lightgray;
  width: 210px;
  font-size: 25px;

}
.calc .button
{
  border: 1px solid lightgray;
  background: #f2f2f2;
  width: 50px;
  height: 50px;
  font-size: 25px;
  cursor: pointer;
}
.table-bordered 
{
    background: aquamarine;
}
ol li, ul li, dl li 
{
    color: brown;
    list-style: none;
}
}
</style>
  </head>
   @yield('content')
    {{-- <footer class="footer footer-static footer-light navbar-border">
      <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright  &copy; 2018 <a class="text-bold-800 grey darken-2" href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">PIXINVENT </a>, All rights reserved. </span><span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Hand-crafted & Made with <i class="ft-heart pink"></i></span></p>
    </footer> --}}

    <!-- BEGIN VENDOR JS-->
    <script src="{{asset('app-assets/vendors/js/vendors.min.js')}}"></script>
   
    <script src="{{asset('app-assets/vendors/js/charts/chartist.min.js')}}"></script>


    <script src="{{asset('app-assets/vendors/js/charts/raphael-min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/charts/morris.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/charts/chart.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/extensions/moment.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/extensions/underscore-min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/extensions/clndr.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/charts/echarts/echarts.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/extensions/unslider-min.js')}}"></script>
    <!-- BEGIN ROBUST JS-->
    <script src="{{asset('app-assets/js/core/app-menu.js')}}"></script>
    <script src="{{asset('app-assets/js/core/app.js')}}"></script>
    <!-- END ROBUST JS-->
   

        <script src="{{asset('app-assets/js/scripts/charts/chartist/pie/pie.js')}}"></script>
        <script src="{{asset('app-assets/js/scripts/charts/chartist/pie/custom-labels.js')}}"></script>
        <script src="{{asset('app-assets/js/scripts/charts/chartist/pie/gauge.js')}}"></script>
        <script src="{{asset('app-assets/js/scripts/charts/chartist/pie/donut.js')}}"></script>
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- <script src="./app-assets/js/scripts/pages/dashboard-fitness.js')}}"></script> -->
    <script src="{{asset('app-assets/js/scripts/pages/dashboard-ecommerce.js')}}"></script>
    <script>
  @if(Session::has('message'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.success("{{ session('message') }}");
  @endif

  @if(Session::has('error'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.error("{{ session('error') }}");
  @endif

  @if(Session::has('info'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.info("{{ session('info') }}");
  @endif

  @if(Session::has('warning'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.warning("{{ session('warning') }}");
  @endif
</script>
    <!-- END PAGE LEVEL JS-->
    
  </body>
</html>