<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>
        @yield('title','Admin Dashboard')
    </title>
    <script src="https://kit.fontawesome.com/c2605b0aa5.js" crossorigin="anonymous"></script>
    
    <link rel="apple-touch-icon" href="./app-assets/images/logo-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="./app-assets/images/logo-icon.png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CMuli:300,400,500,700" rel="stylesheet">
    
    
    <!-- Bootstrap Files-->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/vendors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/charts/morris.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/extensions/unslider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/weather-icons/climacons.min.css')}}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN ROBUST CSS-->
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
    <style media="screen">
  @media (max-width: 767.98px){
.header-navbar .navbar-header .navbar-brand {
    margin-top: -15px;
    position:initial!important;
    /* top: 0; */
    /* left: 50%; */
    -webkit-transform: translate(-50%, 0);
    -moz-transform: translate(-50%, 0);
    -ms-transform: translate(-50%, 0);
    -o-transform: translate(-50%, 0);
    /* transform: translate(-50%, 0); */
}
        }
        @media (max-width: 767.98px){
.navbar-dark .navbar-header .navbar-nav .nav-link, .navbar-semi-dark .navbar-header .navbar-nav .nav-link {
    display: block!important;
    margin-left: 20px;
    margin-top: -10px;
}
.font-large-1 {
    font-size: 3rem !important;
}
        }

@media (max-width: 767.98px){
.header-navbar .navbar-header .open-navbar-container i {
    font-size: 2.5rem;
    margin-right: 20px;
}
}


html body.fixed-navbar {
    padding-top: 0!important;
}
     .dropdown-custom {
         position: relative;
         display: inline-block;
     }
     .dropdown-content-custom {
         display: none;
         position: absolute;
         background-color: #f1f1f1;
         min-width: 160px;
         box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
         z-index: 1;
     }
     .dropdown-content-custom a {
         color: black;
         padding: 12px 16px;
         text-decoration: none;
         display: block;
     }
     .dropdown-content-custom a:hover {background-color: #ddd}
 
     .dropdown-custom:hover .dropdown-content-custom {
         display: block;
     }
     .dropdown-custom:hover .dropbtn {
         background-color: #3e8e41;
     }
     .selectOptionShowing{
       display: none
     }
     @media (max-width: 764px) {
       .hidingThisForMobile { display: none; }
       .selectOptionShowing { display: inline-block; }
     }
     .dropdown-submenu {
         position: relative;
     }
 
     .dropdown-submenu .dropdown-menu {
         top: 0;
         left: 50%;
         margin-top: -1px;
     }
 
     .content-wrapper{
       padding-top: 23px;
     }
      body.vertical-layout.vertical-menu.menu-expanded .content, body.vertical-layout.vertical-menu.menu-expanded .footer {
    margin-left: 0px;
}
body.vertical-layout.vertical-menu.menu-expanded .main-menu {
    width: 0px;
}
      .dropdown-toggle::after {
    content: '' !important;
}
    </style>
  </head>
@yield('content')

  
    
    <script src="{{asset('app-assets/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
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
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src="{{asset('app-assets/js/core/app-menu.js')}}"></script>
    <script src="{{asset('app-assets/js/core/app.js')}}"></script>
    <!-- END ROBUST JS-->
    <script src="{{asset('app-assets/js/scripts/charts/chartjs/pie-doughnut/pie.js')}}"></script>
    <script src="{{asset('app-assets/js/scripts/charts/chartjs/pie-doughnut/pie-simple.js')}}"></script>
    <script src="{{asset('app-assets/js/scripts/charts/chartjs/pie-doughnut/doughnut.js')}}"></script>
    <script src="{{asset('app-assets/js/scripts/charts/chartjs/pie-doughnut/doughnut-simple.js')}}"></script>
        <!-- BEGIN PAGE LEVEL JS-->
        <script src="{{asset('app-assets/js/scripts/charts/chartjs/line/line.js')}}"></script>
        <script src="{{asset('app-assets/js/scripts/charts/chartjs/line/line-area.js')}}"></script>
        <script src="{{asset('app-assets/js/scripts/charts/chartjs/line/line-logarithmic.js')}}"></script>
        <script src="{{asset('app-assets/js/scripts/charts/chartjs/line/line-multi-axis.js')}}"></script>
        <script src="{{asset('app-assets/js/scripts/charts/chartjs/line/line-skip-points.js')}}"></script>
        <script src="{{asset('app-assets/js/scripts/charts/chartjs/line/line-stacked-area.js')}}"></script>
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{asset('app-assets/js/scripts/pages/dashboard-fitness.js')}}"></script>
    <script src="{{asset('app-assets/js/scripts/pages/dashboard-ecommerce.js')}}"></script>
    <!-- END PAGE LEVEL JS-->
    
  </body>
</html>
