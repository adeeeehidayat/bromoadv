<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Bromo Adventure</title>
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
        .signup-container {
            display: flex;
            height: 100vh;
            align-items: center;
            justify-content: center;
        }
        .signup-left {
            background-color: #EBEBE9;
            color: #294B3B;
            padding: 50px;
            flex: 1;
            text-align: center;
            font-size: 2rem;
        }
        .signup-right {
            margin-left: 50px;
            font-family: "Arial", sans-serif;
            background-color: white;
            padding: 50px;
            flex: 1;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .signup-form .btn {
            background-color: #294B3B;
            color: white;
        }
        .footer {
            background-color: #294B3B;
            color: white;
        }
    </style>
</head>
<body>
    <?php include('layout/header.php'); ?>

    <div class="container signup-container">
        <div class="signup-left d-none d-md-block">
            <h1>Login</h1>
        </div>
        <img src="<?php echo base_url('images/linever.png'); ?>" style="height: 500px">
        <div class="signup-right">
            <form class="signup-form" action="<?php echo base_url('login/masuk'); ?>" method="post">
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
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email Anda" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Kata Sandi" required>
                </div>
                <p>Belum punya akun? <a href="<?php echo base_url('signup'); ?>">Daftar di sini</a></p>
                <button type="submit" class="btn w-100">Login</button>
            </form>
        </div>
    </div>
    <?php include('layout/footer.php'); ?>

    <!-- Tambahkan script JavaScript Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
