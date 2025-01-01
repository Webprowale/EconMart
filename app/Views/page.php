<?= $this->extend('layout') ?>
<?= $this->section('page') ?>

<div class="fashion_section">
    <div class="container">
        <h1 class="fashion_taital text-center mb-4">Our Products</h1>
        <div class="fashion_section_2">
            <div class="row">
                <?php foreach ($products as $product): ?>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="box_main text-center shadow-sm p-3">
                        <h4 class="shirt_text"><?= esc($product['name']) ?></h4>
                        <p class="price_text">Price <span style="color: #262626;">$<?= esc($product['price']) ?></span></p>
                        <div class="tshirt_img">
                            <img src="<?= base_url($product['image']) ?>" alt="<?= esc($product['name']) ?>" class="img-fluid">
                        </div>
                        <div class="btn_main">
                            <div class="buy_bt"><a href="#">Buy Now</a></div>
                            <div class="seemore_bt"><a href="#">Add cart</a></div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
