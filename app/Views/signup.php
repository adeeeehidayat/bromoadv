<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Bromo Adventure</title>
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
        #preview {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 50%;
        }
        #image-preview {
            width: 100px; /* Adjusted width to fit in the card */
            height: 100px; /* Adjusted height to fit in the card */
            border: 1px solid #ddd;
            object-fit: cover;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <?= $this->include('layout/header') ?>
    
    <div class="container signup-container">
        <div class="signup-left d-none d-md-block">
            <h1>Sign Up</h1>
        </div>
        <img src="<?= base_url('images/linever.png') ?>" style="height: 500px">
        <div class="signup-right">
            <form class="signup-form" action="<?= site_url('signup/create') ?>" method="post" enctype="multipart/form-data">
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
                <div id="image-preview" class="mb-3">
                        <img src="<?= base_url("images/img-preview.jpg") ?>" alt="preview" style="width: 100px; height: auto; padding: 50px;" />
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Upload Gambar</label>
                        <input type="file" class="form-control" id="image" name="image" accept="image/png, image/jpeg, image/jpg" onchange="previewImage(event)">
                    </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nama Anda" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email Anda" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Kata Sandi" required>
                </div>
                <button type="submit" class="btn w-100">Buat Akun</button>
            </form>
        </div>
    </div>

    
    <?= $this->include('layout/footer') ?>

    <!-- Tambahkan script JavaScript Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById('image-preview');
                // Remove the existing image preview
                while (output.firstChild) {
                    output.removeChild(output.firstChild);
                }

                // Create a new image element for the uploaded image
                var img = document.createElement('img');
                img.src = reader.result;
                img.alt = 'preview';
                img.style.width = '100%';
                img.style.height = 'auto';
                img.style.padding = '0';
                output.appendChild(img);
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>

</body>
</html>
