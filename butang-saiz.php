<!-- Fungsi mengubah saiz tulisan bagi kepelbagaian pengguna -->
<script>

    function ubahsaiz(gandaan) {
        //mendapatkan saiz semasa tulisan pada jadual
        var saiz = document.getElementById("saiz");
        var saiz_semasa = saiz.style.fontSize || 1;

    /* Menyemak jika pengguna menekan butang, nilai yang akan dihantar
    butang reset - nilai 2 dihantar - kembali kepada saiz asal tulisan
    butang + - nilai 1 dihantar - besarkan saiz tulisan
    butang - - nilai -1 dihantar - kecilkan saiz tulisan
    */

    if(gandaan==2)
    {
        saiz.style.fontSize = "1em";
    }
    else 
    {
        saiz.style.fontSize = ( parseFloat(saiz_semasa) + (gandaan * 0.2)) + "em";
    }
}
</script>

<!-- Kod untuk butang mengubah saiz tulisan -->
 UBAH SAIZ TULISAN |
<input id="button-saiz" style='background-color: red;' name='reSize1' type='button' value='RESET' onclick="ubahsaiz(2)" />
<input id="button-saiz" style='background-color: green;' name='reSize' type='button' value='&nbsp;+&nbsp;' onclick="ubahsaiz(1)" />
<input id="button-saiz" style='background-color: green;' name='reSize' type='button' value='&nbsp;-&nbsp;' onclick="ubahsaiz(-1)" />
|
<button id="button-saiz" onclick="window.print()">CETAK</button>
<br>

<style>
#button-saiz {
 align-items: center;
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

#button-saiz:hover,
#button-saiz:focus {
 border-color: rgba(0, 0, 0, 0.15);
 box-shadow: rgba(0, 0, 0, 0.1) 0 4px 12px;
 color: rgba(0, 0, 0, 0.65);
}

#button-saiz:hover {
 transform: translateY(-1px);
}

#button-saiz:active {
 background-color: #F0F0F1;
 border-color: rgba(0, 0, 0, 0.15);
 box-shadow: rgba(0, 0, 0, 0.06) 0 2px 4px;
 color: rgba(0, 0, 0, 0.65);
 transform: translateY(0);
}
</style>