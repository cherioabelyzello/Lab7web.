<?php
// Membuat fungsi untuk menghitung luas persegi panjang
function hitungLuasPersegiPanjang($panjang, $lebar) {
    $luas = $panjang * $lebar;
    return $luas;
}

// Memanggil fungsi dengan nilai tertentu
$p = 10;
$l = 5;
$hasil = hitungLuasPersegiPanjang($p, $l);

echo "Panjang: " . $p . "<br>";
echo "Lebar: " . $l . "<br>";
echo "Luas Persegi Panjang adalah: " . $hasil;
?>