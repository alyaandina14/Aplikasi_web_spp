<h5>Halaman Data Kelas</h5>
<a href="?url=tambah-kelas" class="btn btn-outline-light" style= "background-color: #24A5E8;"> Tambah Kelas</a>
<hr>
<table class="table table-striped table-bordered" style="background-color: #FFFFFF;">
	<tr class="fw-bold" align="center" style="background-color: #24A5E8;">
		<td>No</td> 
		<td>Nama Kelas</td> 
		<td>Kompetensi Keahlian</td>
		<td>Edit</td>
		<td>Hapus</td>
	</tr>
	<?php
	include '../koneksi.php';
	$no = 1;
	$sql = "SELECT*FROM kelas ORDER BY id_kelas DESC";
	$query = mysqli_query($koneksi, $sql);
	foreach ($query as $data){ ?>
		<tr>
			<td align="center"><?= $no++; ?></td>
			<td align="center"><?= $data['nama_kelas'] ?></td>
			<td align="center"><?= $data['kompetensi_keahlian'] ?></td>
			<td align="center">
				<a href="?url=edit-kelas&id_kelas=<?= $data['id_kelas'] ?>" class='btn btn-warning '>EDIT</a>
			</td>
			<td align="center">
				<a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data')"href="?
				url=hapus-kelas&id_kelas=<?= $data['id_kelas'] ?>" class='btn btn-danger'>HAPUS</a>
			</td>
		</tr>
	<?php } ?>

</table>