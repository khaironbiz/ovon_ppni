<?php
include("../auth/site.php");
include("../auth/koneksi.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $judul; ?></title>
  <link rel="icon" href="https://ppni.or.id/simk/image/LOGO-PPNI.png">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= $site_url;?>/assets/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?= $site_url;?>/assets/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= $site_url;?>/assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?= $site_url;?>/assets/admin/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= $site_url;?>/assets/admin/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= $site_url;?>/assets/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= $site_url;?>/assets/admin/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?= $site_url;?>/assets/admin/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<?php
include($wrapp);
?>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= $site_url;?>/assets/admin/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= $site_url;?>/assets/AdminLTE/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= $site_url;?>/assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?= $site_url;?>/assets/admin/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?= $site_url;?>/assets/admin/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?= $site_url;?>/assets/admin/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= $site_url;?>/assets/admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= $site_url;?>/assets/admin/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= $site_url;?>/assets/admin/plugins/moment/moment.min.js"></script>
<script src="<?= $site_url;?>/assets/admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= $site_url;?>/assets/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?= $site_url;?>/assets/admin/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= $site_url;?>/assets/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- admin App -->
<script src="<?= $site_url;?>/assets/admin/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= $site_url;?>/assets/admin/dist/js/demo.js"></script>
<!-- admin dashboard demo (This is only for demo purposes) -->
<script src="<?= $site_url;?>/assets/admin/dist/js/pages/dashboard.js"></script>
</body>
</html>
