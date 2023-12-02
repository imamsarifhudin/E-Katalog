    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <!-- <div class="sidebar-brand-icon rotate-n-15">
                        <i class="fas fa-laugh-wink"></i>
                    </div> -->
            <div class="sidebar-brand-icon">
                <img src="<?= base_url('img/logoarora2.png') ?>" alt="Logo" style="width: min(40vw, 40px)">
                <div class="sidebar-brand-text">
                    E-Katalog
                </div>
            </div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider ">

        <!-- Heading -->
        <div class="sidebar-heading">
            Dashboard
        </div>

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="<?= base_url('dashboard') ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class=" sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Product
        </div>

        <!-- Nav Item - User List -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('produk') ?>">
                <i class="fas fa-cubes"></i>
                <span>Product</span></a>
        </li>

        <!-- Divider -->
        <hr class=" sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Category
        </div>

        <!-- Nav Item - User List -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('kategori') ?>">
                <i class="fas fa-th-large"></i>
                <span>Category</span></a>
        </li>

        <!-- Divider -->
        <hr class=" sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Brand
        </div>

        <!-- Nav Item - User List -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('merek') ?>">
                <i class="fab fa-bandcamp"></i> 
                <span>Brand</span></a>
        </li>

        <?php if (in_groups('admin')) : ?>
            <!-- Divider -->
            <hr class=" sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                User Management
            </div>

            <!-- Nav Item - User List -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin') ?>">
                    <i class="fas fa-users"></i>
                    <span>User List</span></a>
            </li>
        <?php endif; ?>


        <!-- Divider -->
        <!-- <hr class="sidebar-divider"> -->

        <!-- Heading -->
        <!-- <div class="sidebar-heading">
            User Profile
        </div> -->

        <!-- Nav Item - My Profile -->
        <!-- <li class="nav-item">
            <a class="nav-link" href="<?= base_url('user'); ?>">
                <i class="fas fa-user"></i>
                <span>My Profile</span></a>
        </li> -->

        <!-- Nav Item - Edit Profile -->
        <!-- <li class="nav-item">
            <a class="nav-link" href="tables.html">
                <i class="fas fa-user-edit"></i>
                <span>Edit Profile</span></a>
        </li> -->

        <!-- Divider -->
        <hr class="sidebar-divider">
        <!-- Nav Item - Logout -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('logout') ?>">
                <i class="fas fa-sign-out-alt"></i>
                <span>Logout</span></a>
        </li>


        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>