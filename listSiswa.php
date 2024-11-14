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
    <title>Document</title>
</head>

<body>
    <section class="intro mt-5">
        <div class="container">
            <h2>Daftar peserta didik baru</h2>
            <a href="daftar.php" class="btn btn-primary my-3">+ Tambah siswa baru</a>
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
                                                <th scope="col">nama</th>
                                                <th scope="col">Jenis Kelamin</th>
                                                <th scope="col">Agama</th>
                                                <th scope="col">Asal sekolah</th>
                                                <th scope="col">Alamat</th>
                                                <th scope="col">NO HP</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        $query = "SELECT * FROM siswa";
                                        $hasil = $koneksi->query($query);
                                        while ($data = mysqli_fetch_array($hasil)) {
                                        ?>
                                            <tbody>
                                                <tr>
                                                    <th scope="row" style="color: #666666;"><?php echo $data['no_daftar']; ?></th>
                                                    <td><?php echo $data['nama']; ?></td>
                                                    <td><?php echo $data['jk']; ?></td>
                                                    <td><?php echo $data['agama']; ?></td>
                                                    <td><?php echo $data['sekolah_asal']; ?></td>
                                                    <td><?php echo $data['alamat']; ?></td>
                                                    <td><?php echo $data['no_hp']; ?></td>
                                                    <td><a href="#" onclick="confirmDelete('hapus.php?id=<?php echo $data['no_daftar']; ?>')">
                                                            <i class="bi bi-trash text-danger hover:text-primary"></i>
                                                        </a>
                                                        | <a href="edit.php?id=<?php echo $data['no_daftar']; ?>"><i class="bi bi-pencil-square"></i></a></td>
                                                <?php } ?>
                                                </tr>
                                            </tbody>
                                    </table>
                                    <p class="text-center font-bold">Total Data : <?php echo mysqli_num_rows($hasil); ?></p>
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
            // Menampilkan SweetAlert2 konfirmasi
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
                    // Jika klik "Ya", arahkan ke URL yang berisi ID untuk hapus
                    window.location.href = deleteUrl;
                }
            });
        }
    </script>
</body>

</html>