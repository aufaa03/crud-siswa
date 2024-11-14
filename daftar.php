<?php
require 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Pendaftaran Siswa</title>
    
</head>
<body>
<section style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-10">
        <div class="card text-black m-5" style="border-radius: 25px;">
          <div class="card-body">
            <div class="row justify-content-center">
              <div class="col-md-10">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Pendaftaran</p>

                <form action="#" method="POST">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example1c">Nama</label>
                      <input type="text" name="nama" id="form3Example1c" class="form-control" required />
                    </div>
                  </div>
                  
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example1c">Jenis Kelamin</label>
                    <select class="form-select" name="jk" aria-label="Default select example" required>
                        <option selected>pilih</option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="perempuan">perempuan</option>
                    </select>
                  </div>
                </div>
                
                <div class="d-flex flex-row align-items-center mb-4">
                  <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                  <div data-mdb-input-init class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example4c">Agama</label>
                    <select class="form-select" name="agama" aria-label="Default select example">
                        <option selected>pilih</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha </option>
                    </select>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example4cd">Asal Sekolah</label>
                      <input type="text" name="asal_sekolah" id="form3Example4cd" required class="form-control" />
                    </div>
                  </div>
                  
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example4cd">Alamat</label>
                      <textarea class="form-control" required name="alamat" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                  </div>
                  
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example4cd">Nomer HP</label>
                      <input type="number" required name="no_hp" id="form3Example4cd" class="form-control" />
                    </div>
                  </div>
                

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button  type="submit" name="daftar" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg">Daftar</button>
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
if (isset($_POST['daftar'])) {
  $nama = $_POST['nama'];
  $jk = $_POST['jk'];
  $agama = $_POST['agama'];
  $asl_sklh = $_POST['asal_sekolah'];
  $alamat = $_POST['alamat'];
  $hp = $_POST['no_hp'];
  //query
   $query = "INSERT INTO siswa (nama, jk, agama, sekolah_asal, alamat, no_hp)
             VALUES ('$nama', '$jk', '$agama', '$asl_sklh', '$alamat', '$hp')";
   $simpan = $koneksi->query($query);
   if ($simpan) {
    echo '<script>
       window.location.href = "index.php?status=sukses";
</script>';
// header(`location : index.php`);
 } else {

   echo '<script>
   window.location.href = "index.php?status=gagal";
   </script>';
   }
}



?>