<?php
$drawing = 80;
$markers = 23;
$pencils = 40;
$paints = 0;

echo 'Всего рисунков = ' .$drawing;
echo  '<br/>';
echo 'Нарисовано фломастерами = ' .$markers;
echo  '<br/>';
echo 'Нарисовано каранадшами = ' .$pencils;
echo  '<br/>';
echo 'Нарисовано красками = ?';
echo  '<br/>';

$paints = $drawing - $markers - $pencils;
echo ' ' .$drawing. ' - ' .$markers . ' - ' . $pencils . ' = ' . $paints;
echo  '<br/>';
echo 'Ответ: ' .$paints . ' рисунков выполнили красками.';

?>
