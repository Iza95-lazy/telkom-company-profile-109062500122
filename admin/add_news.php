<?php
$pageTitle = 'Tambah Berita - Admin Praktikum';
?>
<!doctype html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= htmlspecialchars($pageTitle) ?></title>
        <link rel="stylesheet" href="../assets/css/style.css">
    </head>
    <body>
        <section class="section">
            <div class="container article-body">
                <span class="eyebrow">Admin Lokal</span>
                <h1>Tambah berita</h1>
                <div class="alert alert-success">Halaman ini hanya untuk simulasi lokal dan belum memakai autentikasi admin.</div>
                <form class="card" action="save_news.php" method="post">
                    <div class="form-group"><label for="judul">Judul</label><input id="judul" name="judul" required></div>
                    <div class="form-group"><label for="ringkasan">Ringkasan</label><textarea id="ringkasan" name="ringkasan"
        required></textarea></div>
                    <div class="form-group"><label for="isi">Isi</label><textarea id="isi" name="isi" required></textarea></div>
                    <button class="btn btn-primary" type="submit">Simpan Berita</button>
                </form>
            </div>
        </section>
    </body>
</html>