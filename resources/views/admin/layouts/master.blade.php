 <!-- Developed by shahrukh siddiqui -->
 <!DOCTYPE html>
 <html lang="en">
 
 <head>
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="csrf-token" content="{{ csrf_token() }}" />
   <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('public/admin/img/apple-icon.png') }}">
   <link rel="icon" type="image/png" href="{{ asset('public/admin/img/favicon.png')}}">
   <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous">
  </script>
   <title>
     Perfume Dashboard 
   </title>
   <!--     Fonts and icons     -->
   <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
   <!-- Nucleo Icons -->
   <link href="{{ asset('public/admin/css/nucleo-icons.css')}}" rel="stylesheet" />
   <link href="{{ asset('public/admin/css/nucleo-svg.css')}}" rel="stylesheet" />
   <link href="{{ asset('public/admin/css/dataTables.min.css')}}" rel="stylesheet" />
   <!-- Font Awesome Icons -->
   <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  
   <!-- Material Icons -->
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
   <!-- CSS Files -->
   <link id="pagestyle" href="{{ asset('public/admin/css/material-dashboard.css?v=3.0.4')}}" rel="stylesheet" />
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.2.0/css/all.min.css">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.2.0/js/all.min.js">
   <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <script src="{{ asset('public/admin/js/jquery.dataTables.min.js')}}"></script>
   @stack('css')
 </head>
 
 <body class="g-sidenav-show  bg-gray-200">

    @include('admin.layouts.sidebar')

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ps ps--active-y">
        @include('admin.layouts.header')

        @yield('content')
    
        @include('admin.layouts.footer')

    </div>

    </main>

 <!--   Core JS Files   -->
 <script src="{{ asset('public/admin/js/core/popper.min.js')}}"></script>
 <script src="{{ asset('public/admin/js/core/bootstrap.min.js')}}"></script>
 <script src="{{ asset('public/admin/js/plugins/perfect-scrollbar.min.js')}}"></script>
 <script src="{{ asset('public/admin/js/plugins/smooth-scrollbar.min.js')}}"></script>
 <script src="{{ asset('public/admin/js/plugins/chartjs.min.js')}}"></script>
 <script async defer src="https://buttons.github.io/buttons.js')}}"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('public/admin/js/material-dashboard.min.js?v=3.0.4')}}"></script>



@stack('script')
</body>
</html>

