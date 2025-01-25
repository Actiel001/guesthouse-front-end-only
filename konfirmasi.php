<?php
session_start();

// Ambil data reservasi dari sesi
$reservation = $_SESSION['reservation'] ?? null;
if (!$reservation) {
    header("Location: index.php");  // Jika tidak ada data reservasi, arahkan kembali ke halaman utama
    exit();
}

$paymentStatus = $reservation['paymentStatus'] ?? 'Belum Bayar';
$paymentMethod = $reservation['paymentMethod'] ?? '';
$paymentAmount = $reservation['paymentAmount'] ?? '';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pembayaran</title>
</head>
<body>
    <h2>Konfirmasi Pemesanan</h2>
    <p>Status Pembayaran: <?php echo $paymentStatus; ?></p>
    
    <?php if ($paymentStatus == "Sudah Bayar"): ?>
        <p>Metode Pembayaran: <?php echo $paymentMethod; ?></p>
        <p>Jumlah yang Dibayar: <?php echo $paymentAmount; ?></p>
    <?php endif; ?>

    <button onclick="window.location.href='index.html';">Kembali ke Beranda</button>
</body>
</html>
