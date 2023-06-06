<?php
# Memulakan fungsi session
session_start();

# Memanggil fail header dan fail guard-staff.php
include('header.php');
include('guard-staff.php');

# Menyemak kewujudan data GET. Jika data GET empty, buka fail senarai-staff
if (empty($_GET)) {
    die("<script>window.location.href='senarai-staff.php';</script>");
}
?>

<div style="text-align: center;">
  <h3>Kemaskini Staff Baru</h3>
</div>
<!-- 
    Borang yang akan digunakan untuk menukar maklumat staff.
    Pada setiap input pengguna akan diumpukan dengan value
    yang akan diambil dari data GET yang telah dihantar dari 
    fail senarai-staff.php
-->
<form action="staff-kemaskini-proses.php?nokp_lama=<?= $_GET['nokp'] ?>" method="POST" style="max-width: 500px; margin: 0 auto;">
  <div style="background-color: #ffffff; padding: 20px; border-radius: 5px; text-align: center;">
    <label for="nama">Nama</label>
    <input type="text" name="nama" value="<?= $_GET['nama'] ?>" required style="width: 100%; padding: 10px; margin-bottom: 10px;" >

    <label for="nokp">No. K.P.</label>
    <input type="text" name="nokp" value="<?= $_GET['nokp'] ?>" required style="width: 100%; padding: 10px; margin-bottom: 10px;">

    <label for="katalaluan">Kata Laluan</label>
    <input type="text" name="katalaluan" value="<?= $_GET['katalaluan'] ?>" required style="width: 100%; padding: 10px; margin-bottom: 10px;" >

    <input type="submit" value="Kemaskini" style="background-color: #000000; color: #ffffff; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">

  </div>
</form>

<?php include('footer.php'); ?>
