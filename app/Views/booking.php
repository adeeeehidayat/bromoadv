<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking - Bromo Adventure</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: "Anton", sans-serif;
            background: #294B3B;
            color: white;
        }
        .footer {
            background: #A6A183;
            color: #294B3B;
        }
        .booking-form {
            background: #294B3B;
            padding: 30px;
            border-radius: 10px;
            color: #fff;
        }
        .form-label {
            color: #fff;
        }
        .form-section-title {
            margin-top: 20px;
            margin-bottom: 10px;
            font-size: 1.5rem;
        }
        .catatan {
            margin-top: 20px;
            padding: 20px;
            background: #294B3B;
            border-radius: 10px;
            color: #fff;
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <?php include('layout/header.php'); ?>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8 booking-form" style="font-family: Arial, sans-serif;">
                <h1 class="text-center mb-4" style="font-family: 'Anton', sans-serif;">FORMULIR PEMESANAN PAKET PERJALANAN WISATA</h1>
                <h2 class="text-center mb-4" style="font-family: 'Anton', sans-serif;">(Bromo Adventure)</h2>
                
                <?php if(session()->getFlashdata('errors')): ?>
                    <div class="alert alert-danger">
                        <?php foreach(session()->getFlashdata('errors') as $error): ?>
                            <p><?= $error ?></p>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <?php if(session()->getFlashdata('success')): ?>
                    <div class="alert alert-success">
                        <p><?= session()->getFlashdata('success') ?></p>
                    </div>
                <?php endif; ?>

                <div class="form-section-title">DATA PEMESANAN</div><br>
                <form action="<?= base_url('booking/simpan'); ?>" method="post" enctype="multipart/form-data">
                    <h4 style="text-decoration: underline">IDENTITAS PEMESANAN</h4>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" required>
                    </div>
                    <div class="mb-3">
                        <label for="no_ktp" class="form-label">No. KTP</label>
                        <input type="text" class="form-control" id="no_ktp" name="no_ktp" required>
                    </div>
                    <div class="mb-3">
                        <label for="no_tlp_pribadi" class="form-label">No. Tlp Pribadi</label>
                        <input type="text" class="form-control" id="no_tlp_pribadi" name="no_tlp_pribadi" required>
                    </div>
                    
                    <h4 style="text-decoration: underline">DATA PEMESANAN</h4>
                    <div class="mb-3">
                        <label for="tanggal_berangkat" class="form-label">Tanggal Berangkat</label>
                        <input type="date" class="form-control" id="tanggal_berangkat" name="tanggal_berangkat" required>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_pulang" class="form-label">Tanggal Pulang</label>
                        <input type="date" class="form-control" id="tanggal_pulang" name="tanggal_pulang" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat_penjemputan" class="form-label">Alamat Penjemputan</label>
                        <input type="text" class="form-control" id="alamat_penjemputan" name="alamat_penjemputan" required>
                    </div>
                    <div class="mb-3">
                        <label for="jumlah_peserta" class="form-label">Jumlah peserta</label>
                        <input type="number" class="form-control" id="jumlah_peserta" name="jumlah_peserta" required>
                    </div>
                    <div class="mb-3">
                        <label for="paket_perjalanan" class="form-label">Paket perjalanan</label>
                        <select class="form-control" id="paket_perjalanan" name="paket_perjalanan" required>
                            <option value="">Pilih Paket</option>
                            <option value="Paket Sunrise Bromo Basic">Paket Sunrise Bromo Basic</option>
                            <option value="Paket Bromo Backpacker">Paket Bromo Backpacker</option>
                            <option value="Paket Bromo Sunrise Trek">Paket Bromo Sunrise Trek</option>
                            <option value="Paket Bromo Budget Adventure">Paket Bromo Budget Adventure</option>
                            <option value="Paket Bromo One Day Trip">Paket Bromo One Day Trip</option>
                            <option value="Paket Bromo Self-Guided Tour">Paket Bromo Self-Guided Tour</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="kebutuhan_khusus" class="form-label">Kebutuhan khusus</label>
                        <textarea class="form-control" id="kebutuhan_khusus" name="kebutuhan_khusus" rows="3" required></textarea>
                    </div>

                    <div class="form-section-title">METODE PEMBAYARAN</div>
                    <div class="mb-3">
                        <label for="metode_pembayaran" class="form-label">Metode Pembayaran</label>
                        <select class="form-select" id="metode_pembayaran" name="metode_pembayaran" required>
                            <option value="">Pilih Metode Pembayaran</option>
                            <option value="bca">BCA - 23816572341</option>
                            <option value="bni">BNI - 1372692862800187</option>
                            <option value="mandiri">Mandiri - 27538900275418</option>
                            <option value="gopay">Gopay - 081345287563</option>
                            <option value="dana">Dana - 0874356132548</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="bukti_pembayaran" class="form-label">Upload Bukti Pembayaran</label>
                        <input type="file" class="form-control" id="bukti_pembayaran" name="bukti_pembayaran" required>
                    </div>
                    
                    <button type="submit" class="btn btn-primary w-100">Pesan Sekarang</button>
                </form>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-md-8 catatan">
                <h5>Catatan:</h5>
                <p>a. Pastikan untuk mengisi formulir dengan benar dan lengkap untuk memastikan bahwa perjalanan Anda diatur dengan baik dan sesuai dengan keinginan Anda.</p>
                <p>b. Point Permintaan Khusus adalah permintaan dari Anda sebagai konsumen kepada kami secara khusus mengenai Jadwal / Waktu pemberangkatan, Fasilitas tambahan.</p>
                <p>c. Semua Point Wajib di isi untuk mempermudah kami dalam proses pemesanan.</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include('layout/footer.php'); ?>

    <!-- Tambahkan script JavaScript Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Ambil formulir pemesanan
        var formPemesanan = document.querySelector('form[action="<?= base_url('booking/simpan'); ?>"]');
    </script>

</body>
</html>
