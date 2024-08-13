<!-- app/Views/home.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bromo Adventure - Selamat Datang</title>
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
        .keterangan {
            background-color: #A6A183;
            color: #ffffff;
            padding: 70px;
            text-align: left;
        }
        .carousel-item img {
            width: 200px; /* Ukuran gambar kecil */
            height: auto;
            margin: auto;
        }
        .carousel-control-prev,
        .carousel-control-next {
            width: 10%;
        }
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            height: 100%;
            width: 100%;
            outline: black;
            border: none;
        }
        .carousel-control-prev-icon:before,
        .carousel-control-next-icon:before {
            content: ''; /* Menghapus konten default */
            position: absolute;
            top: 50%;
            transform: translateY(-50%); /* Pusatkan vertikal */
            color: white; /* Warna panah */
        }
        .carousel-caption {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .fasilitas {
            color: #294B3B;
            padding-top: 50px;
        }
        .footer {
            background: #294B3B;
            color: white;
        }
        .galeri {
            text-align: center;
        }
        @import url('https://fonts.googleapis.com/css2?family=Anton&display=swap');
        .footer {
            background: #294B3B;
            color: white;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <?php include('layout/header.php'); ?>

    <main>
        <!-- Carousel (Slideshow) -->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo base_url('images/slide1.png'); ?>" class="d-block w-100" alt="Slide 1">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url('images/slide1.png'); ?>" class="d-block w-100" alt="Slide 2">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url('images/slide1.png'); ?>" class="d-block w-100" alt="Slide 3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="keterangan">
            <h1 style="color: #294B3B">Bromo Adventure Experience</h1>
            <p style="color: black; font-family: Arial, sans-serif;">Selamat datang di Bromo Adventure! Di sini, Anda dapat merencanakan petualangan seru ke Bromo dengan mudah dan cepat. Nikmati keindahan alamnya melalui fitur 360 derajat yang memukau, membuat Anda merasakan seolah berada di sana secara langsung. Pilih paket petualangan sesuai selera, lakukan booking dengan beberapa klik, dan dapatkan konfirmasi instan. Jelajahi ulasan dari petualang lain untuk memastikan Anda membuat pilihan yang tepat. Segera rancang petualangan Anda di Bromo bersama kami!</p>
            <a href="<?php echo base_url('booking'); ?>" class="btn" style="background: #294B3B; color: white">Coba Sekarang</a>
        </div>
        
        <div class="rekomendasi" style="background: #294B3B; padding-bottom: 100px;">
        <h1 style="color: white; padding-top: 50px; margin-bottom: 50px; text-align: center">Rekomendasi Paket</h1>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php echo base_url('images/sshow1.png'); ?>" class="d-block" alt="Slide 1" style="width: 700px">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo base_url('images/sshow2.png'); ?>" class="d-block" alt="Slide 2" style="width: 700px">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo base_url('images/sshow3.png'); ?>" class="d-block" alt="Slide 3" style="width: 700px">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo base_url('images/sshow4.png'); ?>" class="d-block" alt="Slide 3" style="width: 700px">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo base_url('images/sshow5.png'); ?>" class="d-block" alt="Slide 3" style="width: 700px">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo base_url('images/sshow6.png'); ?>" class="d-block" alt="Slide 3" style="width: 700px">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <!-- Fasilitas -->
        <div class="fasilitas">
            <h1 style="text-align: center; margin-bottom: 20px">Fasilitas</h1>
            <div class="row align-items-center">
                <!-- Gambar Kiri -->
                <div class="col-md-2 text-center">
                    <img src="<?php echo base_url('images/f1.png'); ?>" class="img-fluid" alt="Facility 1"  style="width: 65px; height: auto">
                </div>
                <!-- Keterangan Fasilitas -->
                <div class="col-md-8">
                    <h4>Transportasi antar-jemput</h4>
                    <p style="font-family: Arial, sans-serif;">Penjemputan dan pengantaran dari titik awal perjalanan (biasanya Surabaya atau Malang) menuju area Bromo dan kembali.</p>
                </div>
            </div>
            <div class="row align-items-center">
                <!-- Gambar Kiri -->
                <div class="col-md-2 text-center">
                    <img src="<?php echo base_url('images/f2.png'); ?>" class="img-fluid" alt="Facility 1"  style="width: 65px; height: auto">
                </div>
                <!-- Keterangan Fasilitas -->
                <div class="col-md-8">
                    <h4>Akomodasi</h4>
                    <p style="font-family: Arial, sans-serif;">Penginapan selama perjalanan, mulai dari hotel atau homestay hingga tenda camping, tergantung pada jenis paket yang Anda pilih.</p>
                </div>
            </div>
            <div class="row align-items-center">
                <!-- Gambar Kiri -->
                <div class="col-md-2 text-center">
                    <img src="<?php echo base_url('images/f3.png'); ?>" class="img-fluid" alt="Facility 1"  style="width: 65px; height: auto">
                </div>
                <!-- Keterangan Fasilitas -->
                <div class="col-md-8">
                    <h4>Pemandu Wisata</h4>
                    <p style="font-family: Arial, sans-serif;">Seorang pemandu yang berpengetahuan lokal akan menemani Anda selama perjalanan untuk memberikan informasi tentang tempat-tempat wisata yang dikunjungi.</p>
                </div>
            </div>
            <div class="row align-items-center">
                <!-- Gambar Kiri -->
                <div class="col-md-2 text-center">
                    <img src="<?php echo base_url('images/f4.png'); ?>" class="img-fluid" alt="Facility 1"  style="width: 65px; height: auto">
                </div>
                <!-- Keterangan Fasilitas -->
                <div class="col-md-8">
                    <h4>Makanan</h4>
                    <p style="font-family: Arial, sans-serif;">Biasanya termasuk sarapan pagi selama perjalanan, dan terkadang makan siang dan makan malam juga disertakan dalam paket.</p>
                </div>
            </div>
            <div class="row align-items-center">
                <!-- Gambar Kiri -->
                <div class="col-md-2 text-center">
                    <img src="<?php echo base_url('images/f5.png'); ?>" class="img-fluid" alt="Facility 1"  style="width: 65px; height: auto">
                </div>
                <!-- Keterangan Fasilitas -->
                <div class="col-md-8">
                    <h4>Tiket Masuk</h4>
                    <p style="font-family: Arial, sans-serif;">Biaya masuk ke Taman Nasional Bromo-Tengger-Semeru sudah termasuk dalam paket, sehingga Anda tidak perlu khawatir tentang biaya tambahan saat tiba di tempat wisata.</p>
                </div>
            </div>
            <div class="row align-items-center">
                <!-- Gambar Kiri -->
                <div class="col-md-2 text-center">
                    <img src="<?php echo base_url('images/f6.png'); ?>" class="img-fluid" alt="Facility 1" style="width: 100px; height: auto">
                </div>
                <!-- Keterangan Fasilitas -->
                <div class="col-md-8">
                    <h4>Perjalanan Pendukung</h4>
                    <p style="font-family: Arial, sans-serif;">Kadang-kadang paket juga menyertakan perjalanan pendukung seperti trekking, paragliding, atau kunjungan ke tempat wisata lain di sekitar Bromo seperti Air Terjun Madakaripura atau Kawah Ijen.</p>
                </div>
            </div>
        </div>
        
        <!-- Galeri -->
        <div class="container my-4 galeri" style="padding-top: 50px">
            <h1 class="text-center mb-4" style="color: #294B3B">Galeri Bromo Adventure</h1><br>
            <div class="row">
                <div class="col-md-6">
                    <img src="<?php echo base_url('images/g1.png'); ?>" alt="g Image 1" style="width: 500px; height: auto">
                </div>
                <div class="col-md-6">
                    <img src="<?php echo base_url('images/g4.png'); ?>" alt="g Image 4" style="width: 500px; height: auto">
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-6">
                    <img src="<?php echo base_url('images/g2.png'); ?>" alt="g Image 2" style="width: 500px; height: auto">
                </div>
                <div class="col-md-6">
                    <img src="<?php echo base_url('images/g3.png'); ?>" alt="g Image 3" style="width: 500px; height: auto">
                </div>
            </div>
        </div>

        <!-- Tambahkan lebih banyak baris sesuai kebutuhan -->
    </div>
    </main>

    <!-- Footer -->
    <?php include('layout/footer.php'); ?>
    <!-- Tambahkan script JavaScript Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
