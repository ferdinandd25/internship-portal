<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Internship Portal</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset ('lte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset ('lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset ('lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset ('lte/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset ('lte/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset ('lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset ('lte/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset ('lte/plugins/summernote/summernote-bs4.min.css')}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
  <img class="animation__shake" src="{{ asset ('img/logo-CBN.png') }}" alt="CBNLogi" height="80" width="80">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color: #04212e; color: #ffffff;">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" style="color: #ffffff;"  data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>   
      </li>
    </ul>


    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
        <li class="nav-item">
        <a class="nav-link" style="color:#ffffff;" href="{{ route('addproject') }}" role="button">
          <i class="fas fa-plus-square"></i>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" style="color:#ffffff;" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge badge-danger">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">3 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="{{ route('projectreq') }}" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 1 Project Request
          </a>
          <div class="dropdown-divider"></div>
          <a href="{{ route('partnereq') }}" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 2 Partnership Request
          </a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('img/default/logo-white.svg') }}" alt="" class="brand-image img-circle elevation-3" style="opacity:.9" >
      <span class="brand-text font-weight-light">Internship</span>
    </a>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open" >
            <ul class="nav nav-treeview">
              <li class="nav-item mb-3">
                <a href="{{ route('univ') }}" class="nav-link">
                  <i class="nav-icon fas fa-user-circle"></i>
                  <p>List Of Universities</p>
                </a>
          </li>
          <li class="nav-item mb-3">
            <a href="{{ route('project') }}" class="nav-link">
              <i class="nav-icon fas fa-user-graduate"></i>
              <p>
                Intern Project
              </p>
            </a>
          </li>
          <li class="nav-item mb-3">
            <a href="{{ route('selection') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Student Selection
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
@yield('contentA')
  <!-- /.content-wrapper -->
  <footer class="main-footer" style="background-color: #04212e; color: #ffffff;">
    <strong>Copyright &copy; 2023 <a href="https://cbn.id">Cyberindo Aditama</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <a href="https://www.facebook.com/di.CBN/" target="_blank" rel="noopener noreferrer" title="CBN Facebook" style="font-size: 20px; margin-right: 20px;">
          <span class="ion-social-facebook"></span>
        <a href="https://www.instagram.com/di_cbn/" target="_blank" rel="noopener noreferrer" title="CBN Instagram" style=" font-size: 20px; margin-right: 20px;">
          <span class="ion-social-instagram-outline"></span></a>
        <a href="https://www.youtube.com/channel/UC1XXn3GqPIqpBPPLMNLsPTg" target="_blank" rel="noopener noreferrer" title="CBN Youtube" style="font-size: 20px; margin-right: 20px;">
          <span class="ion-social-youtube"></span></a>
      {{-- di<b>CBN</b>  --}}
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset ('lte/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset ('lte/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset ('lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{ asset ('lte/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{ asset ('lte/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{ asset ('lte/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{ asset ('lte/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset ('lte/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{ asset ('lte/plugins/moment/moment.min.js')}}"></script>
<script src="{{ asset ('lte/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset ('lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{ asset ('lte/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset ('lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset ('lte/dist/js/adminlte.js')}}"></script>
{{-- <!-- AdminLTE for demo purposes -->
<script src="{{ asset ('lte/dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset ('lte/dist/js/pages/dashboard.js')}}"></script> --}}
</body>
</html>
