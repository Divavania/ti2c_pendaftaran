<?php
include "koneksi.php";
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jk = $_POST['jk'];
$agama = $_POST['agama'];
$sekolah_asal = $_POST['sekolah_asal'];
$query = mysqli_query($koneksi, "insert into biodata(nis,nama,alamat,jk,agama,sekolah_asal)value('$nis','$nama','$alamat','$jk','$agama','$sekolah_asal')");
header('location:index.php');
?>