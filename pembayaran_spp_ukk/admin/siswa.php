<h5>Halaman Data Siswa</h5>
<a href="?url=tambah-siswa" class="btn btn-outline-light" style= "background-color: #24A5E8;"> Tambah Siswa</a>
<form action="" method="POST">
	<div class="form-group">
	<input type="text" style="margin-left: 835px;" name="keyword" size="20">
	<button class="btn btn-outline" style= "background-color: #00A876;" type="submit" name="cari">Cari</button>
</form>
<br><hr>
<table class="table table-striped table-bordered" style="background-color: #FFFFFF;">
	<tr class="fw-bold" align="center" style="background-color: #24A5E8;">
		<td>No</td> 
		<td>NISN</td> 
		<td>NIS</td>
		<td>Nama</td>
		<td>Password</td>
		<td>Kelas</td>
		<td>Alamat</td>
		<td>No. Telpon</td>
		<td>SPP</td>
		<td>Edit</td>
		<td>Hapus</td>
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
	foreach ($query as $data){ ?>
		<tr align="center">
			<td><?= $no++; ?></td>
			<td><?= $data['nisn'] ?></td>
			<td><?= $data['nis'] ?></td>
			<td><?= $data['nama'] ?></td>
			<td><?= $data['password'] ?></td>
			<td><?= $data['nama_kelas'] ?></td>
			<td><?= $data['alamat'] ?></td>
			<td><?= $data['no_telp'] ?></td>
			<td><?= $data['tahun'] ?> - <?= number_format($data['nominal'],2,',','.'); ?></td>
			<td>
				<a href="?url=edit-siswa&nisn=<?= $data['nisn'] ?>" class='btn btn-warning '>EDIT</a>
			</td>
			<td>
				<a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data')"href="?
				url=hapus-siswa&nisn=<?= $data['nisn'] ?>" class='btn btn-danger'>HAPUS</a>
			</td>
		</tr>
	<?php } ?>

</table>