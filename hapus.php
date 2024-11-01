<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
</head>
<body>
    
</body>
</html>
<?php
require 'koneksi.php';
$no_daftar = $_GET['id'];
$sql = "DELETE FROM siswa WHERE no_daftar ='$no_daftar'";
$query = $koneksi->query($sql);
if ($query){
    echo "<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'No daftar ke $no_daftar berhasil dihapus',
        icon: 'success',
        confirmButtonText: 'OK'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = 'listSiswa.php';
        }
    });
</script>";
} else {
    
}
?>