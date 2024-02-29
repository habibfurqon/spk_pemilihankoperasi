<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistem Pendukung Keputusan</title>
  

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('../plugins')}}/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('../plugins')}}/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('../dist')}}/css/adminlte.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  
</head>
<body class="hold-transition light-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand  navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">

    <a href="index3.html" class="brand-link">
      <span class="brand-text font-weight-bold">SPK Koperasi Terbaik</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="https://media.licdn.com/dms/image/D5603AQEkzQ3Uw_SqDA/profile-displayphoto-shrink_800_800/0/1673602975723?e=2147483647&v=beta&t=sU2HsI7zIxv5zPhMtXZOy4Q4vVTvQFHKBDYxUtBIzj0" class="img-circle elevation-2">
        </div>
        <div class="info">
          <a class="d-block">Habib Muhammad Furqon</a>
        </div>
      </div>

      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        
               <li class="nav-item">
                <a href="/" class="nav-link ">
                  <i class="nav-icon fa fa-home text-info"></i>
                  <p>Home</p>
                </a>
              </li>
              <li class="nav-item divider"></li>
              <li class="nav-item">
                <a href="{{route('home')}}" class="nav-link">
                  <i class="nav-icon fa fa-eye text-info"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              
          <li class="nav-item">
              <a href="{{route('kriteria.index')}}" class="nav-link">
              <i class="nav-icon fa fa-cube text-info"></i>
              <p>Kriteria<i class="fa fa-angle text-info"></i></p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('koperasi.index')}}" class="nav-link">
              <i class="nav-icon fa fa-database text-info"></i>
              <p>Koperasi</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('perhitungan.index')}}" class="nav-link">
              <i class="nav-icon fa fa-calculator text-info"></i>
              <p>Perhitungan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('about.index')}}" class="nav-link">
              <i class="nav-icon fa fa-question text-info"></i>
              <p>About</p>
            </a>
          </li>
          <li class="nav-item">
            <form id="logoutForm" action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="dropdown-item" type="button" onclick="confirmLogout()">
                    <i class="nav-icon fa fa-exclamation text-info"></i>
                    <span>Logout</span>
                </button>
            </form>
        </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container">
        @yield('content')
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-light">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{asset('../plugins')}}/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="{{asset('../plugins')}}/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{asset('../plugins')}}/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('../dist')}}/js/adminlte.js"></script>


<!-- jQuery Mapael -->
<script src="{{asset('../plugins')}}/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="{{asset('../plugins')}}/raphael/raphael.min.js"></script>
<script src="{{asset('../plugins')}}/jquery-mapael/jquery.mapael.min.js"></script>
<script src="{{asset('../plugins')}}/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="{{asset('../plugins')}}/chart.js/Chart.min.js"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('../dist')}}/js/pages/dashboard2.js"></script>
<script>
  function confirmLogout() {
      Swal.fire({
          title: 'Apakah Anda yakin ingin logout?',
          icon: 'question',
          showCancelButton: true,
          confirmButtonColor: '#d33',
          cancelButtonColor: '#3085d6',
          confirmButtonText: 'Ya, logout!',
          cancelButtonText: 'Batal'
      }).then((result) => {
          if (result.isConfirmed) {
              // Submit form jika konfirmasi diizinkan
              document.getElementById('logoutForm').submit();
          }
      });
  }
</script>
</body>
</html>
