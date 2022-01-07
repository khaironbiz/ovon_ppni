<main id="main">
  
  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">
      <div class="card">
        <div class="row mt-5">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header bg-dark text-white text-center">
                <h5>Berita Terkini</h5>
              </div>
              <div class="card-body">
                <div class="row">
                  <?php foreach ($berita as $berita) { ?>
                  <div class="col-md-6 mb-1">
                    <div class="card">
                      <img src="<?= base_url('assets/upload/image/' . $berita['gambar']) ?>">
                      <div class="card-header">
                          <?= $berita['judul_berita'] ?>
                        </div>
                      <div class="card-body text-black">
                        <?= $berita['ringkasan'] ?>
                        <a href="<?= base_url('berita/read/' . $berita['slug_berita']) ?>"><br>
                            <i class="fa fa-chevron-right" style="font-size: 0.6em;"></i>  More...</a>
                      </div>
                    </div>
                  </div>
                  <?php 
                } ?>
                </div>
              </div>
            </div>
          </div>
            <div class="col-md-4">
              <div class="card">
                <div class="card-header bg-dark text-white text-center">
                  <h5>Kategori</h5>
                </div>
                <div class="card-body">
                  <ul>
                    <li>Makanan</li>
                    <li>Minuman</li>
                    <li>Snack</li>
                  </ul>
                </div>
                <div class="card-footer bg-black text-white text-center">
                  <h6>Berita Terpopuler</h6>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-6">
                      <div class="card mb-1">
                        <div class="card-body">
                          satu
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-6">
                      <div class="card mb-1">
                        <div class="card-body">
                          Dua
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-6">
                      <div class="card mb-1">
                        <div class="card-body">
                          Tiga
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-6">
                      <div class="card mb-1">
                        <div class="card-body">
                          Emapt
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-header bg-black text-white text-center">
                  <h6>Gallery Foto</h6>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                      Gambar satu
                    </div>
                    <div class="col-md-6">
                      Gambar dua
                    </div>
                  </div>
                </div>
                <div class="card-footer bg-black text-white text-center">
                  <h6>Video</h6>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="card mb-1">
                      Video satu
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="card mb-1">
                      Video Dua
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="card mb-1">
                      Video tiga
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-header bg-black text-white text-center">
                  <h6>Sponsor</h6>
                </div>
                <div class="card-body row">
                  <div class="col-md-6">
                    <div class="card mb-1">
                      Sponsor 1
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="card mb-1">
                      Sponsor 1
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="card mb-1">
                      Sponsor 1
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      
    </div>
  </section><!-- End Contact Section -->
</main><!-- End #main -->