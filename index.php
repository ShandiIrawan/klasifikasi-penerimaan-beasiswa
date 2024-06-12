<?php 
include 'php/koneksi.php';

session_start();
if ($_SESSION['status']!="login") {
  header("location:login/index.html");
}
                
$data_mahasiswa		= mysqli_query($koneksi, "SELECT * FROM tb_mahasiswa");
$jumlah_mahasiswa = mysqli_num_rows($data_mahasiswa);

$data_petugas		= mysqli_query($koneksi, "SELECT * FROM tb_petugas");
$jumlah_petugas = mysqli_num_rows($data_petugas);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Universitas Budi Luhur | Beasiswa</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="icon" href="dist/img/00.png">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> -->

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php?page=contact" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">0</span>
        </a>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">0</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/00.png" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Univ Budi Luhur</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/avatar4.png" class="img-circle elevation-2">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['nama_petugas']; ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <!-- Data Petugas -->
          <li class="nav-header">FITUR</li>
          <li class="nav-item">
            <a href="index.php?page=data_petugas" class="nav-link">
              <i class="nav-icon fas fa-user-alt"></i>
              <p>
                Data Petugas
                <span class="badge badge-info right"><?php echo $jumlah_petugas;?></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?page=cetak_data_petugas" class="nav-link">
              <i class="nav-icon fas fa-print"></i>
              <p>
                Cetak Data Petugas
                <span class="badge badge-info right"><?php echo $jumlah_petugas;?></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?page=ganti_pass" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Ubah Password
                <!-- <span class="badge badge-info right"><?php echo $jumlah_petugas;?></span> -->
              </p>
            </a>
          </li>
          <!-- Data Petugas Selesai -->

          <!-- Data Mahasiswa -->
          <li class="nav-item">
            <a href="index.php?page=data_mahasiswa" class="nav-link">
              <i class="nav-icon fas fa-graduation-cap"></i> 
              <p>
                Data Mahasiswa
                <span class="badge badge-info right"><?php echo $jumlah_mahasiswa;?></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?page=cetak_data_mahasiswa" class="nav-link">
              <i class="nav-icon fas fa-print"></i> 
              <p>
                Cetak Data Mahasiswa
                <span class="badge badge-info right"><?php echo $jumlah_mahasiswa;?></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?page=data_bea" class="nav-link">
              <i class="nav-icon fas fa-graduation-cap"></i> 
              <p>
                <b>Penerima Beasiswa</b>
              </p>
            </a>
          </li>

          <!-- Data Mahasiswa Selesai -->
          <li class="nav-item">
            <a href="index.php?page=logout" class="nav-link">
              <p>
                Logout 
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
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">


        <div class="row">
       <!-- ISI KONTEN -->
       <?php 

          $page = isset($_GET['page'])? $_GET['page'] : "home";
            switch ($page) {              
              //cari
              case 'data_petugas':
                include 'petugas/data_petugas.php';
                break;

              case 'tambah_data_petugas':
                include 'petugas/tambah_data.php';
                break;

              case 'update_petugas':
                include 'petugas/update.php';
                break;

              case 'hapus_petugas':
                include 'petugas/hapus.php';
                break;	

              case 'proses_update_petugas':
                include 'petugas/proses_update.php';
                break;	

              case 'proses_simpan_petugas':
                include 'petugas/proses_simpan.php';
                break;	
              
              case 'cetak_data_petugas':
                include 'petugas/cetak_data_petugas.php';
                break;
              
              case 'cetak_data_petugas2':
                include 'petugas/cetak_data_petugas2.php';
                break;

              case 'ganti_pass':
                include 'petugas/ganti_pass.php';
                break;

              case 'ganti_pass_proses':
                include 'petugas/ganti_pass_proses.php';
                break;

                // Data Mahasiswa
              case 'data_mahasiswa':
                include 'mahasiswa/data_mahasiswa.php';
                break;

              case 'tambah_data_mahasiswa':
                include 'mahasiswa/tambah_data.php';
                break;

              case 'proses_simpan_mahasiswa':
                include 'mahasiswa/proses_simpan.php';
                break;

              case 'update_mahasiswa':
                include 'mahasiswa/update.php';
                break;	

              case 'proses_update_mahasiswa':
                include 'mahasiswa/proses_update.php';
                break;
              
              case 'hapus_data_mahasiswa':
                include 'mahasiswa/hapus.php';
                break;
              case 'cetak_data_mahasiswa':
                include 'mahasiswa/cetak_data_mahasiswa.php';
                break;
              
              case 'cetak_data_mahasiswa2':
                include 'mahasiswa/cetak_data_mahasiswa2.php';
                break;

              //Penerima Bea
              case 'data_bea':
                include 'penerima_bea/data_bea.php';
                break;
              
              case 'cetak_data_bea':
                include 'penerima_bea/cetak_data_bea.php';
                break;                

              // LOGOUT
              case 'logout':
                include 'logout.php';
                break;
              
              case 'contact':
                include 'contact.php';
                break;

              case 'home':
                default : include 'home.php';

	
              }


          ?>
        </div>


      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<?php 
include_once 'footer.php';
?>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
