<?php
$numbers = array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10');
echo "<table><tr>";

for ( $i = 1; $i <= 10; $i++) {

    for ( $j =1; $j <=10 ; $j++)
        if (($i%2==0) and ($j%2==0)){
            echo  '<td width = 80 align="center">' . '('. ($i * $j) . ')'. '</td>'; }
    else if (($i%2!=0) and ($j%2!=0)){
        echo  '<td width = 80 align="center">' . '['. ($i * $j) . ']'. '</td>'; }
    else echo  '<td width = 80 align="center">' .  ($i * $j) .  '</td>';
            if ($i != 10) echo "</tr><tr>";

}
echo "</tr></<table>";


?>