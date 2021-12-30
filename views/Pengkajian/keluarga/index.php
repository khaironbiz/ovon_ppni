<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?= $judul; ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?= $judul; ?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="form">
        <div class="container-fluid">
            <div class="card">
              <div class="card-header bg-dark">
                Tambah Kepala Keluarga
              </div>
              <div class="card-body">
                <div class="card">
                  <div class="card-body">
                      <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Nama</label>
                          <div class="col-sm-4">
                              <?php
                                $nama_keluarga  = $data_anggota['nama_anggota'];
                              ?>
                              <input type="text" class="form-control" value="<?= $nama_keluarga;?>" name="nama_anggota" required>
                              <input type="hidden" class="form-control" value="<?= uniqid() ?>" name="add_kk" required>
                          </div>
                          <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                          <div class="col-sm-4">
                              <select class="form-control" required name="jenis_kelamin">
                                  <?php
                                    $jenis_kelamin  = $data_anggota['jenis_kelamin'];
                                  ?>
                                  <option value="<?= $jenis_kelamin?>"><?= master_jawaban($jenis_kelamin)?></option>
                                  <?php
                                      $sql_sex = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='3' ");
                                      while($data_sex = mysqli_fetch_array($sql_sex)){
                                  ?>
                                  <option value="<?= $data_sex['id_master_jawaban']?>"><?= $data_sex['master_jawaban']?></option>
                                  <?php
                                  }
                                  ?>
                              </select>
                          </div>
                          
                      </div>
                      <div class="form-group row">
                          <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                          <div class="col-sm-4">
                              <input type="text" class="form-control" name="tgl_lahir" value="<?= $data_anggota['tgl_lahir']?>">
                          </div>
                          <label for="inputPassword3" class="col-sm-2 col-form-label">Status KTP</label>
                          <div class="col-sm-4">
                              <select class="form-control" required name="status_ktp">
                                  <?php
                                    $status_ktp  = $data_anggota['status_ktp'];
                                  ?>
                                  <option value="<?= $status_ktp; ?>"><?= master_jawaban($status_ktp)?></option>
                                  <?php
                                      $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='79' ");
                                      while($data_jawaban = mysqli_fetch_array($sql_jawaban)){
                                  ?>
                                  <option value="<?= $data_jawaban['id_master_jawaban']?>"><?= $data_jawaban['master_jawaban']?></option>
                                  <?php
                                  }
                                  ?>
                              </select>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-sm-2 col-form-label">NIK</label>
                          <div class="col-sm-4">
                              <input type="number" name="nik" class="form-control" value="<?= $data_keluarga['id_kepala_keluarga']?>">
                          </div>
                          <label for="inputPassword3" class="col-sm-2 col-form-label">No KK</label>
                          <div class="col-sm-4">
                              <input type="number" class="form-control" name="no_kk" value="<?= $data_keluarga['no_kk']?>">
                          </div>
                      </div>
                  </div>
                      
                </div>
                <div class="card">
                  <div class="card-body">
                    <label>Alamat</label>
                    <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Nama Jalan</label>
                          <div class="col-sm-4">
                            <input type="text" class="form-control" name="alamat">
                          </div>
                          <label class="col-sm-2 col-form-label">Jenis Keluarga</label>
                          <div class="col-sm-4">
                              <select class="form-control" required name="jenis_keluarga">
                                  <option value="">---Jenis Keluarga---</option>
                                  <?php
                                      $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='18' ");
                                      while($data_jawaban = mysqli_fetch_array($sql_jawaban)){
                                  ?>
                                  <option value="<?= $data_jawaban['id_master_jawaban']?>"><?= $data_jawaban['master_jawaban']?></option>
                                  <?php
                                  }
                                  ?>
                              </select>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
              <div class="card-footer text-right">
                  <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </div>
        </div>
      </div>
    </section>
  </div>