<main id="main">
  
  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact mt-5">
    <div class="container">
      <div class="card">
        <div class="card-header">
          Videos
        </div>
        <div class="card-body">
          <div class="row">
            <?php foreach ($video as $video) { ?>
            <div class="col-md-6">
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
  </section><!-- End Contact Section -->
</main><!-- End #main -->