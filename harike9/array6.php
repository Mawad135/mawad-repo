<?php

$data=array("nama"=>"Andi",
"nisn"=>"98765665845",
"kelas"=>"XI RPL 1");
echo $data["nama"]."<br>";
echo $data["kelas"];

echo "<br><hr>";
$data=array("nama"=>"Andi",
"nisn"=>"98765665845",
"kelas"=>"XI RPL 1");
foreach ($data as $dt){
echo $dt.'<br>';
}

echo "<br><hr>";
// merubah data
$data=array("nama"=>"Andi",
"nisn"=>"98765665845",
"kelas"=>"XI RPL 1");
$data["nama"]="Budi";
foreach ($data as $dt){
echo $dt.'<br>';
}

echo "<br><hr>";
// menambah data
$data=array("nama"=>"Andi",
"nisn"=>"98765665845",
"kelas"=>"XI RPL 1");
$data["jenis_kelamin"]="Laki-Laki";
foreach ($data as $dt){
echo $dt.'<br>';
}

echo "<br><hr>";
// menghapus data
$data=array("nama"=>"Andi",
"nisn"=>"98765665845",
"kelas"=>"XI RPL 1");
unset($data["nisn"]);//menghapus data nisn
foreach ($data as $dt){
echo $dt.'<br>';
}