<?php 

$koneksi = new mysqli("localhost", "root", "", "pendaftaran");
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>