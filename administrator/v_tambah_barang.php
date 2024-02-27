<?php
session_start();
//cek session 
if ($_SESSION['login'] != 'admin') {
  //kembali ke halaman login
  header('location: ../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Barang</title>
</head>

<body>
  <?php include "navbar.php"; ?>
  <div class="container">


    <h1>Tambah Barang</h1>
    <form action="m_tambah_barang.php" method="post">
      <table>
        <tr>
          <td>Nama Barang</td>
          <td>:</td>
          <td><input type="text" name="nama_barang" id=""></td>
        </tr>
        <tr>
          <td>Stok Barang</td>
          <td>:</td>
          <td><input type="text" name="stok_barang" id=""></td>
        </tr>
        <tr>
          <td>Harga</td>
          <td>:</td>
          <td><input type="text" name="harga_barang" id=""></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td><input type="submit" value="Simpan"></td>
        </tr>
      </table>
  </div>
</body>

</html>