<?php use App\Models\Konfigurasi_model;
use App\Models\Menu_model;

$konfigurasi  = new Konfigurasi_model();
$menu         = new Menu_model();
$site         = $konfigurasi->listing();
$menu_berita  = $menu->berita();
$menu_profil  = $menu->profil();
$menu_layanan = $menu->layanan();
?>
<!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="align-items-center d-none d-md-flex">
        <i class="fa fa-home"></i> <?= tagline(); ?>
      </div>
      <div class="d-flex align-items-center">
        <i class="bi bi-phone"></i> <?= telepon() ?>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="<?= base_url() ?>" class="logo me-auto">OVON</a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="<?= base_url() ?>">Home</a></li>
          
          <li><a class="nav-link scrollto" href="<?= base_url('berita') ?>">News</a></li>
          
          <li class="dropdown"><a href="#"><span>Galeri</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="<?= base_url('galeri') ?>">Galeri Gambar</a></li>
              <li><a href="<?= base_url('video') ?>">Galeri Video</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="<?= base_url('download') ?>">Download</a></li>
          <li><a class="nav-link scrollto" href="<?= base_url('kontak') ?>">Kontak</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="<?= base_url('login') ?>" class="appointment-btn scrollto">
        Login
      </a>

    </div>
  </header><!-- End Header -->