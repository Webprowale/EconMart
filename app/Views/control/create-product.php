<?= $this->extend('control/layout'); ?>
<?= $this->section('control') ?>
<div class="container-fluid mt-5">
    <div class="d-flex justify-content-end mb-5">
        <a class="btn btn-primary " href="<?= base_url('control') ?>">Go Back</a>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Create Product</h6>
        </div>
        <form method="post" action="<?= base_url('control/en') ?>" enctype="multipart/form-data" class='p-5'>
            <div class="row">
                <div class="mb-3 rounded col-md-6">
                    <label for="title" style="background-color: transparent;">Title</label>
                    <input type="text" name="title" class="form-control text-black" placeholder="Title..."
                        value="<?= isset($postData['title']) ? esc($postData['title']) : '' ?>">
                    <?php if (isset($errors['title'])): ?>
                        <small class="text-danger"><?= esc($errors['title']) ?></small>
                    <?php endif; ?>
                </div>
                <div class="mb-3 rounded col-md-6">
                    <label for="description" style="background-color: transparent;">Description</label>
                    <input type="text" name="description" class="form-control text-black" placeholder="Course Description..."
                        value="<?= isset($postData['description']) ? esc($postData['description']) : '' ?>">
                    <?php if (isset($errors['description'])): ?>
                        <small class="text-danger"><?= esc($errors['description']) ?></small>
                    <?php endif; ?>
                </div>
                <div class="mb-3 rounded col-md-6">
                    <label for="price" style="background-color: transparent;">Price</label>
                    <input type="number" name="price" class="form-control text-black" placeholder="Course price..."
                        value="<?= isset($postData['price']) ? esc($postData['price']) : '' ?>">
                    <?php if (isset($errors['price'])): ?>
                        <small class="text-danger"><?= esc($errors['price']) ?></small>
                    <?php endif; ?>
                </div>
                <div class="mb-3 rounded col-md-6">
                    <label for="category" style="background-color: transparent;">Category</label>
                    <input type="text" name="category" class="form-control text-black" placeholder="Course Category..."
                        value="<?= isset($postData['category']) ? esc($postData['category']) : '' ?>">
                    <?php if (isset($errors['category'])): ?>
                        <small class="text-danger"><?= esc($errors['category']) ?></small>
                    <?php endif; ?>
                </div>
                <div class="mb-3 rounded p-0 col-12">
                    <label for="image" style="background-color: transparent;">Image</label>
                    <input type="file" name="image" class="form-control">
                    <?php if (isset($errors['image'])): ?>
                        <small class="text-danger"><?= esc($errors['image']) ?></small>
                    <?php endif; ?>
                </div>


                <input type="submit" name="register" value="Create" class="w-25 mt-3 btn btn-primary text-white form-control fs-5">
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>