<?php
$str = 'яблоко груша виноград апельсин';
echo ' ' . $str;
$array = explode(" ", $str);
echo '<br/>';
foreach ($array as $key => $value) {
    echo  '<br/>';
    echo "\$array[$key] => $value\n";
}
echo  '<br/>';
echo  '<br/>';
echo 'Перевернули массив';
$stroka = '';
$reversed = array_reverse($array);
foreach ($reversed as $key => $value) {
    echo  '<br/>';
    echo "\$reserved[$key] => $value\n";
    $stroka = $stroka .$value.', ';
}
echo  '<br/>';
echo  '<br/>';
echo 'Склеили';
echo  '<br/>';
echo ' '. $stroka;
?>