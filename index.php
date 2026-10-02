<?php
require_once 'config/database.php';
$pageTitle = 'Beranda - Telkom University';

$programResult = $conn->query("SELECT id, nama, jenjang, deskripsi FROM program_studi ORDER BY id ASC LIMIT 3");
$newsResult = $conn->query("SELECT id, judul, ringkasan, tanggal_publish FROM berita ORDER BY tanggal_publish DESC LIMIT 3");

require 'includes/header.php';
?>

<section class="hero">
    <div class="container hero-grid">
        <div>
            <span class="eyebrow">Praktikum Web Development</span>
            <h1>Belajar membangun website dinamis sambil mempraktikan git</h1>
            <p class="lead">Proyek simulasi ini menggunakan HTML, CSS, PHP native, MySQL/MariaDB, dan workflow Git lokal serta GitHub.</p>
            <div class="actions">
                <a class="btn btn-primary" href="programs.php">Lihat Program Studi</a>
                <a class="btn btn-outline" href="news.php">Baca Berita</a>
            </div>
        </div>
        <aside class="hero-card">
            <span class="badge">Project Milestone</span>
            <h3>Target Praktikum</h3>
            <div class="hero-stat">
                <div class="stat"><strong>5+</strong><span>Halaman PHP</span></div>
                <div class="stat"><strong>3</strong><span>Tabel Database</span></div>
                <div class="stat"><strong>8+</strong><span>Commit Terarah</span></div>
                <div class="stat"><strong>1</strong><span>Remote Github</span></div>
            </div>
        </aside>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-heading">
            <span class="eyebrow">Program Studi</span>
            <h2>Contoh data dinamis dari database</h2>
        </div>
        <div class="grid-3">
            <?php while ($program = $programResult->fetch_assoc()): ?>
                <article class="card">
                    <span class="badge"><?=htmlspecialchars($program['jenjang'])?></span>
                    <h3><?=htmlspecialchars($program['nama'])?></h3>
                    <p><?=htmlspecialchars($program['deskripsi'])?></p>
                </article>
            <?php endwhile; ?>
        </div>
    </div>
</section>

<section class="section section-soft">
    <div class="container">
        <div class="section-heading">
            <span class="eyebrow">Berita</span>
            <h2>informasi terbaru</h2>
        </div>
        <div class="grid-3">
            <?php while ($news = $newsResult->fetch_assoc()): ?>
                <article class="card">
                    <p class="meta"><?=date('d M Y', strtotime($news['tanggal_publish']))?></p>
                    <h3><?=htmlspecialchars($news['judul'])?></h3>
                    <p><?=htmlspecialchars($news['ringkasan'])?></p>
                    <a href="news_detail.php?id=<?= (int) $news['id'] ?>">Baca Selengkapnya</a>
                </article>
            <?php endwhile; ?>
        </div>
    </div>
</section>
<?php require 'includes/footer.php'; ?>