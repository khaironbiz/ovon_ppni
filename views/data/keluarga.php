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
                  <?php
                  if($data_pengguna['id_rw'] !=''){
                    include("../core/security/admin-akses.php");
                    if($count_admin >0){
                      include('aksi/add-data-anggota.php');
                      }
                  }
                  ?>
                  <a href="<?= $site_url?>/data/anggota.php?id=<?= $_GET['id']?>" class="btn btn-primary btn-sm mb-3">Add Anggota</a>
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
                                                JOIN master_sex on master_sex.id_master_sex = keluarga_anggota.jenis_kelamin 
                                                JOIN master_struktur_keluarga on master_struktur_keluarga.id_struktur_keluarga=keluarga_anggota.id_struktur_keluarga
                                                JOIN master_nikah on master_nikah.id_master_nikah=keluarga_anggota.status_pernikahan 
                                                WHERE keluarga_anggota.key_keluarga = '$key' ORDER BY keluarga_anggota.id_struktur_keluarga ASC");
                      while($data       = mysqli_fetch_array($sql_keluarga)){
                        $tanggal_lahir  = $data['tgl_lahir'];
                        $time_lahir     = number_format((time()-strtotime($tanggal_lahir))/(60*60*24*365));
                        $lahir          = new DateTime($data['tgl_lahir']);
                        $today          = new DateTime();
                        $umur           = $today->diff($lahir);
                        

                    ?>
                </td>
                      
                      <tr>
                        <td width="10px"><?= $no++; ?></td>
                        <td>
                            <?= $data['nama_anggota']." ".$umur->y." Th ".$umur->m." Bulan"; ?> <br>
                            <?= $data['master_sex']?><br>
                            <?= $data['struktur_keluarga']?><br>
                            <?= $data['nama_nikah']?><br>
                        </td>
                        <td>
                          
                          <a href="" class="btn btn-success btn-sm">Detail</a>
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
                  <?php
                  include('modal/add-anggota-meninggal.php');
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
                    $sql_meninggal_ini  =  mysqli_query($host,"SELECT * FROM keluarga_meninggal 
                                        JOIN master_sebab_kematian on master_sebab_kematian.id_master_sebab_kematian=keluarga_meninggal.sebab_kematian
                                        JOIN master_struktur_keluarga on keluarga_meninggal.id_struktur_keluarga= master_struktur_keluarga.id_struktur_keluarga
                                        WHERE keluarga_meninggal.key_keluarga='$key_keluarga'");
                    while($data_meninggal= mysqli_fetch_array($sql_meninggal_ini)){
                    ?>
                    <tr>
                      <td><?= $plus++;?></td>
                      <td><?= $data_meninggal['struktur_keluarga']?></td>
                      <td><?= $data_meninggal['master_sebab_kematian']?></td>
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