<header style="background-color: #EBEBE9;" class="py-3">
    <div class="container d-flex justify-content-between align-items-center">
        <!-- Logo -->
        <a href="<?php echo base_url(); ?>" class="text-decoration-none">
            <img src="<?php echo base_url('images/logo.png'); ?>" alt="Bromo Adventure Logo" width="120">
        </a>

        <!-- Menu Navigasi -->
        <nav>
            <ul style="list-style: none; margin: 0; padding: 0; display: flex; align-items: center;">
                <li style="display: inline-block; margin-right: 20px;">
                    <a href="<?php echo base_url(); ?>" class="text-decoration-none text-dark">Home</a>
                </li>
                <li style="display: inline-block; margin-right: 20px;">
                    <a href="<?php echo base_url('paket'); ?>" class="text-decoration-none text-dark">Paket</a>
                </li>
                <li style="display: inline-block; margin-right: 20px;">
                    <a href="<?php echo base_url('view360'); ?>" class="text-decoration-none text-dark">360</a>
                </li>
                <li style="display: inline-block; margin-right: 20px;">
                    <a href="<?php echo base_url('booking'); ?>" class="text-decoration-none text-dark">Booking</a>
                </li>
                <!-- User Icon -->
                <li style="display: inline-block;">
                    <div class="dropdown">
                        <a href="#" id="userDropdown" class="text-decoration-none text-dark" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-user" style="color: #000000; font-size: 1.5rem;"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            <li><a class="dropdown-item" href="<?php echo base_url('signup'); ?>">Sign Up</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('login'); ?>">Login</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('profile'); ?>">Profile</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</header>