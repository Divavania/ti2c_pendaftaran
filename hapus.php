<?php
include "koneksi.php";
$nis = $_GET['nis'];
$query = mysqli_query($koneksi, "delete from biodata where nis='$nis'");
header('location:pendaftar.php');
?>