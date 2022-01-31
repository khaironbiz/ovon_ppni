<!-- Button trigger modal -->
<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal">
    Update
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Data Dasar</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="" method="post">
        <div class="modal-body text-left">
            <div class="row">
                <div class="col-md-6">
                    <label>Data Kepala Keluarga</label>
                    <div class="row  mb-1">
                    <div class="col-md-4">Kepala Keluarga</div>
                    <div class="col-md-8">
                            <?php
                                $id_kepala_keluarga     = kepala_keluarga($data_keluarga['id_kepala_keluarga']);
                                $key_keluarga           = $data_keluarga['key_keluarga']
                            ?>
                            <select class="form-control form-control-sm" required name="id_kepala_keluarga">
                                <option value="<?= $data_keluarga['id_kepala_keluarga']?>"><?= $id_kepala_keluarga?></option>
                                <?php
                                $cari_anggota = mysqli_query($host, "SELECT * FROM keluarga_anggota WHERE key_keluarga='$key_keluarga' ");
                                while($data_jawaban = mysqli_fetch_array($cari_anggota)){
                                ?>
                                <option value="<?= $data_jawaban['nik']?>"><?= $data_jawaban['nama_anggota']?></option>
                                <?php
                                }
                                ?>
                            </select>
                            <input type="hidden" name= "edit_keluarga" class="form-control form-control-sm" value="<?= $_GET['key'];?>">
                            <input type="hidden" name= "key_kunjungan" class="form-control form-control-sm" value="<?= $_GET['kunjungan'];?>">
                            
                        </div>
                    </div>
                    
                    <div class="row  mb-1">
                    <div class="col-md-4">Nomor KK</div>
                        <div class="col-md-8">
                            <input type="text" name= "no_kk" class="form-control form-control-sm" value="<?= $data_keluarga['no_kk'];?>">
                        </div>
                    </div>
                    <div class="row  mb-1">
                    <div class="col-md-4">Jenis Keluarga</div>
                        <div class="col-md-8">
                            <select class="form-control form-control-sm" required name="jenis_keluarga">
                            <?php
                                $jenis_keluarga     = master_jawaban($data_anggota['id_jenis_keluarga'])
                            ?>
                                <option value="<?= $data_keluarga['jenis_keluarga']?>"><?= master_jawaban($data_keluarga['jenis_keluarga'])?></option>
                                <?php
                                $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='18' ");
                                while($data_jawaban = mysqli_fetch_array($sql_jawaban)){
                                ?>
                                <option value="<?= $data_jawaban['id_master_jawaban']?>"><?= $data_jawaban['master_jawaban']?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        
                    </div>
                    <label>Ekonomi Keluarga</label>
                    <div class="row  mb-1">
                    <div class="col-md-4">Penghasilan</div>
                        <div class="col-md-8">
                            <input type="number" name= "penghasilan" class="form-control form-control-sm" value="<?= $data_keluarga['penghasilan'];?>">
                        </div>
                    </div>
                    <div class="row  mb-1">
                    <div class="col-md-4">Pengeluaran</div>
                        <div class="col-md-8">
                            <input type="number" name= "pengeluaran" class="form-control form-control-sm" value="<?= $data_keluarga['pengeluaran'];?>">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label>Alamat</label>
                    <div class="row  mb-1">
                        <div class="col-md-4">Jalan</div>
                        <div class="col-md-8">
                            <input type="text" name= "alamat" class="form-control form-control-sm" value="<?= $data_keluarga['alamat'];?>">
                        </div>
                    </div>
                    <div class="row  mb-1">
                        <div class="col-md-4">RT / RW</div>
                            <?php
                                $rt     = rt($data_keluarga['rt']);
                                $rw     = rw($data_keluarga['rw']);
                            ?>
                            
                        <div class="col-md-8">
                            <input type="text" class="form-control form-control-sm" value="<?= $rt."/".$rw?>" readonly>
                        </div>
                    </div>
                    <div class="row  mb-1">
                        <div class="col-md-4">Desa</div>
                            <?php
                                $desa       = desa($data_keluarga['kelurahan']);
                            ?>
                        <div class="col-md-8">
                            <input type="text" class="form-control form-control-sm" value="<?= $desa ?>" readonly>
                        </div>
                        
                    </div>
                    <div class="row  mb-1">
                        <div class="col-md-4">Kecamatan</div>
                            <?php
                                $kecamatan       = kecamatan($data_keluarga['kecamatan']);
                            ?>
                            
                        <div class="col-md-8">
                            <input type="text" class="form-control form-control-sm" value="<?= $kecamatan ?>" readonly>
                        </div>
                    </div>
                    <div class="row  mb-1">
                        <div class="col-md-4">Kota</div>
                        <div class="col-md-8">
                            <?php
                                $kota       = kabupaten($data_keluarga['kabupaten']);
                            ?>
                            <input type="text" class="form-control form-control-sm" value="<?= $kota ?>" readonly>
                        </div>
                    </div>
                    <div class="row  mb-1">
                        <div class="col-md-4">Provinsi</div>
                        <div class="col-md-8">
                            <?php
                            $provinsi = provinsi($data_keluarga['provinsi']);
                            ?>
                            <input type="text" class="form-control form-control-sm" value="<?= $provinsi;?>" readonly>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        </form>
        </div>
    </div>
</div>
<?php
if(isset($_POST['edit_keluarga'])){
    $hari_ini           = date('Y-m-d H:i:s');
    $provinsi           = $data_keluarga['provinsi'];
    $kabupaten          = $data_keluarga['kabupaten'];
    $kecamatan          = $data_keluarga['kecamatan'];
    $desa               = $data_keluarga['kelurahan'];
    $rt                 = $data_keluarga['rt'];
    $rw                 = $data_keluarga['rw'];
    $key_keluarga       = $_POST['edit_keluarga'];
    $key_kunjungan      = $_POST['key_kunjungan'];
    $id_kepala_keluarga = $_POST['id_kepala_keluarga'];
    $no_kk              = $_POST['no_kk'];
    $jenis_keluarga     = $_POST['jenis_keluarga'];
    $penghasilan        = $_POST['penghasilan'];
    $pengeluaran        = $_POST['pengeluaran'];
    $status_ekonomi     = $penghasilan-$pengeluaran;
    $alamat             = $_POST['alamat'];
    $update_data        = mysqli_query($host,"UPDATE keluarga SET 
                        id_kepala_keluarga  = '$id_kepala_keluarga', 
                        no_kk               = '$no_kk',
                        jenis_keluarga      = '$jenis_keluarga',
                        penghasilan         = '$penghasilan',
                        pengeluaran         = '$pengeluaran',
                        status_ekonomi      = '$status_ekonomi',
                        alamat              = '$alamat' WHERE
                        key_keluarga        = '$key_keluarga'");
    $sql_pengkajian     = mysqli_query($host,"SELECT * FROM pengkajian_keluarga WHERE has_pengkajian_keluarga = '$key_kunjungan'");
    $count_pengkajian   = mysqli_num_rows($sql_pengkajian);
    if($count_pengkajian <1){
        $pengkajian     = mysqli_query($host,"INSERT INTO pengkajian_keluarga SET 
                        id_kepala_keluarga      = '$id_kepala_keluarga', 
                        key_keluarga            = '$key_keluarga',
                        no_kk                   = '$no_kk',
                        jenis_keluarga          = '$jenis_keluarga',
                        penghasilan             = '$penghasilan',
                        pengeluaran             = '$pengeluaran',
                        status_ekonomi          = '$status_ekonomi',
                        alamat                  = '$alamat',
                        rt                      = '$rt',
                        rw                      = '$rw',
                        kelurahan               = '$desa',
                        kecamatan               = '$kecamatan',
                        kabupaten               = '$kabupaten',
                        provinsi                = '$provinsi',
                        created_by              = '$user_check',
                        created_at              = '$hari_ini',
                        has_pengkajian_keluarga = '$key_kunjungan'");
    }else{
        $pengkajian     = mysqli_query($host,"UPDATE pengkajian_keluarga SET 
                        id_kepala_keluarga      = '$id_kepala_keluarga', 
                        key_keluarga            = '$key_keluarga',
                        no_kk                   = '$no_kk',
                        jenis_keluarga          = '$jenis_keluarga',
                        penghasilan             = '$penghasilan',
                        pengeluaran             = '$pengeluaran',
                        status_ekonomi          = '$status_ekonomi',
                        alamat                  = '$alamat',
                        rt                      = '$rt',
                        rw                      = '$rw',
                        kelurahan               = '$desa',
                        kecamatan               = '$kecamatan',
                        kabupaten               = '$kabupaten',
                        provinsi                = '$provinsi',
                        created_by              = '$user_check',
                        created_at              = '$hari_ini' WHERE
                        has_pengkajian_keluarga = '$key_kunjungan'");
    }
    
    if($update_data && $pengkajian){
        $_SESSION['status']="Data Sukses Disimpan";
        $_SESSION['status_info']="success";
        echo "<script>document.location=\"$site_url/pengkajian/keluarga.php?key=$key_keluarga&kunjungan=$key_kunjungan\"</script>";
    }else{
        $_SESSION['status']="Data Gagal Disimpan";
        $_SESSION['status_info']="danger";
        echo "<script>document.location=\"$site_url/pengkajian/keluarga.php?key=$key_keluarga&kunjungan=$key_kunjungan\"</script>";
    }
}


?>