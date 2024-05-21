<?php
include "koneksi.php";
include "layout/header.php";
?>

    <div class="container">
        <h1>Siswa yang sudah mendaftar</h1>
        <hr>
        <a href="tambah.php" class="btn btn-primary mb-1">Tambah Data</a>

        <table class="table table-bordered table-striped mt-3" id="myTable">
            <thead>
                <tr class="text-center">
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Sekolah Asal</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
            <?php 
		    include 'koneksi.php';
		    $data = mysqli_query($koneksi,"SELECT * FROM biodata");
		    while($d = mysqli_fetch_array($data)){
			?>
                <tr class="text-center">
                    <td><?php echo $d['nis']; ?></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['alamat']; ?></td>
                    <td><?php echo $d['jk']; ?></td>
                    <td><?php echo $d['agama']; ?></td>
                    <td><?php echo $d['sekolah_asal']; ?></td>
                    <td class="text-center">
                        <a href="edit.php?nis=<?php echo $d['nis']; ?>" class="btn btn-success">Edit</a>
                        <a href="hapus.php?nis=<?php echo $d['nis']; ?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php 
		    }
		    ?>
            </tbody>
        </table>
        <a href="cetak.php" class="btn btn-primary mb-1">Cetak Data</a>
        <h5>Total : <?php echo mysqli_num_rows($data) ?></h5>
    </div>

<?php include "layout/footer.php"; ?>