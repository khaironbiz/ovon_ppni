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
                      include("modal/sex/add-sex.php");
                      include('aksi/sex/add-sex.php');
                      }
                      
                  ?>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Jenis Kelamin</th>
                        <th>Count</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $no               = 1;
                      $sql_m_sex        = mysqli_query($host, "SELECT * FROM master_sex ORDER BY id_master_sex");
                      while($data       = mysqli_fetch_array($sql_m_sex)){
                        $id_m_sex       = $data['id_master_sex'];
                        $sql_count      = mysqli_query($host, "SELECT * FROM keluarga_anggota WHERE jenis_kelamin='$id_m_sex'");
                        $count_data     = mysqli_num_rows($sql_count);
                      ?>
                      <tr>
                        <td width="10px"><?= $no++; ?></td>
                        <td><?= $data['master_sex'];?></td>
                        <td><?= $count_data;?></td>
                        <td><a href="<?= $site_url ?>/regulasi/detail.php?id=<?= $data['has_regulasi_jenis']?>" class="btn btn-primary btn-sm">Detail</a></td>
                      </tr>
                      <?php
                        }
                      ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>#</th>
                        <th>Jenis Kelamin</th>
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