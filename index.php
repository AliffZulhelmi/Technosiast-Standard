<?php
#Memulakan fungsi session
session_start();

# Memanggil fail header.php dan fail connection.php
include('header.php');
include('connection.php');
?>

<hr>
<h3>Tawaran Telefon Bimbit Termurah</h3>
<?php
# arahan SQL untuk memaparkan secara rawak
# 10 barangan yang ada dalam pangkalan data
$sql_pilihan = '
SELECT* FROM telefon, jenama
WHERE telefon.KodJenama = jenama.KodJenama
group by telefon.NamaBarang
ORDER BY rand() limit 5 ';

# melaksanakan arahan sql_pilihan
$laksana_pilihan = mysqli_query($condb,$sql_pilihan);

# jika tiada data yang dijumpai
if(mysqli_num_rows($laksana_pilihan)==0){

    # papar Tiada barangan yang telah direkodkan
    echo "Tiada barangan yang direkodkan";
}
else{
    echo "<hr>";
    #jika terdapat barangan yang ditemui
    #papar dalam bentuk jadual.
    echo "<table border='1'>";

    #Pembolehubah $n mengambil data yang ditemui
    while($n=mysqli_fetch_array($laksana_pilihan)){
        # memaparkan semula data diambil oleh pembolehubah $n
        echo " <tr>
                  <td><img width='50%' src='img/".$n['gambar']."></td>
                  <td>
                      <b> ".$n['NamaJenama']."</b><br>
                          ".$n['NamaBarang']." <br>
                          ".$n['Storan']." <br>
                          RM ".$n['Harga']."
                  </td>
                </tr>";
    }
    echo "</table>";
}
?>
<?php include ('footer.php'); ?>
