<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Handling PHP</title>
</head>
<body>
    <h3>Form Input Nama</h3>
    <form method="POST" action="">
        <label>Masukkan Nama:</label><br>
        <input type="text" name="nama" required>
        <button type="submit" name="submit">Kirim</button>
    </form>

    <hr>

    <?php
    // Mengecek apakah tombol submit sudah ditekan
    if (isset($_POST['submit'])) {
        $namaInput = $_POST['nama'];
        echo "Halo, <b>" . htmlspecialchars($namaInput) . "</b>! Selamat datang di praktikum Pemrograman Web.";
    }
    ?>
</body>
</html>