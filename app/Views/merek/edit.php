<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="container">
        <h2 class="my-4"><i class="fas fa-edit"></i> Edit Brand</h2>

        <form action="../<?php echo $mereks['id_merek'] ?>" method="POST" enctype="multipart/form-data">
            <?= csrf_field() ?>

            <input type="hidden" name="_method" value="PUT">

            <div class="mb-3">
                <label for="nama_merek" class="form-label">Brand Name</label>
                <input type="text" name="nama_merek" class="form-control" value="<?= $mereks['nama_merek']; ?>" required>
            </div>

            <button type="submit" class="btn btn-primary">Edit</button>
            <input type="button" value="Back" onclick="history.back()" class="btn btn-danger">
        </form>
    </div>


</div>

<?= $this->endSection(); ?>