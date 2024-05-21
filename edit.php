<?php
include "layout/header.php";
?>

    <div class="container mt-3">
        <h1>Formulir Edit Data Siswa</h1>
        <hr>

        <?php
        include 'koneksi.php';
        $nis = $_GET ['nis'];
        $query = mysqli_query($koneksi, "select * from biodata where nis='$nis'");
        $data = mysqli_fetch_array($query);
        ?>

        <form action="update.php" method="post">
        <div class="mb-3">
            <label for="nis" class="form-label">NIS</label>
            <input type="text" name="nis" class="form-control" id="nis" value="<?php echo $data['nis'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" value="<?php echo $data['nama'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control" id="alamat" value="<?php echo $data['alamat'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="jk" class="form-label">Jenis Kelamin</label>
            <div class="form-check">
                <input type="radio" name="jk" class="form-check-input" id="jk-laki-laki" value="Laki-Laki" <?php echo ($data['jk'] == 'Laki-Laki') ? 'checked' : ''; ?>>
                <label for="jk-laki-laki" class="form-check-label">Laki-Laki</label>
            </div>
            <div class="form-check">
                <input type="radio" name="jk" class="form-check-input" id="jk-perempuan" value="Perempuan" <?php echo ($data['jk'] == 'Perempuan') ? 'checked' : ''; ?>>
                <label for="jk-perempuan" class="form-check-label">Perempuan</label>
            </div>
        </div>
        <div class="mb-3">
            <label for="agama" class="form-label">Agama</label>
            <select name="agama" id="agama" class="form-control">
                <option value="Islam" <?php echo ($data['agama'] == 'Islam') ? 'selected' : ''; ?>>Islam</option>
                <option value="Kristen" <?php echo ($data['agama'] == 'Kristen') ? 'selected' : ''; ?>>Kristen</option>
                <option value="Katolik" <?php echo ($data['agama'] == 'Katolik') ? 'selected' : ''; ?>>Katolik</option>
                <option value="Hindu" <?php echo ($data['agama'] == 'Hindu') ? 'selected' : ''; ?>>Hindu</option>
                <option value="Buddha" <?php echo ($data['agama'] == 'Buddha') ? 'selected' : ''; ?>>Buddha</option>
                <option value="Khonghucu" <?php echo ($data['agama'] == 'Khonghucu') ? 'selected' : ''; ?>>Khonghucu</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="sekolah_asal" class="form-label">Sekolah Asal</label>
            <input type="text" name="sekolah_asal" class="form-control" id="sekolah_asal" value="<?php echo $data['sekolah_asal'] ?>" required>
        </div>
        <div>
            <button type="submit" name="submit" class="btn btn-primary" style="float: right;" value="simpan">Simpan</button>
        </div>
    </form>
    </div>
    
<?php include "layout/footer.php"; ?>