<main id="main">
  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact mt-5">
    <div class="container">
      <div class="row mt-5">
        <h1>Download Area</h1>
        <table class="table table-bordered" id="example1">
          <thead>
            <tr>
              <th width="5%">No</th>
              <th width="30%">Judul</th>
              <th width="30%">Keterangan</th>
              <th width="15%">Author</th>
              <th width="10%">File</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1;
            foreach ($download as $download) { ?>
            <tr>
              <td class="text-center"><?= $no ?></td>
              <td><?= $download['judul_download'] ?></td>
              <td><?= $download['isi'] ?></td>
              <td><?= $download['nama'] ?></td>
              <td>
                <?php if ($download['gambar'] === '') {
                    echo '-';
                } else { ?>
                  <a href="<?= base_url('download/unduh/' . $download['id_download']) ?>" class="btn btn-success btn-sm btn-block"><i class="fa fa-download"></i> Unduh</a>
                <?php } ?>
              </td>
            </tr>
            <?php $no++; } ?>
          </tbody>
        </table>
      </div>
    </div>
  </section><!-- End Contact Section -->
</main><!-- End #main -->