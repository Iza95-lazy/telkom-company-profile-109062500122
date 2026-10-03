<?php 
require_once 'config/database.php';
$pageTitle = 'Berita - Telkom University';
$result = $conn->query("SELECT id, judul, ringkasan, tanggal_publish FROM berita ORDER BY tanggal_publish DESC");
require 'includes/header.php';
?>

<section class="section">
    <div class="container">
        <div class="section-heading">
            <span class="eyebrow">Berita</span>
            <h1>Berita dan Kegiatan</h1>
        </div>
        <div class="grid-3">
            <?php while ($row = $result->fetch_assoc()): ?>
                <article class="card">
                    <p class="meta"><?= date('d M Y', strtotime($row['tanggal_publish'])) ?></p>
                    <h3><?=htmlspecialchars($row['judul'])?></h3>
                    <p><?=htmlspecialchars($row['ringkasan'])?></p>
                    <a href="news_detail.php?id=<?=(int) $row['id'] ?>">Baca Selengkapnya</a>
                </article>
            <?php endwhile; ?>
        </div>
    </div>
</section>
<?php require 'includes/footer.php'; ?>