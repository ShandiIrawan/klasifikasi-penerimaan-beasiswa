<?php 
include 'php/koneksi.php';

$query		=mysqli_query($koneksi, "SELECT * FROM tb_penerima_bea ORDER BY nama_mahasiswa ASC");
$no = 1;
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <div class="col-sm-12">
    <h3 class="m-0">Data Penerima Beasiswa</h3><br>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">NIM</th>
                <th scope="col">Nama</th>
                <th scope="col">Program Studi</th>
                <th scope="col">Fakultas</th>
                <th scope="col">IPK</th>
                <th scope="col">Keikutsertaan</th>
                <th scope="col">Tahun Masuk</th>
                <th scope="col">Beasiswa</th>
            </tr>
        </thead>
        <tbody>

            <?php
                while ($row = mysqli_fetch_assoc($query)) {
            ?>
            <tbody>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $row['nim'] ?></td>
                <td><?php echo $row['nama_mahasiswa'] ?></td>
                <td><?php echo $row['program_studi'] ?></td>
                <td><?php echo $row['fakultas'] ?></td>
                <td><?php echo $row['ipk'] ?></td>
                <td><?php echo $row['keikutsertaan'] ?></td>
                <td><?php echo $row['tahun_masuk'] ?></td>
                <td><b><?php echo $row['beasiswa'] ?></b></td>
            </tr>
            </tbody>
            <?php
                }
            ?>
        </tbody>
    </table>
    <h5>Ketentuan Beasiswa :</h5>
    <p>- IPK 3,90 – 4,00 Untuk S1 Beasiswa yang di dapat Bebas BOP dan Biaya SKS <br>
      - IPK 3,80 – 3,89 Untuk S1 Beasiswa yang didapat Bebas BOP <br>
      - Belum Mendapat Beasiswa Lain dari Yayasan Pendididkan Budi Luhur Cakti atau Lembaga Pemerintah <br>
      - Beasiswa di dapat minimal di semester 2 maksimal semester 7 <br>
      - Wajib mengikuti Program Kreativitas Mahasiswa (PKM) atau Program Wirausaha Mahasiswa (PWM)
      atau Lomba Akademik Minimal 1 kali dalam 1 tahun
    </p>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>
</body>
</html>
<script>
    window.print();
</script>