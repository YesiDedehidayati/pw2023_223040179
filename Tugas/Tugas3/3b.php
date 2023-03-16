<?php
function urutanangkaa($angka){
    $h =1;
    for($i =1; $i <=$angka; $i++) {
      for ($u =1; $u <= $i; $u++){
        echo $h . " ";
        $h++;
      } 
      echo "<br>";
    }
}
urutanangkaa(5);
?>