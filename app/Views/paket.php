<!-- app/Views/paket_wisata.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paket Wisata - Bromo Adventure</title>
    <!-- Tambahkan link CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: "Anton", sans-serif;
            background: #EAEAE8;
        }
        .pesan {
            background: #A6A183;
            padding-top: 100px;
            padding-bottom: 100px;
        }
        .order-section {
            margin-bottom: 20px;
        }
        .full-height {
            height: 100vh;
            width: 100%;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        .image-row {
            background: #EAE9E4;
            padding-top: 50px;
            padding-bottom: 50px;
            padding-left: 200px;
            padding-right: 200px;
            text-align: center;
        }
        .footer {
            background: #294B3B;
            color: white;
        }
        .btn-primary {
            background: #294B3B;
            border: 1px solid #294B3B;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <?php include('layout/header.php'); ?>

    <!-- Fullscreen Image -->
    <div class="position-relative">
        <div class="full-height" style="background-image: url('<?php echo base_url('images/bgpaket.png'); ?>');">
        </div>
    </div>

    <div class="image-row">
        <h1 style="text-align: center; margin-bottom: 50px">Kenapa memilih Bromo Adventure?</h1>
        <div class="row">
            <div class="col-md-4">
                <img src="<?php echo base_url('images/kmba1.png'); ?>" alt="kmba 1" style="width: 200px; height: auto;">
                <h5 style="text-align: center; margin-top: 20px">Kredibilitas</h5>
            </div>
            <div class="col-md-4">
                <img src="<?php echo base_url('images/kmba2.png'); ?>" alt="kmba 2"style="width: 200px; height: auto">
                <h5 style="text-align: center; margin-top: 20px">Kemudahan dan Akses Pemesanan</h5>
            </div>
            <div class="col-md-4">
                <img src="<?php echo base_url('images/kmba3.png'); ?>" alt="kmba 3"style="width: 200px; height: auto">
                <h5 style="text-align: center; margin-top: 20px">Layanan Pelanggan yang Ramah</h5>
            </div>
        </div>
    </div>
    
    <div class="pesan">
        <h1 style="text-align: center; margin-bottom: 40px">Paket Trip Bromo Adventure</h1>
        <div class="container order-section">
            <div class="row">
                <div class="col-md-6">
                    <img src="<?php echo base_url('images/sshow1.png'); ?>" alt="Order Image" style="width: 700px; height: auto">
                </div>
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <a href="<?php echo base_url('booking'); ?>" class="btn btn-primary btn-lg">Pesan Sekarang</a>
                </div>
            </div>
        </div>
        <div class="container order-section">
            <div class="row">
                <div class="col-md-6">
                    <img src="<?php echo base_url('images/sshow2.png'); ?>" alt="Order Image" style="width: 700px; height: auto">
                </div>
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <a href="<?php echo base_url('booking'); ?>" class="btn btn-primary btn-lg">Pesan Sekarang</a>
                </div>
            </div>
        </div>
        <div class="container order-section">
            <div class="row">
                <div class="col-md-6">
                    <img src="<?php echo base_url('images/sshow3.png'); ?>" alt="Order Image" style="width: 700px; height: auto"> 
                </div>
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <a href="<?php echo base_url('booking'); ?>" class="btn btn-primary btn-lg">Pesan Sekarang</a>
                </div>
            </div>
        </div>
        <div class="container order-section">
            <div class="row">
                <div class="col-md-6">
                    <img src="<?php echo base_url('images/sshow4.png'); ?>" alt="Order Image" style="width: 700px; height: auto">
                </div>
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <a href="<?php echo base_url('booking'); ?>" class="btn btn-primary btn-lg">Pesan Sekarang</a>
                </div>
            </div>
        </div>
        <div class="container order-section">
            <div class="row">
                <div class="col-md-6">
                    <img src="<?php echo base_url('images/sshow5.png'); ?>" alt="Order Image" style="width: 700px; height: auto">
                </div>
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <a href="<?php echo base_url('booking'); ?>" class="btn btn-primary btn-lg">Pesan Sekarang</a>
                </div>
            </div>
        </div>
        <div class="container order-section">
            <div class="row">
                <div class="col-md-6">
                    <img src="<?php echo base_url('images/sshow6.png'); ?>" alt="Order Image" style="width: 700px; height: auto">
                </div>
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <a href="<?php echo base_url('booking'); ?>" class="btn btn-primary btn-lg">Pesan Sekarang</a>
                </div>
            </div>
        </div>
    </div>
    

    <!-- Tambahkan konten lainnya di sini -->

    <!-- Footer -->
    <?php include('layout/footer.php'); ?>

    <!-- Tambahkan script JavaScript Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
