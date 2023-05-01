<?php
#Memulakan fungsi session
session_start();

# Memanggil fail header.php dan fail connection.php
include('header.php');
include('connection.php');
include('slideshow.php')
?>


<h3 style='text-align:center;font-family: "EB Garamond", serif;'>TAWARAN TELEFON BIMBIT TERMURAH</h3>
<?php
# arahan SQL untuk memaparkan secara rawak
# 10 barangan yang ada dalam pangkalan data
$sql_pilihan = '
SELECT* FROM telefon, jenama
WHERE telefon.kod_jenama = jenama.kod_jenama
group by telefon.nama_barang
ORDER BY rand() limit 5 ';

# melaksanakan arahan sql_pilihan
$laksana_pilihan = mysqli_query($condb,$sql_pilihan);

# jika tiada data yang dijumpai
if(mysqli_num_rows($laksana_pilihan)==0){

    # papar Tiada barangan yang telah direkodkan
    echo "Tiada barangan yang direkodkan";
}
else{


    #Pembolehubah $n mengambil data yang ditemui
    while($n=mysqli_fetch_array($laksana_pilihan)){
        # memaparkan semula data diambil oleh pembolehubah $n

            echo '<a href="senarai-barang.php">';
            echo '<div class="product">';
            echo '<img width="200px" height="200px" src="img/' . $n["gambar"] . '">';
            echo '<h2>' . $n["nama_barang"] . '</h2>';
            echo '<p>Storan : ' . $n["storan"] . 'GB</p>';
            echo '<p1>Harga : RM' . $n["harga"] . '</p1>';
            echo '</div>';
            echo '</a>';
            echo '  <style>
            .product {
              display: inline-block;
              margin: 10px;
              border: 1px solid #ccc;
              padding: 10px;
              text-align: center;
              width: 200px;
              transition: all 0.6s ease;
              position: relative;
            }

            .product:hover {
                transform: scale(1.05);
                box-shadow: 0px 0px 10px #ccc;
                background-color: #f2f2f2;
              }
            
            .product h2 {
                color: black;
                font-size: 18px;
                margin-top: 10px;
                position: relative;
                display: inline-block;
                z-index: 1;
              }

            .product h2::after {
                color: blue;
                content: "";
                position: absolute;
                height: 1px;
                bottom: -2px;
                left: 0;
                background-color: #000;
                visibility: hidden;
                transform: scaleX(0);
                transition: all 0.3s ease-in-out 0s;
                z-index: -1;
              }

            .product:hover h2::after {
                color: blue;
                visibility: visible;
                transform: scaleX(1);
                width: 100%;
              }
            
            .product p {
              color: black;
              margin: 10px 0;
              font-size: 15px;
            }

            .product p1 {
                margin: 10px 0;
                font-size: 16px;
                font-weight: bold;
                color: red;
              }
          </style>';
          }
    # END TO BE MODIFIED - REFERANCE : PRODUCT BOX
}
?>
<?php include ('footer.php'); ?>