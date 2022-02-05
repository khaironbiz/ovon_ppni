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
                    <b>Analisa Data</b>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <b>Jenis Kelamin</b>
                            <table class="table">
                                <tr>
                                    <th>#</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Count</th>
                                </tr>
                                <?php
                                $no     = 1;
                                $sql    = mysqli_query($host,"SELECT * FROM master_jawaban WHERE id_master_soal='3'");
                                while($data = mysqli_fetch_array($sql)){
                                    $id_sex = $data['id_master_jawaban'];
                                    $sql_sex= mysqli_query($host,"SELECT * FROM keluarga_anggota 
                                                    WHERE jenis_kelamin='$id_sex'");
                                    $count_sex= mysqli_num_rows($sql_sex);
                                ?>
                                <tr>
                                    <td><?= $no++?></td>
                                    <td><?= $data['master_jawaban']?></td>
                                    <td><?= $count_sex?></td>
                                </tr>
                                <?php
                                }
                                ?>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <b>Status Pernikahan</b>
                            <table class="table">
                                <tr>
                                    <th>#</th>
                                    <th>Status Pernikahan</th>
                                    <th>Count</th>
                                </tr>
                                <?php
                                $no     = 1;
                                $sql    = mysqli_query($host,"SELECT * FROM master_jawaban WHERE id_master_soal='80'");
                                while($data = mysqli_fetch_array($sql)){
                                    $key_inti = $data['id_master_jawaban'];
                                    $sql_key= mysqli_query($host,"SELECT * FROM keluarga_anggota 
                                                    WHERE status_pernikahan='$key_inti'");
                                    $count_key= mysqli_num_rows($sql_key);
                                ?>
                                <tr>
                                    <td><?= $no++?></td>
                                    <td><?= $data['master_jawaban']?></td>
                                    <td><?= $count_key?></td>
                                </tr>
                                <?php
                                }
                                ?>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <b>Status Pekerjaan</b>
                            <table class="table">
                                <tr>
                                    <th>#</th>
                                    <th>Status Pekerjaan</th>
                                    <th>Count</th>
                                </tr>
                                <?php
                                $no     = 1;
                                $sql    = mysqli_query($host,"SELECT * FROM master_jawaban WHERE id_master_soal='109'");
                                while($data = mysqli_fetch_array($sql)){
                                    $key_inti = $data['id_master_jawaban'];
                                    $sql_key= mysqli_query($host,"SELECT * FROM keluarga_anggota 
                                                    WHERE pekerjaan='$key_inti'");
                                    $count_key= mysqli_num_rows($sql_key);
                                ?>
                                <tr>
                                    <td><?= $no++?></td>
                                    <td><?= $data['master_jawaban']?></td>
                                    <td><?= $count_key?></td>
                                </tr>
                                <?php
                                }
                                ?>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <b>Jenjang Pendidikan</b>
                            <table class="table">
                                <tr>
                                    <th>#</th>
                                    <th>Jenjang Pendidikan</th>
                                    <th>Count</th>
                                </tr>
                                <?php
                                $no     = 1;
                                $sql    = mysqli_query($host,"SELECT * FROM master_jawaban WHERE id_master_soal='58'");
                                while($data = mysqli_fetch_array($sql)){
                                    $key_inti = $data['id_master_jawaban'];
                                    $sql_key= mysqli_query($host,"SELECT * FROM keluarga_anggota 
                                                    WHERE pendidikan='$key_inti'");
                                    $count_key= mysqli_num_rows($sql_key);
                                ?>
                                <tr>
                                    <td><?= $no++?></td>
                                    <td><?= $data['master_jawaban']?></td>
                                    <td><?= $count_key?></td>
                                </tr>
                                <?php
                                }
                                ?>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <b>Golongan Darah</b>
                            <table class="table">
                                <tr>
                                    <th>#</th>
                                    <th>Golongan Darah</th>
                                    <th>Count</th>
                                </tr>
                                <?php
                                $no     = 1;
                                $sql    = mysqli_query($host,"SELECT * FROM master_jawaban WHERE id_master_soal='90'");
                                while($data = mysqli_fetch_array($sql)){
                                    $key_inti = $data['id_master_jawaban'];
                                    $sql_key= mysqli_query($host,"SELECT * FROM keluarga_anggota 
                                                    WHERE golongan_darah='$key_inti'");
                                    $count_key= mysqli_num_rows($sql_key);
                                ?>
                                <tr>
                                    <td><?= $no++?></td>
                                    <td><?= $data['master_jawaban']?></td>
                                    <td><?= $count_key?></td>
                                </tr>
                                <?php
                                }
                                ?>
                            </table>
                        </div>
                        
                        <div class="col-md-6">
                            <b>Vaksin Covid 19</b>
                            <table class="table">
                                <tr>
                                    <th>#</th>
                                    <th>Vaksin Covid 19</th>
                                    <th>Count</th>
                                </tr>
                                <?php
                                $no     = 1;
                                $sql    = mysqli_query($host,"SELECT * FROM master_jawaban WHERE id_master_soal='116'");
                                while($data = mysqli_fetch_array($sql)){
                                    $key_inti = $data['id_master_jawaban'];
                                    $sql_key= mysqli_query($host,"SELECT * FROM keluarga_anggota 
                                                    WHERE vaksin_covid19='$key_inti'");
                                    $count_key= mysqli_num_rows($sql_key);
                                ?>
                                <tr>
                                    <td><?= $no++?></td>
                                    <td><?= $data['master_jawaban']?></td>
                                    <td><?= $count_key?></td>
                                </tr>
                                <?php
                                }
                                ?>
                            </table>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->