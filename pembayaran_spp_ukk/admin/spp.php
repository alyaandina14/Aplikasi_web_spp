<h5>Halaman SPP</h5>
<a href="?url=tambah-spp" class="btn btn-outline-light" style= "background-color: #24A5E8;"> Tambah SPP</a>
<hr>
<table class="table table-striped table-bordered" style="background-color: #FFFFFF;">
	<tr class="fw-bold" align="center" style="background-color: #24A5E8;">
		<td>No</td> 
		<td>Tahun</td> 
		<td>Nominal</td>
		<td>Edit</td>
		<td>Hapus</td>
	</tr>
	<?php
	include'../koneksi.php';
	$no = 1;
	$sql = "SELECT*FROM spp ORDER BY id_spp DESC";
	$query = mysqli_query($koneksi, $sql);
	foreach ($query as $data){ ?>
		<tr>
			<td align="center"><?= $no++; ?></td>
			<td align="center"><?= $data['tahun'] ?></td>
			<td align="center"><?= $data['nominal'] ?></td>
			<td align="center">
				<a href="?url=edit-spp&id_spp=<?= $data['id_spp'] ?>" class='btn btn-warning '>EDIT</a>
			</td>
			<td align="center">
				<a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data')"href="?
				url=hapus-spp&id_spp=<?= $data['id_spp'] ?>" class='btn btn-danger'>HAPUS</a>
			</td>
		</tr>
	<?php } ?>

</table>