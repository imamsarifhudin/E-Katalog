<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="container">
        <h2 class="my-4"><i class="fas fa-edit"></i> Edit Product</h2>

        <form action="../<?php echo $produk['id_produk'] ?>" method="POST" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <input type="hidden" name="_method" value="PUT">
            <div class="mb-3">
                <label for="nama_produk" class="form-label">Product Name</label>
                <input type="text" name="nama_produk" class="form-control" value="<?= $produk['nama_produk']; ?>" required>
            </div>

            <div class="mb-3">
                <label for="id_kategori" class="form-label">Category</label>
                <select name="id_kategori" class="form-control .animated--grow-in" required>
                    <?php foreach ($kategoris as $kategori) : ?>
                        <option value="<?= $kategori['id_kategori']; ?>" <?= ($kategori['id_kategori'] == $produk['id_kategori']) ? 'selected' : ''; ?>>
                            <?= $kategori['nama_kategori']; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="id_merek" class="form-label">Brand</label>
                <select name="id_merek" class="form-control .animated--grow-in" required>
                    <?php foreach ($mereks as $merek) : ?>
                        <option value="<?= $merek['id_merek']; ?>" <?= ($merek['id_merek'] == $produk['id_merek']) ? 'selected' : ''; ?>>
                            <?= $merek['nama_merek']; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="harga" class="form-label">Price</label>
                <input type="text" name="harga" class="form-control" value="<?= $produk['harga']; ?>" required>
            </div>

            <div class="mb-3">
                <label for="stok" class="form-label">Stock</label>
                <input type="text" name="stok" class="form-control" value="<?= $produk['stok']; ?>" required>
            </div>

            <div class="mb-3">
                <label for="deskripsi" class="form-label">Description</label>
                <textarea name="deskripsi" class="form-control" required><?= $produk['deskripsi']; ?></textarea>
            </div>

            <div class="mb-3">
                <label for="gambar_produk" class="form-label">Product Image</label>
                <div class="mb-3">
                    <img src="<?= base_url('img/' . $produk['gambar_produk']) ?>" style="max-width: 200px;" alt="" class="img-fluid card-img">
                </div>
                <input type="file" name="gambar_produk" class="form-control" value="<?= $produk['gambar_produk']; ?>" src="<?= base_url('img/' . $produk['gambar_produk']) ?>">
            </div>

            <button type="submit" class="btn btn-primary">Edit</button>
            <input type="button" value="Back" onclick="history.back()" class="btn btn-danger">
        </form>
    </div>


</div>

<?= $this->endSection(); ?>