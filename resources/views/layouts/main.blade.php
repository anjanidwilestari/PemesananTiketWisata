<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>
        E-Wisata || 
        @yield('title')
      </title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{ asset('style/css/bootstrap.min.css') }}">
      <!-- style css -->
      <link rel="stylesheet" href="{{ asset('style/css/style.css') }}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{ asset('style/css/responsive.css') }}">
      <!-- fevicon -->
      <link rel="icon" href="{{ asset('style/images/fevicon.png') }}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ asset('style/css/jquery.mCustomScrollbar.min.css') }}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>  
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      {{-- <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="{{ asset('style/images/loading.gif')}}" alt="#" /></div>
      </div>
      <!-- end loader --> --}}
      <!-- header -->
      @include('layouts.header')
      <!-- end header -->

      @yield('content')

      
      
      

      <!--  footer -->
      @include('layouts.footer')
      <!-- end footer -->
      
      @include('sweetalert::alert')
      
      @yield('js')
      
      <!-- Javascript files-->
      <script src="{{ asset('style/js/jquery.min.js')}}"></script>
      <script src="{{ asset('style/js/popper.min.js')}}"></script>
      <script src="{{ asset('style/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{ asset('style/js/jquery-3.0.0.min.js')}}"></script>
      <!-- sidebar -->
      <script src="{{ asset('style/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="{{ asset('style/js/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>

