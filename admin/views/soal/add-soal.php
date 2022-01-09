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
                <?php 
                if(isset($_SERVER['PATH_INFO'])){
                  echo $_SERVER['PATH_INFO'];
                }
                ?>
                <div class="card-body">
                  <?php
                    include("../core/security/admin-akses.php");
                    if($count_admin >0){
                    include("modal/add-soal.php");
                    include('aksi/add-soal.php');
                      }
                      
                  ?>
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Pertanyaan</th>
                          <th>ID Soal</th>
                          <th>Jenis Jawaban</th>
                          <th>Count Jawaban</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $no               = 1;
                        $id_master_rumpun = $master_rumpun['id_master_rumpun'];
                        $sql_master_soal  = mysqli_query($host, "SELECT * FROM master_soal WHERE id_master_rumpun='$id_master_rumpun' ORDER BY nomor_urut");
                        while($data       = mysqli_fetch_array($sql_master_soal)){
                          $id_master_soal = $data['id_master_soal'];
                          $sql_count      = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='$id_master_soal'");
                          $count_data     = mysqli_num_rows($sql_count);
                          $jenis_input_jawaban= $data['jenis_input_jawaban'];
                          $jenis_jawaban  = mysqli_query($host,"SELECT * FROM jenis_input_jawaban WHERE id_jenis_input_jawaban ='$jenis_input_jawaban'");
                          $data_jenis_jawaban=mysqli_fetch_array($jenis_jawaban);
                        ?>
                        <tr>
                          <td width="10px"><?= $no++; ?></td>
                          <td><?= $data['master_soal'];?></td>
                          <td><?= $id_master_soal; ?></td>
                          <td><?= ucwords($data_jenis_jawaban['jenis_input_jawaban']); ?></td>
                          <td><?= $count_data;?></td>
                          <td><a href="<?= $site_url ?>/soal/edit.php?key=<?= $data['has_master_soal']?>" class="btn btn-primary btn-sm">Edit</a></td>
                        </tr>
                        <?php
                          }
                        ?>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th>#</th>
                          <th>Pertanyaan</th>
                          <th>ID Soal</th>
                          <th>Jenis Jawaban</th>
                          <th>Count Jawaban</th>
                          <th>Aksi</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                  <a href="index.php" class="btn btn-danger btn-sm mt-2">Kembali</a>
                </div>
                <!-- /.card-body -->
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