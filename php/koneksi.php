<?php
$password = "";
$nama_data_base="praktikum mg 4";

$koneksi= mysqli_connect("localhost", "root", $password, $nama_data_base);

if (!$koneksi){
    die('gagal melakukan koneksi');
}
?>