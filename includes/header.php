<?php
$pageTitle = $pageTitle ?? 'Telkom University - Praktikum Web';
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?=htmlspecialchars($pageTitle) ?></title>
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <header class="site-header">
            <div class="container nav-wrap">
                <a class="brand" href="index.php">
                    <span class="brand-mark">TU</span>
                    <span>
                        <strong>Telkom University</strong>
                        <small>Simulasi Company Profile</small>
                    </span>
                </a>
                <nav class="main-nav" aria-label="Navigasi Utama">
                    <a class="<?=$currentPage === 'index.php' ? 'active': "" ?>" href="index.php">Beranda</a>
                    <a class="<?=$currentPage === 'profile.php' ? 'active': "" ?>" href="profile.php">Tentang kami</a>
                    <a class="<?=$currentPage === 'programs.php' ? 'active': "" ?>" href="programs.php">Program Studi</a>
                    <a class="<?= in_array($currentPage, ['news.php', 'news_detail.php']) ? 'active': "" ?>" href="news.php">Berita</a>
                    <a class="<?=$currentPage === 'contact.php' ? 'active': "" ?>" href="contact.php">kontak</a>
                </nav>
            </div>
        </header>
    </body>
</html>