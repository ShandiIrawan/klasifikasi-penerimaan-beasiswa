<?php 
include 'php/koneksi.php';

$id_petugas			=$_POST['id_petugas'];
$nama_petugas		=$_POST['nama_petugas'];
$alamat 			=$_POST['alamat'];
$jabatan			=$_POST['jabatan'];
$username			=$_POST['username'];
$password			=$_POST['password'];

$querypetugas		=mysqli_query($koneksi, "SELECT * FROM tb_petugas WHERE username='$username'");
echo $hasil			=mysqli_num_rows($querypetugas);
if ($hasil>0) {
    // echo 'Username Sudah Ada';
	echo '<script>alert("Username Sudah Ada");window.location="index.php?page=data_petugas"</script>';
} else {

$query				=mysqli_query($koneksi, "INSERT INTO tb_petugas SET id_petugas='$id_petugas', nama_petugas='$nama_petugas', alamat='$alamat', jabatan='$jabatan', username='$username', password='$password' ");
if ($query) {
	echo '<script>alert("Berhasil simpan data!");window.location="index.php?page=data_petugas"</script>';
} else {
	echo "Gagal Simpan Data";
}
}
?>