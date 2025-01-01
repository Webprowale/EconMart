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
        <?php if(isset($success)): ?>
          <div class="alert alert-success" role="alert">
             <small><?= $success?></small>
            </div>
        <?php endif; ?>
        <form method="post" action="<?= base_url('control/store-prod') ?>" enctype="multipart/form-data" class='p-5'>
            <div class="row">
                <div class="mb-3 rounded col-md-6">
                    <label for="title" style="background-color: transparent;">Title</label>
                    <input type="text" name="name" class="form-control text-black" placeholder="Name...">
                    <?php if (isset($errors['name'])): ?>
                        <small class="text-danger"><?= esc($errors['name']) ?></small>
                    <?php endif; ?>
                </div>
                <div class="mb-3 rounded col-md-6">
                    <label for="price" style="background-color: transparent;">Price</label>
                    <input type="number" name="price" class="form-control text-black" placeholder="Product price...">
                    <?php if (isset($errors['price'])): ?>
                        <small class="text-danger"><?= esc($errors['price']) ?></small>
                    <?php endif; ?>
                </div>
                <div class="mb-3 rounded col-md-6">
                    <label for="category" style="background-color: transparent;">Category</label>
                   <select name="category_id"  class="form-control text-black">
                    <option value="">Select Category</option>
                    <?php foreach ($categories as $category):?>
                        <option value="<?= $category['id'];?>"><?= $category['name'];?></option>
                    <?php endforeach;?>
                   </select>
                    <?php if (isset($errors['category_id'])):?>
                        <small class="text-danger"><?= esc($errors['category_id']) ?></small>
                    <?php endif;?>
                </div>
                <div class="mb-3 rounded p-0 col-md-6">
                    <label for="image" style="background-color: transparent;">Image</label>
                    <input type="file" name="image" class="form-control">
                    <?php if (isset($errors['image'])): ?>
                        <small class="text-danger"><?= esc($errors['image']) ?></small>
                    <?php endif; ?>
                </div>
                <div class="mb-3 rounded col-md-12">
                    <label for="description" style="background-color: transparent;">Description</label>
                    <textarea name="description" col='6' class="form-control text-black" placeholder="Product description..."></textarea>
                    <?php if (isset($errors['description'])): ?>
                        <small class="text-danger"><?= esc($errors['description']) ?></small>
                    <?php endif; ?>


                <input type="submit" name="register" value="Create" class="w-25 mt-3 btn btn-primary text-white form-control fs-5">
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>