<!-- Modal Dewasa TTV dan Lab -->
<div class="modal fade" id="polakebiasaan" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="" method="POST">
                <div class="modal-header">
                <h5 class="modal-title">Pola Kebiasaan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                
                    <label>Olah Raga</label>
                    <div class="row mb-1">
                        <div class="col-5">Frekwensi</div>
                        <div class="col-7">
                            <select class="form-control form-control-sm" required name="olah_raga_frekwensi">
                                <option value="<?= $data_anggota['olah_raga_frekwensi'];?>"><?= master_jawaban($data_anggota['olah_raga_frekwensi'])?></option>
                                    <?php
                                        $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='96' ");
                                                    while($data_jawaban = mysqli_fetch_array($sql_jawaban)){
                                    ?>
                                        <option value="<?= $data_jawaban['id_master_jawaban']?>"><?= $data_jawaban['master_jawaban']?></option>
                                    <?php
                                        }
                                    ?>
                            </select>
                            <input type="hidden" class="form-control form-control-sm" name="update_kebiasaan_dewasa" value="<?= $_GET['key']?>">
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-5">Durasi</div>
                        <div class="col-7">
                            <select class="form-control form-control-sm" required name="olah_raga_durasi">
                                <option value="<?= $data_anggota['olah_raga_durasi']?>"><?= master_jawaban($data_anggota['olah_raga_durasi'])?></option>
                                    <?php
                                        $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='97' ");
                                                    while($data_jawaban = mysqli_fetch_array($sql_jawaban)){
                                    ?>
                                        <option value="<?= $data_jawaban['id_master_jawaban']?>"><?= $data_jawaban['master_jawaban']?></option>
                                    <?php
                                        }
                                    ?>
                            </select>
                        </div>
                    </div>
                    <label>Pola Makan</label>
                    <div class="row mb-1">
                        <div class="col-5">Frekwensi</div>
                        <div class="col-7">
                            <select class="form-control form-control-sm" required name="makanan_frekwensi">
                                <option value="<?= $data_anggota['makan_frekwensi']?>"><?= master_jawaban($data_anggota['makan_frekwensi'])?></option>
                                    <?php
                                        $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='101' ");
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
                        <div class="col-5">Porsi</div>
                        <div class="col-7">
                            <select class="form-control form-control-sm" required name="makanan_porsi">
                                <option value="<?= $data_anggota['makan_porsi']?>"><?= master_jawaban($data_anggota['makan_porsi'])?></option>
                                    <?php
                                        $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='102' ");
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
                        <div class="col-5">Makan Sayur</div>
                        <div class="col-7">
                            <select class="form-control form-control-sm" required name="makanan_sayur">
                                <option value="<?= $data_anggota['makanan_sayur']?>"><?= master_jawaban($data_anggota['makanan_sayur'])?></option>
                                    <?php
                                        $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='103' ");
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
                        <div class="col-5">Makan Buah</div>
                        <div class="col-7">
                            <select class="form-control form-control-sm" required name="makanan_buah">
                                <option value="<?= $data_anggota['makanan_buah']?>"><?= master_jawaban($data_anggota['makanan_buah'])?></option>
                                    <?php
                                        $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='104' ");
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
                        <div class="col-5">Lauk Tersering</div>
                        <div class="col-7">
                            <select class="form-control form-control-sm" required name="makanan_lauk">
                                <option value="<?= $data_anggota['makanan_lauk']?>"><?= master_jawaban($data_anggota['makanan_lauk'])?></option>
                                    <?php
                                        $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='105' ");
                                                    while($data_jawaban = mysqli_fetch_array($sql_jawaban)){
                                    ?>
                                        <option value="<?= $data_jawaban['id_master_jawaban']?>"><?= $data_jawaban['master_jawaban']?></option>
                                    <?php
                                        }
                                    ?>
                            </select>
                        </div>
                    </div>
                    <label>Pola Tidur</label>
                    <div class="row mb-1">
                        <div class="col-5">Durasi</div>
                        <div class="col-7">
                            <select class="form-control form-control-sm" required name="tidur_durasi">
                                <option value="<?= $data_anggota['tidur_durasi']?>"><?= master_jawaban($data_anggota['tidur_durasi'])?></option>
                                    <?php
                                        $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='106' ");
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
                        <div class="col-5">Kualitas</div>
                        <div class="col-7">
                            <select class="form-control form-control-sm" required name="tidur_kualitas">
                                <option value="<?= $data_anggota['tidur_kualitas']?>"><?= master_jawaban($data_anggota['tidur_kualitas'])?></option>
                                    <?php
                                        $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='107' ");
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
                        <div class="col-5">Gangguan</div>
                        <div class="col-7">
                            <select class="form-control form-control-sm" required name="tidur_gangguan">
                                <option value="<?= $data_anggota['tidur_gangguan']?>"><?= master_jawaban($data_anggota['tidur_gangguan'])?></option>
                                    <?php
                                        $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='108' ");
                                                    while($data_jawaban = mysqli_fetch_array($sql_jawaban)){
                                    ?>
                                        <option value="<?= $data_jawaban['id_master_jawaban']?>"><?= $data_jawaban['master_jawaban']?></option>
                                    <?php
                                        }
                                    ?>
                            </select>
                        </div>
                    </div>
                    <label>Kebiasaan Buruk</label>
                    <div class="row mb-1">
                        <div class="col-5">Kebiasaan Merokok</div>
                        <div class="col-7">
                            <select class="form-control form-control-sm" required name="rokok_kebiasaan">
                                <option value="<?= $data_anggota['rokok_kebiasaan']?>"><?= master_jawaban($data_anggota['rokok_kebiasaan'])?></option>
                                    <?php
                                        $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='98' ");
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
                        <div class="col-5">Jenis Rokok</div>
                        <div class="col-7">
                            <select class="form-control form-control-sm" required name="rokok_jenis">
                                <option value="<?= $data_anggota['rokok_jenis']?>"><?= master_jawaban($data_anggota['rokok_jenis'])?></option>
                                    <?php
                                        $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='99' ");
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
                        <div class="col-5">Minum Alkohol</div>
                        <div class="col-7">
                            <select class="form-control form-control-sm" required name="alkohol_kebiasaan">
                                <option value="<?= $data_anggota['alkohol_kebiasaan']?>"><?= master_jawaban($data_anggota['alkohol_kebiasaan'])?></option>
                                    <?php
                                        $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='100' ");
                                                    while($data_jawaban = mysqli_fetch_array($sql_jawaban)){
                                    ?>
                                        <option value="<?= $data_jawaban['id_master_jawaban']?>"><?= $data_jawaban['master_jawaban']?></option>
                                    <?php
                                        }
                                    ?>
                            </select>
                        </div>
                    </div>
                    <label>Keluhan</label>
                    <div class="row">
                        <textarea class="form-control" rows="2" name="keluhan_kesehatan"><?= $data_anggota['keluhan_kesehatan'];?></textarea>
                    </div>
                    <label>Penyakit Yang Diderita</label>
                    <div class="row">
                        <?php
                        $no=1;
                        $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='95' ");
                        while($data_jawaban = mysqli_fetch_array($sql_jawaban)){
                        
                        ?>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="<?= $data_jawaban['id_master_jawaban'];?>" name="id_penyakit[]">
                                <label class="form-check-label"><?= $data_jawaban['master_jawaban'];?></label>
                        </div>
                        <?php
                        }
                        ?>
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
if(isset($_POST['update_kebiasaan_dewasa'])){
    $hari_ini               = date('Y-m-d H:i:s');
    $has_keluarga_anggota   = $_POST['update_kebiasaan_dewasa'];
    $olah_raga_frekwensi    = $_POST['olah_raga_frekwensi'];
    $olah_raga_durasi       = $_POST['olah_raga_durasi'];
    $makanan_frekwensi      = $_POST['makanan_frekwensi'];
    $makanan_porsi          = $_POST['makanan_porsi'];
    $makanan_sayur          = $_POST['makanan_sayur'];
    $makanan_buah           = $_POST['makanan_buah'];
    $makanan_lauk           = $_POST['makanan_lauk'];
    $tidur_durasi           = $_POST['tidur_durasi'];
    $tidur_kualitas         = $_POST['tidur_kualitas'];
    $tidur_gangguan         = $_POST['tidur_gangguan'];
    $rokok_kebiasaan        = $_POST['rokok_kebiasaan'];
    $rokok_jenis            = $_POST['rokok_jenis'];
    $alkohol_kebiasaan      = $_POST['alkohol_kebiasaan'];
    $keluhan_kesehatan      = $_POST['keluhan_kesehatan'];
    ///penyakit diderita
    $id_keluarga_anggota    = $data_anggota['id_keluarga_anggota'];
    $key_keluarga           = $data_anggota['key_keluarga'];
    $id_penyakit            = $_POST['id_penyakit'];
    $M                      = count($id_penyakit);
    for($a=0; $a < $M; $a++){
    $has_keluarga_penyakit[$a]= md5(uniqid());
    $cari_penyakit_ini[$a]  = mysqli_query($host,"SELECT * FROM keluarga_penyakit WHERE 
                            id_keluarga_anggota     = '$id_keluarga_anggota' AND 
                            id_penyakit             = '$id_penyakit[$a]'");
    $count_penyakit_ini[$a]     = mysqli_num_rows($cari_penyakit_ini[$a]);
    if($count_penyakit_ini[$a] <1){
    $coba_ini[$a]               = "INSERT INTO keluarga_penyakit SET 
                            key_keluarga            = '$key_keluarga',
                            id_keluarga_anggota     = '$id_keluarga_anggota',
                            id_penyakit             = '$id_penyakit[$a]',
                            created_at              = '$hari_ini',
                            created_by              = '$user_check',
                            has_keluarga_penyakit   = '$has_keluarga_penyakit[$a]'";
            $cek        = mysqli_query($host, $coba_ini[$a]);
    }
    }

    $update_kebiasaan       = mysqli_query($host,"UPDATE keluarga_anggota SET 
                                olah_raga_frekwensi         = '$olah_raga_frekwensi',
                                olah_raga_durasi            = '$olah_raga_durasi',
                                makan_frekwensi             = '$makanan_frekwensi',
                                makan_porsi                 = '$makanan_porsi',
                                makanan_sayur               = '$makanan_sayur',
                                makanan_buah                = '$makanan_buah',
                                makanan_lauk                = '$makanan_lauk',
                                tidur_durasi                = '$tidur_durasi',
                                tidur_kualitas              = '$tidur_kualitas',
                                tidur_gangguan              = '$tidur_gangguan',
                                rokok_kebiasaan             = '$rokok_kebiasaan',
                                rokok_jenis                 = '$rokok_jenis',
                                keluhan_kesehatan           = '$keluhan_kesehatan',
                                alkohol_kebiasaan           = '$alkohol_kebiasaan' WHERE 
                                has_keluarga_anggota        = '$has_keluarga_anggota'");

    if($update_kebiasaan){
        $_SESSION['status']="Data sukses disimpan";
        $_SESSION['status_info']="success";
        echo "<script>document.location=\"$site_url/pengkajian/individu.php?key=$has_keluarga_anggota\"</script>";

    }else{
        $_SESSION['status']="Data gagal disimpan";
        $_SESSION['status_info']="danger";
        echo "<script>document.location=\"$site_url/pengkajian/individu.php?key=$has_keluarga_anggota\"</script>";

    }




}


?>