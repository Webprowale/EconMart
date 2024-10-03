<?= $this->extend('control/layout'); ?>
<?= $this->section('control') ?>
<div class="container-fluid mt-5">
    <div class="d-flex justify-content-end mb-5">
        <a class="btn btn-primary " href="<?= base_url('control/create-product') ?>">Create Product</a>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Product</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                     <?php foreach($products as $product): ?>
                        <tr>
                            <td><?= $product['name']?></td>
                            <td><img src="<?= $product['image'] ?>" alt="<?= $product['name']?>" width="80"></td>
                            <td><?= $product['category_name']?></td>
                            <td><?= $product['price']?></td>
                            <td><a href="<?= base_url('control/edit-product/'.$product['id'])?>" class="btn btn-warning">Edit</a></td>
                            <td><a href="<?= base_url('control/delete-prod/'.$product['id'])?>" class="btn btn-danger">Delete</a></td>
                        </tr>
                     <?php endforeach; ?>   
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>