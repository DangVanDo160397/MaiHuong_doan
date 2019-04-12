<!DOCTYPE html>
<html>
<head>
@include('partials.head')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  @include('partials.header')
  <!-- Left side column. contains the logo and sidebar -->
  @include('partials.left-side')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.page-header')

    <!-- Main content -->
    @yield('content')
   
    <!-- /.content -->

  </div>
  @include('partials.footer')


  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

@include('partials.scripts')
</body>
</html>
