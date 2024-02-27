<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "db_ukk_coba";

$koneksi = mysqli_connect($hostname, $username, $password, $database);


//cek koneksi
if (!$koneksi) {
  echo "GAGAL KONEKSI KE DATABASE";
}
