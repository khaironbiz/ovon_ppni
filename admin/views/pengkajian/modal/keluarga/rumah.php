<!-- Button trigger modal -->
<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#rumah-keluarga">
    Update
</button>

<!-- Modal -->
<div class="modal fade" id="rumah-keluarga" tabindex="-1" aria-labelledby="rumah-keluargaLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="rumah-keluargaLabel">Rumah Keluarga</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="" method="post">
        <div class="modal-body text-left">
            <div class="row">
                <div class="col-md-6">
                    
                    <div class="row mb-1">
                        <div class="col-md-5">Luas Rumah</div>
                        <div class="col-md-7">
                            <input type="hidden" name= "edit_keluarga_rumah" class="form-control form-control-sm" value="<?= $_GET['key'];?>">
                            <input type="hidden" name= "key_kunjungan" class="form-control form-control-sm" value="<?= $_GET['kunjungan'];?>">
                            <div class="input-group">
                                <input type="text" name= "luas_rumah" class="form-control form-control-sm" value="<?= $data_keluarga['luas_rumah'];?>">
                                <div class="input-group-prepend">
                                    <div class="form-control form-control-sm">Meter Persegi</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row  mb-1">
                        <div class="col-md-5">Jenis Dinding</div>
                        <div class="col-md-7">
                            <?php
                                $dinding_rumah     = master_jawaban($data_keluarga['dinding_rumah'])
                            ?>
                            <select class="form-control form-control-sm" required name="dinding_rumah">
                                <option value="<?= $data_keluarga['dinding_rumah']?>"><?= $dinding_rumah?></option>
                                <?php
                                $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='13' ");
                                while($data_jawaban = mysqli_fetch_array($sql_jawaban)){
                                ?>
                                <option value="<?= $data_jawaban['id_master_jawaban']?>"><?= $data_jawaban['master_jawaban']?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row  mb-1">
                        <div class="col-md-5">Jenis Lantai</div>
                        <div class="col-md-7">
                            <?php
                                $lantai_rumah     = master_jawaban($data_keluarga['lantai_rumah'])
                            ?>
                            <select class="form-control form-control-sm" required name="lantai_rumah">
                                <option value="<?= $data_keluarga['lantai_rumah']?>"><?= $lantai_rumah?></option>
                                <?php
                                $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='12' ");
                                while($data_jawaban = mysqli_fetch_array($sql_jawaban)){
                                ?>
                                <option value="<?= $data_jawaban['id_master_jawaban']?>"><?= $data_jawaban['master_jawaban']?></option>
                                <?php
                                }
                                ?>
                            </select>
                            
                        </div>
                    </div>
                    <div class="row  mb-1">
                        <div class="col-md-5">Jenis Atap</div>
                        <div class="col-md-7">
                            <?php
                                $atap_rumah     = master_jawaban($data_keluarga['atap_rumah'])
                            ?>
                            <select class="form-control form-control-sm" required name="atap_rumah">
                                <option value="<?= $data_keluarga['atap_rumah']?>"><?= $atap_rumah?></option>
                                <?php
                                $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='11' ");
                                while($data_jawaban = mysqli_fetch_array($sql_jawaban)){
                                ?>
                                <option value="<?= $data_jawaban['id_master_jawaban']?>"><?= $data_jawaban['master_jawaban']?></option>
                                <?php
                                }
                                ?>
                            </select>
                            
                        </div>
                    </div>
                    <div class="row  mb-1">
                    <div class="col-md-5">Luas Ventilasi</div>
                        <div class="col-md-7">
                            <div class="input-group">
                                <input type="text" name= "luas_ventilasi" class="form-control form-control-sm" value="<?= $data_keluarga['luas_ventilasi'];?>" >
                                <div class="input-group-prepend">
                                    <div class="form-control form-control-sm">Meter Persegi</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row  mb-1">
                        <div class="col-md-5">Arah Ventilasi</div>
                        <div class="col-md-7">
                            <?php
                                $arah_ventilasi     = master_jawaban($data_keluarga['arah_ventilasi'])
                            ?>
                            <select class="form-control form-control-sm" required name="arah_ventilasi">
                                <option value="<?= $data_keluarga['arah_ventilasi']?>"><?= $arah_ventilasi?></option>
                                <?php
                                $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='22' ");
                                while($data_jawaban = mysqli_fetch_array($sql_jawaban)){
                                ?>
                                <option value="<?= $data_jawaban['id_master_jawaban']?>"><?= $data_jawaban['master_jawaban']?></option>
                                <?php
                                }
                                ?>
                            </select>
                            
                        </div>
                    </div>
                    <div class="row  mb-1">
                        <div class="col-md-5">Sumber Air Minum</div>
                        <div class="col-md-7">
                            <?php
                                $air_minum     = master_jawaban($data_keluarga['air_minum'])
                            ?>
                            <select class="form-control form-control-sm" required name="air_minum">
                                <option value="<?= $data_keluarga['air_minum']?>"><?= $air_minum?></option>
                                <?php
                                $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='23' ");
                                while($data_jawaban = mysqli_fetch_array($sql_jawaban)){
                                ?>
                                <option value="<?= $data_jawaban['id_master_jawaban']?>"><?= $data_jawaban['master_jawaban']?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row  mb-1">
                        <div class="col-md-5">Sumber Air Bersih</div>
                        <div class="col-md-7">
                            <?php
                                $air_bersih     = master_jawaban($data_keluarga['air_bersih'])
                            ?>
                            <select class="form-control form-control-sm" required name="air_bersih">
                                <option value="<?= $data_keluarga['air_bersih']?>"><?= $air_bersih?></option>
                                <?php
                                $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='24' ");
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
                <div class="col-md-6">
                    <div class="row  mb-1">
                        <div class="col-md-5">Pengelolaan Sampah</div>
                        <div class="col-md-7">
                            <?php
                                $pengelolaan_sampah     = master_jawaban($data_keluarga['pengelolaan_sampah'])
                            ?>
                            <select class="form-control form-control-sm" required name="pengelolaan_sampah">
                                <option value="<?= $data_keluarga['pengelolaan_sampah']?>"><?= $pengelolaan_sampah?></option>
                                <?php
                                $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='33' ");
                                while($data_jawaban = mysqli_fetch_array($sql_jawaban)){
                                ?>
                                <option value="<?= $data_jawaban['id_master_jawaban']?>"><?= $data_jawaban['master_jawaban']?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row  mb-1">
                        <div class="col-md-5">Limbah Air</div>
                        <div class="col-md-7">
                            <?php
                                $limbah_air     = master_jawaban($data_keluarga['limbah_air'])
                            ?>
                            <select class="form-control form-control-sm" required name="limbah_air">
                                <option value="<?= $data_keluarga['limbah_air']?>"><?= $limbah_air?></option>
                                <?php
                                $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='32' ");
                                while($data_jawaban = mysqli_fetch_array($sql_jawaban)){
                                ?>
                                <option value="<?= $data_jawaban['id_master_jawaban']?>"><?= $data_jawaban['master_jawaban']?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    
                    <div class="row  mb-1">
                        <div class="col-md-5">Kepemilikan Jamban</div>
                        <div class="col-md-7">
                            <?php
                                $kepemilikan_jamban     = master_jawaban($data_keluarga['kepemilikan_jamban'])
                            ?>
                            <select class="form-control form-control-sm" required name="kepemilikan_jamban">
                                <option value="<?= $data_keluarga['kepemilikan_jamban']?>"><?= $kepemilikan_jamban?></option>
                                <?php
                                $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='29' ");
                                while($data_jawaban = mysqli_fetch_array($sql_jawaban)){
                                ?>
                                <option value="<?= $data_jawaban['id_master_jawaban']?>"><?= $data_jawaban['master_jawaban']?></option>
                                <?php
                                }
                                ?>
                            </select>
                            
                        </div>
                    </div>
                    <div class="row  mb-1">
                        <div class="col-md-5">Jenis Jamban</div>
                        <div class="col-md-7">
                            <?php
                                $jenis_jamban     = master_jawaban($data_keluarga['jenis_jamban'])
                            ?>
                            <select class="form-control form-control-sm" required name="jenis_jamban">
                                <option value="<?= $data_keluarga['jenis_jamban']?>"><?= $jenis_jamban?></option>
                                <?php
                                $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='30' ");
                                while($data_jawaban = mysqli_fetch_array($sql_jawaban)){
                                ?>
                                <option value="<?= $data_jawaban['id_master_jawaban']?>"><?= $data_jawaban['master_jawaban']?></option>
                                <?php
                                }
                                ?>
                            </select>
                            
                        </div>
                    </div>
                    <div class="row  mb-1">
                        <div class="col-md-5">Lokasi Jamban</div>
                        <div class="col-md-7">
                            <?php
                                $lokasi_jamban     = master_jawaban($data_keluarga['lokasi_jamban'])
                            ?>
                            <select class="form-control form-control-sm" required name="lokasi_jamban">
                                <option value="<?= $data_keluarga['lokasi_jamban']?>"><?= $lokasi_jamban?></option>
                                <?php
                                $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='31' ");
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
                        <label>Produksi Sampah</label>
                    </div>
                    <div class="row  mb-1">
                        <div class="col-md-5">Sampah Organik</div>
                        <div class="col-md-7">
                            <div class="input-group">
                                <input type="text" class="form-control form-control-sm" name="sampah_basah" value="<?= $data_keluarga['sampah_basah']?>">
                                <div class="input-group-prepend">
                                    <div class="form-control form-control-sm">Kg/Hari</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row  mb-1">
                        <div class="col-md-5">Sampah Plastik</div>
                        <div class="col-md-7">
                            <div class="input-group">
                                <input type="text" class="form-control form-control-sm" name="sampah_plastik" value="<?= $data_keluarga['sampah_plastik']?>">
                                <div class="input-group-prepend">
                                    <div class="form-control form-control-sm">Kg/Hari</div>
                                </div>
                            </div>
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
if(isset($_POST['edit_keluarga_rumah'])){
    $key_keluarga       = $_POST['edit_keluarga_rumah'];
    $key_kunjungan      = $_POST['key_kunjungan'];
    $luas_rumah         = $_POST['luas_rumah'];
    $lantai_rumah       = $_POST['lantai_rumah'];
    $atap_rumah         = $_POST['atap_rumah'];
    $dinding_rumah      = $_POST['dinding_rumah'];
    $luas_ventilasi     = $_POST['luas_ventilasi'];
    $arah_ventilasi     = $_POST['arah_ventilasi'];
    $air_minum          = $_POST['air_minum'];
    $air_bersih         = $_POST['air_bersih'];
    $pengelolaan_sampah = $_POST['pengelolaan_sampah'];
    $limbah_air         = $_POST['limbah_air'];
    $sampah_basah       = $_POST['sampah_basah'];
    $sampah_plastik     = $_POST['sampah_plastik'];
    $kepemilikan_jamban = $_POST['kepemilikan_jamban'];
    $jenis_jamban       = $_POST['jenis_jamban'];
    $lokasi_jamban      = $_POST['lokasi_jamban'];
    $update_keluarga    = mysqli_query($host,"UPDATE keluarga SET 
                        luas_rumah              = '$luas_rumah',
                        lantai_rumah            = '$lantai_rumah',
                        atap_rumah              = '$atap_rumah',
                        dinding_rumah           = '$dinding_rumah',
                        luas_ventilasi          = '$luas_ventilasi',
                        arah_ventilasi          = '$arah_ventilasi',
                        air_minum               = '$air_minum',
                        air_bersih              = '$air_bersih',
                        pengelolaan_sampah      = '$pengelolaan_sampah',
                        limbah_air              = '$limbah_air',
                        sampah_basah            = '$sampah_basah',
                        sampah_plastik          = '$sampah_plastik',
                        kepemilikan_jamban      = '$kepemilikan_jamban',
                        jenis_jamban            = '$jenis_jamban',
                        lokasi_jamban           = '$lokasi_jamban' WHERE 
                        key_keluarga            = '$key_keluarga'");
    if($update_keluarga){
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