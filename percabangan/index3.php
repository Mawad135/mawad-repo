<?php

// berat badan->IMT //

$IMT=40;

if($IMT< 18.5){
    $keterangan="kurus";
}
elseif($IMT <25){
    $keterangan="normal";
}
elseif($IMT <30){
    $keterangan="overweight";
}
else{
    $keterangan="obesitas";
}
$kategori="$IMT:$keterangan";
echo $kategori;