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
                <div class="card-body">
                  <?php
                    include("../core/security/admin-akses.php");
                    if($count_admin >0){
                      }
                  ?>
                      <div class="card" bg-dark>
                        <div class="card-header bg-dark">
                          <label>Edit Pertanyaan</label>
                        </div>
                        <div class="card-body">
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Pertanyaan</label>
                                <div class="col-sm-10">
                                <?= $soal['master_soal']?>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Nomor Urut</label>
                                <div class="col-sm-10">
                                <?= $soal['nomor_urut']?>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Jawaban</label>
                                <div class="col-sm-10">
                                    <?php
                                    $id_jenis_input_jawaban = $soal['jenis_input_jawaban'];
                                    $sql_input_jawaban  = mysqli_query($host,"SELECT * FROM jenis_input_jawaban 
                                                            WHERE id_jenis_input_jawaban='$id_jenis_input_jawaban'");
                                    $jenis_jawaban      = mysqli_fetch_array($sql_input_jawaban);
                                    echo $jenis_jawaban['jenis_input_jawaban'];
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                          <div class="row">
                            <div class="col-md-4">
                            <?php
                            include('modal/edit-soal.php');
                            include('aksi/edit-soal.php');
                            ?>
                            </div>
                          </div>
                        </div>
                          
                            
                      </div>
                      <?php
                        if($id_jenis_input_jawaban == 4 || $id_jenis_input_jawaban == 5 || $id_jenis_input_jawaban == 8){ 
                        
                      ?>
                      <div class="card">
                        <div class="card-header bg-success">
                          <b>Edit Jawaban </b>
                          
                        </div>
                        <div class="card-body">
                          <?php
                            include("modal/add-jawaban.php");
                            include('aksi/add-jawaban.php');
                          ?>
                          <div class="table-responsive">
                            <table id="example1" class="table table-sm table-striped">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Jawaban</th>
                                  <th>Count</th>
                                  <th>Aksi</th>
                                </tr>
                              </thead>
                              <tbody>
                                  <?php
                                      $urut               = 1;     
                                      $id_master_soal     = $soal['id_master_soal'];
                                      $sql_master_jawaban = mysqli_query($host,"SELECT * FROM master_jawaban WHERE id_master_soal='$id_master_soal'");
                                      while($data_jawaban = mysqli_fetch_array( $sql_master_jawaban)){
                                        
                                  ?>
                                  <tr>
                                      <td><?= $urut++; ?></td>
                                      <td><?= $data_jawaban['master_jawaban']?></td>
                                      <td></td>
                                      <td>
                                        <?php
                                          include('modal/edit-jawaban.php');
                                          include('aksi/edit-jawaban.php');
                                        ?>
                                      </td>
                                  </tr>
                                  <?php
                                      }
                                  ?>
                                  
                              </tbody>
                              
                              <tfoot>
                                <tr>
                                  <th>#</th>
                                  <th>Jawaban</th>
                                  <th>Count</th>
                                  <th>Aksi</th>
                                </tr>
                              </tfoot>
                            </table>
                          </div>
                          
                        </div>
                      </div>
                        <?php
                          };
                          $id_master_rumpun   = $soal['id_master_rumpun'];
                          $sql_master_rumpun  = mysqli_query($host,"SELECT * FROM master_rumpun WHERE id_master_rumpun='$id_master_rumpun'");
                          $data_master_rumpun = mysqli_fetch_array($sql_master_rumpun);
                          ?>
                      <div class="card-footer">
                          <a href="tambah.php?id=<?= $data_master_rumpun['has_master_rumpun']?>" class="btn btn-danger btn-sm"> Kembali ke 
                          <?= $data_master_rumpun['master_rumpun']?></a>
                          
                      </div>
                    
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