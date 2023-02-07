<?php
# Menyemak nilai pembolehubah session['tahap']
if($_SESSION['tahap'] != 'pembeli')
{
    # Jika nilainya tidak sama dengan pembeli. Aturcara akan dihentikan
    die('<script>alert("sila login");
    window.location.href="logout.php";</script>');
}
?>