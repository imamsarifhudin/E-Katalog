<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">
        <i class="fab fa-bandcamp"></i>
        Brand List
    </h1>

    <div class="row">
        <div class="col-lg-20">
            <a href="<?= base_url('merek/create') ?>" class="btn btn-primary" style="float: right;"><i class="fas fa-plus"></i> Add</a>
            <br><br>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="" scope="col">No</th>
                        <th scope="col">Brand Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($mereks as $merek) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $merek['nama_merek']; ?></td>
                            <td>
                                <a href="<?= base_url('merek/edit/') . $merek['id_merek']; ?>" class="btn btn-info"><i class="fas fa-edit"></i></a>
                                <a href="<?= base_url('merek/delete/' . $merek['id_merek']) ?>" onclick="return confirm('Are you sure?')" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>

                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>

<?= $this->endSection(); ?>