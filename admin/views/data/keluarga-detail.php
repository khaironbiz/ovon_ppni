<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12">
            
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
                  <h2><?= $judul; ?></h2>
                  <div class="row">
                      <div class="col-md-6">
                        <table>
                            <tr>
                                <th colspan="7">Keluarga</th>
                            </tr>
                            <tr>
                                <td>Nama kepala</td><td>:</td><td colspan="5"><?= $data_kel['nama_keluarga']?></td>
                            </tr>
                            <tr>
                                <td width="15%">Jenis keluarga</td><td>:</td><td><?= $data_kel['master_jenis_keluarga']?></td>
                            </tr>
                            <tr>
                                <td>Alamat</td><td>:</td><td><?= $data_kel['kelurahan']?></td>
                            </tr>
                            <tr>
                                <th colspan="7">Daftar Anggota Keluarga</th>
                            </tr>
                            <tr>
                                <td colspan="7">
                                    <div class="table-responsive">
                                        <table class="table table-sm">
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Gender</th>
                                                <th>Usia</th>
                                                <th>Status</th>
                                                <th>Vaksin</th>
                                            </tr>
                                            <?php
                                            $c=1;
                                            $sql_anggota    = mysqli_query($host, "SELECT * FROM keluarga_anggota 
                                                                JOIN master_sex on master_sex.id_master_sex=keluarga_anggota.jenis_kelamin
                                                                JOIN master_struktur_keluarga on master_struktur_keluarga.id_struktur_keluarga=keluarga_anggota.id_struktur_keluarga
                                                                JOIN master_imunisasi on master_imunisasi.id_master_imunisasi=keluarga_anggota.vaksin_covid19
                                                                WHERE keluarga_anggota.key_keluarga='$key'");
                                                while($data_anggota_ini = mysqli_fetch_array($sql_anggota)){
                                                $tgl_now        = date('Y-m-d');
                                                $lahir          = new DateTime($data_anggota_ini['tgl_lahir']);
                                                $today          = new DateTime();
                                                $umur           = $today->diff($lahir);
                                            ?>
                                            <tr>
                                                <td><?= $c++?></td>
                                                <td><?= $data_anggota_ini['nama_anggota']?></td>
                                                <td><?= $data_anggota_ini['master_sex']?></td>
                                                <td><?= $umur->y." th ".$umur->m." bl";?></td>
                                                <td><?= $data_anggota_ini['struktur_keluarga']?></td>
                                                <td><?= $data_anggota_ini['master_imunisasi']?></td>
                                            </tr>
                                            <?php
                                                }
                                            ?>
                                        </table>
                                    </div>
                                    
                                </td>
                            </tr>
                            <tr>
                                <th colspan="7">Kondisi Ekonomi</th>
                            </tr>
                            <tr>
                                <td>Penghasilan</td><td>:</td><td><?= number_format($data_kel['penghasilan'])?> / bulan</td>
                            </tr>
                            <tr>
                                <td>Pengeluaran</td><td>:</td><td><?= number_format($data_kel['pengeluaran'])?> / bulan</td>
                            </tr>
                            <tr>
                                <td>Balance</td><td>:</td><td><?= number_format($data_kel['penghasilan']-$data_kel['pengeluaran'])?> / bulan</td>
                            </tr>
                            <tr>
                                <th colspan="7">Keluarga yang meninggal</th>
                            </tr>
                            <tr>
                                <td colspan="7">
                                    <table>
                                        <tr>
                                            <th>No</th><th>Anggota</th><th>Penyebab</th><th>Tanggal</th>
                                        </tr>
                                        <?php
                                        ?>
                                        <?php
                                            $sql_meninggal  = mysqli_query($host,"SELECT * FROM keluarga_meninggal")
                                        ?>
                                        <tr>
                                            <td></td><td></td><td></td><td></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            
                        </table>
                      </div>
                      <div class="col-md-6">
                          <table>
                              <tr>
                                <th>Kondisi Lingkungan</th>
                            </tr>
                            <tr>
                                <td>Sumber air minum</td><td>:</td><td><?= $data_kel['master_air_minum']?></td>
                            </tr>
                            <tr>
                                <td>Penyediaan air minum</td><td>:</td><td><?php if($data_kel['penyediaan_air_minum']==1){echo "Tidak dimasak";}else{echo "Dimasak";}   ;?></td>
                            </tr>
                            <tr>
                                <td>Letak sumber air</td><td>:</td><td><?php if($data_kel['sumber_air']==1){echo "Didalam rumah";}else{echo "Diluar rumah";}   ;?></td>
                            </tr>
                            <tr>
                                <td>Jenis jamban</td><td>:</td><td><?= $data_kel['master_jenis_jamban']?></td>
                            </tr>
                            <tr>
                                <td>Kepemilikan jamban</td><td>:</td><td><?php if($data_kel['kepemilikan_jamban']==1){echo "Milik sendiri";}else{echo "Milik umum";}   ;?></td>
                            </tr>
                            
                            <tr>
                                <td>Fasilitas</td><td>:</td>
                                <td>
                                <?php
                                $key_ini        = $data_kel['key_keluarga'];
                                $sql_fasilitas  = mysqli_query($host, "SELECT * FROM keluarga_fasilitas 
                                                    JOIN master_fasilitas on master_fasilitas.id_master_fasilitas = keluarga_fasilitas.id_fasilitas
                                                    WHERE keluarga_fasilitas.key_keluarga='$key'");
                                while($data_fasil = mysqli_fetch_array($sql_fasilitas)){
                                    echo $data_fasil['master_fasilitas'].", ";
                                }
                                ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Kendaraan</td><td>:</td>
                                <td>
                                <?php
                                
                                $sql_kendaraan  = mysqli_query($host, "SELECT * FROM keluarga_kendaraan 
                                                    JOIN master_kendaraan on master_kendaraan.id_master_kendaraan = keluarga_kendaraan.id_kendaraan
                                                    WHERE keluarga_kendaraan.key_keluarga='$key'");
                                while($data_fasil = mysqli_fetch_array($sql_kendaraan)){
                                    echo $data_fasil['master_kendaraan'].", ";
                                }
                                ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Bahan bakar rumah tangga</td><td>:</td><td><?= $data_kel['master_bahan_bakar']?></td>
                            </tr>
                            <tr>
                                <td>Luas rumah</td><td>: </td><td><?= $data_kel['luas_rumah']?> M2</td>
                            </tr>
                            <tr>
                                <td>Jumlah anggota keluarga</td><td>: </td><td><?= $data_kel['jml_anggota_keluarga']?> Orang</td>
                            </tr>
                            <tr>
                                <td>Rasio luas rumah</td><td>:</td><td><?= number_format(($data_kel['luas_rumah']/$data_kel['jml_anggota_keluarga']),2);?> M2/Orang</td>
                            </tr>
                            <tr>
                                <td>Bahan atap rumah</td><td>:</td><td><?= $data_kel['master_atap']?></td>
                            </tr>
                            <tr>
                                <td>Dinding rumah</td><td>:</td><td><?= $data_kel['master_dinding']?></td>
                            </tr>
                            <tr>
                                <td>Lantai rumah</td><td>:</td><td><?= $data_kel['master_lantai']?></td>
                            </tr>
                            <tr>
                                <td>Lahan pertanian</td><td>:</td><td><?= $data_kel['lahan_pertanian']?> M2</td>
                            </tr>
                            <tr>
                                <td>Kepemilikan hewan</td><td>:</td>
                                <td>
                                <?php
                                $key_ini        = $data_kel['key_keluarga'];
                                $sql_ternak  = mysqli_query($host, "SELECT * FROM keluarga_ternak 
                                                    JOIN master_ternak on master_ternak.id_master_ternak = keluarga_ternak.id_ternak
                                                    WHERE keluarga_ternak.key_keluarga='$key'");
                                while($data_fasil = mysqli_fetch_array($sql_ternak)){
                                    echo $data_fasil['master_ternak'].", ";
                                }
                                ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Input data</th>
                            </tr>
                            <tr>
                                <td>Penginput data</td><td>: </td><td><?= $data_kel['user_nama']?></td>
                            </tr>
                            <tr>
                                <td>Waktu input</td><td>: </td><td><?= $data_kel['created_at']?></td>
                            </tr>
                          </table>
                      </div>
                  </div>
                    
                  <a href="<?= $site_url?>/data" class="btn btn-danger btn-sm mt-3">Back to family</a>
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