<?php
$numbers = array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10');
echo "<table>";
for ($i = 1; $i <= 10; $i++) {
    echo '<tr>';
    for ($j = 1; $j <= 10; $j++) {
        echo '<td width = 80 align="center" >';
        if (($i % 2 == 0) and ($j % 2 == 0)) {
            echo '(' . ($i * $j) . ')';
        } elseif (($i % 2 != 0) and ($j % 2 != 0)) {
            echo '[' . ($i * $j) . ']';
        } else {
            echo '' . ($i * $j);
        }
        echo '</td>';
    }
    echo "</tr>";
}
echo "</tr></<table>";
?>