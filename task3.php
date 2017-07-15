<?php
define("NUM", 3500, true);
if (defined("NUM") == true) {
    echo "Константа num объявлена!";
}
echo "<br/>";
echo 'Константа равна ' . NUM . '.';
echo "<br/>";
echo 'Пробуем переопределить ее...';
echo "<br/>";
define("NUM", 300, true);
echo "<br/>";
if (NUM == 3500) {
    echo 'Не вышло:(';
}
?>