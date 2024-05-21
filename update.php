<?php 
include 'koneksi.php';

$nis = $_POST['nis'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jk = $_POST['jk'];
$agama = $_POST['agama'];
$sekolah_asal = $_POST['sekolah_asal'];
 
$query=mysqli_query($koneksi,"update biodata set nama='$nama', alamat='$alamat', jk='$jk', agama='$agama', sekolah_asal='$sekolah_asal' where nis='$nis'");
 
header('location:pendaftar.php');
?>