<?php
# Memulakan fungsi session
session_start();

# Memanggil fail header.php
include ('header.php');

?>

<!-- Tajuk antaramuka -->
<h3> Pendaftaran pembeli baru </h3>

<!-- Borang Pendaftaran staff baru -->
<!--
<form action = 'pembeli-signup-proses.php' method = 'POST'>

    Nama Pembeli <input type = 'text' name = 'nama' required> <br>
    NoKp Pembeli <input type = 'text' name = 'nokp' required> <br>
    Katalaluan <input type = 'password' name = 'katalaluan' required> <br>
                <input type = 'submit' value='Daftar'>
</form>
-->

<!-- Borang Pendaftaran staff baru -->
<link rel="stylesheet" href="mystyle.css">
<body>
<div class="container">
    <div class="title">PENDAFTARAN PEMBELI</div>
    <div class="content">
      <form action="pembeli-signup-proses.php" method = 'POST'>
        <div class="user-details">
          <div class="input-box">
            <span class="details">Nama Penuh Pengguna</span>
            <input type="text" name = 'nama' placeholder="Masukkan Nama Penuh" required>
          </div>
          <div class="input-box">
            <span class="details">No. Kad Pengenalan Pengguna</span>
            <input type="text" name = 'nokp' placeholder="Masukkan No Kad Pengenalan" required>
          </div>
          <div class="input-box">
            <span class="details">Kata laluan Pengguna</span>
            <input type="password" name = 'katalaluan' placeholder="Masukkan kata laluan pengguna" required>
          </div>
        <div class="button">
          <input type="submit" value="Daftar">
        </div>
       </div>
      </form>
    </div>
  </div>

</body>
<?php include ('footer.php'); ?>