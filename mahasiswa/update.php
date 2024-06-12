<?php
include 'php/koneksi.php';

$nim        = $_GET['nim'];
$query      = mysqli_query($koneksi,"SELECT * FROM tb_mahasiswa WHERE nim='$nim'");
while ($row = mysqli_fetch_assoc($query)) {
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Universitas Budi Luhur | Beasiswa</title>

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

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Mahasiswa</h1>
          </div><!-- /.col -->
        </div><!-- /.col -->
      </div><!-- /.container-fluid -->
    </div>

    <div class="col sm-10">
    <form action="index.php?page=proses_update_mahasiswa" method="POST">
        <div class="form-group">
            <label for="inputNim">Nomor Induk Mahasiswa</label>
            <input type="text" readonly value="<?php echo $row['nim'] ?>" class="form-control" id="inputNim" name="nim" required placeholder="Masukkan nim">
        </div>
        <div class="form-group">
            <label for="inputNama">Nama Mahasiswa</label>
            <input type="text" value="<?php echo $row['nama_mahasiswa'] ?>" class="form-control" id="inputNama" name="nama_mahasiswa" required placeholder="Masukkan nama mahasiswa">
        </div>
        <div class="form-group">
            <label for="inputTempatLahir">Tempat Lahir</label>
            <input type="text" value="<?php echo $row['tempat_lahir'] ?>" class="form-control" id="inputTempatLahir" name="tempat_lahir" required placeholder="Masukkan tempat lahir mahasiswa">
        </div>
        <div class="form-group">
            <label for="inputTtl">Tanggal Lahir</label>
            <input type="date" value="<?php echo $row['ttl'] ?>" class="form-control" id="inputTtl" name="ttl" required placeholder="Masukkan tanggal lahir mahasiswa">
        </div>
        <div class="form-group">
            <label for="inputJk">Jenis Kelamin</label>
            <select class="form-control" name="jenis_kelamin" id="inputJk" required>
                <option value="<?php echo $row['jenis_kelamin'] ?>"><?php echo $row['jenis_kelamin'] ?></option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="inputProdi">Program Studi</label>
            <select class="form-control" name="program_studi" id="inputProdi" required>
                <option value="<?php echo $row['program_studi'] ?>"><?php echo $row['program_studi'] ?></option>
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Sistem Informasi">Sistem Informasi</option>
                <option value="Sistem Komputer">Sistem Komputer</option>
                <option value="D3 Unggulan">D3 Unggulan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="inputFak">Fakultas</label>
            <select class="form-control" name="fakultas" id="inputFak" required>
                <option value="<?php echo $row['fakultas'] ?>"><?php echo $row['fakultas'] ?></option>
                <option value="FTI">FTI</option>
                <option value="FEB">FEB</option>
                <option value="FISIP">FISIP</option>
                <option value="FIKOM">FIKOM</option>
            </select>
        </div>
        <div class="form-group">
            <label for="inputIpk">Indeks Prestasi Kumulatif</label>
            <input type="text" value="<?php echo $row['ipk'] ?>" class="form-control" id="inputIpk" name="ipk" required placeholder="Masukkan ipk">
        </div>
        <div class="form-group">
            <label for="inputKeik">Keikutsertaan Mahasiswa</label>
            <select class="form-control" name="keikutsertaan" id="inputKeik" required>
                <option value="<?php echo $row['keikutsertaan'] ?>"><?php echo $row['keikutsertaan'] ?></option>
                <option value="Prestasi Akademik">Prestasi Akademik</option>
                <option value="Prestasi Non Akademik">Prestasi Non Akademik</option>
                <option value="PKM">PKM</option>
            </select>
        </div>
        <div class="form-group">
            <label for="inputThnMasuk">Tahun Masuk</label>
            <input type="number" value="<?php echo $row['tahun_masuk'] ?>" class="form-control" id="inputThnMasuk" name="tahun_masuk" required placeholder="Masukkan tahun masuk">
        </div>
 
        <button type="submit" class="btn btn-primary">Simpan</button> | 
        <button type="reset" class="btn btn-danger" onclick="window.history.go(-1)">Kembali</button>
    </form>
    </div>
    <?php
}
?>


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
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
