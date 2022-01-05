     
        <!-- /.row -->
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
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
            <!-- Widget: user widget style 1 -->
            <div class="card card-widget widget-user mt-3">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-info">
                <h3 class="widget-user-username"><?= $data_pengguna['user_nama']?></h3>
                <h5 class="widget-user-desc"><?= $data_pengguna['user_level']?></h5>
              </div>
              <div class="widget-user-image">
                <img class="img-circle elevation-2" src="<?= $site_url?>/assets/admin/dist/img/user1-128x128.jpg" alt="User Avatar">
              </div>
              <div class="card-footer">
                <hr>
                <div class="row">
                  <div class="col-md-6">
                    <div class="card">
                      <div class="card-body">
                        <table class="table table-hover">
                          <tr>
                            <th colspan="2">Biodata</th>
                            <th class="text-right">
                              <?php 
                              include('modal/data-diri-edit.php');
                              include('aksi/data-diri-edit.php');
                              ?>
                            </th>
                          </tr>
                          <tr>
                            <td>Nama</td><td>:</td><td><?= $data_pengguna['user_nama']?></td>
                          </tr>
                          <tr>
                            <td>NIK</td><td>:</td><td><?= $data_pengguna['nik']?></td>
                          </tr>
                          <tr>
                            <td>Email</td><td>:</td><td><?= $data_pengguna['email']?></td>
                          </tr>
                          <tr>
                            <td>Handphone</td><td>:</td><td><?= $data_pengguna['hp']?></td>
                          </tr>
                          <tr>
                            <td>NIRA</td><td>:</td><td><?= $data_pengguna['nira']?></td>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="card">
                      <div class="card-body">
                        <table class="table table-hover">
                          <tr>
                            <th colspan="2">Penempatan</th>
                            <th class="text-right"><a href="" class="btn btn-success btn-sm">Edit</a></th>
                          </tr>
                          <tr>
                            <td>Provinsi</td><td>:</td><td><?= $data_pengguna['nama_provinsi']?></td>
                          </tr>
                          <tr>
                            <td>Kabupaten</td><td>:</td><td><?= $data_pengguna['nama_kabupaten']?></td>
                          </tr>
                          <tr>
                            <td>Kecamatan</td><td>:</td><td><?= $data_pengguna['nama_kecamatan']?></td>
                          </tr>
                          <tr>
                            <td>Desa</td><td>:</td><td><?= $data_pengguna['nama_desa']?></td>
                          </tr>
                          <?php
                            $id_rt    = $data_pengguna['id_rt'];
                            $sql_rt   = mysqli_query($host,"SELECT * FROM rt WHERE id_rt ='$id_rt'");
                            $data_rt  = mysqli_fetch_array($sql_rt);
                            $id_rw    = $data_pengguna['id_rw'];
                            $sql_rw   = mysqli_query($host,"SELECT * FROM rw WHERE id_rw ='$id_rw'");
                            $data_rw  = mysqli_fetch_array($sql_rw);
                          ?>
                          <tr>
                            <td>RT/RW</td><td>:</td><td><?= $data_rt['nama_rt']."/".$data_rw['nama_rw']?></td>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  
                  <div class="col-md-12">
                    <div class="card">
                      <div class="card-body">
                        <span class="float-center"><a href="<?= $site_url; ?>/data/" class="btn btn-primary btn-sm text-right">Mulai Pengkajian</a></span>
                        <span class="float-right">
                          <?php 
                          include('modal/edit-rw.php');
                          include('aksi/edit-rw.php');
                          ?>
                        </span>
                        <h5>Riwayat Pengkajian</h5>
                        <div class="table-responsive">
                          <table class="table table-hover">
                            <thead>
                              <tr>
                                <th rowspan="2" class="align-middle">No</th>
                                <th rowspan="2" class="align-middle">RW</th>
                                <th rowspan="2" class="align-middle">RT</th>
                                <th rowspan="2" class="align-middle">Keluarga</th>
                                <td colspan="3" class="text-center"><b>Individu</b></td>
                              </tr>
                              <tr>
                                <th>Laki-laki</th><th>Perempuan</th><th>Total</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              $no               = 1;
                              $sql_rw           = mysqli_query($host,"SELECT DISTINCT(rw)as rw FROM keluarga WHERE kelurahan='$mydesa' and created_by='$user_check'");
                              while($data_rw    = mysqli_fetch_array($sql_rw)){
                                $id_rw          = $data_rw['rw'];
                                $sql_nama_rw    = mysqli_query($host, "SELECT * FROM rw WHERE id_rw ='$id_rw' and created_by='$user_check'");
                                $data_nama_rw   = mysqli_fetch_assoc($sql_nama_rw );
                                //sql_rt
                                $sql_rt         = mysqli_query($host, "SELECT DISTINCT(rt) as rt FROM keluarga WHERE rw='$id_rw' and created_by='$user_check'");
                                $count_rt       = mysqli_num_rows($sql_rt);
                                //sql_keluarga
                                $sql_keluarga   = mysqli_query($host,"SELECT * FROM keluarga WHERE rw='$id_rw' and created_by='$user_check'");
                                $count_keluarga = mysqli_num_rows($sql_keluarga);
                                //sql_jenis_kelamin
                                $sql_sex        = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal ='3'");
                                //sql_keluarga_anggota
                                $sql_keluarga_angota  = mysqli_query($host,"SELECT * FROM keluarga_anggota WHERE rw='$id_rw' and created_by='$user_check'");
                                $count_keluarga_anggota = mysqli_num_rows($sql_keluarga_angota);
                              ?>
                              <tr>
                                <td><?= $no++?></td>
                                <td><?= $data_nama_rw['nama_rw']?></td>
                                <td><?= $count_rt ?></td>
                                <td><?= $count_keluarga ?></td>
                                <?php
                                while($data_sex   = mysqli_fetch_array($sql_sex)){
                                  $jenis_kelamin  = $data_sex['id_master_jawaban'];
                                  $sql_keluarga_sex = mysqli_query($host, "SELECT * FROM keluarga_anggota WHERE rw='$id_rw' and jenis_kelamin='$jenis_kelamin' and created_by='$user_check'");
                                  $count_keluarga_sex  = mysqli_num_rows( $sql_keluarga_sex);
                                  $query_keluarga = mysqli_query($host,"SELECT * FROM keluarga where kelurahan='$mydesa' and created_by='$user_check'");
                                  $count_keluargaku= mysqli_num_rows($query_keluarga);
                                ?>
                                <td><?= $count_keluarga_sex ?></td>
                                <?php
                                $juml_total = $count_keluargaku;
                                }
                                ?>
                                <td><?= $count_keluarga_anggota ?></td>
                              </tr>
                              <?php
                              }
                              ?>
                            </tbody>
                            <tr>
                              <td colspan="3">Jumlah</td>
                              <td><?= $juml_total; ?></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
            <!-- /.widget-user -->
          </div>
          <!-- /.col -->
          
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->