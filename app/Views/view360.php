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
        .bagian2 {
            background: #294B3B;
            color: white;
            padding-top: 50px;
            padding-bottom: 50px;
            padding-left: 200px;
            padding-right: 200px;
            text-align: left;
        }
        .bagian3 {
            background: #294B3B;
            color: white;
            padding-top: 50px;
            padding-bottom: 50px;
            padding-left: 200px;
            padding-right: 200px;
            text-align: left;
        }
        .bagian3 img {
            width: 100%;
            height: auto;
        }
        .destwisata {
            text-align: center;
        }
        .footer {
            background: #294B3B;
            color: white;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <?php include('layout/header.php'); ?>

    <!-- Fullscreen Image -->
    <div class="position-relative">
        <div class="full-height" style="background-image: url('<?php echo base_url('images/view360.png'); ?>');">
        </div>
    </div>

    <div class="bagian2">
        <h1>Bromo Adventure,</h1>
        <h1 style=" margin-bottom: 20px;">Sensasi 360 Tanpa Batas!</h1>
        <h4 style="font-family: Arial, sans-serif;">Menemukan tujuan sempurna Anda tidak pernah semudah ini.</h4>
        <h4 style="font-family: Arial, sans-serif;">Lihatlah keindahan Indonesia yang tak terbatas tanpa harus keluar dan intip tempat favorit Anda</h4>
        <h4 style="font-family: Arial, sans-serif;">sebelum merencanakan liburan impian Anda!</h4>
    </div>

    <img src="<?php echo base_url('images/line_white.png'); ?>" style="width: 100%; height: auto">
    
    <div class="bagian3">
        <h1>Bromo 360 Dokumentasi</h1><br>
        <div class="position-relative">
            <iframe
                width="100%"
                height="450"
                frameborder="0" style="border:0"
                src="https://www.google.com/maps/embed?pb=!4v1568896932059!6m8!1m7!1sCAoSLEFGMVFpcE1lelJXdDdHbU54cHdEUVN0WmNtMHk1RGZxNlRVcGxvaGJ6d09w!2m2!1d-7.9430556!2d112.9538889!3f75!4f0!5f0.7820865974627469"
                allowfullscreen>
            </iframe>
        </div>
    </div>
    
    <div class="container my-4 destwisata" style="padding-top: 50px">
        <h1 class="text-center mb-4" style="color: #294B3B">Destinasi Wisata Bromo</h1><br>
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo base_url('images/pasir_berbisik.png'); ?>" alt="Pasir Berbisik" style="width: 100%; height: auto" data-bs-toggle="modal" data-bs-target="#modalPasirBerbisik">
                <h1 style="margin-top: 10px">Pasir Berbisik</h1>
            </div>
            <div class="col-md-6">
                <img src="<?php echo base_url('images/padang_savana.png'); ?>" alt="Padang Savanna" style="width: 100%; height: auto" data-bs-toggle="modal" data-bs-target="#modalPadangSavana">
                <h1 style="margin-top: 10px">Padang Savanna</h1>
            </div>
        </div><br>
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo base_url('images/kawah_bromo.png'); ?>" alt="Kawah Bromo" style="width: 100%; height: auto" data-bs-toggle="modal" data-bs-target="#modalKawahBromo">
                <h1 style="margin-top: 10px">Kawah Bromo</h1>
            </div>
            <div class="col-md-6">
                <img src="<?php echo base_url('images/penanjakan_view.png'); ?>" alt="Penanjakan View" style="width: 100%; height: auto" data-bs-toggle="modal" data-bs-target="#modalPenanjakanView">
                <h1 style="margin-top: 10px">Penanjakan View</h1>
            </div>
        </div><br>
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo base_url('images/air_terjun_madarikapura.png'); ?>" alt="Air Terjun Madarikapura" style="width: 100%; height: auto" data-bs-toggle="modal" data-bs-target="#modalAirTerjunMadarikapura">
                <h1 style="margin-top: 10px">Air Terjun Madarikapura</h1>
            </div>
        </div>
    </div>

    <!-- Modal Pasir Berbisik -->
    <div class="modal fade" id="modalPasirBerbisik" tabindex="-1" aria-labelledby="modalPasirBerbisikLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalPasirBerbisikLabel">Pasir Berbisik</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="<?php echo base_url('images/pasir_berbisik.png'); ?>" alt="Pasir Berbisik" style="width: 100%; height: auto">
                    <p style="font-family: Arial, sans-serif;">Pasir Berbisik adalah salah satu destinasi populer di Bromo yang terkenal dengan pemandangan pasirnya yang menakjubkan dan suara berbisik yang terdengar saat angin berhembus.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Padang Savanna -->
    <div class="modal fade" id="modalPadangSavana" tabindex="-1" aria-labelledby="modalPadangSavanaLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalPadangSavanaLabel">Padang Savanna</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="<?php echo base_url('images/padang_savana.png'); ?>" alt="Padang Savanna" style="width: 100%; height: auto">
                    <p style="font-family: Arial, sans-serif;">Padang Savanna di Bromo menawarkan pemandangan hamparan rumput yang luas dan hijau, memberikan sensasi berada di savana Afrika.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Kawah Bromo -->
    <div class="modal fade" id="modalKawahBromo" tabindex="-1" aria-labelledby="modalKawahBromoLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalKawahBromoLabel">Kawah Bromo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="<?php echo base_url('images/kawah_bromo.png'); ?>" alt="Kawah Bromo" style="width: 100%; height: auto">
                    <p style="font-family: Arial, sans-serif;">Kawah Bromo adalah salah satu kawah vulkanik aktif yang menawarkan pemandangan spektakuler dengan panorama yang luar biasa.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Penanjakan View -->
    <div class="modal fade" id="modalPenanjakanView" tabindex="-1" aria-labelledby="modalPenanjakanViewLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalPenanjakanViewLabel">Penanjakan View</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="<?php echo base_url('images/penanjakan_view.png'); ?>" alt="Penanjakan View" style="width: 100%; height: auto">
                    <p style="font-family: Arial, sans-serif;">Penanjakan View adalah titik tertinggi di Bromo yang memberikan pemandangan matahari terbit yang menakjubkan dan panorama alam yang luar biasa.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Air Terjun Madarikapura -->
    <div class="modal fade" id="modalAirTerjunMadarikapura" tabindex="-1" aria-labelledby="modalAirTerjunMadarikapuraLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalAirTerjunMadarikapuraLabel">Air Terjun Madarikapura</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="<?php echo base_url('images/air_terjun_madarikapura.png'); ?>" alt="Air Terjun Madarikapura" style="width: 100%; height: auto">
                    <p style="font-family: Arial, sans-serif;">Air Terjun Madarikapura adalah air terjun yang indah di sekitar Bromo, menawarkan pengalaman alami dengan pemandangan air terjun yang menakjubkan.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include('layout/footer.php'); ?>

    <!-- Tambahkan script JavaScript Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
