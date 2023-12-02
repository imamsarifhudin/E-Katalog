<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">
        <i class="fas fa-cubes"></i>
        Product List
    </h1>

    <div class="row">
        <div class="col-lg-16">
            <a href="<?= base_url('produk/create') ?>" class="btn btn-primary" style="float: right;"><i class="fas fa-plus"></i> Add</a>
            <br><br>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Category</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Price</th>
                        <th scope="col">Image Product</th>
                        <th scope="col">Description</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($produks as $produk) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $produk['nama_produk']; ?></td>
                            <td><?= $produk['nama_merek']; ?></td>
                            <td><?= $produk['nama_kategori']; ?></td>
                            <td><?= $produk['stok']; ?></td>
                            <td><?= $produk['harga']; ?></td>
                            <td><img src="<?= base_url('img/' . $produk['gambar_produk'])  ?>" alt="Image" style="max-width: 200px;" class="img-fluid card-img"></td>
                            <td><?= $produk['deskripsi']; ?></td>
                            <td>
                                <a href="<?= base_url('produk/edit/') . $produk['id_produk']; ?>" class="btn btn-info"><i class="fas fa-edit"></i></a>
                                <a href="<?= base_url('produk/delete/' . $produk['id_produk']) ?>" onclick="return confirm('Are you sure?')" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>

                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>

<?= $this->endSection(); ?>