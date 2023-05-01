<?php
# Memulakan fungsi session
session_start();

# Memanggil fail header.php, connection.php, dan guard-staff.php
include ('header.php');
include ('connection.php');
include ('guard-staff.php');
?>

<h3> Senarai Staff</h3>

| <a id="button-papar" href='staff-signup-borang.php'>Daftar Staff Baru</a>
| <a id="button-papar" href='staff-upload-borang.php'>Muat Naik Staff</a>
|
<!-- Memanggil fail butang-saiz bagi membolehkan pengguna mengubah saiz tulisan -->
<?php include ('butang-saiz.php'); ?>
<!-- Header bagi jadual untuk memaparkan senarai staff -->
<table width='100%' border='1' id='saiz'>
    <tr>
        <td>NAMA</td>
        <td>NO KAD PENGENALAN</td>
        <td>KATA LALUAN</td>
        <td>TINDAKAN</td>
    </tr>

<?php

# Araham query untuk mencari senarai nama staff
$arahan_papar="select* from staff ";

# Laksanakan arahan mencari data staff
$laksana = mysqli_query($condb,$arahan_papar);

# Mengambil data yang ditemui
    while($m = mysqli_fetch_array($laksana))
    {
        # Umpukan data kepada tatasusunan bagi tujuan kemaskini staff
        $data_get=array(
            'nama' => $m['nama_staff'],
            'nokp' => $m['nokp_staff'],
            'katalaluan' => $m['katalaluan_staff']
        );

        # Memaparkan senarai nama dalam jadual
        echo" <tr>
        <td>".$m['nama_staff']."</td>
        <td>".$m['nokp_staff']."</td>
        <td>".$m['katalaluan_staff']."</td> ";

        #memaparkan navigasi untuk kemaskini dan hapus data staff
        echo"<td>
         <a class='w3-button w3-round-medium w3-blue' href='staff-kemaskini-borang.php?".http_build_query($data_get)."'>
         <i class=\"fa fa-wrench w3-large\"></i></a> |

        <a class='w3-button w3-round-medium w3-red' href='staff-padam-proses.php?nokp=" .$m['nokp_staff']."'
        onClick=\"return confirm('Anda pasti anda ingin memadam data ini.')\">
        <i class=\"fa fa-trash w3-large\"></i></a>

        </td>
        </tr>";
    }
?>
</table>
<?php include ('footer.php'); ?>

<style>
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