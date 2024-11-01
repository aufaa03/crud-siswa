<?php 

$koneksi = new mysqli("localhost", "root", "", "ppdb");
if ($koneksi->connect_error) {
    echo "gagal";
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>