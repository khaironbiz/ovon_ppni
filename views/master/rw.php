<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
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
            
            include('aksi/rw/add-rt.php');
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
                      include("modal/rw/add-rw.php");
                      include('aksi/rw/add-rw.php');
                      }
                      $th_0       = date('Y-m-d', strtotime('-0 year', strtotime(date('Y-m-d'))));
                      $th_5       = date('Y-m-d', strtotime('-5 year', strtotime(date('Y-m-d'))));
                      $th_6       = date('Y-m-d', strtotime('-6 year', strtotime(date('Y-m-d'))));
                      $th_12      = date('Y-m-d', strtotime('-12 year', strtotime(date('Y-m-d'))));
                      $th_55      = date('Y-m-d', strtotime('-55 year', strtotime(date('Y-m-d'))));
                      $th_60      = date('Y-m-d', strtotime('-60 year', strtotime(date('Y-m-d'))));
                      $th_61      = date('Y-m-d', strtotime('-61 year', strtotime(date('Y-m-d'))));
                  ?>
                  
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Nama RT / RW</th>
                        <th>0-5</th>
                        <th>6-12</th>
                        <th>13-55</th>
                        <th>55-60</th>
                        <th>60+</th>
                        <th>Total</th>
                        <th>Detail</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $no               = 1;
                      $sql_m_rw         = mysqli_query($host, "SELECT * FROM rw WHERE kel='$mydesa' ORDER BY nama_rw ASC");
                      while($data       = mysqli_fetch_array($sql_m_rw)){
                        $id_rw          = $data['id_rw'];
                        $sql_count      = mysqli_query($host, "SELECT * FROM keluarga_anggota WHERE rw ='$id_rw'");
                        $count_data     = mysqli_num_rows($sql_count);
                      ?>
                      
                      <tr>
                        <td width="10px"><?= $no++; ?></td>
                        <td><?= $data['nama_rw'];?></td>
                        <td><?= $count_data;?></td>
                        <td></td>
                        <td></td>
                        <td></td>                        
                        <td></td>
                        <td></td>
                        <td>
                          <?php 
                          include('modal/rw/add-rt.php');
                          ?>
                        </td>
                      </tr>
                      <?php
                        $id_rw      = $data['id_rw'];
                        $sql_rt     = mysqli_query($host, "SELECT * FROM rt WHERE rw='$id_rw'");
                        while($data_rt    = mysqli_fetch_array($sql_rt)){
                        $id_rt      = $data_rt['id_rt'];
                        $sql_count  = mysqli_query($host, "SELECT * FROM keluarga_anggota WHERE rt ='$id_rt'");
                        $count_data = mysqli_num_rows($sql_count);
                        
                      ?>
                      <tr>
                          <td></td>
                          <td><?= $data_rt['nama_rt']?></td>
                          <td><?= $th_5?></td>
                          <td><?= $th_12?></td>
                          <td><?= $th_55?></td>
                          <td><?= $th_60?></td>
                          <td><?= $th_61?></td>
                          <td><?= $count_data ?></td>
                          <td></td>
                        </tr>
                      <?php
                        }
                      }
                      ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>#</th>
                        <th>Nama RT / RW</th>
                        <th>0-5</th>
                        <th>6-12</th>
                        <th>13-55</th>
                        <th>55-60</th>
                        <th>60+</th>
                        <th>Total</th>
                        <th>Detail</th>
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