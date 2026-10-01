<?php
session_start();
if(empty($_SESSION['nisn'])){
	echo"<script>
    alert('Maaf Anda Belum Login');
    window.location.assign('../index.php');
    </script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Siswa- Aplikasi Pembayaran SPP.</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-image: url(spp1.png);">
<div class="container mt-5">
<marquee behavior="alternate" direction="right"><h3>Aplikasi Pembayaran SPP.</h3></marquee>
	<div class="alert alert-info">
	<a style="color:black;"> Selamat Datang <b><?= $_SESSION['nama']?></b> Diaplikasi Pembayaran SPP.</a> 
</div>
<a href="siswa.php" class="btn btn-outline-light" style= "background-color: #24A5E8;"> Siswa</a>
<a href="siswa.php?url=history-pembayaran" class="btn btn-outline-light" style= "background-color: #24A5E8;"> history</a>
<a href="siswa.php?url=logout" class="btn btn-outline-light" style= "background-color: #24A5E8; margin-left: 890px"> Logout</a>
<div class="card mt-2">
	<div class="card-body" style="background-color: #CFF4FC;">
	<!-- ini web kita-->
	<?php
		$file = @$_GET['url'];
		if(empty($file)){
			echo"<h4>Selamat Datang Di Halaman Siswa.</h4>";
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