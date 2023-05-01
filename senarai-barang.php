<?php
# Memulakan fungsi session
session_start();

# Memanggil fail header.php, guard-staff, connection
include ('header.php');
include ('guard-staff.php');
include ('connection.php');

?>
<h3> Senarai Barang </h3>
<!-- Bahagian 1 : memaparkan borang untuk memilih jenama -->
<form action='' method='POST'>

<select name='jenama'>
    <option selected disabled> Sila pilih jenama</option>
    <?php
        $sql_jenama = "select * from jenama order by jenama_barang";
        $laksana_carian = mysqli_query($condb,$sql_jenama);
        while($m=mysqli_fetch_array($laksana_carian)){
            echo "<option value='".$m['jenama_barang']."'>".$m['jenama_barang']."</option>";
        }
    ?>
</select>

    </select> <input id="button-papar" type='submit' value='Papar'>


</form>
<a id="button-papar" href='barang-daftar-borang.php'>Daftar Barang Baru</a>

<!-- Memanggil fail butang-saiz bagi membolehkan pengguna mengubah saiz tulisan -->
<?php include ('butang-saiz.php'); ?>
<br>;
<?php

# syarat tambahan yang akan dimasukkan dalam arahan(query) senarai barang
$tambahan="";
if(!empty($_POST['jenama']))
{
    $tambahan= "and jenama.jenama_barang = '".$_POST['jenama']."'";
}
# Arahan query untuk mencari senarai nama barang dan susun menaik mengikut harga
$arahan_papar="select * from telefon, jenama, staff
WHERE
        telefon.kod_jenama = jenama.kod_jenama
and     telefon.nokp_staff = staff.nokp_staff
    $tambahan
ORDER BY telefon.kod_barang DESC ";

# Laksanakan arahan mencari data barang
$laksana = mysqli_query($condb,$arahan_papar);

if(mysqli_num_rows($laksana)<=0){
    echo "<br>Tiada data ditemui";
}

# Mengambil data yang ditemui
    while($m = mysqli_fetch_array($laksana))
    {
        # Umpukkan data kepada tatasusunan bagi tujuan kemaskini barang
        $data_get=array(
            'nama_barang' => $m['nama_barang'],
            'jenama_barang' => $m['jenama_barang'],
            'harga' => $m['harga'],
            'storan' => $m['storan'],
            'gambar' => $m['gambar'],
            'kod_barang' => $m['kod_barang']
        );

    # Memaparkan senarai dalam jadual
    echo '<div class="product">';
    echo '<img width="200px" height="200px" src="img/' . $m["gambar"] . '">';
    echo '<h2>' . $m["nama_barang"] . '</h2>';
    echo '<p>Storan : ' . $m["storan"] . '</p>';
    echo '<p>Harga : RM' . $m["harga"] . '</p>';

        # Memaparkan navigasi untuk kemaskini dan hapus data barang
        echo "

        <a class='w3-button w3-round-medium w3-blue' href='barang-kemaskini-borang.php?".http_build_query($data_get)."'><i class=\"fa fa-wrench w3-large\"></i></a>
        
        <a class='w3-button w3-round-medium w3-red' href='barang-padam-proses.php?kod=".$m['kod_barang']."'onClick=\"return confirm('Anda pasti anda ingin memadam data ini.')\"><i class=\"fa fa-trash w3-large\"></i></a>";

    echo '</div>';
    echo '  <style>

    .product {
    display: inline-block;
    margin: 10px;
    border: 1px solid #ccc;
    padding: 10px;
    text-align: center;
    width: 200px;
    }

    .product h2 {
    font-size: 18px;
    margin-top: 10px;
    }

    .product p {
    margin: 10px 0;
    font-size: 14px;
    }
    </style>';

    }
?>
<?php include ('footer.php'); ?>
