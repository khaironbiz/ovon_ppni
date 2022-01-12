<main id="main">
  
  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">
      <div class="card mt-5">
        <div class="card-header text-center text-white bg-black">
          <h2 = class="text-upper">BERITA </h2>
        </div>
        <div class="card-body row">
          <div class="col-lg-8">
            <div class="card mb-1">
              <div class="card-header bg-black text-white text-center">
                <h5>Berita Terkini</h5>
              </div>
              <div class="card-body">
                <div class="row">
                  <?php foreach ($berita as $berita) { ?>
                  <div class="col-md-6 mb-1">
                    <div class="card">
                      <img src="<?= base_url('assets/upload/image/flayer/' . $berita['gambar']) ?>">
                      <div class="card-header">
                      
                          <?= $berita['judul_berita'] ?>
                        </div>
                      <div class="card-body text-black">
                        <?= substr($berita['ringkasan'],0,100) ?>
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
            <div class="col-lg-4">
              <div class="card">
                <div class="card-header bg-black text-white text-center">
                  <h5>Kategori</h5>
                </div>
                <div class="card-body">
                  <table class="table table-hover">
                    <?php
                    use App\Models\Berita_model;
                    $m_kategori     = new Berita_model();
                    foreach($kategori as $kat){
                    $count_kat      = $m_kategori->total_kategori($kat['id_kategori']);
                  ?>
                  <tr>
                      <td><a href="<?= base_url('berita/kategori/' . $kat['slug_kategori']) ?>"><?= $kat['nama_kategori']?></a></td>
                      <td class="text-center"><a href="<?= base_url('berita/kategori/' . $kat['slug_kategori']) ?>"><?= $count_kat?></a></td>
                    </tr>
                  <?php
                  }
                  ?>
                  </table>
                  
                </div>
                <div class="card-footer bg-black text-white text-center">
                  <h6>Berita Terpopuler</h6>
                </div>
                <div class="card-body">
                  <div class="row">
                    <?php foreach ($berita_populer as $berita_populer) { ?>
                    <div class="col-lg-12">
                      <div class="card mb-1">
                        <div class="card-body">
                          <a href="<?= base_url('berita/read')."/".$berita_populer['slug_berita']?>">
                            <label><?= $berita_populer['judul_berita']?></label>
                          </a>
                        </div>
                      </div>
                    </div>
                    <?php
                    }
                    ?>
                    
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
                <div class="card-footer bg-black text-white text-center">
                  <h6>Link Terkait</h6>
                </div>
                <div class="card-body">
                  <div class="card mb-1">
                    <div class="card-body col-lg-12">
                      <a href="#">Link</a><br>
                      <label>Label Ini menjelaskan pemilik link</label>
                    </div>
                  </div>
                  <div class="card mb-1">
                    <div class="card-body col-lg-12">
                      <a href="#">Link</a><br>
                      <label>Label Ini menjelaskan pemilik link</label>
                    </div>
                  </div>
                  <div class="card mb-1">
                    <div class="card-body col-lg-12">
                      <a href="#">Link</a><br>
                      <label>Label Ini menjelaskan pemilik link</label>
                    </div>
                  </div>
                  <div class="card mb-1">
                    <div class="card-body col-lg-12">
                      <a href="#">Link</a><br>
                      <label>Label Ini menjelaskan pemilik link</label>
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