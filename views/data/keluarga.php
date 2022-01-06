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
                  <div class="table-responsive">
                    <?php
                    if($data_pengguna['id_rw'] !=''){
                      include("../core/security/admin-akses.php");
                      if($count_admin >0){
                        
                        }
                    }
                    ?>
                    <a href="<?= $site_url?>/data/anggota.php?id=<?= $_GET['id']?>" class="btn btn-primary btn-sm mb-1">Add Anggota</a>
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Anggota</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $no               = 1;
                        $sql_keluarga     = mysqli_query($host, "SELECT * FROM keluarga_anggota 
                                            WHERE keluarga_anggota.key_keluarga = '$key' ORDER BY keluarga_anggota.id_struktur_keluarga ASC");
                        while($data       = mysqli_fetch_array($sql_keluarga)){
                          $tanggal_lahir  = $data['tgl_lahir'];
                          $time_lahir     = number_format((time()-strtotime($tanggal_lahir))/(60*60*24*365));
                          $lahir          = new DateTime($data['tgl_lahir']);
                          $today          = new DateTime();
                          $umur           = $today->diff($lahir);
                      ?>
                        
                        <tr>
                          <td width="10px"><?= $no++; ?></td>
                          <td>
                              <?= $data['nama_anggota']." ".$umur->y." Th ".$umur->m." Bulan"; ?> <br>
                              <?php
                                echo  master_jawaban($data['status_ktp'])."<br>";
                                echo  master_jawaban($data['id_struktur_keluarga'])."<br>";
                                echo  master_jawaban($data['jenis_kelamin'])."<br>";
                              ?>      
                          </td>
                          <td>
                            <a href="<?= $site_url?>/pengkajian/individu.php?key=<?= $data['has_keluarga_anggota']?>" class="btn btn-success btn-sm">Detail</a>
                          </td>
                        </tr>
                          
                        <?php
                          }
                        ?>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th>#</th>
                          <th>Anggota</th>
                          <th>Aksi</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                  <div class="row">
                    <div class="col-6">
                      <?php
                        include('modal/add-anggota-meninggal.php');
                      ?>
                    </div>
                    <div class="col-6 text-right">
                      <a href="<?= $site_url?>/data/" class="btn btn-success btn-sm">DB Keluarga</a>
                    </div>
                  </div>
                  <div class="row">
                    <?php
                    
                    include('aksi/add-anggota-meninggal.php');
                    $key_keluarga     = $_GET['id'];
                    $sql_meninggal    = mysqli_query($host,"SELECT * FROM keluarga_meninggal 
                                      WHERE keluarga_meninggal.key_keluarga='$key_keluarga'");
                    $count_meninggal  = mysqli_num_rows($sql_meninggal);
                    if($count_meninggal>0){
                    ?>
                    <table class="table">
                      <tr>
                        <th>#</th>
                        <th>Status Keluarga</th>
                        <th>Penyebab Kematian</th>
                        <th>Usia Saat Meninggal</th>
                        <th>Tanggal Meninggal</th>
                      </tr>
                      <?php
                      $plus=1;
                      $sql_meninggal_ini  =  mysqli_query($host,"SELECT * FROM keluarga_meninggal WHERE key_keluarga='$key_keluarga'");
                      while($data_meninggal= mysqli_fetch_array($sql_meninggal_ini)){
                      ?>
                      <tr>
                        <td><?= $plus++;?></td>
                        <td>
                          <?php 
                          $id_struktur_keluarga = $data_meninggal['id_struktur_keluarga'];
                          echo  master_jawaban($id_struktur_keluarga);
                          ?>
                          
                        </td>
                        <td>
                          <?php 
                          $sebab_kematian = $data_meninggal['sebab_kematian'];
                          echo  master_jawaban($sebab_kematian);
                          ?>
                        </td>
                        <td><?= $data_meninggal['usia_meninggal']?></td>
                        <td><?= $data_meninggal['tgl_kematian']?></td>
                      </tr>
                      <?php
                      }
                      ?>
                    </table>
                    <?php
                    }
                    ?>
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
