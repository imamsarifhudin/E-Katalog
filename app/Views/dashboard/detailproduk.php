<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Product Detail</h1>

    <div class="row">
        <?php foreach ($produks as $produk) : ?>
            <div class="card mb-3" style="max-width: 2000px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?= base_url('img/' . $produk['gambar_produk'])  ?>" alt="Image" class="img-fluid rounded-start">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h2 class="card-title"><b><?= $produk['nama_produk']; ?></b></h2>
                            <h4 class="card-text"><?= $produk['harga']; ?></h4>
                            <h4 class="card-text"><b><small>Stock :</small></b> <?= $produk['stok']; ?></h4>
                            <h4 class="card-text"><b><small>Category :</small></b> <?= $produk['nama_kategori']; ?></h4>
                            <h4 class="card-text"><b><small>Brand :</small></b> <?= $produk['nama_merek']; ?></h4>
                            <h5 class="card-text"><b><small>Description :</small></b> <?= $produk['deskripsi']; ?></h5>
                            <br>
                            <input type="button" value="Back" onclick="history.back()" class="btn btn-danger">

                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>

    <?= $this->endSection(); ?>