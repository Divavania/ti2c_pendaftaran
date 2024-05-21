<?php
include "koneksi.php";
include "layout/header.php";
?>

    <div class="container mt-3">
        <h1>Formulir Pendaftaran Siswa Baru</h1>
        <hr>

        <form action="simpan.php" method="post">
        <div class="mb-3">
            <label for="nis" class="form-label">NIS</label>
            <input type="text" name="nis" class="form-control" id="nis" required>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control" id="alamat" required>
        </div>
        <div class="mb-3">
            <label for="jk" class="form-label">Jenis Kelamin</label>
            <div class="form-check">
                <input type="radio" name="jk" class="form-check-input" id="laki-laki" value="Laki-Laki" required>
                <label for="laki-laki" class="form-check-label">Laki-Laki</label>
            </div>
            <div class="form-check">
                <input type="radio" name="jk" class="form-check-input" id="perempuan" value="Perempuan" required>
                <label for="perempuan" class="form-check-label">Perempuan</label>
            </div>
        </div>
        <div class="mb-3">
            <label for="agama" class="form-label">Agama</label>
            <select name="agama" id="agama" class="form-control">
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Katolik">Katolik</option>
                <option value="Hindu">Hindu</option>
                <option value="Buddha">Buddha</option>
                <option value="Khonghucu">Khonghucu</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="sekolah_asal" class="form-label">Sekolah Asal</label>
            <input type="text" name="sekolah_asal" class="form-control" id="sekolah_asal" required>
        </div>
        <div>
            <button type="submit" name="submit" class="btn btn-primary" style="float: right;">Simpan</button>
        </div>
    </form>
    </div>
    
<?php include "layout/footer.php"; ?>