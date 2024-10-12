<?php
require 'koneksi.php';
$no_daftar = $_GET['id'];
$sql = "DELETE FROM siswa WHERE no_daftar ='$no_daftar'";
$query = $koneksi->query($sql);
if ($query){
    echo "<script>alert('no daftar ke $no_daftar berhasil dihapus')</script>";
    echo"<script> location='listSiswa.php'</script>";
    exit();
} else {
    
}
?>