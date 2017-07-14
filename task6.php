<?php

/*
$bmw["model"] = "X5";
$bmw["speed"] = 120;
$bmw["doors"] = 5;
$bmw["year"] = "2015";
*/

//mnogomernui asociativnui massiv
$Car["bmw"] = array("model" => "X5", "speed" => "120", "doors" => "5", "year" => "2015");
$Car["toyota"] = array("model" => "Camry", "speed" => "150", "doors" => "5", "year" => "2013");
$Car["opel"] = array("model" => "Astra", "speed" => "130", "doors" => "4", "year" => "2016");


foreach ($Car as $key => $value)
{
    echo 'CAR ' .$key . '<br/>';
    echo $value['model'], ' ', $value['speed'], ' ', $value['doors'], ' ' , $value['year'],  '<br />';
    echo  '<br/>';
}

?>

