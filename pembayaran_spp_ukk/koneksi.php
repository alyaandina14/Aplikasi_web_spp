<?php
$koneksi = mysqli_connect('localhost','root','','spp');

if(!$koneksi){
    echo"Koneksi Anda Gagal";
}