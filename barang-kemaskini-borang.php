<?php
# Memulakan fungsi session
session_start();

# Memanggil fail header.php
include('header.php');
include('connection.php');
include('guard-staff.php');

# Menyemak kewujudan data GET. Jika data GET empty, buka fail senarai-barang
if (empty($_GET)) {
    die("<script>window.location.href='senarai-barang.php';</script>");
}
?>
<div style="text-align: center;">
<h3>Kemaskini Data Barang</h3>
</div>
<!-- 
    Borang yang akan digunakan untuk menukar maklumat barang.
    Pada setiap input pengguna akan diumpukan kepada value
    yang akan diambil dari data GET yang telah dihantar dari
    fail senarai-barang.php
-->

<form action="barang-kemaskini-proses.php?kod_barang_lama=<?= $_GET['kod_barang'] ?>" method="POST" style="max-width: 500px; margin: 0 auto;">
  <div style="background-color: #ffffff; padding: 20px; border-radius: 5px; text-align: center;">
    <img src="img/<?= $_GET['gambar'] ?>" width="10%"><br>
    <label for="jenama_barang">Jenama Barang:</label> <?= $_GET['jenama_barang'] ?><br>
    <label for="nama_barang">Nama Barang:</label> <?= $_GET['nama_barang'] ?><br>
    <label for="storan">Storan:</label> <?= $_GET['storan'] ?>GB<br>

    <label for="harga">Harga</label>
    <input type="number" name="harga" value="<?= $_GET['harga'] ?>" required style="width: 100%; padding: 10px; margin-bottom: 10px;">

    <input type="submit" value="Kemaskini" style="background-color: #000000; color: #ffffff; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">

  </div>
</form>

<?php include('footer.php'); ?>
