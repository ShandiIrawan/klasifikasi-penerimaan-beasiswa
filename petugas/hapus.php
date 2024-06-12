<?php
include 'php/koneksi.php';

$id_petugas =$_GET['id_petugas'];
$query =mysqli_query($koneksi, "DELETE FROM tb_petugas WHERE id_petugas='$id_petugas'");
if ($query) {
    echo '<script>alert("Berhasil hapus data!");window.location="index.php?page=data_petugas"</script>';
} else {
	echo "Gagal Hapus Data";
}
?>
