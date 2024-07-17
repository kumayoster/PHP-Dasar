<?php
$siswa = [
    "kelas_x" => ["Santi", "Yanti", "Reza"],
    "kelas_xi" => ["Tia", "Siska", "Nova"],
    "kelas_xii" => ["Robert", "Rudi", "Alex"]
];

echo $siswa["kelas_xi"][0]; //Tia
echo "<br>";
echo $siswa["kelas_xii"][2]; //Alex
echo "<br>";
echo $siswa["kelas_x"][1]; //Yanto
echo "<br>";

echo "<pre>";
print_r($siswa);
echo "</pre>";
?>