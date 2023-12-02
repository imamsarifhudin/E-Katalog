<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="container">
        <h2 class="my-4"><i class="fas fa-plus"></i>
        Create Brand</h2>

        <form action="<?php echo base_url('merek/store') ?>" method="POST" enctype="multipart/form-data">
            <?= csrf_field() ?>

            <div class="mb-3">
                <label for="nama_merek" class="form-label">Brand Name</label>
                <input type="text" name="nama_merek" class="form-control" required autofocus>
            </div>

            <button type="submit" class="btn btn-primary">Create</button>

            <input type="button" value="Back" onclick="history.back()" class="btn btn-danger">

        </form>
    </div>
</div>

<?= $this->endSection(); ?>