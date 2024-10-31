<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>
<main>
    <section class="py-0 text-center container-fluid">
        <div class="row py-lg-5">
            <div class="col-md-7 embed-responsive embed-responsive-16by9">
                <iframe width="100%" height="350" class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
            </div>
            <div class="col-md-5">
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php foreach ($data['galleries'] as $key => $value) { ?>
                    <div class="carousel-item <?= ($key == 0) ? 'active' : '' ?>" data-bs-interval="2000">
                        <img src="<?= $value['image'] ?>" class="d-block w-100" alt="...">
                    </div>
                    <?php } ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <!-- Ringkasan, Deskripsi, Fasilitas, Akomodasi, Agenda, Lainnya -->
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" href="#">Ringkasan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="deskripsi-tab" data-toggle="tab" href="#deskripsi" role="tab" aria-controls="deskripsi" aria-selected="true" href="#">Deskripsi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" href="#">Fasilitas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" href="#">Agenda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" href="#">Lainnya</a>
                </li>
            </ul>

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h1 class=""><?= $data['name'] ?></h1>
                </div>
                <div class="tab-pane fade" id="deskripsi" role="tabpanel" aria-labelledby="profile-tab">...</div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
            </div>
        </div>
    </div>
</main>
<?= $this->endSection() ?>