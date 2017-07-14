<?php
$age = rand(1, 100);
echo 'Ваш возраст: ' . $age;
echo '<br/>';
if ($age<=65 and $age>=18) {
    echo 'Вам   еще работать   и   работать';
}
elseif ($age<=17 and $age>=1) {
    echo 'Вам   ещё   рано   работать';
}
elseif ($age>65) {
    echo 'Вам   пора   на   пенсию';
}
else {
    echo 'Неизвестный   возраст';
}
?>