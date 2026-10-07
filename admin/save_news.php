<?php
require_once '../config/database.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
     header('Location: add_news.php');
     exit;
}
$judul = trim($_POST['judul'] ?? '');
$ringkasan = trim($_POST['ringkasan'] ?? '');
$isi = trim($_POST['isi'] ?? '');

if ($judul === '' || $ringkasan === '' || $isi === '') {
    exit('Semua data wajib diisi.');
}

$stmt = $conn->prepare("INSERT INTO berita (judul, ringkasan, isi, tanggal_publish) VALUES (?, ?, ?, CURDATE())");
$stmt->bind_param('sss', $judul, $ringkasan, $isi);
$stmt->execute();

header('Location: ../news.php');
exit;