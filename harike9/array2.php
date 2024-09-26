<?php

$nama=array("Andi","Budi","Candra","Dedi","Emon");
foreach ($nama as $n){
  echo $n. '<br>';
}

echo "<br><hr>";
$nama[4]="Hafiz";
foreach ($nama as $n){
  echo $n. "<br>";
}