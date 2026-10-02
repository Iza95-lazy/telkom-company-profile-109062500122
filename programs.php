<?php
require_once 'config/database.php';
$pageTitle = 'Program Studi - Telkom University';
$result = $conn->query("SELECT nama, jenjang, deskripsi FROM program_studi ORDER BY jenjang, nama");
require 'includes/header.php';
?>
<section class="section">
    <div class="container">
        <div class="section-heading">
            <span class="eyebrow">Program Studi</span>
            <h1>Daftar Program Studi</h1>
            <p class="lead">Data pada halaman ini diambil dari tabel <code>program_studi</code>.</p>
        </div>
        <div class="grid-3">
            <?php while ($row = $result->fetch_assoc()): ?>
                <article class="card">
                    <span class="badge"><?= htmlspecialchars($row['jenjang']) ?></span>
                    <h3><?= htmlspecialchars($row['nama'])?></h3>
                    <p><?= htmlspecialchars($row['deskripsi'])?></p>
                </article>
            <?php endwhile; ?>
        </div>
    </div>
</section>
<?php require 'includes/footer.php'; ?>