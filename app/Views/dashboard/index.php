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
                        <h5 class="card-text">Brand : <?= $produk['nama_merek']; ?></h5>
                        <h5 class="card-text">Category : <?= $produk['nama_kategori']; ?></h5>
                        <h5 class="card-text">Price : <?= $produk['harga']; ?></h5>
                        <h6 class="card-text">Description : <?= $produk['deskripsi']; ?></h6>
                    </div>
                </div>
            </div><br>
        <?php endforeach; ?>
    </div>

</div>

<?= $this->endSection(); ?>