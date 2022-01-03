<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600%7CUbuntu:300,400,500,700" rel="stylesheet">

  <!-- CSS -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/jquery.mCustomScrollbar.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/nouislider.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/ionicons.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/plyr.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/photoswipe.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/default-skin.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/main.css">

  <!-- Favicons -->
  
  <link rel="apple-touch-icon" href="<?= base_url() ?>assets/icon/favicon-32x32.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?= base_url() ?>assets/icon/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?= base_url() ?>assets/icon/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?= base_url() ?>assets/icon/apple-touch-icon-144x144.png">

  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="Dmitry Volkov">
  <title>Film</title>

</head>
<body class="body">
  
  <!-- header -->
  <?php $this->load->view('fronts/header') ?>
  <!-- end header -->

  <!-- home -->
  <?php $this->load->view($page) ?>
  <!-- end partners -->

  <!-- footer -->
  <?php $this->load->view('fronts/footer') ?>
  <!-- end footer -->

  <!-- JS -->
  <script src="<?= base_url() ?>assets/js/jquery-3.3.1.min.js"></script>
  <script src="<?= base_url() ?>assets/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>assets/js/owl.carousel.min.js"></script>
  <script src="<?= base_url() ?>assets/js/jquery.mousewheel.min.js"></script>
  <script src="<?= base_url() ?>assets/js/jquery.mCustomScrollbar.min.js"></script>
  <script src="<?= base_url() ?>assets/js/wNumb.js"></script>
  <script src="<?= base_url() ?>assets/js/nouislider.min.js"></script>
  <script src="<?= base_url() ?>assets/js/plyr.min.js"></script>
  <script src="<?= base_url() ?>assets/js/jquery.morelines.min.js"></script>
  <script src="<?= base_url() ?>assets/js/photoswipe.min.js"></script>
  <script src="<?= base_url() ?>assets/js/photoswipe-ui-default.min.js"></script>
  <script src="<?= base_url() ?>assets/js/main.js"></script>
</body>

</html>