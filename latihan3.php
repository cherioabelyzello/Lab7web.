<?php
$mahasiswa = ["Alya", "Bima", "Citra", "Doni", "Eko", "Fani", "Gina"];

echo "<h3>Daftar Mahasiswa</h3><ol>";
foreach ($mahasiswa as $nama) {
    echo "<li>" . htmlspecialchars($nama) . "</li>";
}
echo "</ol>";
?>