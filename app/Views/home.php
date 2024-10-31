<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>
<main>
    <section class="py-0 text-center container">
        <div class="row py-lg-5">
            <div class="p-5 text-center bg-body-tertiary rounded-3">
                <h1 class="text-body-emphasis">Welcome to Umrah App</h1>
                <p class="lead">This is the home page for the Umrah application.</p>
            </div>
        </div>
    </section>
    <div class="album py-0 bg-body-tertiary">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
        <?php
        if($data):
          // echo $data;
          foreach ($data['data'] as $key => $value) {
          ?>
        <div class="col-sm-3 mb-3 d-flex align-items-stretch">
          <div class="card h-100 shadow-sm">
            <div class="card-img-top-overlay">
              <div class="overlay"></div><span class="bg-secondary card-badge text-white top-right"><?= $value['travel_name'] ?></span>
              <div class="position-relative">
                <img src="<?= $value['thumbnail'] ?>" class="card-img-top" alt="<?= $value['name'] ?>">
                <!-- <div class="shape text-white bottom"><svg width="528px" height="40px" viewBox="0 0 528 40" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                    <g id="shape" transform="matrix(-1.138336E-07 -1 1 -1.138336E-07 0 39.92764)">
                      <path d="M0 0L40.5467 0C40.5467 0 -31.8215 230.87 38.7134 528.217C39.8794 533.133 31.7549 527.502 31.0925 528.75C28.7914 533.084 26.1543 528.191 24.4327 529.178C59.2372 539.206 14.0091 521.981 12.9329 530.001L1.02722 528.284L0 0Z" transform="translate(7.629395E-06 6.103516E-05)" fill="currentColor" stroke="none"></path>
                    </g>
                  </svg></div> -->
              </div>
            </div>
            <div class="card-body position-relative">
              <h5 class="card-title"><?= $value['name'] ?></h5>
              <p class="card-text"><?= $value['travel_name'] ?></p>
              <p class="card-text">Sisa <?= $value['quota'] ?> kursi</p>
              <div class="row">
                  <div class="col-8"><small class="text-muted"><?= $value['departure_date'] ?></small></div>
                  <div class="col-4"><small class="text-muted"><?= $value['duration'] ?></small></div>
              </div>
              <div class="row justify-content-between">
                <div class="d-grid gap-2 mt-auto">
                  <span class="text-muted">Mulai dari </span>
                  <p class="h5"><?= $value['currency'] . ' ' . number_format($value['price'], 0, ',', '.') ?></p>
                  <a href="<?= base_url('product/' . $value['slug']) ?>" class="btn btn-primary" style="margin-top: auto;">Book now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php }
        endif; ?>

      </div>
    </div>
    </div>
</main>
<?= $this->endSection() ?>
