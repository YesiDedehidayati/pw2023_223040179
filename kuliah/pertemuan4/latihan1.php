<?php
$x = 10;

function cek_genap_ganjil($angka)//parameter
{
    if ($angka % 2 == 1){
        return "$angka adalah bilangan GANJIL<br>";
    } else {
        return "$angka adalah bilangan GENAP<br>";
    }
}
    cek_genap_ganjil($x);//argument
    echo '<br>';
    echo cek_genap_ganjil(5);
    echo '<br>';
    echo cek_genap_ganjil(102);
    ?>