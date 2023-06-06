<?php
# Memulakan fungsi session
session_start();

# Memanggil fail header.php
include('header.php');
include('guard-staff.php');
?>

<!-- Tajuk antaramuka -->
<div style="text-align: center;">
  <h3>Pendaftaran Jenama Baru</h3>
</div>

<!-- Borang pendaftaran jenama baru -->
<form action="barang-jenama-proses.php" method="POST" style="max-width: 500px; margin: 0 auto;">
  <div style="background-color: #ffffff; padding: 20px; border-radius: 5px;">
    <label for="kod_jenama">Kod Jenama</label>
    <input type="text" name="kod_jenama" required style="width: 100%; padding: 10px; margin-bottom: 10px;">

    <label for="jenama_barang">Jenama Barang</label>
    <input type="text" name="jenama_barang" required style="width: 100%; padding: 10px; margin-bottom: 10px;">

    <div style="text-align: center;">
    <input type="submit" value="Daftar" style="background-color: #000000; color: #ffffff; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">
    </div>
  </div>
</form>

<?php include('footer.php'); ?>
