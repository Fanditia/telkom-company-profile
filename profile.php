<?php
$pageTitle = 'Profil - Telkom University';
require 'includes/header.php';
?>
<section class="section">
    <div class="container article-body">
        <span class="eyebrow">Profil</span>
        <h1>Tentang proyek simulasi Telkom University</h1>
        <p class="lead">Halaman ini digunakan untuk mempraktikkan struktur halaman PHP yang memakai header dan footer
            bersama.</p>
        <h2>Visi pembelajaran</h2>
        <p>Mahasiswa memahami hubungan antarmuka web, logika PHP, basis data, dan version control melalui satu proyek
            terpadu.</p>
        <h2>Tujuan proyek</h2>
        <p>Proyek menampilkan profil, program studi, berita, serta formulir kontak. Data program studi dan berita dibaca dari
            database, sedangkan pesan pengguna disimpan menggunakan prepared statement.</p>
        <div class="alert alert-success">Konten institusi pada website ini bersifat simulasi untuk keperluan praktikum.</div>
        <hr style="border: 0; border-top: 1px solid var(--line); margin: 32px 0;">
        <h2>Fokus Pembelajaran</h2>
        <p>Dalam praktikum ini, pengembangan skill difokuskan pada tiga pilar utama pengembangan web modern:</p>
        <ul>
            <li><strong>Version Control (Git & GitHub):</strong> Mengelola riwayat perubahan kode dan kolaborasi tim.</li>
            <li><strong>Back-End Development:</strong> Memahami logika server-side menggunakan PHP native dan arsitektur modular.</li>
            <li><strong>Database Management:</strong> Mengelola penyimpanan data secara dinamis dan aman dengan MySQL.</li>
        </ul>
    </div>
</section>
<?php require 'includes/footer.php'; ?>