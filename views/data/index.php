<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12">
            <h1><?= $judul; ?></h1>
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
                  <h4>Desa : <?= $data_desa['lokasi_nama']?></h4>
                  <h4>RW / RT: <?= $data_pengguna['id_rw']?> / <?= $data_pengguna['id_rt']?></h4>
                  <?php
                  if($data_pengguna['id_rw'] !=''){
                    include("../core/security/admin-akses.php");
                    if($count_admin >0){
                      //include("modal/add-data.php");
                      include('aksi/add-data.php');
                      }
                  }
                  if($data_pengguna['id_rw'] =""){
                    include("modal/edit-rw.php");
                    include("aksi/edit-rw.php");
                  }
                  
                  ?>
                  <a href="" class="btn btn-primary btn-sm mb-3">Add Keluarga</a>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Nama Keluarga</th>
                        <th>Count</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $no                   = 1;
                      $sql_keluarga         = mysqli_query($host, "SELECT * FROM keluarga WHERE kelurahan = '$mydesa' ORDER BY id_keluarga DESC");
                      while($data           = mysqli_fetch_array($sql_keluarga)){
                        $key_keluarga        = $data['key_keluarga'];
                        $sql_count          = mysqli_query($host, "SELECT * FROM keluarga_anggota WHERE
                                              key_keluarga ='$key_keluarga'");
                        $count_data         = mysqli_num_rows($sql_count);
                        $data_keluarga      = mysqli_fetch_array($sql_count)
                      ?>
                      <tr>
                        <td width="10px"><?= $no++; ?></td>
                        <td><?= $data['nama_keluarga'];?></td>
                        <td><?= $count_data;?></td>
                        <td><a href="keluarga.php?id=<?= $data['key_keluarga']?>" class="btn btn-success btn-sm">Detail</a></td>
                      </tr>
                        
                      <?php
                          
                        }
                      ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>#</th>
                        <th>Nama Keluarga</th>
                        <th>Count</th>
                        <th>Aksi</th>
                      </tr>
                    </tfoot>
                  </table>
                  <?php
                  include("modal/edit-rw.php");
                  include("aksi/edit-rw.php");
                  ?>
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