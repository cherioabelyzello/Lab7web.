<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 7 - Kalkulator Sederhana</title>
</head>
<body>
    <h3>Kalkulator Sederhana PHP</h3>
    <form method="POST" action="">
        <input type="number" name="angka1" placeholder="Angka pertama" required>
        <select name="operator">
            <option value="tambah">+</option>
            <option value="kurang">-</option>
            <option value="kali">×</option>
            <option value="bagi">÷</option>
        </select>
        <input type="number" name="angka2" placeholder="Angka kedua" required>
        <button type="submit" name="hitung">Hitung</button>
    </form>
    <br>

    <?php
    if (isset($_POST['hitung'])) {
        $a1 = $_POST['angka1'];
        $a2 = $_POST['angka2'];
        $op = $_POST['operator'];
        $hasil = 0;

        if ($op == 'tambah') {
            $hasil = $a1 + $a2;
        } elseif ($op == 'kurang') {
            $hasil = $a1 - $a2;
        } elseif ($op == 'kali') {
            $hasil = $a1 * $a2;
        } elseif ($op == 'bagi') {
            if ($a2 != 0) {
                $hasil = $a1 / $a2;
            } else {
                $hasil = "Kesalahan: Pembagian dengan nol!";
            }
        }

        echo "<b>Hasil Perhitungan: </b>" . $hasil;
    }
    ?>
</body>
</html>