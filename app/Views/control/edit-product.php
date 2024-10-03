<?= $this->extend('control/layout'); ?>
<?= $this->section('control') ?>
<div class="container-fluid mt-5">
    <div class="d-flex justify-content-end mb-5">
        <a class="btn btn-primary" href="<?= base_url('control') ?>">Go Back</a>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Product</h6>
        </div>
        <?php if(isset($success)): ?>
          <div class="alert alert-success" role="alert">
             <small><?= $success?></small>
            </div>
        <?php endif; ?>
        <?php if(isset($dbError)): ?>
          <div class="alert alert-danger" role="alert">
             <small><?= $dbError?></small>
            </div>
        <?php endif; ?>
        <form method="post" action="<?= base_url('control/update-product/' . $product['id']) ?>" enctype="multipart/form-data" class='p-5'>
            <div class="row">
                <div class="mb-3 rounded col-md-6">
                    <label for="name" style="background-color: transparent;">Name</label>
                    <input type="text" name="name" value="<?= esc($product['name']); ?>" class="form-control text-black" placeholder="Name...">
                    <?php if (isset($errors['name'])): ?>
                        <small class="text-danger"><?= esc($errors['name']) ?></small>
                    <?php endif; ?>
                </div>
                <div class="mb-3 rounded col-md-6">
                    <label for="price" style="background-color: transparent;">Price</label>
                    <input type="number" name="price" value="<?= esc($product['price']); ?>" class="form-control text-black" placeholder="Product price...">
                    <?php if (isset($errors['price'])): ?>
                        <small class="text-danger"><?= esc($errors['price']) ?></small>
                    <?php endif; ?>
                </div>
                <div class="mb-3 rounded col-md-6">
                    <label for="category" style="background-color: transparent;">Category</label>
                    <select name="category_id" class="form-control text-black">
                        <?php foreach ($categories as $category): ?>
                            <option value="<?= esc($category['id']); ?>" <?= ($category['id'] == $product['category_id']) ? 'selected' : ''; ?>>
                                <?= esc($category['name']); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <?php if (isset($errors['category_id'])): ?>
                        <small class="text-danger"><?= esc($errors['category_id']) ?></small>
                    <?php endif; ?>
                </div>
                <div class="mb-3 rounded col-md-6">
                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#imageModal">
                        View Image
                    </button>
                    <input type="file" name="image" class="form-control">
                    <?php if (isset($errors['image'])): ?>
                        <small class="text-danger"><?= esc($errors['image']) ?></small>
                    <?php endif; ?>
                </div>
                <input type="submit" name="update" value="Update" class="w-25 mt-3 btn btn-primary text-white form-control fs-5">
            </div>
        </form>
    </div>
</div>


<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="imageModalLabel">Uploaded Image</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <img src="<?= base_url($product['image']); ?>" alt="<?= esc($product['name']); ?>" class="img-fluid">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
