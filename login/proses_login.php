<?php
include '../php/koneksi.php';

$username		=$_POST['username'];
$password		=$_POST['password'];
$query			=mysqli_query($koneksi,"SELECT*FROM tb_petugas WHERE username='$username' and password='$password' ");
$baris			=mysqli_num_rows($query);
$row 			=mysqli_fetch_assoc($query);
$baris_jabatan 	=$row['jabatan'];
$nama_petugas 	= $row['nama_petugas'];
$username		= $row['username'];
$id 		    = $row['id_petugas'];

if ($baris>0) {
	session_start();
	$_SESSION['status']="login";
	$_SESSION['username']=$username;
	$_SESSION['nama_petugas']=$nama_petugas;
	$_SESSION['id_petugas']=$id;
	$_SESSION['jabatan']=$jabatan;

	if ($jabatan!="Admin") {
		header("location:../index.php");
	}
	else{
		header("location:../index.php");
	}
}
else{
	echo '<script>alert("Password atau Username Salah !!");window.location="index.html"</script> ';
}


?>