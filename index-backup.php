<?php
#Memulakan fungsi session
session_start();

# Memanggil fail header.php dan fail connection.php
include('header.php');
include('connection.php');
?>


<h3 style='align-items:center'>TAWARAN TELEFON BIMBIT TERMURAH</h3>
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
    # TO BE MODIFIED - REFERANCE : PRODUCT BOX
    echo "<table border='1'>";

    #Pembolehubah $n mengambil data yang ditemui
    while($n=mysqli_fetch_array($laksana_pilihan)){
        # memaparkan semula data diambil oleh pembolehubah $n
        echo " <tr>
                  <td><img width='200px' height='200px' src='img/".$n['gambar']."'></td>
                  <td style='width:200px'>
                      <b style='text-align: center;'> ".$n['jenama_barang']."</b><br style='text-align: center;'>
                          ".$n['nama_barang']." <br style='text-align: center;'>
                          ".$n['storan']." <br style='text-align: center;'>
                          RM ".$n['harga']."
                  </td>
                </tr>";
    }
    echo "</table>";
    # END TO BE MODIFIED - REFERANCE : PRODUCT BOX
}
?>
<?php include ('footer.php'); ?>