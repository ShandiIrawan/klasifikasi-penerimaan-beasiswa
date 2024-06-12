<?php 
include 'php/koneksi.php';
$id   = $_POST['id'];
$passlama   = $_POST['passlama'];
$passbaru   = $_POST['passbaru'];
$passulang  = $_POST['passulang'];

$cekpass = ($passbaru != $passulang);

$cek = mysqli_query($koneksi, "SELECT * FROM tb_petugas WHERE password ='$passlama' AND id_petugas='$id'");
$hasil = mysqli_num_rows($cek);

if($hasil) {
    if($cekpass) {
        echo '<script>alert("Password Baru dan Konfirmasi tidak COCOK!!");window.history.go(-1)</script>';
    } else {
        $query = mysqli_query($koneksi, "UPDATE tb_petugas SET password = '$passbaru' WHERE id_petugas='$id' ");
        echo '<script>alert("Password berhasil diperbaharui! Silahkan login kembali");location="index.php?page=logout"</script>';
    } 
} else {
    echo '<script>alert("Password Salah!!");window.history.go(-1)</script>';
}

// if(mysqli_num_rows($cek)==1){
// 	if($passbaru == $passulang){
// 		$b = $passbaru;
// 		mysqli_query($koneksi, "UPDATE tb_petugas SET password='$b' WHERE nama_petugas = '$user'");
// 		header("location:index.php?page=ganti_pass?pesan=oke");
// 	}else{
// 		header("location:index.php?page=ganti_pass?pesan=tdksama");
// 	}
// }else{
// 	header("window.location:index.php?page=ganti_pass?pesan=gagal");
// }

 ?>