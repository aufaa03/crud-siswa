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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Edit Siswa</title>
</head>
<body>
<section style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-10 col-xl-11">
        <div class="card text-black m-5" style="border-radius: 25px;">
          <div class="card-body">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Edit Siswa</p>

                <form action="#" method="POST">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example1c">Nama</label>
                      <input type="text" name="nama" id="form3Example1c" class="form-control" value="<?php echo $pecah['nama'];?>" />
                    </div>
                  </div>
                  
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example1c">Jenis Kelamin</label>
                      <select class="form-select" name="jk" aria-label="Default select example" >
                        <?php echo $jk = $pecah['jk'];?>
                        <!-- <option selected>pilih</option> -->
                        <option <?php echo ($jk == 'Laki-Laki') ? "selected":"";?>>Laki-Laki</option>
                        <option <?php echo ($jk == 'perempuan') ? "selected":"";?>>perempuan</option>
                    </select>
                  </div>
                </div>
                
                <div class="d-flex flex-row align-items-center mb-4">
                  <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                  <div data-mdb-input-init class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example4c">Agama</label>
                    <select class="form-select" name="agama" aria-label="Default select example">
                    <?php echo $agama = $pecah['agama'];?>
                        <!-- <option selected>pilih</option> -->
                        <option <?php echo ($agama == 'Islam') ? "selected":"";?>>Islam</option>
                        <option <?php echo ($agama == 'Kristen') ? "selected":"";?>>Kristen</option>
                        <option <?php echo ($agama == 'Katolik') ? "selected":"";?>>Katolik</option>
                        <option <?php echo ($agama == 'Hindu') ? "selected":"";?>>Hindu</option>
                        <option <?php echo ($agama == 'Budhha') ? "selected":"";?>>Buddha </option>
                    </select>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example4cd">Asal Sekolah</label>
                      <input type="text" name="asal_sekolah"value="<?php echo $pecah['sekolah_asal'];?>"id="form3Example4cd"  class="form-control" />
                    </div>
                  </div>
                  
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example4cd">Alamat</label>
                      <textarea class="form-control"  name="alamat" id="exampleFormControlTextarea1" rows="3"><?php echo $pecah['alamat'];?></textarea>
                    </div>
                  </div>
                  
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example4cd">Nomer HP</label>
                      <input type="number" value="<?php echo $pecah['no_hp'];?>" name="no_hp" id="form3Example4cd" class="form-control" />
                    </div>
                  </div>
                

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button  type="submit" name="ubah" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg">Ubah</button>
                  </div>
                </form>
              </div>
              <!-- <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                <img src="assets/images.jfif"
                  class="img-fluid" alt="Sample image">
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
  echo $sql;
  $simpan = $koneksi->query($sql);
  if ($simpan) {
    echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
    echo "<script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        });
        
        Toast.fire({
            icon: 'success',
            title: 'Berhasil Mengubah Data'
        }).then(() => {
            // Setelah animasi selesai, arahkan ke halaman lain
            window.location.href = 'listSiswa.php';
        });
    </script>";
  }
}


?>