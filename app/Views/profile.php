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
    <title>Profile - Bromo Adventure</title>
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
    </style>
</head>
<body>
<?php include('layout/header.php'); ?>

<?php $user = session()->get('user'); ?>

<div class="container profile-container">
    <div class="profile-left d-none d-md-block">
        <div style="display: flex; flex-direction: column; align-items: center;">
            <img src="<?php echo base_url('uploads/' . $user['photo']); ?>" alt="Profile Picture" style="width: 330px; height: 330px;">
            <form action="<?= base_url('profile/uploadPhoto'); ?>" method="post" enctype="multipart/form-data" class="mt-3">
                <input type="file" name="photo" class="form-control mb-2" required>
                <button type="submit" class="btn" style="background: #294B3B; color: #fff">Update Photo</button>
            </form>
            <a href="<?= base_url('profile/logout'); ?>" class="btn mt-3">Log Out</a>
        </div>
    </div>
    <img src="<?php echo base_url('images/linever.png'); ?>" style="height: 500px">
    <div class="profile-right">
        <?php if(session()->has('error')): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?= session('error') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        <?php if(session()->has('success')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= session('success') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        <h1 style="color: #294B3B; font-weight: bold">Profile Saya</h1>
        <form class="profile-form" action="<?php echo base_url('profile/update'); ?>" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nama Anda" value="<?= $user['name'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email Anda" value="<?= $user['email'] ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Kata Sandi" required>
            </div>
            <div class="mb-3">
                <label for="password_confirm" class="form-label">Konfirmasi Password</label>
                <input type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="Ketik ulang kata sandi" required>
            </div>
            <button type="submit" class="btn w-100" style="background: #294B3B; color: #fff">Simpan Perubahan</button>
        </form>
    </div>
</div>

<?php include('layout/footer.php'); ?>

<!-- Tambahkan script JavaScript Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
