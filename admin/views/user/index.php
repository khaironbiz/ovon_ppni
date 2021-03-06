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
                    
                      
                  ?>
                  <table id="example1" class="table table-bordered table-striped table-sm">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>User</th>
                        <th>Email</th>
                        <th>Level</th>
                        <th>Keluarga</th>
                        <th>Individu</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $no               = 1;
                      $sql_user         = mysqli_query($host, "SELECT * FROM users 
                                            JOIN user_level on user_level.wilayah_akses=users.wilayah_akses
                                            ORDER BY users.id_user");
                      while($data       = mysqli_fetch_array($sql_user)){
                        $id_user        = $data['id_user'];
                        $sql_count      = mysqli_query($host, "SELECT * FROM keluarga WHERE created_by='$id_user'");
                        $count_data     = mysqli_num_rows($sql_count);
                        $sql_anggota    = mysqli_query($host,"SELECT * FROM keluarga_anggota WHERE created_by='$id_user'");
                        $count_anggota  = mysqli_num_rows($sql_anggota);
                      ?>
                      <tr>
                        <td width="10px"><?= $no++; ?></td>
                        <td><?= $data['user_nama'];?></td>
                        <td><?= $data['email'];?></td>
                        <td><?= $data['user_level'];?></td>
                        <td><?= $count_data;?></td>
                        <td><?= $count_anggota;?></td>
                        <td><a href="<?= $site_url ?>" class="btn btn-primary btn-sm">Detail</a></td>
                      </tr>
                      <?php
                        }
                      ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>#</th>
                        <th>User</th>
                        <th>Email</th>
                        <th>Level</th>
                        <th>Keluarga</th>
                        <th>Individu</th>
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