<?php 
include 'php/koneksi.php';

$nim				=$_POST['nim'];
$nama_mahasiswa		=$_POST['nama_mahasiswa'];
$tempat_lahir 		=$_POST['tempat_lahir'];
$ttl				=$_POST['ttl'];
$jenis_kelamin		=$_POST['jenis_kelamin'];
$program_studi		=$_POST['program_studi'];
$fakultas			=$_POST['fakultas'];
$ipk				=$_POST['ipk'];
$keikutsertaan		=$_POST['keikutsertaan'];
$tahun_masuk		=$_POST['tahun_masuk'];

$query =mysqli_query($koneksi,"UPDATE tb_mahasiswa SET nim='$nim', nama_mahasiswa='$nama_mahasiswa', tempat_lahir='$tempat_lahir', ttl='$ttl', jenis_kelamin='$jenis_kelamin', program_studi='$program_studi', fakultas='$fakultas', ipk='$ipk', keikutsertaan='$keikutsertaan', tahun_masuk='$tahun_masuk' WHERE nim='$nim'");

if ($ipk >= 3.80 && $ipk <= 3.89 && ($keikutsertaan = "Prestasi Akademik" or $keikutsertaan = "Prestasi Non Akademik" or $keikutsertaan = "Program Kreativitas Mahasiswa" or $keikutsertaan = "Program Wirausaha Mahasiswa")) 
{
	$selbeasiswa = "Bebas BOP";
} else if ($ipk >= 3.90 && $ipk <= 4.00 && ($keikutsertaan = "Prestasi Akademik" or $keikutsertaan = "Prestasi Non Akademik" or $keikutsertaan = "Program Kreativitas Mahasiswa" or $keikutsertaan = "Program Wirausaha Mahasiswa"))
{
	$selbeasiswa = "Bebas BOP dan Biaya SKS";
} else {
	$selbeasiswa = "Belum Mendapatkan";
}

$querypenerimabea	=mysqli_query($koneksi, "UPDATE tb_penerima_bea SET nim='$nim', nama_mahasiswa='$nama_mahasiswa', tempat_lahir='$tempat_lahir', ttl='$ttl', jenis_kelamin='$jenis_kelamin', program_studi='$program_studi', fakultas='$fakultas', ipk='$ipk', keikutsertaan='$keikutsertaan', tahun_masuk='$tahun_masuk', beasiswa='$selbeasiswa' WHERE nim='$nim'");

if ($query) {
    echo '<script>alert("Berhasil ubah data!");window.location="index.php?page=data_mahasiswa"</script>';
} else {
	echo '<script>alert("Gagal ubah data!");window.location="index.php?page=update_mahasiswa"</script>';
}
 ?>