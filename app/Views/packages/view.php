<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>
<div class="container">
    <h1><?= $package['title'] ?></h1>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php
            $images = explode(',', $package['images']);
            foreach ($images as $index => $image): ?>
                <div class="carousel-item <?= $index == 0 ? 'active' : '' ?>">
                    <img src="<?= base_url('uploads/' . $image) ?>" class="d-block w-100" alt="...">
                </div>
            <?php endforeach; ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="mt-4">
        <h2>Description</h2>
        <p><?= $package['description'] ?></p>
        <h2>Price</h2>
        <p>$<?= $package['price'] ?></p>
        <h2>Includes</h2>
        <p><?= nl2br($package['includes']) ?></p>
        <h2>Excludes</h2>
        <p><?= nl2br($package['excludes']) ?></p>
    </div>
</div>
<?= $this->endSection() ?>
