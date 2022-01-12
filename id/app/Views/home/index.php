<?php use App\Models\Menu_model;

$menu    = new Menu_model();
$berita  = $menu->berita();
$profil  = $menu->profil();
$layanan = $menu->layanan();
?>

<!-- ======= Hero Section ======= -->
  <section id="hero" class="mt-5">
    <div id="heroCarousel" data-bs-interval="4000" class="carousel slide carousel-fade mt-5" data-bs-ride="carousel">
      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
      <div class="carousel-inner" role="listbox">
        <?php 
        $noslide = 1;
        foreach ($slider as $slider) {  ?>
                <!-- Slide 1 -->
                <div class="carousel-item<?php if ($noslide === 1) {
            echo ' active';
        } ?>" style="background-image: url(<?= base_url('assets/upload/image/flayer/' . $slider['gambar']) ?>)">
          <?php 
          if ($slider['status_text'] === 'Ya') {  
          ?>
          
          <?php } ?>
        </div>
        <?php $noslide++; } ?>
      </div>
      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>
      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->
  <main id="main">
    
    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">
        <div class="text-center">
          <h2>Selamat datang di</h2>
          <h3><?= $konfigurasi['namaweb'] ?></h3>
          <p><?= $konfigurasi['tagline'] ?></p>
        </div>
      </div>
    </section><!-- End Cta Section -->
    
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Tenatang Kami</h2>
        </div>
        <div class="row justify-content-center">
          <!-- <div class="col-lg-4" data-aos="fade-right">
            <img src="<?= icon() ?>" class="img-fluid" alt="">
          </div> -->
          <div class="col-lg-8 pt-4 pt-lg-0 content text-center" data-aos="fade-left">
            <?= $konfigurasi['tentang'] ?>
          </div>
        </div>
      </div>
    </section><!-- End About Us Section -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Sejarah Singkat</h2>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-8 pt-4 pt-lg-0 content text-center" data-aos="fade-left">
            <?= $konfigurasi['deskripsi'] ?>
          </div>
        </div>
      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">
      <div class="row mt-5">
        <div class="col-md-12 text-center">
          <h2>Berita Terbaru</h2>
          <hr>
        </div>
        <?php foreach ($berita2 as $berita2) { ?>
         <div class="col-md-4">
           <div class="card" style="margin-bottom: 20px;">
            <img src="<?= base_url('assets/upload/image/flayer/' . $berita2['gambar']) ?>">
            <div class="card-body">
              <h3><?= $berita2['judul_berita'] ?></h3>
              <p class="card-text">
                <?= $berita2['ringkasan'] ?>
              </p>
              <hr>
              <p>
                <a href="<?= base_url('berita/read/' . $berita2['slug_berita']) ?>" class="btn btn-success">
                  <i class="fa fa-chevron-right"></i>  Baca...
                </a>
              </p>
            </div>
          </div>
         </div>
       <?php } ?>
      </div>
    </div>
  </section><!-- End Contact Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div>
        <style type="text/css" media="screen">
          iframe {
            min-height: 300px;
            width: 100%;
          }
        </style>
        <?= google_map() ?>
      </div>
    </section><!-- End Contact Section -->
</main><!-- End #main -->
