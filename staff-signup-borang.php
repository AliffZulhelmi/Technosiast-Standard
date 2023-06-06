<?php
# Memulakan fungsi SESSION
session_start();

# Memanggil fail header.php dan guard-staff.php
include('header.php');
include('guard-staff.php');
?>

<!-- Tajuk antaramuka -->
<div style="text-align: center;">
<h3>Pendaftaran Staff Baru</h3>
</div>

<!-- Borang Pendaftaran staff baru -->
<form action="staff-signup-proses.php" method="POST" style="max-width: 500px; margin: 0 auto;">
  <div style="background-color: #ffffff; padding: 20px; border-radius: 5px; text-align: center;">
    <label for="nama">Nama Staff</label>
    <input type="text" name="nama" required style="width: 100%; padding: 10px; margin-bottom: 10px;">

    <label for="nokp">No. K.P. Staff</label>
    <input type="text" name="nokp" required style="width: 100%; padding: 10px; margin-bottom: 10px;">

    <label for="katalaluan">Kata Laluan</label>
    <input type="password" name="katalaluan" required style="width: 100%; padding: 10px; margin-bottom: 10px;">

    <input type="submit" value="Daftar" style="background-color: #000000; color: #ffffff; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">
  </div>
</form>

<?php include('footer.php'); ?>
