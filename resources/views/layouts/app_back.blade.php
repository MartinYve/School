<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
      <!-- Favicon -->
<!-- Favicon -->
     
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{asset('back/css/bootstrap.min.css')}}">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="{{asset('back/css/typography.css')}}">
      <!-- Style CSS -->
      <link rel="stylesheet" href="{{asset('back/css/style.css')}}">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="{{asset('back/css/responsive.css')}}">


      <link rel="stylesheet" href="{{asset('./back/js/chartist/chartist.min.css')}}">

</head>
<body>

<div id="loading">
         <div id="loading-center">
         </div>
      </div>
      <!-- loader END -->
      <!-- Wrapper Start -->
      <div class="wrapper">
        @include('includes.header')
        <main class="py-4">
            @yield('content')
        </main>
      </div>

      @include('sweetalert::alert')
        <script src="{{asset('back/js/jquery.min.js')}}"></script>
      <script src="{{asset('back/step.js')}}"></script>
      <script src="{{asset('back/js/popper.min.js')}}"></script>
      <script src="{{asset('back/js/bootstrap.min.js')}}"></script>
      <!-- Appear JavaScript -->
      <script src="{{asset('back/js/jquery.appear.js')}}"></script>
      <!-- Countdown JavaScript -->
      <script src="{{asset('back/js/countdown.min.js')}}"></script>
      <!-- Counterup JavaScript -->
      <script src="{{asset('back/js/waypoints.min.js')}}"></script>
      <script src="{{asset('back/js/jquery.counterup.min.js')}}"></script>
      <!-- Wow JavaScript -->
      <script src="{{asset('back/js/wow.min.js')}}"></script>
      <!-- Apexcharts JavaScript -->
      <script src="{{asset('back/js/apexcharts.js')}}"></script>
      <!-- Slick JavaScript -->
      <script src="{{asset('back/js/slick.min.js')}}"></script>
      <!-- Select2 JavaScript -->
      <script src="{{asset('back/js/select2.min.js')}}"></script>
      <!-- Magnific Popup JavaScript -->
      <script src="{{asset('back/js/jquery.magnific-popup.min.js')}}"></script>
      <!-- Smooth Scrollbar JavaScript -->
      <script src="{{asset('back/js/smooth-scrollbar.js')}}"></script>
      <!-- lottie JavaScript -->
      <script src="{{asset('back/js/lottie.js')}}"></script>
      <!-- am core JavaScript -->
      <script src="{{asset('back/js/core.js')}}"></script>
      <!-- am charts JavaScript -->
      <script src="{{asset('back/js/charts.js')}}"></script>
      <!-- am animated JavaScript -->
      <script src="{{asset('back/js/animated.js')}}"></script>
      <!-- am kelly JavaScript -->
      <script src="{{asset('back/js/kelly.js')}}"></script>
      <!-- Morris JavaScript -->
      <script src="{{asset('back/js/morris.js')}}"></script>
      <!-- am maps JavaScript -->
      <script src="{{asset('back/js/maps.js')}}"></script>
      <!-- am worldLow JavaScript -->
      <script src="{{asset('back/js/worldLow.js')}}"></script>
      <!-- ChartList Js -->
      <script src="{{asset('back/js/chartist/chartist.min.js')}}"></script>
      <!-- Chart Custom JavaScript -->
      <script async src="{{asset('back/js/chart-custom.js')}}"></script>
      <!-- Custom JavaScript -->
      <script src="{{asset('back/js/custom.js')}}"></script>
      
</body>
</html>
