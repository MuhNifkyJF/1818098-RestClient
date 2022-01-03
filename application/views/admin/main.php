<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title> Dashboard</title>
  <link href="<?= base_url() ?>asset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url() ?>asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url() ?>asset/css/ruang-admin.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <?php $this->load->view('admin/sidebar') ?>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <?php $this->load->view('admin/topbar') ?>
        <!-- Topbar -->

        <!-- Container Fluid-->
        
        <?php $this->load->view($page) ?>
        
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      <?php $this->load->view('admin/footer') ?>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="<?= base_url() ?>asset/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url() ?>asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>asset/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?= base_url() ?>asset/js/ruang-admin.min.js"></script>
  <script src="<?= base_url() ?>asset/vendor/chart.js/Chart.min.js"></script>
  <script src="<?= base_url() ?>asset/js/demo/chart-area-demo.js"></script>  
  
</body>

</html>