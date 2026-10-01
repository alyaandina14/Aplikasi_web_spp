<h5>Halaman Pilih Data Siswa Untuk Pembayaran.</h5> 
<form action="" method="POST">
	<div class="form-group" >
	<input type="text" style="margin-left: 835px;" name="keyword" size="20">
	<button class="btn btn-outline" style= "background-color: #00A876;" type="submit" name="cari">Cari</button>
</form>
<br><hr>
<table class="table table-striped table-bordered" style="background-color: #FFFFFF;">
	<tr class="fw-bold" align="center" style="background-color: #24A5E8;">
		<td>No</td> 
		<td>NISN</td> 
		<td>Nama</td>
		<td>Kelas</td>
		<td>SPP</td>
		<td>Nominal</td>
		<td>Bayar</td>
		<td>History</td>
	</tr>

	<?php
	include '../koneksi.php';
	
	if (isset($_POST['cari'])) {
		$keyword = $_POST['keyword'];
		$q ="SELECT * FROM siswa INNER JOIN spp ON siswa.id_spp=spp.id_spp INNER JOIN kelas ON siswa.id_kelas=kelas.id_kelas WHERE nama like '%$keyword%' order by nama ASC";
	} else {
		$q ="SELECT * FROM siswa INNER JOIN spp ON siswa.id_spp=spp.id_spp INNER JOIN kelas ON siswa.id_kelas=kelas.id_kelas ORDER BY nama ASC";

	}
	$no = 1;
	$sql = "SELECT*FROM siswa,spp,kelas WHERE siswa.id_kelas=kelas.id_kelas AND siswa.id_spp=spp.id_spp ORDER BY nama ASC";
	$query = mysqli_query($koneksi, $q);
	foreach($query as $data){ 
		?>
		<tr>
			<td align="center"><?= $no++; ?></td>
			<td align="center"><?= $data['nisn'] ?></td>
			<td align="center"><?= $data['nama'] ?></td>
			<td align="center"><?= $data['nama_kelas'] ?></td>
			<td align="center"><?= $data['tahun'] ?></td>
			<td align="center">Rp. <?= number_format($data['nominal'],2,',','.'); ?></td>
			<td align="center">
				<a href="?url=tambah-pembayaran&nisn=<?= $data['nisn'] ?>" class="btn btn-danger"> Pilih & Bayar </a>
			</td>
			<td align="center">
				<a href="?url=history-pembayaran&nisn=<?= $data['nisn'] ?>" class='btn btn-info'>History</a>
			</td>
		</tr>
	<?php } ?>
	
</table>