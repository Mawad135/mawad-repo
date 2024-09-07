<?php

//algoritma
//1.jumlah jam kerja per minggu
//2.upah = jam kerja*Rp. 2000
//3.jam lembur = jam kerja-48
//4.upah lembur = jam lembur*Rp. 3000
//5.upah normal = 48*Rp. 2000
//6.total upah = upah normal + upah lembur

$upahPerJam=2000;
$upahLemburPerJam=3000;
$jamNormal=48;
$jamKerja=49;

if($jamKerja>$jamNormal){
    $jamLembur=$jamKerja-$jamNormal;
    $upahNormal=$jamNormal*$upahPerJam;
    $upahLembur=$jamLembur*$upahLemburPerJam;
}else{
    $upahNormal=$jamKerja*$upahPerJam;
    $upahLembur=0;
}

$totalUpah=$upahNormal+$upahLembur;
echo "total upah minggu ini adalah $totalUpah";