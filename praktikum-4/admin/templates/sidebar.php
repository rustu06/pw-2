        <?php
        $menu = [
            'Home' => 'index.php',
            'daftar' => 'daftar.php',
            'profile' => 'profile.php',
            'about' => 'about.php',
        ];

        $icons = [
            'Home' => 'home',
            'daftar' => 'plus',
            'profile' => 'user',
            'about' => 'info-circle',
        ]
        ?>

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <?php foreach($menu as $key => $value): ?>
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-<?= $icons['$key'] ?>"></i>
                    <span><?= $key ?></span></a>
            </li>
            <?php endforeach ?>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->