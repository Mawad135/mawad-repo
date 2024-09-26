<?php

$dataPersegiPanjang=array( array("nama"=>"persegi1","panjang"=>"56", "lebar"=>"23"),
array("nama"=>"persegi2","panjang"=>"33", "lebar"=>"21"),
array("nama"=>"persegi3","panjang"=>"65", "lebar"=>"42"),
array("nama"=>"persegi4","panjang"=>"73", "lebar"=>"29"),
);

$jsonData=json_encode($dataPersegiPanjang,JSON_PRETTY_PRINT);
echo "<pre>".$jsonData."</pre>";

echo "<br><hr>";
// Data persegi panjang 
$persegiPanjang = [
    ["persegi1", 56, 23],
    ["persegi2", 33, 21],
    ["persegi3", 65, 42],
    ["persegi4", 56, 23],
];

for ($i = 0; $i < count($persegiPanjang); $i++) {
    $luas = $persegiPanjang[$i][1] * $persegiPanjang[$i][2];
    $persegiPanjang[$i][] = $luas;
}

echo "<table>";
echo "<tr><th> Persegi Panjang </th><th> Panjang </th><th> Lebar </th><th> Luas </th></tr>";
foreach ($persegiPanjang as $persegi) {
    echo "<tr>";
    echo "<td>" . $persegi[0] . "</td>";
    echo "<td>" . $persegi[1] . "</td>";
    echo "<td>" . $persegi[2] . "</td>";
    echo "<td>" . $persegi[3] . "</td>";
    echo "</tr>";;
}
echo "</table>";