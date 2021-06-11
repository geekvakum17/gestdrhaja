<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Gesdrhaja</title>
  <!-- base:css -->
  <link rel="stylesheet" href="{{asset('assets/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{asset ('assets/vendors/jsgrid/jsgrid.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/jsgrid/jsgrid-theme.min.css') }}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('assets/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('assets/images/aej.png')}}" />
</head>

<body class="sidebar-light">

<div class="container-scroller">
     <!-- partial -->
     <div class="container-fluid page-body-wrapper">

        @include('layouts.header')

        @include('layouts.nav')


        @yield('content')



         <!-- main-panel ends -->
    </div>
 <!-- page-body-wrapper ends -->
</div>


@include('layouts.footer')
  <!-- base:js -->
  <script src="{{asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
   <!-- Plugin js for this page-->
   <script src="{{asset('assets/vendors/chart.js/Chart.min.js')}}"></script>
   <!-- End plugin js for this page-->
  <!-- Plugin js for this page-->

  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{asset('assets/js/off-canvas.js')}}"></script>
  <script src="{{asset('assets/js/hoverable-collapse.js') }}"></script>
  <script src="{{asset('assets/js/template.js')}}"></script>
  <script src="{{asset('assets/js/settings.js')}}"></script>
  <script src="{{asset('assets/js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="{{ asset('assets/vendors/jsgrid/jsgrid.min.js') }}"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="{{asset('assets/js/dashboard.js') }}"></script>
  <script src="{{asset('assets/js/modal-demo.js') }"></script>
  <!-- End custom js for this page-->
</body>

</html>

