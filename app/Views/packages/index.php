<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>
<div class="container">
    <h1>Our Packages</h1>
    <div class="row">
        <?php foreach ($packages as $package): ?>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div id="carouselExampleIndicators<?= $package['id'] ?>" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <?php
                            $images = explode(',', $package['images']);
                            foreach ($images as $index => $image): ?>
                                <div class="carousel-item <?= $index == 0 ? 'active' : '' ?>">
                                    <img src="<?= base_url('uploads/' . $image) ?>" class="d-block w-100" alt="...">
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators<?= $package['id'] ?>" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators<?= $package['id'] ?>" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?= $package['title'] ?></h5>
                        <p class="card-text"><?= substr($package['description'], 0, 100) ?>...</p>
                        <p class="card-text"><strong>Price:</strong> $<?= $package['price'] ?></p>
                        <a href="<?= base_url('packages/view/' . $package['id']) ?>" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?= $this->endSection() ?>
