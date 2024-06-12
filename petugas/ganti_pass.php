<?php 
include_once 'php/koneksi.php';
$id = $_SESSION['id_petugas'];
if(isset($_GET['pesan'])){
	$pesan=mysqli_real_escape_string($koneksi, $_GET['pesan']);
	if($pesan=="gagal"){
		echo "<div class='alert alert-danger'>Password gagal di ganti !!     Periksa Kembali Password yang anda masukkan !!</div>";
	}else if($pesan=="tdksama"){
		echo "<div class='alert alert-warning'>Password yang anda masukkan tidak sesuai  !!     silahkan ulangi !! </div>";
	}else if($pesan=="oke"){
		echo "<div class='alert alert-success'>Password yang anda masukkan tidak sesuai  !!     silahkan ulangi !! </div>";
	}
}
?>

<div class="col-md-5 col-md-offset-3">
<br><h3>Ubah Password</h3><br>
	<form action="index.php?page=ganti_pass_proses" method="post">
		<div class="form-group">
			<input name="id" type="hidden" value="<?php echo $id; ?>">
		</div>
		<div class="form-group">
			<label>Password Lama</label>
			<input name="passlama" type="password" class="form-control" placeholder="Password Lama ..">
		</div>
		<div class="form-group">
			<label>Password Baru</label>
			<input name="passbaru" type="password" class="form-control" placeholder="Password Baru ..">
		</div>
		<div class="form-group">
			<label>Ulangi Password</label>
			<input name="passulang" type="password" class="form-control" placeholder="Ulangi Password ..">
		</div>	
		<div class="form-group">
			<label></label>
			<input type="submit" class="btn btn-primary" value="Simpan">
			<input type="reset" class="btn btn-danger" value="Reset">
		</div>																	
	</form>
</div>