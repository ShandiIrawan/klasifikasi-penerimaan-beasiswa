<?php
include 'php/koneksi.php';

$id_petugas = $_GET['id_petugas'];
$query      = mysqli_query($koneksi,"SELECT * FROM tb_petugas WHERE id_petugas='$id_petugas'");
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
          <div class="col-sm-12">
            <h1 class="m-0">Data Petugas</h1>
          </div><!-- /.col -->
        </div><!-- /.col -->
      </div><!-- /.container-fluid -->

    <form action="index.php?page=proses_update_petugas" method="POST">
    <input type="text" class="form-control" id="inputNama" name="id_petugas" hidden placeholder="Masukkan nama petugas" value="<?php echo $row['id_petugas'] ?>">
        <div class="form-group">
            <label for="inputNama">Nama Petugas</label>
            <input type="text" class="form-control" id="inputNama" name="nama_petugas" required placeholder="Masukkan nama petugas" value="<?php echo $row['nama_petugas']?>">
        </div>
        <div class="form-group">
            <label for="inputAlamat">Alamat Petugas</label>
            <textarea class="form-control" name="alamat" id="" cols="30" rows="10" required placeholder="Masukkan alamat petugas" value="<?php echo $row['alamat']?>"><?php echo $row['alamat']?></textarea>
        </div>
        <div class="form-group">
            <label for="inputJabatan">Jabatan Petugas</label>
            <select class="form-control" name="jabatan" id="inputJabatan" required>
                <option value="<?php echo $row['jabatan']?>"><?php echo $row['jabatan']?></option>
                <option value="Admin" >Admin</option>
                <option value="User">User</option>
            </select>
        </div>
        <div class="form-group">
            <label for="inputUser">Username</label>
            <input type="text" class="form-control" id="inputUser" name="username" required placeholder="Masukkan username" value="<?php echo $row['username']?>">
        </div>
        
            <input type="password" class="form-control" id="inputPass" hidden name="password" required placeholder="Masukkan Password" value="<?php echo $row['password']?>">
        
 
        <button type="submit" class="btn btn-primary">Simpan</button> | 
        <button type="reset" class="btn btn-danger">Reset</button>
    </form>
<?php
}
?>


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
