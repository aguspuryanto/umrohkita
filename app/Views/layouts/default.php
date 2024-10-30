<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Umrah App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- <link href="<?=  base_url('css/styles.css') ?>" rel="stylesheet" /> -->
    <link href="<?=  base_url('css/customs.css') ?>" rel="stylesheet" />
  </head>
  <body>
    <?= $this->include('partials/navbar') ?>
    <div class="container">
      <?= $this->renderSection('content') ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- <script src="<?= base_url('js/scripts.js') ?>"></script> -->
    <?= $this->renderSection('javascript') ?>
  </body>
</html>
