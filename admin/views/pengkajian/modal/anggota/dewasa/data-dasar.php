<!-- Modal Dewasa TTV dan Lab -->
<div class="modal fade" id="datadasar" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="" method="POST">
                <div class="modal-header">
                <h5 class="modal-title">Data Dasar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row mb-1">
                        <div class="col-5">Nama</div>
                        <div class="col-7">
                            <input type="text" class="form-control form-control-sm" name="nama_anggota" value="<?= $data_anggota['nama_anggota']?>">
                            <input type="hidden" class="form-control form-control-sm" name="update_data_dasar_dewasa" value="<?= $_GET['key']?>">
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-5">Tgl Lahir</div>
                        <div class="col-7">
                            <input type="date" class="form-control form-control-sm" name="tgl_lahir" value="<?= $data_anggota['tgl_lahir']?>">
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-5">Jenis Kelamin</div>
                        <div class="col-7">
                            <select class="form-control form-control-sm" required name="jenis_kelamin">
                                <option value="<?= $data_anggota['jenis_kelamin']; ?>"><?= master_jawaban($data_anggota['jenis_kelamin'])?></option>
                                <?php
                                    $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='3' ");
                                                while($data_jawaban = mysqli_fetch_array($sql_jawaban)){
                                ?>
                                    <option value="<?= $data_jawaban['id_master_jawaban']?>"><?= $data_jawaban['master_jawaban']?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-5">NIK</div>
                        <div class="col-7">
                            <input type="text" class="form-control form-control-sm" name="nik" value="<?= $data_anggota['nik']?>">
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-5">Status KTP</div>
                        <div class="col-7">
                            <select class="form-control form-control-sm" required name="status_ktp">
                                <option value="<?= $data_anggota['status_ktp']; ?>"><?= master_jawaban($data_anggota['status_ktp'])?></option>
                                <?php
                                    $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='79' ");
                                                while($data_jawaban = mysqli_fetch_array($sql_jawaban)){
                                ?>
                                    <option value="<?= $data_jawaban['id_master_jawaban']?>"><?= $data_jawaban['master_jawaban']?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-5">Struktur Keluarga</div>
                        <div class="col-7">
                            <select class="form-control form-control-sm" required name="id_struktur_keluarga">
                                <option value="<?= $data_anggota['id_struktur_keluarga']; ?>"><?= master_jawaban($data_anggota['id_struktur_keluarga'])?></option>
                                <?php
                                    $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='120' ");
                                                while($data_jawaban = mysqli_fetch_array($sql_jawaban)){
                                ?>
                                    <option value="<?= $data_jawaban['id_master_jawaban']?>"><?= $data_jawaban['master_jawaban']?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-5">Status Pernikahan</div>
                        <div class="col-7">
                            <select class="form-control form-control-sm" required name="status_pernikahan">
                                <?php
                                    $status_pernikahan  = $data_anggota['status_pernikahan'];
                                ?>
                                <option value="<?= $status_pernikahan; ?>"><?= master_jawaban($status_pernikahan)?></option>
                                <?php
                                    $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='80' ");
                                                while($data_jawaban = mysqli_fetch_array($sql_jawaban)){
                                ?>
                                    <option value="<?= $data_jawaban['id_master_jawaban']?>"><?= $data_jawaban['master_jawaban']?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-5">Pendidikan</div>
                        <div class="col-7">
                            <select class="form-control form-control-sm" required name="pendidikan">
                                <?php
                                    $pendidikan  = $data_anggota['pendidikan'];
                                ?>
                                <option value="<?= $pendidikan; ?>"><?= master_jawaban($pendidikan)?></option>
                                <?php
                                    $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='58' ");
                                                while($data_jawaban = mysqli_fetch_array($sql_jawaban)){
                                ?>
                                    <option value="<?= $data_jawaban['id_master_jawaban']?>"><?= $data_jawaban['master_jawaban']?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-5">Pekerjaan</div>
                        <div class="col-7">
                            <select class="form-control form-control-sm" required name="pekerjaan">
                                <?php
                                    $pekerjaan  = $data_anggota['pekerjaan'];
                                ?>
                                <option value="<?= $pekerjaan; ?>"><?= master_jawaban($pekerjaan)?></option>
                                <?php
                                    $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='109' ");
                                                while($data_jawaban = mysqli_fetch_array($sql_jawaban)){
                                ?>
                                    <option value="<?= $data_jawaban['id_master_jawaban']?>"><?= $data_jawaban['master_jawaban']?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-5">Golongan Darah</div>
                        <div class="col-7">
                            <select class="form-control form-control-sm" required name="golongan_darah">
                                
                                <option value="<?= $data_anggota['golongan_darah'] ?>"><?= master_jawaban($data_anggota['golongan_darah'])?></option>
                                <?php
                                    $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='90' ");
                                                while($data_jawaban = mysqli_fetch_array($sql_jawaban)){
                                ?>
                                    <option value="<?= $data_jawaban['id_master_jawaban']?>"><?= $data_jawaban['master_jawaban']?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-5">Vaksin Covid-19</div>
                        <div class="col-7">
                            <select class="form-control form-control-sm" required name="vaksin_covid19">
                                <?php
                                    $vaksin_covid19  = $data_anggota['vaksin_covid19'];
                                ?>
                                <option value="<?= $vaksin_covid19; ?>">
                                    <?php 
                                        if(count_jawaban($data_anggota['vaksin_covid19'])>0){
                                        echo master_jawaban($data_anggota['vaksin_covid19']);
                                        }else{ echo "---Pilih---";
                                        }
                                    ?>
                                </option>
                                <?php
                                    $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='116' ");
                                                while($data_jawaban = mysqli_fetch_array($sql_jawaban)){
                                ?>
                                    <option value="<?= $data_jawaban['id_master_jawaban']?>"><?= $data_jawaban['master_jawaban']?></option>
                                <?php
                                    }
                                ?>
                            </select>
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
if(isset($_POST['update_data_dasar_dewasa'])){
    $has_keluarga_anggota   = $_POST['update_data_dasar_dewasa'];
    $nama_anggota           = $_POST['nama_anggota'];
    $tgl_lahir              = $_POST['tgl_lahir'];
    $jenis_kelamin          = $_POST['jenis_kelamin'];
    $nik                    = $_POST['nik'];
    $id_struktur_keluarga   = $_POST['id_struktur_keluarga'];
    $status_pernikahan      = $_POST['status_pernikahan'];
    $pendidikan             = $_POST['pendidikan'];
    $pekerjaan              = $_POST['pekerjaan'];
    $golongan_darah         = $_POST['golongan_darah'];
    $vaksin_covid19         = $_POST['vaksin_covid19'];
    $hari_ini               = date('Y-m-d H:i:s');
    $update_anggota         = mysqli_query($host,"UPDATE keluarga_anggota SET
                                nama_anggota        = '$nama_anggota',
                                tgl_lahir           = '$tgl_lahir',
                                jenis_kelamin       = '$jenis_kelamin',
                                nik                 = '$nik',
                                id_struktur_keluarga= '$id_struktur_keluarga',
                                status_pernikahan   = '$status_pernikahan',
                                pendidikan          = '$pendidikan',
                                pekerjaan           = '$pekerjaan',
                                golongan_darah      = '$golongan_darah',
                                vaksin_covid19      = '$vaksin_covid19',
                                updated_at          = '$hari_ini' WHERE 
                                has_keluarga_anggota= '$has_keluarga_anggota'");
    if($update_anggota){
        $_SESSION['status']="Data Sukses Disimpan";
        $_SESSION['status_info']="success";
        echo "<script>document.location=\"$site_url/pengkajian/individu.php?key=$has_keluarga_anggota\"</script>";
    }else{
        $_SESSION['status']="Data gagal Disimpan";
        $_SESSION['status_info']="danger";
        echo "<script>document.location=\"$site_url/pengkajian/individu.php?key=$has_keluarga_anggota\"</script>";
        
    }
}

?>