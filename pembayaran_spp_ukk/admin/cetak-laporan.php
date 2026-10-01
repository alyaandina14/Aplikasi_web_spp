<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Pembayaran_spp_ukk.xls"); 
?>
<center><h4>Laporan Pembayaran SPP.</h4></center>
<table border="1" class="table table-striped table-bordered">
	<tr class="fw-bold"  align="center">
		<td>No</td> 
		<td>NISN</td> 
		<td>NAMA</td>
		<td>Kelas</td>
		<td>Tahun SPP</td>
		<td>Nominal Dibayar</td>
		<td>Sudah Dibayar</td>
        <td>Bulan Dibayar</td>
		<td>Tanggal Bayar</td>
		<td>Petugas</td>
      

	</tr>
	<?php
	include '../koneksi.php';
	$no = 1;
	$sql = "SELECT*FROM pembayaran,siswa,kelas,spp,petugas WHERE pembayaran.nisn=siswa.nisn AND siswa.id_kelas=kelas.id_kelas AND Pembayaran.id_spp=spp.id_spp AND Pembayaran.id_petugas=petugas.id_petugas ORDER BY tgl_bayar DESC";
	$query = mysqli_query($koneksi, $sql);
	foreach($query as $data){ 
		?>
		<tr align="center">
			<td><?= $no++; ?></td>
			<td><?= $data['nisn'] ?></td>
			<td><?= $data['nama'] ?></td>
			<td><?= $data['nama_kelas'] ?></td>
			<td><?= $data['tahun'] ?></td>
			<td><?= number_format($data['nominal'],2,',','.'); ?></td>
			<td><?= number_format($data['jumlah_bayar'],2,',','.'); ?></td>
            <td><?= $data['bulan_dibayar'] ?></td>
		    <td><?= $data['tgl_bayar'] ?></td>
			<td><?= $data['nama_petugas'] ?></td>			
		</tr>
	<?php } ?>

</table>