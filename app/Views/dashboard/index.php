<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        Dashboard
    </h1>

    <div class="row">
        <?php foreach ($produks as $produk) : ?>
            <div class="col-lg-3" onclick="<?= base_url('produk/detail/' . $produk['id_produk']) ?>">
                <div class="card h-100">
                    <img src="<?= base_url('img/' . $produk['gambar_produk'])  ?>" alt="Image" class="card-img-top">
                    <div class="card-body">
                        <h4 class="card-title"><?= $produk['nama_produk']; ?></h4>
                        <h4 class="card-text"> <?= $produk['harga']; ?></h4>
                        <a href="<?= base_url('dashboard/' . $produk['id_produk']) ?>" class="btn btn-info">Detail Product</a>

                    </div>
                </div>
            </div><br>
        <?php endforeach; ?>
    </div>

</div>

<?= $this->endSection(); ?>