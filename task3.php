<?php
define("num", 3500, true);
if (defined("num") == true)
    echo "Константа num объявлена!";
    echo "<br/>";
    echo 'Константа равна ' .num .'.';
echo "<br/>";
echo 'Пробуем переопределить ее...';
echo "<br/>";
define("num", 300, true);
echo "<br/>";
    if (num==3500) echo 'Не вышло:(';
?>