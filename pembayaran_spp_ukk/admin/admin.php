<?php
session_start();
if(empty($_SESSION['id_petugas'])){
	echo"<script>
    alert('Maaf Anda Belum Login');
    window.location.assign('../index2.php');
    </script>";
}
if($_SESSION['level']!=='admin'){
	echo"<script>
    alert('Maaf Anda Bukan Sesi Admin');
    window.location.assign('../index2.php');
    </script>";
}
?>
<!DOCTYPE html>
<html>
<head >
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" >
	<title>Admin- Aplikasi Pembayaran SPP.</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="fontawesome/css/fontawesome.min.css">
</head>
<body style="background-image: url(spp1.png);">
<div class="container mt-5" style="color:black;">

<marquee behavior="alternate" direction="right"><h3>Aplikasi Pembayaran SPP</h3></marquee>
	<div class="alert alert-info">
	<a style="color:black;">Anda Login Sebagai <b>ADMIN</b> Aplikasi Pembayaran SPP.</a>
</div>
<a href="admin.php" class="btn btn-outline-light" style= "background-color: #24A5E8;"> Admin</a>
<a href="admin.php?url=spp" class="btn btn-outline-light" style= "background-color: #24A5E8;"> Spp</a>
<a href="admin.php?url=kelas" class="btn btn-outline-light" style= "background-color: #24A5E8;"> Kelas</a>
<a href="admin.php?url=siswa" class="btn btn-outline-light" style= "background-color: #24A5E8;"> Siswa</a>
<a href="admin.php?url=petugas" class="btn btn-outline-light" style= "background-color: #24A5E8;"> Petugas</a> 	
<a href="admin.php?url=pembayaran" class="btn btn-outline-light" style= "background-color: #24A5E8;"> Pembayaran</a>
<a href="admin.php?url=laporan" class="btn btn-outline-light" style= "background-color: #24A5E8;"> Laporan</a>
<a href="admin.php?url=logout" class="btn btn-outline-light" style= "background-color: #24A5E8; margin-left:480px"> Logout</a>
 
<div class="card mt-2">
	<div class="card-body" style="background-color: #CFF4FC;">
	<!-- ini web kita--> 
		<?php
		$file = @$_GET['url'];
		if(empty($file)){
			echo"<h4>Selamat Datang Di Halaman Admin.</h4>";
			echo"Aplikasi Pembayaran SPP digunakan untuk mempermudah dalam mencatat pembayaran siswa/siswi sekolah dengan cara yang sistematis.";
		}else{
			include $file.'.php';
		}
	    ?>

	</div>
</div>
<script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>