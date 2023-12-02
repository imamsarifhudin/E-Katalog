<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">
        <i class="fas fa-th-large"></i>
        Category List
    </h1>

    <div class="row">
        <div class="col-lg-20">
            <a href="<?= base_url('kategori/create') ?>" class="btn btn-primary" style="float: right;"><i class="fas fa-plus"></i> Add</a>
            <br><br>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th class="" scope="col"> Category Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($kategoris as $kategori) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $kategori['nama_kategori']; ?></td>
                            <td>
                                <a href="<?= base_url('kategori/edit/') . $kategori['id_kategori']; ?>" class="btn btn-info"><i class="fas fa-edit"></i></a>
                                <a href="<?= base_url('kategori/delete/' . $kategori['id_kategori']) ?>" onclick="return confirm('Are you sure?')" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>

                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>

<?= $this->endSection(); ?>