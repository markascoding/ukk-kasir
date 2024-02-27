<?php
session_start();
//cek session 
if ($_SESSION['login'] != 'petugas') {
  //kembali ke halaman login
  header('location: ../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Pelanggan Baru</title>
</head>

<body>
  <?php include "navbar.php" ?>
  <div class="container">

    <h1>Tambah Pelanggan Baru</h1>
    <form action="m_tambah_pelanggan.php" method="post">
      <input type="hidden" name="id_login" value="<?= $_SESSION['id_login'] ?>">
      <table>
        <tr>
          <td>Id Pelanggan</td>
          <td>:</td>
          <td><input type="text" class="form-control" name="id_pelanggan" id="" value="<?= date('mis'); ?>"></td>
        </tr>
        <tr>
          <td>Nama</td>
          <td>:</td>
          <td><input type="text" class="form-control" name="nama_pelanggan" id=""></td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td>:</td>
          <td><input type="text" class="form-control" name="alamat_pelanggan" id=""></td>
        </tr>
        <tr>
          <td>Telepon</td>
          <td>:</td>
          <td><input type="text" class="form-control" name="telepon_pelanggan" id=""></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td><input type="submit" value="Simpan" class="btn btn-info"></td>
        </tr>
      </table>
    </form>
  </div>

</body>

</html>