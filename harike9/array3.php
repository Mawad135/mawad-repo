<?php

$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
var_dump($car);

echo "<br><hr>";
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
echo $car["model"];

echo "<br><hr>";
$car=array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
foreach ($car as $x => $y){
    echo "$x: $y <br>";
}