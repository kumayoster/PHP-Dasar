<?php
$assoc = [ "satu" => 1000,
"dua" => "Duniaikom",
4 => "Belajar PHP",
1000 => "Jadi Programmer"];
//echo cuma bisa nampilin 1 baris string
$assoc["baru"] ="Data Baru";
$assoc[99] = "Sembilan Puluh Sembilan";

$assoc[]="ini akan pakai index Berapa";
$assoc[]=123456;

echo "<pre>";
print_r($assoc);
echo "</pre>";
?>