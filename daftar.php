<?php
require 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa</title>
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
            <h2 class="text-center mb-4 text-primary">Pendaftaran Siswa Baru</h2>
            <form action="#" method="POST">
              
              <!-- Nama -->
              <div class="mb-3">
                <label for="nama" class="form-label fw-bold">Nama Lengkap</label>
                <input type="text" class="form-control form-control-lg" id="nama" name="nama" placeholder="Masukkan nama lengkap" required>
              </div>

              <!-- Jenis Kelamin -->
              <div class="mb-3">
                <label for="jk" class="form-label fw-bold">Jenis Kelamin</label>
                <select class="form-select form-select-lg" id="jk" name="jk" required>
                  <option value="" disabled selected>Pilih jenis kelamin</option>
                  <option value="Laki-Laki">Laki-Laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
              </div>

              <!-- Agama -->
              <div class="mb-3">
                <label for="agama" class="form-label fw-bold">Agama</label>
                <select class="form-select form-select-lg" id="agama" name="agama" required>
                  <option value="" disabled selected>Pilih agama</option>
                  <option value="Islam">Islam</option>
                  <option value="Kristen">Kristen</option>
                  <option value="Katolik">Katolik</option>
                  <option value="Hindu">Hindu</option>
                  <option value="Buddha">Buddha</option>
                </select>
              </div>

              <!-- Asal Sekolah -->
              <div class="mb-3">
                <label for="asal_sekolah" class="form-label fw-bold">Asal Sekolah</label>
                <input type="text" class="form-control form-control-lg" id="asal_sekolah" name="asal_sekolah" placeholder="Masukkan asal sekolah" required>
              </div>

              <!-- Alamat -->
              <div class="mb-3">
                <label for="alamat" class="form-label fw-bold">Alamat</label>
                <textarea class="form-control form-control-lg" id="alamat" name="alamat" rows="3" placeholder="Masukkan alamat lengkap" required></textarea>
              </div>

              <!-- Nomor HP -->
              <div class="mb-4">
                <label for="no_hp" class="form-label fw-bold">Nomor HP</label>
                <input type="number" class="form-control form-control-lg" id="no_hp" name="no_hp" placeholder="Masukkan nomor HP aktif" required>
              </div>

              <!-- Buttons -->
              <div class="d-flex justify-content-between">
                <a href="index.php" class="btn btn-secondary btn-lg">Kembali</a>
                <button type="submit" name="daftar" class="btn btn-primary btn-lg">Daftar</button>
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
if (isset($_POST['daftar'])) {
  $nama = $_POST['nama'];
  $jk = $_POST['jk'];
  $agama = $_POST['agama'];
  $asl_sklh = $_POST['asal_sekolah'];
  $alamat = $_POST['alamat'];
  $hp = $_POST['no_hp'];

  // Query untuk menyimpan data
  $query = "INSERT INTO siswa (nama, jk, agama, sekolah_asal, alamat, no_hp)
            VALUES ('$nama', '$jk', '$agama', '$asl_sklh', '$alamat', '$hp')";
  $simpan = $koneksi->query($query);
  
  if ($simpan) {
    echo '<script>window.location.href = "index.php?status=sukses";</script>';
  } else {
    echo '<script>window.location.href = "index.php?status=gagal";</script>';
  }
}
?>
