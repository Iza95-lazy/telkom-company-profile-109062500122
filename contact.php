<?php
$pageTitle = 'Kontak - Telkom University';
$success = isset($_GET['success']);
require 'includes/header.php';
?>

<section  class="section">
    <div>
        <div class="container grid-2">
            <span class="eyebrow">Kontak</span>
            <h1>Kirim Pesan</h1>
            <p class="lead">Form ini mendemonstrasikan proses INSERT ke database dengan prepared statement</p>
            <?php if($success): ?>
                <div class="alert alert-success">Pesan berhasil disimpan ke database</div>
            <?php endif; ?>
        </div>
        <form class="card" action="contact_process.php" method="post">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input id="nama" name="nama"  required maxlength="100">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email" name="email" required maxlength="120"> 
            </div>
            <div class="form-group">
                <label for="pesan">Pesan</label>
                <textarea id="pesan" name="pesan" required maxlength="1000"></textarea>
            </div>
            <button class="btn btn-primary" type="submit">Kirim Pesan</button>
        </form>
    </div>
</section>
<?php require 'includes/footer.php'; ?>
