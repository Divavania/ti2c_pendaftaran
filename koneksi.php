<?php 
$koneksi = mysqli_connect("localhost","root","","siswa");
 
if (mysqli_connect_error()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>