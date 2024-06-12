<?php 
include 'php/koneksi.php';

$id_petugas			=$_POST['id_petugas'];
$nama_petugas		=$_POST['nama_petugas'];
$alamat 			=$_POST['alamat'];
$jabatan			=$_POST['jabatan'];
$username			=$_POST['username'];
$password			=$_POST['password'];

$query =mysqli_query($koneksi,"UPDATE tb_petugas SET id_petugas='$id_petugas', nama_petugas='$nama_petugas', alamat='$alamat', jabatan='$jabatan', username='$username', password='$password' WHERE id_petugas='$id_petugas'");

if ($query) {
    echo '<script>alert("Berhasil ubah data!");window.location="index.php?page=data_petugas"</script>';
} else {
	echo "Gagal ubah Data";
}
 ?>