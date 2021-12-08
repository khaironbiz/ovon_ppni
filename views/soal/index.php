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
                    include("modal/add-pengkajian.php");
                    include('aksi/add-pengkajian.php');
                      }
                      
                  ?>
                  <table id="example1" class="table table-sm table-striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th colspan="3">Pengkajian</th>
                        <th>Count</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $no                     = 1;
                      $sql_master_pengkajian  = mysqli_query($host, "SELECT * FROM master_pengkajian ORDER BY id_master_pengkajian");
                      while($data             = mysqli_fetch_array($sql_master_pengkajian)){
                        $id_master_pengkajian = $data['id_master_pengkajian'];
                        $sql_count            = mysqli_query($host, "SELECT * FROM master_rumpun WHERE id_master_pengkajian='$id_master_pengkajian'");
                        $count_data           = mysqli_num_rows($sql_count);
                      ?>
                      <tr>
                        <td width="10px"><?= $no++; ?></td>
                        <td colspan="3"><?= $data['master_pengkajian'];?></td>
                        <td><?= $count_data;?></td>
                        <td>
                        <?php
                          include("modal/add-rumpun.php");
                          include('aksi/add-rumpun.php');
                        ?>
                        </td>
                      </tr>
                      <?php
                      
                      $sql_master_rumpun  = mysqli_query($host,"SELECT * FROM master_rumpun WHERE id_master_pengkajian='$id_master_pengkajian'");
                      while($data_master_rumpun = mysqli_fetch_array($sql_master_rumpun)){
                        $id_master_rumpun = $data_master_rumpun['id_master_rumpun'];
                        $sql_master_soal  = mysqli_query($host,"SELECT * FROM master_soal WHERE id_master_rumpun='$id_master_rumpun'");
                        $count_master_rumpun= mysqli_num_rows($sql_master_soal);
                      ?>
                      <tr>
                        <td></td>
                        <td></td>
                        <td colspan="2"><strong><?= $data_master_rumpun['master_rumpun']?></strong></td>
                        <td><?= $count_master_rumpun?></td>
                        <td><a href="tambah.php?id=<?= $data_master_rumpun['has_master_rumpun']?>" class="btn btn-warning btn-sm">Detail</a></td>
                      </tr>
                      <?php
                      $c=1;
                      while($data_master_soal= mysqli_fetch_array($sql_master_soal)){
                      ?>
                      <tr>
                        <td></td>
                        <td></td>
                        <td><?=$c++?></td>
                        <td><?= $data_master_soal['master_soal']?></td>
                        <td></td>
                        <td></td>
                      </tr>
                    <?php
                      }
                      }
                    }
                    ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>#</th>
                        <th colspan="3">Pengkajian</th>
                        <th>Count</th>
                        <th>Aksi</th>
                      </tr>
                    </tfoot>
                  </table>
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