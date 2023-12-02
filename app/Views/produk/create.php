<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="container">
        <h2 class="my-4"><i class="fas fa-plus"></i>
            Create Product</h2>

        <form action="<?php echo base_url('produk/store') ?>" method="POST" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <div class="mb-3">
                <label for="nama_produk" class="form-label">Product Name</label>
                <input type="text" name="nama_produk" class="form-control" required autofocus>
            </div>

            <div class="mb-3">
                <label for="id_kategori" class="form-label">Category</label>
                <select name="id_kategori" class="form-control .animated--grow-in">
                    <?php foreach ($kategoris as $kategori) : ?>
                        <option value="<?= $kategori['id_kategori']; ?>"><?= $kategori['nama_kategori']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="id_merek" class="form-label">Brand</label>
                <select name="id_merek" class="form-control .animated--grow-in">
                    <?php foreach ($mereks as $merek) : ?>
                        <option value="<?= $merek['id_merek']; ?>"><?= $merek['nama_merek']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="harga" class="form-label">Price</label>
                <input type="text" name="harga" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="stok" class="form-label">Stock</label>
                <input type="text" name="stok" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="deskripsi" class="form-label">Description</label>
                <textarea name="deskripsi" class="form-control" required></textarea>
            </div>

            <div class="mb-3">
                <label for="gambar_produk" class="form-label">Product Image</label>
                <input type="file" name="gambar_produk" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
            <input type="button" value="Back" onclick="history.back()" class="btn btn-danger">
        </form>
    </div>
</div>

<?= $this->endSection(); ?>