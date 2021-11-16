<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <?php
                    if(isset($_SESSION['status'])&& $_SESSION['status'] !=""){
                    ?>
                    <div class="alert alert-<?= $_SESSION['status_info']?> alert-dismissible fade show" role="alert">
                    <strong>Hay</strong> <?= $_SESSION['status']?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <?php
                    unset($_SESSION['status']);
                    }
                    ?>
                    <div class="card">
                    <div class="card-header">
                        <div class="card-body">
                            <h2><?= $judul; ?></h2>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <table>
                                                <tr>
                                                    <td>Nama</td><td>:</td><td><?= $data_kel['nama_anggota']?></td>
                                                </tr>
                                                <tr>
                                                    <td>NIK</td><td>:</td><td><?= $data_kel['nik']?></td>
                                                </tr>
                                                <tr>
                                                    <td>Jenis Kelamin</td><td>:</td><td><?= $data_kel['jenis_kelamin']?></td>
                                                </tr>
                                                <?php
                                                    $tgl_now        = date('Y-m-d');
                                                    $lahir          = new DateTime($data_kel['tgl_lahir']);
                                                    $today          = new DateTime();
                                                    $umur           = $today->diff($lahir);
                                                    $umur_tahun     = $umur->y;
                                                ?>
                                                <tr>
                                                    <td>Tanggal Lahir</td><td>:</td><td><?= $data_kel['tgl_lahir']." ($umur->y tahun)";?></td>
                                                </tr>
                                                <tr>
                                                    <td>Hubungan Keluarga</td><td>:</td><td><?= $data_kel['id_struktur_keluarga']?></td>
                                                </tr>
                                                <tr>
                                                    <td>Tinggi Badan</td><td>:</td><td><?= $data_kel['tinggi_badan']?> Cm</td>
                                                </tr>
                                                <tr>
                                                    <td>Berat Badan</td><td>:</td><td><?= $data_kel['berat_badan']?> Cm</td>
                                                </tr>
                                                <tr>
                                                    <td>Golongan Darah</td><td>:</td><td><?= $data_kel['golongan_darah']?> Cm</td>
                                                </tr>
                                                <?php
                                                    if($umur_tahun <5 ){
                                                        
                                                ?>
                                                <tr>
                                                    <td>Lingkar Kepala</td><td>:</td><td><?= $data_kel['golongan_darah']?> Cm</td>
                                                </tr>
                                                <?php
                                                    }
                                                    ?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <a href="#" class="card-link">Card link</a>
                                            <a href="#" class="card-link">Another link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?= $site_url?>/data" class="btn btn-danger btn-sm mt-3">Back to family</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>