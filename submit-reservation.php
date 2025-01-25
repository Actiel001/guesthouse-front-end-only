<?php
session_start(); 
$name = $email = $checkinDate = $checkoutDate = $roomType = "";
$reservationCode = "";
$paymentStatus = "Belum Bayar";  
$paymentMethod = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['name'])) {
        $name = $_POST['name'] ?? "";
        $email = $_POST['email'] ?? "";
        $checkinDate = $_POST['checkin-date'] ?? "";
        $checkoutDate = $_POST['checkout-date'] ?? "";
        $roomType = $_POST['room-type'] ?? "";

        if (!empty($email) && !empty($checkinDate) && !empty($checkoutDate)) {
            $reservationCode = md5($email . $checkinDate . $checkoutDate);
            $_SESSION['reservation'] = [
                'name' => $name,
                'email' => $email,
                'checkinDate' => $checkinDate,
                'checkoutDate' => $checkoutDate,
                'roomType' => $roomType,
                'reservationCode' => $reservationCode,
                'paymentStatus' => 'Belum Bayar',  
                'paymentMethod' => ''
            ];
        }
    }
    
    if (isset($_POST['payment-method'])) {
        $paymentMethod = $_POST['payment-method']; 
        $_SESSION['reservation']['paymentMethod'] = $paymentMethod; 
        $_SESSION['reservation']['paymentStatus'] = 'Sudah Bayar';  
    }
}

if (isset($_SESSION['reservation'])) {
    $name = $_SESSION['reservation']['name'];
    $email = $_SESSION['reservation']['email'];
    $checkinDate = $_SESSION['reservation']['checkinDate'];
    $checkoutDate = $_SESSION['reservation']['checkoutDate'];
    $roomType = $_SESSION['reservation']['roomType'];
    $reservationCode = $_SESSION['reservation']['reservationCode'];
    $paymentStatus = $_SESSION['reservation']['paymentStatus'];
    $paymentMethod = $_SESSION['reservation']['paymentMethod'] ?? "";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pemesanan</title>
    <link rel="icon" href="Images/ff.png" type="image/png">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        .reservation-summary {
            margin-top: 30px;
        }
        .summary-item {
            margin-bottom: 15px;
            font-size: 1.1em;
        }
        .summary-item span {
            font-weight: bold;
        }
        .btn-container {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 20px;
        }
        .btn {
            padding: 10px 20px;
            color: white;
            border: none;
            border-radius: 5px;
            text-align: center;
            font-size: 1em;
            cursor: pointer;
        }
        .confirmation-btn {
            background-color: #4CAF50;
        }
        .confirmation-btn:hover {
            background-color: #45a049;
        }
        .print-btn {
            background-color: #008CBA;
        }
        .print-btn:hover {
            background-color: #007B9F;
        }
        .cancel-btn {
            background-color: #f44336;
        }
        .cancel-btn:hover {
            background-color: #d32f2f;
        }
        .pay-btn {
            background-color: #FF9800;
        }
        .pay-btn:hover {
            background-color: #FB8C00;
        }
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
        }
        .modal-content {
            background-color: #fff;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 50%;
            border-radius: 10px;
            text-align: center;
        }
        .close-btn {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close-btn:hover,
        .close-btn:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
        @media print {
            .btn {
                display: none;
            }
        }
        select {
    width: 100%;
    padding: 12px 15px;
    font-size: 1em;
    border: 2px solid #ccc;
    border-radius: 8px;
    background-color: #f9f9f9;
    color: #333;
    transition: border-color 0.3s ease;
    margin: 10px 0;
}

select:focus {
    border-color: #4CAF50;
    outline: none;
}

option {
    padding: 10px;
    font-size: 1em;
}

option:hover {
    background-color: #f1f1f1;
}

    </style>
    <script src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.0/dist/JsBarcode.all.min.js"></script>
    <script>
        window.onload = function() {
            JsBarcode("#barcode", "<?php echo $reservationCode; ?>", {
                format: "CODE128", 
                displayValue: true, 
                fontSize: 18,
                height: 60,
                margin: 10
            });
        }

        function closeModal() {
            document.getElementById('paymentModal').style.display = 'none';
            document.getElementById('cancelModal').style.display = 'none';
        }

        function payReservation() {
            document.getElementById('paymentModal').style.display = 'block';
        }

        function printReservation() {
            window.print();
        }

        function cancelReservation() {
            document.getElementById('cancelModal').style.display = 'block';
        }

        function confirmCancel() {
            alert("Pesanan Anda telah dibatalkan.");
            window.location.href = 'index.html';  
        }
    </script>
</head>
<body>
<div class="container">
        <h2>Terima Kasih atas Pemesanan Anda!</h2>
        <p>Reservasi Anda telah berhasil diproses. Berikut adalah detail pemesanan Anda:</p>

        <div class="reservation-summary">
            <div class="summary-item">
                <span>Nama:</span> <?php echo htmlspecialchars($name); ?>
            </div>
            <div class="summary-item">
                <span>Email:</span> <?php echo htmlspecialchars($email); ?>
            </div>
            <div class="summary-item">
                <span>Tanggal Check-in:</span> <?php echo htmlspecialchars($checkinDate); ?>
            </div>
            <div class="summary-item">
                <span>Tanggal Check-out:</span> <?php echo htmlspecialchars($checkoutDate); ?>
            </div>
            <div class="summary-item">
                <span>Tipe Kamar:</span> <?php echo htmlspecialchars($roomType); ?>
            </div>
            <div class="summary-item">
                <span>Status Pembayaran:</span> <?php echo $paymentStatus; ?>
            </div>
            <?php if ($paymentStatus == "Sudah Bayar" && $paymentMethod): ?>
                <div class="summary-item">
                    <span>Metode Pembayaran:</span> <?php echo htmlspecialchars($paymentMethod); ?>
                </div>
            <?php endif; ?>
        </div>

        <div class="reservation-summary">
            <div class="summary-item">
                <span>Kode Reservasi (Barcode):</span>
                <svg id="barcode"></svg>
            </div>
        </div>

        <div class="btn-container">
            <button class="btn confirmation-btn" onclick="window.location.href='index.html';">Kembali ke Beranda</button>
            <button class="btn print-btn" onclick="window.print();">Cetak Kartu Reservasi</button>
            <button class="btn pay-btn" onclick="payReservation();">Bayar dengan E-Wali</button>
            <button class="btn cancel-btn" onclick="cancelReservation();">Batal Pesanan</button>
        </div>
    </div>

    <!-- Modal Pembayaran -->
    <div id="paymentModal" class="modal">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal();">&times;</span>
        <h2>Bayar Reservasi</h2>
        <form method="POST" action="dana.php">
            <input type="hidden" name="reservationCode" value="<?php echo $reservationCode; ?>">
            <label for="payment-method">Pilih Metode Pembayaran:</label><br>
            <select name="payment-method" id="payment-method" required>
                <option value="">Pilih Metode Pembayaran</option>
                <option value="Dana" <?php if ($paymentMethod == "Dana") echo "selected"; ?>>Dana</option>
                <option value="OVO" <?php if ($paymentMethod == "OVO") echo "selected"; ?>>OVO</option>
            </select><br><br>
            <button type="submit" class="btn confirmation-btn">Pilih Pembayaran</button>
            <button type="button" class="btn cancel-btn" onclick="closeModal();">Batal</button>
        </form>
    </div>
    </div>

    <!-- Modal Pembatalan -->
    <div id="cancelModal" class="modal">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal();">&times;</span>
        <h2>Apakah Anda Yakin?</h2>
        <p>Pesanan ini akan dibatalkan. Anda tidak dapat mengembalikannya setelah dibatalkan.</p>
        <div class="btn-container">
            <button class="btn confirmation-btn" onclick="confirmCancel();">Ya, Batalkan</button>
            <button class="btn cancel-btn" onclick="closeModal();">Tidak, Kembali</button>
        </div>
    </div>
    </div>
</body>
</html>
