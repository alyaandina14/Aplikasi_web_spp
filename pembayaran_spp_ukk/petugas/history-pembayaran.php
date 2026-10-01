<?php
$nisn = $_GET['nisn'];
?>
<h5><b>History Pembayaran SPP.</b></h5>
<a href="?url=pembayaran" class="btn btn-dark">Kembali</a>
<hr style="margin-top: 10px;">
<table class="table table-striped table-bordered" style="background-color: #FFFFFF;">
	<tr class="fw-bold" align="center" style="background-color: #24A5E8;">
        <td>No</td>
        <td>Nisn</td>
        <td>Nama</td>
        <td>Kelas</td>
        <td>Tahun SPP</td>
        <td>Nominal</td>
        <td>Sudah Dibayar</td>
        <td>Tanggal Bayar</td>
        <td>Bulan dibayar</td>
        <td>Nama Petugas</td>
        <td>Action</td> 
        <td>Hapus</td>
        
    </tr>
    <?php
    include '../koneksi.php';
    $no = 1;
    $sql = "SELECT*FROM pembayaran,siswa,kelas,spp,petugas WHERE pembayaran.nisn=siswa.nisn AND siswa.id_kelas=kelas.id_kelas 
                AND pembayaran.id_spp=spp.id_spp AND pembayaran.id_petugas=petugas.id_petugas AND pembayaran.nisn='$nisn' ORDER BY tgl_bayar DESC";
    $query = mysqli_query($koneksi, $sql);
    foreach($query as $data){
        ?>
        <tr>
            <td align="center"><?= $no++; ?></td>
            <td align="center"><?= $data['nisn'] ?></td>
            <td align="center"><?= $data['nama'] ?></td>
            <td align="center"><?= $data['nama_kelas'] ?></td>
            <td align="center"><?= $data['tahun'] ?></td>
            <td>Rp. <?= number_format($data['nominal'],2,',','.'); ?></td>
            <td>Rp. <?= number_format($data['jumlah_bayar'],2,',','.'); ?></td>
            <td align="center"><?= $data['tgl_bayar'] ?></td>
            <td align="center"><?= $data['bulan_dibayar'] ?></td>
            <td align="center"><?= $data['nama_petugas'] ?></td>
            <td align="center"><a href="cetak.php?&id_pembayaran=<?php echo $data['id_pembayaran'];?>" target="_blank" class="btn btn-success">Print</a></td>
            <td align="center"><a href="?url=hapus-pembayaran&id_pembayaran=<?= $data['id_pembayaran']?>" class="btn btn-danger">Hapus</a></td>
        </tr>
    <?php } ?>
</table>