<?php
session_start();

$reservationCode = $_POST['reservationCode'] ?? '';
$paymentMethod = $_POST['payment-method'] ?? '';

if (!$reservationCode || !$paymentMethod) {
    header("Location: index.php");
    exit();
}


$amountDue = 300000; 

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['payment-amount'])) {
    $paymentAmount = $_POST['payment-amount'];


    $_SESSION['reservation']['paymentStatus'] = 'Sudah Bayar';
    $_SESSION['reservation']['paymentMethod'] = $paymentMethod;
    $_SESSION['reservation']['paymentAmount'] = $paymentAmount;  

    header('Location: submit-reservation.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
    text-align: center;
    color: #1E73BE; 
}

.payment-info {
    background-color: #f5f5f5;
    padding: 15px;
    margin-bottom: 20px;
    border-radius: 10px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.payment-info span {
    font-size: 1.2em;
    font-weight: bold;
}

.payment-info .amount {
    font-size: 1.5em;
    color: #1E73BE; 
}

.input-container {
    margin-bottom: 20px;
}

.input-container label {
    font-size: 1.1em;
    font-weight: bold;
    display: block;
}

.input-container input {
    width: 100%;
    padding: 10px;
    font-size: 1.1em;
    border: 2px solid #ddd;
    border-radius: 5px;
    margin-top: 10px;
}

.btn-container {
    text-align: center;
}

.btn {
    background-color: #1E73BE; 
    color: #fff;
    padding: 12px 30px;
    border: none;
    border-radius: 5px;
    font-size: 1.2em;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn:hover {
    background-color: #2A56A0; 
}

.btn:focus {
    outline: none;
}

.note {
    text-align: center;
    font-size: 1.1em;
    color: #888;
    margin-top: 20px;
}

.header {
    background-color: #1E73BE; 
    color: white;
    padding: 15px 20px;
    position: relative;  
    display: flex;
    align-items: center;
    justify-content: space-between;
    border-radius: 0 0 10px 10px;  
}

.header-content {
    display: flex;
    align-items: center;
}

.header .logo {
    width: 40px;  
    height: 40px;
    margin-right: 10px; 
}

.header h1 {
    font-size: 1.5em;
    margin: 0;
}

.profile-icon {
    position: absolute; 
    top: 50%;  
    right: 20px; 
    width: 50px;  
    height: 50px;
    border-radius: 50%;  
    overflow: hidden;
    border: 2px solid #fff; 
    transform: translateY(-50%); 
}

.profile-icon img {
    width: 100%;
    height: 100%;
    object-fit: cover;  
}

.footer {
    background-color: #1E73BE; 
    color: white;
    text-align: center;
    padding: 20px;
    position: relative;
    bottom: 0;
    width: 100%;
    margin-top: 40px; 
    border-radius: 10px 10px 0 0; 
}

.footer p {
    font-size: 1em;
    margin: 0;
    padding: 5px 0;
}

.footer a {
    color: white;
    text-decoration: none;
    font-weight: bold;
}

.footer a:hover {
    text-decoration: underline;
}


    </style>
             <link rel="icon" href="Images/ff.png" type="image/png">

</head>
<body>

<header class="header">
    <div class="header-content">
        <img src="danaa.png" alt="Logo Dana" class="logo">
        <h1>Selamat datang di API Dana</h1>
    </div>

    <div class="profile-icon">
    <img src="propil.webp" alt="Profil" id="profile-img" />
</div>
</header>



    <div class="container">
        <h2>Pembayaran Reservasi</h2>
        
        <div class="payment-info">
            <span>Jumlah yang perlu dibayarkan:</span>
            <span class="amount">Rp <?php echo number_format($amountDue, 0, ',', '.'); ?></span>
        </div>

        <form method="POST" action="">
            <input type="hidden" name="reservationCode" value="<?php echo $reservationCode; ?>">
            <input type="hidden" name="payment-method" value="<?php echo $paymentMethod; ?>">

            <div class="input-container">
                <label for="payment-amount">Masukkan Jumlah Pembayaran:</label>
                <input type="number" name="payment-amount" id="payment-amount" required min="1" max="<?php echo $amountDue; ?>" placeholder="Masukkan jumlah pembayaran">
            </div>

            <div class="btn-container">
                <button type="submit" class="btn">Bayar Sekarang</button>
            </div>
        </form>

        <div class="note">
            <p>Pastikan jumlah yang Anda bayarkan sesuai dengan jumlah yang tertera.</p>
        </div>
    </div>

    <footer class="footer">
    <p>&copy; 2024 API DanaKeren. All rights reserved | Bantuan hubungi +62-345-678-99</p>
    <p>balik ke awal <a href="index.html">Beranda</a></p>
</footer>

</body>
</html>
