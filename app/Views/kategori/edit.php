<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="container">
        <h2 class="my-4"><i class="fas fa-edit"></i> Edit Category</h2>

        <form action="../<?php echo $kategoris['id_kategori'] ?>" method="POST" enctype="multipart/form-data">
            <?= csrf_field() ?>

            <input type="hidden" name="_method" value="PUT">

            <div class="mb-3">
                <label for="nama_kategori" class="form-label">Category Name</label>
                <input type="text" name="nama_kategori" class="form-control" value="<?= $kategoris['nama_kategori']; ?>" required>
            </div>

            <button type="submit" class="btn btn-primary">Edit</button>
            <input type="button" value="Back" onclick="history.back()" class="btn btn-danger">
        </form>
    </div>


</div>

<?= $this->endSection(); ?>