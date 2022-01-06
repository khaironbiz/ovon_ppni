<main id="main">
  
  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">
      <div class="card mt-5">
        <div class="card-header text-center">
          <h4>News</h4>
        </div>
        <div class="card-body">
          <div class="row">
            <?php foreach ($berita as $berita) { ?>
            <div class="col-md-3">
              <div class="card">
                <img src="<?= base_url('assets/upload/image/' . $berita['gambar']) ?>">
                <div class="card-header">
                    <?= $berita['judul_berita'] ?>
                  </div>
                <div class="card-body text-black text-sm">
                  <?= $berita['ringkasan'] ?>
                </div>
                <div class="card footer text-end">
                  <div>
                    <a href="<?= base_url('berita/read/' . $berita['slug_berita']) ?>" class="btn btn-success btn-sm">
                      <i class="fa fa-chevron-right"></i>  Baca...
                  </a>
                  </div>
                  
                </div>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
      
    </div>
  </section><!-- End Contact Section -->
</main><!-- End #main -->