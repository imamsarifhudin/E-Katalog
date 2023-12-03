<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>
<?php
if (logged_in()) {
    $img = user()->user_image;
    $username = user()->username;
    $full_name = user()->fullname;
    $email = user()->email;
} else {
    $img = '';
    $username = '';
    $full_name = '';
    $email = '';
}
?>
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">My Profile</h1>

    <div class="row">
        <div class="col-lg-8">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?= base_url('/img/' . $img); ?>" class="img-fluid rounded-start" alt="<?= $username; ?>">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <h4><?= $username ?></h4>
                                </li>
                                <li class="list-group-item"><?= $full_name ?></li>

                                <li class="list-group-item"><?= $email ?></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>