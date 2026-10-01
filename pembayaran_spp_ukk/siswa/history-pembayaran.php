<?php 
$nisn = $_SESSION['nisn'];
?>
<h5>History Pembayaran.</h5>
<hr>
<table class="table table-striped table-bordered" style="background-color: #FFFFFF;">
	<tr class="fw-bold" align="center" style="background-color: #24A5E8;">
		<td>No</td> 
		<td>NISN</td> 
		<td>Nama</td>
		<td>Kelas</td>
		<td>Tahun SPP</td>
		<td>Nominal Dibayar</td>
		<td>Bulan Dibayar</td>
		<td>Sudah Dibayar</td>
		<td>Tanggal Bayar</td>
		<td>Petugas</td>
	</tr>
	<?php
	include'../koneksi.php';
	$no = 1;
	$sql = "SELECT*FROM pembayaran,siswa,kelas,spp,petugas WHERE pembayaran.nisn=siswa.nisn AND siswa.id_kelas=kelas.id_kelas AND Pembayaran.id_spp=spp.id_spp AND Pembayaran.id_petugas=petugas.id_petugas AND Pembayaran.nisn='$nisn' ORDER BY tgl_bayar DESC";
	$query = mysqli_query($koneksi, $sql);
	foreach($query as $data){ 
		?>
		<tr align="center">
			<td><?= $no++; ?></td>
			<td><?= $data['nisn'] ?></td>
			<td><?= $data['nama'] ?></td>
			<td><?= $data['nama_kelas'] ?></td>
			<td><?= $data['tahun'] ?></td>
			<td>Rp. <?= number_format($data['nominal'],2,',','.'); ?></td>
			<td><?= $data['bulan_dibayar'] ?></td>
			<td>Rp. <?= number_format($data['jumlah_bayar'],2,',','.'); ?></td>
		    <td><?= $data['tgl_bayar'] ?></td>
			<td><?= $data['nama_petugas'] ?></td>
		</tr>
	<?php } ?>

</table>