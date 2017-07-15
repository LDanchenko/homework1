<?php
echo '<style>';
include "style.css";
echo '</style>';
$numbers = array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10');
echo "<table><tr>";
for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        if (($i % 2 == 0) and ($j % 2 == 0)) {
            echo '<td>' . '(' . ($i * $j) . ')' . '</td>';
        } elseif (($i % 2 != 0) and ($j % 2 != 0)) {
            echo '<td>' . '[' . ($i * $j) . ']' . '</td>';
        } else {
            echo '<td>' . ($i * $j) . '</td>';
        }
    }
    if ($i != 10) {
        echo "</tr><tr>";
    }
}
echo "</tr></<table>";
?>