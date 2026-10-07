<?php 
require_once 'config/database.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: contact.php');
    exit;
}

$nama = trim($_POST['nama'] ?? '');
$email = trim($_POST['email'] ?? '');
$pesan = trim($_POST['pesan'] ?? '');

if ($nama === '' || $pesan === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    exit('Data tidak valid. Silahkan kembali dan periksa input.');
}

$stmt = $conn->prepare('INSERT INTO pesan (nama, email, pesan) VALUES (?, ?, ?)');
$stmt->bind_param('sss', $nama, $email, $pesan);
$stmt->execute();

header('Location: contact.php?success=1');
exit;
