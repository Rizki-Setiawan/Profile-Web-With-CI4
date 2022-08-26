<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>BLKK SHIROTUL FALAH</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url('assets_frontend/img/favicon.png')?>" rel="icon">
  <link href="<?= base_url('assets_frontend/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('assets_frontend/vendor/animate.css/animate.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets_frontend/vendor/aos/aos.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets_frontend/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets_frontend/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets_frontend/vendor/boxicons/css/boxicons.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets_frontend/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets_frontend/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url('assets_frontend/css/style.css') ?>" rel="stylesheet">

</head>

<body>

  <?= $this->include('layout_frontend/topbar') ?>
  <?= $this->include('layout_frontend/header') ?>
  
  <main id="main">
  
  <?= $this->renderSection('content_frontend') ?>
  
  </main>

  <?= $this->include('layout_frontend/footer') ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url('assets_frontend/vendor/aos/aos.js') ?>"></script>
  <script src="<?= base_url('assets_frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?= base_url('assets_frontend/vendor/glightbox/js/glightbox.min.js') ?>"></script>
  <script src="<?= base_url('assets_frontend/vendor/isotope-layout/isotope.pkgd.min.js') ?>"></script>
  <script src="<?= base_url('assets_frontend/vendor/php-email-form/validate.js') ?>"></script>
  <script src="<?= base_url('assets_frontend/vendor/purecounter/purecounter.js') ?>"></script>
  <script src="<?= base_url('assets_frontend/vendor/swiper/swiper-bundle.min.js') ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url('assets_frontend/js/main.js') ?>"></script>

</body>

</html>