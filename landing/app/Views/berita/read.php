<?php use App\Models\Berita_model;

$m_berita = new Berita_model();
$sidebar  = $m_berita->sidebar();
?>
<main id="main">
  <section id="contact" class="contact">
    <div class="container-fluid">
      <div class="row mt-5">
         <div class="col-md-8">
           <div class="card" style="margin-bottom: 20px;">
            <img src="<?= base_url('assets/upload/image/' . $berita['gambar']) ?>">
            <div class="card-header">
              <h3><?= $berita['judul_berita'] ?></h3>
            </div>
            <div class="card-body">
              
                <?= $berita['isi'] ?>

            </div>
          </div>
        </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-header bg-dark text-white">
                <h5>Berita Lainnya</h5>
              </div>
              <div class="card-body">
                <?php foreach ($sidebar as $sidebar) { ?>
                <div class="card mt-1">
                  <div class="row">
                    <div class="col-3">
                      <?php if ($sidebar['gambar'] === '') { ?>
                        <img src="<?= icon() ?>" class="img img-thumbnail">
                      <?php } else { ?>
                        <img src="<?= base_url('assets/upload/image/thumbs/' . $sidebar['gambar']) ?>" class="img img-thumbnail">
                      <?php } ?>
                    </div>
                    <div class="col-9">
                      <h4 style="font-size: 14px;">
                        <a href="<?= base_url('berita/read/' . $sidebar['slug_berita']) ?>">
                          <?= $sidebar['judul_berita'] ?>
                        </a>
                      </h4>
                    </div>
                  </div>
                    
                </div> 
                <?php 
                } 
                ?>
              
              </div>
              <div class="card-header">
                Videos
              </div>
              <div class="card-body">
                <div class="row">
                  <?php foreach ($video as $video) { ?>
                  <div class="col-md-12">
                    <div class="card mt-1">
                      <iframe  class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $video['video'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="min-height: 300px;"></iframe>
                      <div class="card-header">
                        <h6><?= $video['judul'] ?></h6>
                      </div>
                    </div>
                  </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Contact Section -->
</main><!-- End #main -->