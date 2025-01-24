<?php
require 'koneksi.php';
$ambil = $koneksi->query("SELECT * FROM siswa WHERE no_daftar='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-light">
<section class="py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="card shadow-lg border-0">
          <div class="card-body p-5">
            <h2 class="text-center mb-4 text-primary">Edit Data Siswa</h2>
            <form action="#" method="POST">

              <!-- Nama -->
              <div class="mb-3">
                <label for="nama" class="form-label fw-bold">Nama Lengkap</label>
                <input type="text" class="form-control form-control-lg" id="nama" name="nama" value="<?php echo $pecah['nama']; ?>" required>
              </div>

              <!-- Jenis Kelamin -->
              <div class="mb-3">
                <label for="jk" class="form-label fw-bold">Jenis Kelamin</label>
                <select class="form-select form-select-lg" id="jk" name="jk" required>
                  <option value="Laki-Laki" <?php echo ($pecah['jk'] == 'Laki-Laki') ? "selected" : ""; ?>>Laki-Laki</option>
                  <option value="Perempuan" <?php echo ($pecah['jk'] == 'Perempuan') ? "selected" : ""; ?>>Perempuan</option>
                </select>
              </div>

              <!-- Agama -->
              <div class="mb-3">
                <label for="agama" class="form-label fw-bold">Agama</label>
                <select class="form-select form-select-lg" id="agama" name="agama" required>
                  <option value="Islam" <?php echo ($pecah['agama'] == 'Islam') ? "selected" : ""; ?>>Islam</option>
                  <option value="Kristen" <?php echo ($pecah['agama'] == 'Kristen') ? "selected" : ""; ?>>Kristen</option>
                  <option value="Katolik" <?php echo ($pecah['agama'] == 'Katolik') ? "selected" : ""; ?>>Katolik</option>
                  <option value="Hindu" <?php echo ($pecah['agama'] == 'Hindu') ? "selected" : ""; ?>>Hindu</option>
                  <option value="Buddha" <?php echo ($pecah['agama'] == 'Buddha') ? "selected" : ""; ?>>Buddha</option>
                </select>
              </div>

              <!-- Asal Sekolah -->
              <div class="mb-3">
                <label for="asal_sekolah" class="form-label fw-bold">Asal Sekolah</label>
                <input type="text" class="form-control form-control-lg" id="asal_sekolah" name="asal_sekolah" value="<?php echo $pecah['sekolah_asal']; ?>" required>
              </div>

              <!-- Alamat -->
              <div class="mb-3">
                <label for="alamat" class="form-label fw-bold">Alamat</label>
                <textarea class="form-control form-control-lg" id="alamat" name="alamat" rows="3" required><?php echo $pecah['alamat']; ?></textarea>
              </div>

              <!-- Nomor HP -->
              <div class="mb-4">
                <label for="no_hp" class="form-label fw-bold">Nomor HP</label>
                <input type="number" class="form-control form-control-lg" id="no_hp" name="no_hp" value="<?php echo $pecah['no_hp']; ?>" required>
              </div>

              <!-- Buttons -->
              <div class="d-flex justify-content-between">
                <a href="listSiswa.php" class="btn btn-secondary btn-lg">Kembali</a>
                <button type="submit" name="ubah" class="btn btn-primary btn-lg">Simpan Perubahan</button>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
if (isset($_POST['ubah'])) {
  $nama = $_POST['nama'];
  $jk = $_POST['jk'];
  $agama = $_POST['agama'];
  $asl_sklh = $_POST['asal_sekolah'];
  $alamat = $_POST['alamat'];
  $hp = $_POST['no_hp'];

  $sql = "UPDATE siswa SET nama='$nama', jk='$jk', agama='$agama', sekolah_asal='$asl_sklh', alamat='$alamat', no_hp='$hp' WHERE no_daftar='$_GET[id]'";
  $simpan = $koneksi->query($sql);

  if ($simpan) {
    echo "<script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil',
            text: 'Data berhasil diubah!',
            confirmButtonText: 'OK'
        }).then(() => {
            window.location.href = 'listSiswa.php';
        });
    </script>";
  } else {
    echo "<script>
        Swal.fire({
            icon: 'error',
            title: 'Gagal',
            text: 'Data gagal diubah!',
            confirmButtonText: 'Coba Lagi'
        });
    </script>";
  }
}
?>
