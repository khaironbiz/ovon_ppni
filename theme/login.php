<?php

session_start(); // Memulai Session
$error = ''; // Variabel untuk menyimpan pesan error
include("../auth/site.php");
include("../auth/koneksi.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $judul ?></title>
  <link rel="icon" href="https://ppni.or.id/simk/image/LOGO-PPNI.png">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= $site_url;?>/assets/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= $site_url;?>/assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= $site_url;?>/assets/admin/dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
<?php
include($wrapp);

?>

<!-- jQuery -->
<script src="<?= $site_url;?>/assets/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= $site_url;?>/assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- admin App -->
<script src="<?= $site_url;?>/assets/admin/dist/js/adminlte.min.js"></script>
</body>
</html>
<?php
session_destroy();
?>
