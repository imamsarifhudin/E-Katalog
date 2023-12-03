<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?= base_url('img/logoarora2.png') ?>">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <!-- Header Navbar -->

    <nav class="py-2" style="background-color: #1640D6;">
        <div class="container d-flex flex-wrap">
            <div class="container-fluid text-light pt-1">
                <div class="w-100 d-flex justify-content-between">
                    <div>
                        <i class="bi bi-envelope-at-fill"></i>
                        <a class="navbar-sm-brand px-1 text-light text-decoration-none" href="mailto:volkltennisid@gmail.com">volkltennisid@gmail.com</a>
                        <i class="bi bi-telephone-fill"></i>
                        <a class="navbar-sm-brand px-1 text-light text-decoration-none" href="tel:0877-8899-5040">0877-8899-5040</a>
                    </div>
                    <div>
                        <a class="text-white px-1" href="https://www.facebook.com/profile.php?id=100092510078745" target="_blank" rel="sponsored">
                            <i class="bi bi-facebook" style="font-size: 1.3rem;"></i></a>
                        <a class="text-white px-1" href="https://www.instagram.com/volkltennis.id/" target="_blank">
                            <i class="bi bi-instagram" style="font-size: 1.3rem;"></i></a>
                        <a class="text-white px-1" href="whatsapp://send?text=Hello&phone=+6287788995040" target="_blank">
                            <i class="bi bi-whatsapp" style="font-size: 1.3rem;"></i></a>
                    </div>
                </div>
            </div><br><br>

            <a class="navbar-brand" href="#">
                <img src="<?= base_url('img/logoarora.png') ?>" style="width: min(250vw, 250px)">
            </a>
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-end mb-md-0" id="animasi_keren">
                <li><a href="" class="nav-link px-3 text-white">Home</a></li>
                <li><a href="" class="nav-link px-3 text-white">Product</a></li>
                <li><a href="" class="nav-link px-3 text-white">Category</a></li>
                <li><a href="" class="nav-link px-3 text-white">Brand</a></li>
                <li><a href="" class="nav-link px-3 text-white">About Us</a></li>
            </ul>

            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
            </form>

            <ul class="nav">
                <?php if (logged_in()) : ?>

                <?php else : ?>
                    <!-- Tampilan saat belum login -->
                    <li class="nav-item"><a href="<?= base_url('login') ?>" class="nav-link px-2 text-white">Login</a></li>
                    <li class="nav-item"><a href="<?= base_url('register') ?>" class="nav-link px-2 text-white">Sign up</a></li>

                <?php endif; ?>

            </ul>



            <div class="flex-shrink-0 dropdown">
                <?php if (logged_in()) : ?>
                    <!-- Tampilan saat sudah login -->
                    <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu text-small shadow">
                        <?php if (in_groups('admin')) : ?>
                            <li><a class="dropdown-item" href="<?= base_url('produk') ?>">New Product</a></li>
                        <?php endif; ?>
                        <li><a class="dropdown-item" href="<?= base_url('user') ?>">My Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item" href="<?= base_url('logout') ?>" data-toggle="modal" data-target="#logoutModal">
                                <i class="dropdown-item"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                <?php endif; ?>

            </div>
        </div>
        <!-- </header> -->
    </nav>

    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">My Profile</h1>

        <div class="row">
            <div class="col-lg-8">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="<?= base_url('/img/' . user()->user_image); ?>" class="img-fluid rounded-start" alt="<?= user()->username; ?>">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <h4><?= (user()->username != null) ? user()->username : '' ?></h4>
                                    </li>
                                    <?php if (user()->fullname) : ?>
                                        <li class="list-group-item"><?= user()->fullname; ?></li>
                                    <?php endif; ?>

                                    <li class="list-group-item"><?= user()->email; ?></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- Footter -->
    <div class="b-example-divider"></div>
    <div class="container-fluid pt-1" style="background-color: #1640D6;">
        <div class="container d-flex flex-wrap">
            <footer class="bd-footer py-4 py-md-2 mt-5 bg-body-dark">
                <div class="row">
                    <div class="col-6 col-md-2 mb-4">
                        <h5 class="text-white">FOOTER</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-white">Home</a></li>
                            <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-white">Product</a></li>
                            <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-white">Category</a></li>
                            <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-white">Brand</a></li>
                            <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-white">About Us</a></li>
                        </ul>
                    </div>

                    <div class="col-5 col-sm-5">
                        <h5 class="text-white">CONTACT US</h5>
                        <ul class="nav flex-column">
                            <li>
                                <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:volkltennisid@gmail.com"><i class="bi bi-envelope-at-fill text-white" style="font-size: 1.4rem;"></i>
                                    volkltennisid@gmail.com</a>
                            </li>
                            <li>
                                <a class="navbar-sm-brand text-light text-decoration-none" href="tel:0877-8899-5040"><i class="bi bi-telephone-fill text-white" style="font-size: 1.4rem;"></i>
                                    0877-8899-5040</a>
                            </li>
                            <li>
                                <a class="navbar-sm-brand text-light text-decoration-none" href="https://www.google.com/maps/place/Arora+Putra+Sports+%26+Music/@-6.1667819,106.8294531,17z/data=!3m1!4b1!4m6!3m5!1s0x2e69f5cf64a66f37:0x621bb01159c84993!8m2!3d-6.1667872!4d106.832028!16s%2Fg%2F1td8n6hc?entry=ttu">
                                    <i class="bi bi-geo-alt-fill text-white" style="font-size: 1.54em;"></i> Jl.Antara No.10710, Ps.Baru, Kecamatan Sawah Besar, Kota Jakarta Pusat, Daerah
                                    Khusus Ibukota Jakarta 10710</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6 col-sm-5">
                        <h5 class="text-white">FOLLOW US</h5>
                        <ul class="nav flex-column">
                            <li>
                                <a class="navbar-sm-brand text-light text-decoration-none" href="https://www.facebook.com/profile.php?id=100092510078745" target="_blank" rel="sponsored">
                                    <i class="bi bi-facebook text-white" style="font-size: 1.54em;"></i> Arora Putra Sport & Music</a>
                            </li>
                            <li>
                                <a class="navbar-sm-brand text-light text-decoration-none" href="https://www.instagram.com/volkltennis.id/" target="_blank">
                                    <i class="bi bi-instagram text-white" style="font-size: 1.54em;"></i> Arora Putra Sport & Music</a>
                            </li>
                            <li>
                                <a class="navbar-sm-brand text-light text-decoration-none" href="whatsapp://send?text=Hello&phone=+6287788995040" target="_blank">
                                    <i class="bi bi-whatsapp text-white" style="font-size: 1.54em;"></i> Arora Putra Sport & Music</a>
                            </li>
                        </ul>
                    </div>
                </div>
        </div>

        <img src="<?= base_url('img/logoarora.png') ?>" class="img-fluid" style="width: min(280vw, 280px)">
        <div class="d-flex flex-column flex-sm-row justify-content-between py-2 my-2 md-4 border-top text-white">
            <span><?= date('Y'); ?> Copyright &copy; Arora Putra Sport Music</span>

        </div>
        </footer>
    </div>
    <!-- end footer -->

    <!-- Back to Top -->
    <!-- <div onclick="toggleScroll()" class="scrollTop" id="scrollTop">
        <i class="bi bi-arrow-up-circle-fill" style="font-size: 2.2rem;"></i>
    </div> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>