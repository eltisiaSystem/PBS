<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>{//{$title}} | PI2B ITI</title>
  <link href="{{asset('eBusiness/img/logo.ico')}}" rel="icon">
  <link href="{{asset('eBusiness/img/logo.ico')}}" rel="apple-touch-icon">

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <!-- Theme style -->
  <link rel="stylesheet"href="{{asset('lte/dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- jQuery -->
  <script src="{{ asset('lte/plugins/jquery/jquery.min.js')}}"></script>
  <script>
    $( function() {
      $( "#datepicker" ).datepicker();
    } );
  </script>

</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    @include('admin/header');

    <!-- Main Sidebar Container -->
    @include('admin/sidebar')
    
    <!-- Main Footer -->
    @include('admin/footer')
    
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- Bootstrap 4 -->
  <script src="{{ asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('lte/dist/js/adminlte.min.js')}}"></script>
  <!-- Chart.js -->
  <script src="{{ asset('lte/plugins/chart.js/Chart.js') }}"></script>
</body>
</html>
