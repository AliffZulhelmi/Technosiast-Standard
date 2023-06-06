<?php
# Memulakan fungsi session
session_start();

# Memanggil fail header.php
include('header.php');
include('connection.php');
include('guard-staff.php');
?>

<!-- Tajuk antaramuka -->
<div style="text-align: center;">
  <h3>Pendaftaran Barangan Baru</h3>
</div>

<!-- Borang Pendaftaran barang baru -->
<form action="barang-daftar-proses.php" method="POST" enctype="multipart/form-data" style="max-width: 500px; margin: 0 auto;">
  <div style="background-color: #ffffff; padding: 20px; border-radius: 5px;">
    <label for="nama">Nama barang</label>
    <input type="text" name="nama" required style="width: 100%; padding: 10px; margin-bottom: 10px;">

    <label for="kod_jenama">Jenama</label>
    <select name="kod_jenama" required style="width: 100%; padding: 10px; margin-bottom: 10px;">
      <option selected disabled>Sila pilih jenama</option>
      <?php
      $sql_jenama = "select * from jenama order by jenama_barang";
      $laksana_carian = mysqli_query($condb, $sql_jenama);
      while ($m = mysqli_fetch_array($laksana_carian)) {
        echo "<option value='" . $m['kod_jenama'] . "'>" . $m['jenama_barang'] . "</option>";
      }
      ?>
    </select>
    <a href="barang-jenama-borang.php" style="color: #000000;">[+]Jenama</a><br>

    <label for="harga">Harga</label>
    <input type="number" name="harga" required style="width: 100%; padding: 10px; margin-bottom: 10px;">

    <label for="storan">Storan</label>
    <input type="number" name="storan" required style="width: 100%; padding: 10px; margin-bottom: 10px;">

    <label for="gambar">Gambar</label>
    <input type="file" name="gambar" required style="margin-bottom: 10px;">

    <div style="text-align: center;">
    <input type="submit" value="Daftar" style="background-color: #000000; color: #ffffff; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">
    </div>

  </div>
</form>

<?php include('footer.php'); ?>
