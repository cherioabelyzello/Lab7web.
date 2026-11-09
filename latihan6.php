<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 6 - Validasi Form</title>
</head>
<body>
    <h3>Form Validasi Sederhana</h3>
    <form method="POST" action="">
        <label>Nama Lengkap:</label><br>
        <input type="text" name="nama"><br><br>
        
        <label>Email:</label><br>
        <input type="text" name="email"><br><br>
        
        <button type="submit" name="proses">Kirim</button>
    </form>
    <br>

    <?php
    if (isset($_POST['proses'])) {
        $nama = trim($_POST['nama']);
        $email = trim($_POST['email']);
        $error = "";

        if (empty($nama)) {
            $error .= "Nama tidak boleh kosong!<br>";
        }
        if (empty($email)) {
            $error .= "Email tidak boleh kosong!<br>";
        }

        if (!empty($error)) {
            echo "<p style='color: red;'><b>Peringatan:</b><br>" . $error . "</p>";
        } else {
            echo "<p style='color: green;'><b>Berhasil!</b> Data valid.<br>";
            echo "Nama: " . htmlspecialchars($nama) . "<br>";
            echo "Email: " . htmlspecialchars($email) . "</p>";
        }
    }
    ?>
</body>
</html>