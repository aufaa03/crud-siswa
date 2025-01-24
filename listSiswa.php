<?php
require 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>List Siswa</title>
</head>

<body>
    <section class="intro mt-5">
        <div class="container">
            <h2>Daftar peserta didik baru</h2>
            <div class="d-flex justify-content-between align-items-center" style="justify-content: space-between; gap: 200px;">
                <a href="daftar.php" class="btn btn-primary my-3" style="width:200px;">+ Tambah siswa baru</a>
                <form method="post">
                    <div class="input-group mb-3">
                        <input type="text" name="cari" class="form-control" placeholder="Cari Data Siswa">
                        <button type="submit" name="search" class="btn btn-primary ms-3">Cari</button>
                    </div>
                </form>
            </div>
            <div class="gradient-custom-1 h-100">
                <div class="mask d-flex align-items-center h-100">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="table-responsive bg-white">
                                    <table class="table mb-5">
                                        <thead>
                                            <tr>
                                                <th scope="col">NO daftar</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Jenis Kelamin</th>
                                                <th scope="col">Agama</th>
                                                <th scope="col">Asal Sekolah</th>
                                                <th scope="col">Alamat</th>
                                                <th scope="col">NO HP</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            // Kondisi awal untuk query data siswa
                                            $query = "SELECT * FROM siswa"; // Default query
                                            $totalData = 0;

                                            // Cek apakah tombol search ditekan
                                            if (isset($_POST['search'])) {
                                                $cari = trim($_POST['cari']); //trim berfungsi membersihkan string sebelum proses berlanjut
                                                if (!empty($cari)) {
                                                    // Query dengan kondisi pencarian
                                                    $query = "SELECT * FROM siswa WHERE nama LIKE '%$cari%'";
                                                }
                                            }

                                            // Eksekusi query
                                            $hasil = mysqli_query($koneksi, $query);

                                            // debuging hasil query
                                            if (!$hasil) {
                                                die('Query Error: ' . mysqli_error($koneksi));
                                            }

                                            // Menampilkan data
                                            if (mysqli_num_rows($hasil) > 0) {
                                                $no = 1;
                                                $totalData = mysqli_num_rows($hasil);
                                                while ($data = mysqli_fetch_array($hasil)) {
                                            ?>
                                                    <tr>
                                                        <th scope="row" style="color: #666666;"><?php echo $no++; ?></th>
                                                        <td><?php echo $data['nama']; ?></td>
                                                        <td><?php echo $data['jk']; ?></td>
                                                        <td><?php echo $data['agama']; ?></td>
                                                        <td><?php echo $data['sekolah_asal']; ?></td>
                                                        <td><?php echo $data['alamat']; ?></td>
                                                        <td><?php echo $data['no_hp']; ?></td>
                                                        <td>
                                                            <a href="#" onclick="confirmDelete('hapus.php?id=<?php echo $data['no_daftar']; ?>')">
                                                                <i class="bi bi-trash text-danger hover:text-primary"></i>
                                                            </a>
                                                            | 
                                                            <a href="edit.php?id=<?php echo $data['no_daftar']; ?>">
                                                                <i class="bi bi-pencil-square"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php
                                                }
                                            } else {
                                                ?>
                                                <tr>
                                                    <td colspan="8" class="text-center">Data tidak ditemukan</td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a href="index.php" class="btn btn-secondary">Kembali</a>
                                        <p class="text-center font-bold">Total Data: <?php echo $totalData; ?></p>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        function confirmDelete(deleteUrl) {
            Swal.fire({
                title: 'Anda yakin?',
                text: 'Data ini akan dihapus permanen!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = deleteUrl;
                }
            });
        }
    </script>
</body>

</html>
