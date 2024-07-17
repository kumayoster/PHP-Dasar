<?php

function tambah($satu, $dua) {
    $hasil = $satu + $dua;
    echo "Kalimat ini akan dijalankan sebelum return...<br>";
    return $hasil;
    echo "Kalimat ini tidak akan pernah dijalankan...";
}

echo tambah(5, 7); // 12

?>