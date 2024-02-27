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
  <title>Penjualan</title>
</head>

<body>
  <?php include "navbar.php" ?>
  <div class="container">
    <h1>Daftar Pelanggan</h1>
    <a href="v_tambah_pelanggan.php" class="btn btn-success">Tambah Pelanggan</a>
    <br>
    <br>
    <table class="table table-striped table-hover">
      <tr>
        <td>ID Pelanggan</td>
        <td>Nama</td>
        <td>Alamat</td>
        <td>Telepon</td>
        <td colspan="2">Aksi</td>
      </tr>
      <?php
      //ambil koneksi
      include "../config.php";
      //ambil data di tb_pelanggan
      $sql = mysqli_query($koneksi, 'SELECT * FROM tb_pelanggan ORDER BY id_pelanggan ASC');
      foreach ($sql as $pelanggan) {
      ?>
        <tr>
          <td><?= $pelanggan['id_pelanggan'] ?> </td>
          <td><?= $pelanggan['nama_pelanggan'] ?></td>
          <td><?= $pelanggan['alamat_pelanggan'] ?></td>
          <td><?= $pelanggan['telepon_pelanggan'] ?></td>
          <td><a class="btn btn-danger" onclick="return confirm('Yakin Hapus?')" href="m_hapus_pelanggan.php?id_pelanggan=<?= $pelanggan['id_pelanggan'] ?>">Hapus</a></td>
          <td><a class="btn btn-primary" href="v_detail_penjualan.php?id_pelanggan=<?= $pelanggan['id_pelanggan'] ?>">Beli</a></td>
        </tr>
      <?php } ?>
    </table>
  </div>
</body>

</html>