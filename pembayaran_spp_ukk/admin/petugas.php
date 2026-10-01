<h5>Halaman Data Petugas</h5>
<a href="?url=tambah-petugas" class="btn btn-outline-light" style= "background-color: #24A5E8;"> Tambah petugas</a>
<hr>
<table class="table table-striped table-bordered" style="background-color: #FFFFFF;">
	<tr class="fw-bold" align="center" style="background-color: #24A5E8;">
		<td>No</td> 
		<td>Username</td> 
		<td>Password</td>
		<td>Nama Petugas</td>
		<td>Level</td>
		<td>Edit</td>
		<td>Hapus</td>
	</tr>
	<?php
	include'../koneksi.php';
	$no = 1;
	$sql = "SELECT*FROM petugas ORDER BY id_petugas DESC";
	$query = mysqli_query($koneksi, $sql);
	foreach ($query as $data){ ?>
		<tr>
			<td align="center"><?= $no++; ?></td>
			<td align="center"><?= $data['username'] ?></td>
			<td align="center"><?= $data['password'] ?></td>
			<td align="center"><?= $data['nama_petugas'] ?></td>
			<td align="center"><?= $data['level'] ?></td>
			<td align="center">
				<a href="?url=edit-petugas&id_petugas=<?= $data['id_petugas'] ?>" class='btn btn-warning '>EDIT</a>
			</td>
			<td align="center">
				<a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data')"href="?
				url=hapus-petugas&id_petugas=<?= $data['id_petugas'] ?>" class='btn btn-danger'>HAPUS</a>
			</td>
		</tr>
	<?php } ?>

</table>