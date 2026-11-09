<?php
// ==========================================
// 1. Perhitungan Nilai Rata-rata 3 Komponen
// ==========================================
$tugas = 85;
$uts = 80;
$uas = 90;
$rataRata = ($tugas + $uts + $uas) / 3;


// ==========================================
// 2. Pencarian Nama dari Array dengan GET
// ==========================================
$daftarMahasiswa = ["Andi", "Budi", "Cheerio", "Dedi", "Eka"];
$cari = $_GET['cari'] ?? "";
$hasilCari = [];

if ($cari !== "") {
    $hasilCari = array_filter($daftarMahasiswa, function($m) use ($cari) {
        return stripos($m, $cari) !== false;
    });
}


// ==========================================
// 3. Function Format Rupiah
// ==========================================
function formatRupiah($angka) {
    return "Rp " . number_format($angka, 0, ',', '.');
}
$hargaContoh = 2500000;


// ==========================================
// 4. Validasi NIM (Hanya Angka & Tepat 9 Digit)
// ==========================================
$pesanNIM = "";
if (isset($_POST['cek_nim'])) {
    $inputNIM = trim($_POST['nim'] ?? "");
    if (!ctype_digit($inputNIM) || strlen($inputNIM) !== 9) {
        $pesanNIM = "❌ NIM tidak valid! Harus berupa angka dan pas 9 digit.";
    } else {
        $pesanNIM = "✅ NIM valid ($inputNIM).";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Eksperimen Mandiri Lab 7</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; line-height: 1.6; }
        .card { background: #f9f9f9; border: 1px solid #ddd; padding: 15px; margin-bottom: 20px; border-radius: 6px; }
        h3 { margin-top: 0; color: #333; }
    </style>
</head>
<body>

    <h2>Eksperimen Mandiri - Lab 7 Pemrograman Web</h2>
    <p><b>Nama:</b> Cheerio Abelyzello Martines | <b>NIM:</b> 312510241</p>
    <hr>

    <!-- Soal 1 -->
    <div class="card">
        <h3>1. Perhitungan Rata-rata Nilai</h3>
        <p>Komponen Nilai: Tugas (<?= $tugas ?>), UTS (<?= $uts ?>), UAS (<?= $uas ?>)</p>
        <p><b>Nilai Rata-rata:</b> <?= number_format($rataRata, 2); ?></p>
    </div>

    <!-- Soal 2 -->
    <div class="card">
        <h3>2. Pencarian Nama (Metode GET)</h3>
        <p>Daftar Nama: <?= implode(", ", $daftarMahasiswa); ?></p>
        <form method="GET" action="">
            <input type="text" name="cari" placeholder="Cari nama..." value="<?= htmlspecialchars($cari); ?>">
            <button type="submit">Cari</button>
        </form>
        <?php if ($cari !== ""): ?>
            <p><b>Hasil Pencarian untuk "<?= htmlspecialchars($cari); ?>":</b> 
               <?= empty($hasilCari) ? "Tidak ditemukan" : implode(", ", $hasilCari); ?>
            </p>
        <?php endif; ?>
    </div>

    <!-- Soal 3 -->
    <div class="card">
        <h3>3. Function Format Rupiah</h3>
        <p>Angka Asli: <?= $hargaContoh; ?></p>
        <p><b>Hasil Format Rupiah:</b> <?= formatRupiah($hargaContoh); ?></p>
    </div>

    <!-- Soal 4 -->
    <div class="card">
        <h3>4. Validasi NIM (9 Digit & Angka)</h3>
        <form method="POST" action="">
            <input type="text" name="nim" placeholder="Masukkan 9 digit NIM" value="<?= htmlspecialchars($_POST['nim'] ?? ''); ?>">
            <button type="submit" name="cek_nim">Cek NIM</button>
        </form>
        <?php if (!empty($pesanNIM)): ?>
            <p><b><?= $pesanNIM; ?></b></p>
        <?php endif; ?>
    </div>

    <!-- Soal 5 -->
    <div class="card">
        <h3>5. Tombol Reset vs Pemrosesan Ulang Server</h3>
        <p><b>Tombol Reset HTML (&lt;button type="reset"&gt;):</b> Bekerja di sisi <i>client-side</i> (browser) buat ngebersihin isian form yang lagi diketik.</p>
        <p><b>Pemrosesan Ulang Server:</b> Mengirim ulang data ke server (*request* baru) biar server ngejalanin ulang logika backend-nya.</p>
    </div>

</body>
</html>