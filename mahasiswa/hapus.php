<?php
include 'php/koneksi.php';

$nim =$_GET['nim'];
$query =mysqli_query($koneksi, "DELETE FROM tb_mahasiswa WHERE nim='$nim'");
$querybea =mysqli_query($koneksi, "DELETE FROM tb_penerima_bea WHERE nim='$nim'");
if ($query) {
    echo '<script>alert("Berhasil hapus data!");window.location="index.php?page=data_mahasiswa"</script>';
} else {
	echo "Gagal Hapus Data";
}
?>
