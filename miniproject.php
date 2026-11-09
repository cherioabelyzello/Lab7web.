<?php
// Logika Pemrosesan Data Mahasiswa
$data = null;
$error = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama = trim($_POST["nama"] ?? "");
    $nim = trim($_POST["nim"] ?? "");
    $prodi = trim($_POST["prodi"] ?? "");
    $semesterInput = $_POST["semester"] ?? "";
    $email = trim($_POST["email"] ?? "");

    // Validasi Server-side
    if ($nama === "") { $error[] = "Nama wajib diisi."; }
    if ($nim === "") { $error[] = "NIM wajib diisi."; }
    if ($prodi === "") { $error[] = "Program studi wajib diisi."; }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { $error[] = "Format email tidak valid."; }
    if (!ctype_digit((string)$semesterInput) || (int)$semesterInput < 1 || (int)$semesterInput > 14) {
        $error[] = "Semester harus berupa angka 1–14.";
    }

    if (!$error) {
        $data = compact("nama", "nim", "prodi", "email");
        $data["semester"] = (int)$semesterInput;
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Mini Project - Data Mahasiswa</title>
</head>
<body>
    <h2>Formulir Data Mahasiswa</h2>
    <p>Nama: Cheerio Abelyzello Martines | NIM: 312510241</p>
    <hr>

    <!-- Menampilkan Error jika Validasi Gagal -->
    <?php if (!empty($error)): ?>
        <ul style="color: red;">
            <?php foreach ($error as $err): ?>
                <li><?= htmlspecialchars($err); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <!-- Form Input Data -->
    <form method="POST" action="">
        <label>Nama Lengkap:</label><br>
        <input type="text" name="nama" value="<?= htmlspecialchars($_POST['nama'] ?? ''); ?>"><br><br>

        <label>NIM:</label><br>
        <input type="text" name="nim" value="<?= htmlspecialchars($_POST['nim'] ?? ''); ?>"><br><br>

        <label>Program Studi:</label><br>
        <input type="text" name="prodi" value="<?= htmlspecialchars($_POST['prodi'] ?? ''); ?>"><br><br>

        <label>Semester (1-14):</label><br>
        <input type="number" name="semester" value="<?= htmlspecialchars($_POST['semester'] ?? ''); ?>"><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="<?= htmlspecialchars($_POST['email'] ?? ''); ?>"><br><br>

        <button type="submit">Kirim Data</button>
    </form>

    <!-- Menampilkan Ringkasan Data Jika Berhasil -->
    <?php if ($data): ?>
        <hr>
        <div style="background: #e6ffed; padding: 10px;">
            <h3>Ringkasan Data Mahasiswa</h3>
            <p><b>Nama:</b> <?= htmlspecialchars($data['nama']); ?></p>
            <p><b>NIM:</b> <?= htmlspecialchars($data['nim']); ?></p>
            <p><b>Program Studi:</b> <?= htmlspecialchars($data['prodi']); ?></p>
            <p><b>Semester:</b> <?= htmlspecialchars($data['semester']); ?></p>
            <p><b>Email:</b> <?= htmlspecialchars($data['email']); ?></p>
        </div>
    <?php endif; ?>

</body>
</html>