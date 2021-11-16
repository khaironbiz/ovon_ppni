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
            $id_rw      = $data_pengguna['id_rw'];
            $id_rt      = $data_pengguna['id_rt'];
            $sql_rt_rw  = mysqli_query($host, "SELECT * FROM rt  JOIN rw on rw.id_rw = rt.rw WHERE id_rt='$id_rt'");
            $data_rt_rw = mysqli_fetch_array($sql_rt_rw);
            ?>
            <div class="card">
              <div class="card-header">
                <div class="card-body">
                  <h4>Desa : <?= $data_pengguna['nama_desa']?></h4>
                  <h4>RW / RT: <?= $data_rt_rw['nama_rw']?> / <?= $data_rt_rw['nama_rt']?></h4>
                  <?php
                  if($data_pengguna['id_rw'] !=''){
                    include("../core/security/admin-akses.php");
                    ?>
                    <a href="<?= $site_url?>/data/add-keluarga.php" class="btn btn-primary btn-sm mb-3">Add Keluarga</a>
                    <?php
                    if($count_admin >0){
                      //include("modal/add-data.php");
                      include('aksi/add-data.php');
                      }
                  }
                  if($data_pengguna['id_rw'] ==""){
                    include("modal/edit-rw.php");
                    include("aksi/edit-rw.php");
                    
                    
                  }
                  
                  ?>
                  
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
                      $mydesa               = $data_pengguna['kel'];
                      $no                   = 1;
                      $myrt                 = $data_pengguna['id_rt'];
                      $myrw                 = $data_pengguna['id_rw'];
                      $sql_keluarga         = mysqli_query($host, "SELECT * FROM keluarga WHERE 
                                              kelurahan = '$mydesa' and rt ='$myrt' ORDER BY id_keluarga DESC");
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
                        <td>
                          <a href="keluarga.php?id=<?= $data['key_keluarga']?>" class="btn btn-info btn-sm">View anggota</a>
                          <a href="edit-keluarga.php?id=<?= $data['key_keluarga']?>" class="btn btn-success btn-sm">Edit</a>
                          <a href="keluarga-detail.php?id=<?= $data['key_keluarga']?>" class="btn btn-warning btn-sm">Print</a>
                        </td>
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

