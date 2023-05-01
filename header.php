<!-- style css-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300;400&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
<link rel="stylesheet" href="mystyle.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@500&display=swap" rel="stylesheet">
<style>
      hr {
        position: relative;
        top: 20px;
        border: none;
        height: 3px;
        background: gray;
        margin-bottom: 50px;
      };

      /* BUTTON */
      #button-papar {
 align-items: center;
 background-color: #FFFFFF;
 border: 1px solid rgba(0, 0, 0, 0.1);
 border-radius: .25rem;
 box-shadow: rgba(0, 0, 0, 0.02) 0 1px 3px 0;
 box-sizing: border-box;
 color: rgba(0, 0, 0, 0.85);
 cursor: pointer;
 display: inline-flex;
 font-family: system-ui,-apple-system,system-ui,"Helvetica Neue",Helvetica,Arial,sans-serif;
 font-size: 16px;
 font-weight: 600;
 justify-content: center;
 line-height: 0.6;
 min-height: 0.1rem;
 padding: calc(.875rem - 1px) calc(1.5rem - 1px);
 text-decoration: none;
 transition: all 250ms;
 user-select: none;
 -webkit-user-select: none;
 touch-action: manipulation;
 vertical-align: baseline;
 width: auto;
}

#button-papar:hover,
#button-papar:focus {
 border-color: rgba(0, 0, 0, 0.15);
 box-shadow: rgba(0, 0, 0, 0.1) 0 4px 12px;
 color: rgba(0, 0, 0, 0.65);
}

#button-papar:hover {
 transform: translateY(-1px);
}

#button-papar:active {
 background-color: #F0F0F1;
 border-color: rgba(0, 0, 0, 0.15);
 box-shadow: rgba(0, 0, 0, 0.06) 0 2px 4px;
 color: rgba(0, 0, 0, 0.65);
 transform: translateY(0);
}
</style>

<!-- tajuk sistem. Akan dipaparkan disebelah atas -->
<h1 class='brand'>TECHNOSIAST STORE</h1>
<p class='tagline'>Pilih telefon anda disini, tapi nanti belilah di kedai kami</p> 
<!-- <img class= 'respon' style='width:100%;height:auto;' src='img/Banner Technostore.png'> -->
<hr>
<!-- Bahagian Menu Asas.
     Menu terbahagi kepada 3 jenis iaitu
    1. Menu staff dimana staff dapat akses semua perkara
    2. Menu pembeli dimana pembeli hanya boleh memilih barangan tetapi pembeli perlu login dahulu
    3. Menu di laman utama - bagi pelawat yang tidak login pelawat tidak dapat memilih barangan
 -->
 <?php
 # Menu staff : dipaparkan sekiranya staff telah login
 if(!empty($_SESSION['tahap']) and $_SESSION['tahap'] == 'staff') 
 {
    echo "
    <br>
    <a href='index.php' class='lmn-btn'>Laman Utama</a>
    <a href='senarai-pembeli.php' class='lmn-btn'>Senarai Pembeli</a>
    <a href='senarai-staff.php' class='lmn-btn'>Senarai Staff</a>
    <a href='senarai-barang.php' class='lmn-btn'>Senarai Barang</a>
    <a href='logout.php' class='lmn-btn'>Logout</a>
    <br>
    <br>
    <hr>";
 }
 # Menu pembeli : dipaparkan sekiranya pembeli telah login
 else if(!empty($_SESSION['tahap']) and $_SESSION['tahap'] == "pembeli")
 {
    echo "
    <br>
    <a href='index.php' class='lmn-btn'>Laman Utama</a>
    <a href='pembeli-pilih.php' class='lmn-btn'>Perbandingan Barang</a>
    <a href='logout.php' class='lmn-btn'>Logout</a>
    <br>
    <hr>";
 }
 else {
   #menu Laman Utama : dipaparkan sekiranya staff atau pembeli tidak login
   echo "
    <br>
    <a href='index.php' class='lmn-btn'>Laman Utama</a>
    <a href='pembeli-signup-borang.php' class='lmn-btn'>Pengguna Baru</a>
    <a href='pembeli-login-borang.php' class='lmn-btn'>Login Pengguna</a>
    <a href='staff-login-borang.php' class='lmn-btn'>Login Staff</a>
    <br>
    <hr>";
 }
 ?>