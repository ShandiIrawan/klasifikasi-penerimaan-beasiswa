<?php 
include 'php/koneksi.php';

$query		=mysqli_query($koneksi, "SELECT * FROM tb_mahasiswa ORDER BY nama_mahasiswa ASC");
$no = 1;
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <div class="col-sm-12">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Mahasiswa</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <table class="table" width="100%">
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
                <td><?php echo $row['beasiswa'] ?></td>
            </tr>
            </tbody>
            <?php
                }
            ?>
        </tbody>
    </table>
</div>
</div>
</body>
</html>
<script>
    window.print();
</script>
