<style type="text/css">
    table {
        border-width: 3px;
        border-color: white; 
    }
 </style>
   <br>
    <tr>
 <td><img src="logo.png" width="95px" style="position: absolute; left: 15%;"><br></td>
 <center>
<font size="5">Bukti Pembayaran SPP Siswa/Siswi</font><br>
<font size="4"><b>SMKN 1 GUNUNGPUTRI</b></font><br>
<font size="2"><i>Jl. Barokah No.6, Wanaherang, Kec. Gunungputri, Kabupaten Bogor, Jawa Barat 16965</i></font>
</center>
</tr>
</div><br /><br />
<?php
$id = $_GET['id_pembayaran'];
?>
<center>
<table class="table table-striped table-bordered" border="1" cellpadding="8" style="width: 100%;">
    <tr class="fw-bold" align="center">
        <td>No</td>
        <td>Nisn</td>
        <td>Nama</td>
        <td>Kelas</td>
        <td>Tahun SPP</td>
        <td>Nominal</td>
        <td>Sudah Dibayar</td>
        <td>Tanggal Bayar</td>
        <td>Bulan Dibayar</td>
        <td>Nama Petugas</td>
    </tr><hr>
    <br>
    <?php
    include '../koneksi.php';
    $no = 1;
    $sql = "SELECT*FROM pembayaran,siswa,kelas,spp,petugas WHERE pembayaran.nisn=siswa.nisn AND siswa.id_kelas=kelas.id_kelas 
        AND pembayaran.id_spp=spp.id_spp AND pembayaran.id_petugas=petugas.id_petugas AND pembayaran.id_pembayaran='$id' ORDER BY tgl_bayar DESC";
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
            <td>Rp. <?= number_format($data['jumlah_bayar'],2,',','.'); ?></td>
            <td><?= $data['tgl_bayar'] ?></td>
            <td><?= $data['bulan_dibayar'] ?></td>
            <td><?= $data['nama_petugas'] ?></td>
        </tr>
    <?php } ?>
</table>
<br>
<br>
<h4 class="m-0 font-weight-bold text-secondary" align="right">Gunungputri, <?php echo date('d M Y'); ?></h4>
<h4 class="m-0 font-weight-bold text-secondary" align="right" style="margin-right:60px;">Petugas,</h4>
<br><br><br>
<h4 class="m-0 font-weight-bold text-secondary" align="right" style="margin-right:60px;"><u><?php echo $data['nama_petugas']; ?></u></h4>
    </table>
    </div>     
</center>

<!-- SCRIPT CETAK LAPORAN PEMBAYARAN -->
        <script>
            window.print();
        </script>