<?php

$nisn= $_POST['nisn'];
$nis= $_POST['nis'];
$password = $_POST['password'];
$nama= $_POST['nama'];
$id_kelas=$_POST['id_kelas'];
$alamat= $_POST['alamat'];
$no_telp= $_POST['no_telp'];
$id_spp= $_POST['id_spp'];

include'../koneksi.php';
$sql = "INSERT INTO siswa(nisn,nis,password,nama,id_kelas,alamat,no_telp,id_spp) VALUES('$nisn','$nis','$password','$nama','$id_kelas','$alamat','$no_telp','$id_spp')";
$query = mysqli_query($koneksi, $sql);
if($query){
	header("Location:?url=siswa");
}else{
	echo"<script>alert('Maaf Data Tidak Tersimpan'); window.location.assign('?url=siswa');</script>";
}
?>

