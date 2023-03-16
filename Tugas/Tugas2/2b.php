<?php 
echo "<table>";

for ($i = 1; $i <= 10; $i++){
    echo "<tr>";
    for ($p = 1; $p <= $i; $p++){
        echo "<td> $p </td>";
    }
    echo"</tr>";
}
echo "</table>"
?>