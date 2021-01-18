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

  <title>N"D Store</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{url('public')}}/assets2/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('public')}}/assets2/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    @include('template.section.header')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('template.section.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <div class="col-md-12" style="padding:10px 100px 0 100px">
        @include('template.utils.notif')
      </div>
      @yield('content')
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
      <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
      </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    @include('template.section.footer')
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="{{url('public')}}/assets2/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="{{url('public')}}/assets2/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="{{url('public')}}/assets2/dist/js/adminlte.min.js"></script>

  <!-- Data Tables -->
  <script src="{{url('public')}}/assets2/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="{{url('public')}}/assets2/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="{{url('public')}}/assets2/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="{{url('public')}}/assets2/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="{{url('public')}}/assets2/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  @stack('script')
  <script>
    $(function() {
      $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
</body>

</html>