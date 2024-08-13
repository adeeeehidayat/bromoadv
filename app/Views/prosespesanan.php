<?php

// Ambil pesan dari session jika ada
$error = session()->getFlashdata('error');
$success = session()->getFlashdata('success');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bromo Adventure</title>
    <!-- Tambahkan link CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: "Anton", sans-serif;
            background: #EBEBE9;
        }
        .profile-container {
            display: flex;
            height: 100vh;
            align-items: center;
            justify-content: center;
        }
        .profile-left {
            background-color: #EBEBE9;
            color: #294B3B;
            padding: 50px;
            flex: 1;
            text-align: center;
            font-size: 2rem;
            
        }
        .profile-left img {
            width: 100%;
            height: auto;
            border-radius: 50%;
            object-fit: cover;
        }
        .profile-left a.btn {
            background-color: #294B3B;
            color: white;
            margin-top: 20px;
        }
        .profile-right {
            margin-left: 50px;
            font-family: "Arial", sans-serif;
            background-color: white;
            padding: 50px;
            flex: 1;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .footer {
            background-color: #294B3B;
            color: white;
        }
        .ppesanan {
            margin-top: 100px;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: #294B3B;
            margin-bottom: 200px;
        }
    </style>
</head>
<body>
<?php include('layout/header.php'); ?>

<div class="ppesanan">
    <img src="<?= base_url('images/prosespesanan.png')?>" style="width: 250px; margin-bottom: 50px">
    <h1>pesanan sedang diproses</h1>
    <p>Tunggu sebentar, petualanganmu sedang diolah dengan cermat. Sembari menunggu, bersiaplah untuk momen yang tak terlupakan di Bromo Adventure!</p>
    <a href="successpayment"><button class="btn btn-primary">Next</button></a>
</div>

<?php include('layout/footer.php'); ?>

<!-- Tambahkan script JavaScript Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
