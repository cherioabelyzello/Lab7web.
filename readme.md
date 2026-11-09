# Laporan Praktikum Lab 7 - Pemrograman Web (PHP)

* **Nama Lengkap:** Cheerio Abelyzello Martines
* **NIM:** 312510241
* **Mata Kuliah:** Pemrograman Web
* **Direktori Kerja:** `C:\xampp\htdocs\Lab7Web_PHP`

---

## Daftar File Praktikum
1. **`index.php`** (Latihan 1): Pengujian dasar server lokal menggunakan XAMPP dan fungsi `echo` serta `date()`.
![alt text](<WhatsApp Image 2026-11-09 at 20.02.56.jpeg>)
![alt text](<WhatsApp Image 2026-11-09 at 20.02.56 (1).jpeg>)
2. **`latihan2.php`** (Latihan 2): Penggunaan variabel, operator aritmatika, dan percabangan `if-else` untuk penentuan predikat nilai mahasiswa.
![alt text](<WhatsApp Image 2026-11-09 at 20.05.53.jpeg>)
![alt text](<WhatsApp Image 2026-11-09 at 20.05.53 (1).jpeg>)
3. **`latihan3.php`** (Latihan 3): Implementasi *array* dan perulangan `foreach` untuk menampilkan daftar nama mahasiswa.
![alt text](<WhatsApp Image 2026-11-09 at 20.10.49.jpeg>)
![alt text](<WhatsApp Image 2026-11-09 at 20.10.49 (1).jpeg>)
4. **`latihan4.php`** (Latihan 4): Pembuatan dan pemanggilan fungsi kustom (*function*) menghitung luas persegi panjang.
![alt text](<WhatsApp Image 2026-11-09 at 20.13.18.jpeg>)
![alt text](<WhatsApp Image 2026-11-09 at 20.13.33.jpeg>)
5. **`latihan5.php`** (Latihan 5): Penanganan form (*form handling*) sederhana menggunakan metode `POST`.
![alt text](<WhatsApp Image 2026-11-09 at 20.16.13.jpeg>)
![alt text](<WhatsApp Image 2026-11-09 at 20.16.13 (1).jpeg>)
6. **`latihan6.php`** (Latihan 6): Validasi form untuk memastikan input data tidak kosong sebelum diproses.
![alt text](<WhatsApp Image 2026-11-09 at 20.19.54.jpeg>)
![alt text](<WhatsApp Image 2026-11-09 at 20.19.54 (1).jpeg>)
![alt text](<WhatsApp Image 2026-11-09 at 20.19.54 (2).jpeg>)
7. **`latihan7.php`** (Latihan 7): Pembuatan aplikasi kalkulator sederhana dengan logika pengkondisian PHP.
![alt text](<WhatsApp Image 2026-11-09 at 20.23.22.jpeg>)
![alt text](<WhatsApp Image 2026-11-09 at 20.23.22 (1).jpeg>)
![alt text](<WhatsApp Image 2026-11-09 at 20.23.22 (2).jpeg>)
8. **`miniproject.php`** (Mini Project): Aplikasi formulir data mahasiswa dengan metode `POST`, validasi *server-side* (kolom wajib diisi, rentang semester 1–14, dan format email), serta sanitasi output menggunakan `htmlspecialchars()`.
![alt text](<masukkan-screenshot-miniproject-1.jpeg>)
![alt text](<masukkan-screenshot-miniproject-2.jpeg>)
9. **`eksperimen.php`** (Eksperimen Mandiri): Implementasi perhitungan rata-rata 3 nilai, pencarian nama pada array dengan metode `GET`, *function* format Rupiah, serta validasi NIM (khusus angka, 9 digit).
![alt text](<masukkan-screenshot-eksperimen.jpeg>)

---

## Cara Menjalankan Server Lokal
1. Buka **XAMPP Control Panel**, lalu klik **Start** pada modul **Apache**.
2. Pastikan folder proyek berada di `C:\xampp\htdocs\Lab7Web_PHP`.
3. Buka browser dan akses `http://localhost/Lab7Web_PHP/` (atau langsung ke file spesifik, misal `http://localhost/Lab7Web_PHP/miniproject.php`).

---

## Analisis Kasus Validasi (Mini Project)

### Kasus Input Valid
1. **Kasus Valid 1:**
   - **Input:** Nama: `Cheerio Abelyzello Martines`, NIM: `312510241`, Prodi: `Teknik Informatika`, Semester: `3`, Email: `cheerio@gmail.com`.
   - **Hasil:** Lolos semua validasi *server-side* dan menampilkan kotak ringkasan data mahasiswa.
2. **Kasus Valid 2:**
   - **Input:** Nama: `Budi Santoso`, NIM: `312510242`, Prodi: `Sistem Informasi`, Semester: `14`, Email: `budi.santoso@pelitabangsa.ac.id`.
   - **Hasil:** Lolos validasi karena semester masih berada di batas maksimal (1–14) dan format email valid.

### Kasus Input Tidak Valid
1. **Kasus Tidak Valid 1 (Field Kosong & Semester di Luar Batas):**
   - **Input:** Nama: *(dikosongkan)*, NIM: `312510243`, Prodi: `Teknik Informatika`, Semester: `16`, Email: `ani@gmail.com`.
   - **Hasil:** Gagal diproses, sistem menampilkan pesan error *"Nama wajib diisi"* dan *"Semester harus berupa angka 1–14"*.
2. **Kasus Tidak Valid 2 (Format Email Salah):**
   - **Input:** Nama: `Siti Aminah`, NIM: `312510244`, Prodi: `Teknik Informatika`, Semester: `5`, Email: `sitigmail.com` (tanpa karakter `@`).
   - **Hasil:** Gagal diproses, sistem menampilkan pesan error *"Format email tidak valid"*.

---

## Ringkasan & Jawaban Pertanyaan Evaluasi
1. **Perbedaan *client-side* vs *server-side*:** *Client-side* (HTML/CSS/JS) berjalan langsung di browser pengguna, sedangkan *server-side* (PHP) dieksekusi di web server sebelum hasilnya dikirim ke browser sehingga lebih aman.
2. **Alasan PHP butuh web server:** Browser tidak bisa membaca kode PHP secara langsung. Web server (Apache) bertugas menerjemahkan skrip PHP menjadi HTML agar bisa dirender oleh browser.
3. **Fungsi tanda `$`:** Sebagai penanda wajib di awal nama untuk mendeklarasikan atau memanggil sebuah variabel di PHP.
4. **Perbedaan `GET` dan `POST`:** `GET` mengirim data lewat URL (terlihat dan terbatas, cocok untuk pencarian), sedangkan `POST` mengirim data lewat *HTTP body* (lebih aman dan kapasitas besar, cocok untuk form).
5. **Pentingnya validasi di sisi server:** Validasi *client-side* mudah dimanipulasi atau dilewati lewat *Inspect Element* browser, sehingga validasi *server-side* tetap wajib untuk menjaga integritas dan keamanan data.
6. **Fungsi `htmlspecialchars()`:** Mengamankan output dari serangan XSS (*Cross-Site Scripting*) dengan mengubah karakter khusus HTML (`<`, `>`, `&`, `"`) menjadi entitas teks biasa.
7. **Manfaat *function*:** Membuat kode lebih rapi, modular, mudah diperbaiki, dan bisa dipanggil berulang kali tanpa menulis ulang logika yang sama.