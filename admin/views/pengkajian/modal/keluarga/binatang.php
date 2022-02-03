<!-- Button trigger modal -->
<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#binatang">
    Update
</button>

<!-- Modal -->
<div class="modal fade" id="binatang" tabindex="-1" aria-labelledby="binatangLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="rumah-keluargaLabel">Keberadaan Binatang dalam Keluarga</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="" method="post">
        <div class="modal-body text-left">
            <div class="row">
                <div class="col-md-6">
                    <label>Binatang Vektor</label>
                        <?php
                        $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='123' ");
                        while($data_jawaban = mysqli_fetch_array($sql_jawaban)){
                        ?>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="<?= $data_jawaban['id_master_jawaban']?>" name="binatang_vektor[]">  
                            <label class="form-check-label" >
                                <?= $data_jawaban['master_jawaban']?>
                            </label>
                            
                        </div>
                        <?php
                        }
                        ?>
                        <input type="hidden" class="" name="add_binatang" value="<?= $_GET['key']?>">
                        <input type="hidden" class="" name="key_kunjungan" value="<?= $_GET['kunjungan']?>">
                </div>
                <div class="col-md-6">
                    <label>Binatang berbahaya</label>
                        <?php
                        $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='124' ");
                        while($data_jawaban = mysqli_fetch_array($sql_jawaban)){
                        ?>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="<?= $data_jawaban['id_master_jawaban']?>" name="binatang_berbahaya[]">  
                            <label class="form-check-label" >
                                <?= $data_jawaban['master_jawaban']?>
                            </label>
                            
                        </div>
                        <?php
                        }
                        ?>
                </div>
                <div class="col-md-6">
                    <label>Binatang Peliharaan</label>
                        <?php
                        $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='125' ");
                        while($data_jawaban = mysqli_fetch_array($sql_jawaban)){
                        ?>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="<?= $data_jawaban['id_master_jawaban']?>" name="binatang_peliharaan[]">  
                            <label class="form-check-label" >
                                <?= $data_jawaban['master_jawaban']?>
                            </label>
                            
                        </div>
                        <?php
                        }
                        ?>
                </div>
                <div class="col-md-6">
                    <label>Binatang Ternak</label>
                        <?php
                        $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='126' ");
                        while($data_jawaban = mysqli_fetch_array($sql_jawaban)){
                        ?>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="<?= $data_jawaban['id_master_jawaban']?>" name="binatang_ternak[]">  
                            <label class="form-check-label" >
                                <?= $data_jawaban['master_jawaban']?>
                            </label>
                            
                        </div>
                        <?php
                        }
                        ?>
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
if(isset($_POST['add_binatang'])){
    $hari_ini           = date('Y-m-d H:i:s');
    $provinsi           = $data_keluarga['provinsi'];
    $kabupaten          = $data_keluarga['kabupaten'];
    $kecamatan          = $data_keluarga['kecamatan'];
    $desa               = $data_keluarga['kelurahan'];
    $rt                 = $data_keluarga['rt'];
    $rw                 = $data_keluarga['rw'];
    $key_keluarga       = $_POST['add_binatang'];
    $key_kunjungan      = $_POST['key_kunjungan'];
    //delete data lama
    $delete_binatang    = mysqli_query($host,"DELETE FROM keluarga_binatang WHERE key_keluarga='$key_keluarga'");
    $binatang_vektor    = $_POST['binatang_vektor'];
    $N                  = count($binatang_vektor);
    for($i=0; $i < $N; $i++){
        $sql_vektor[$i]             = mysqli_query($host, "SELECT *FROM keluarga_binatang where 
                                        id_binatang     = '$binatang_vektor[$i]' AND 
                                        key_keluarga    = '$key_keluarga'");
        $count_vektor[$i]           = mysqli_num_rows($sql_vektor[$i]);
        $has_keluarga_binatang[$i]  = md5(uniqid());
        if($count_vektor[$i] <1){
            $tamabah_vektor[$i]     = mysqli_query($host,"INSERT INTO keluarga_binatang SET
                                    key_keluarga    = '$key_keluarga',
                                    id_binatang     = '$binatang_vektor[$i]',
                                    jenis_binatang  = '123',
                                    created_at      = '$hari_ini',
                                    created_by      = '$user_check',
                                    has_keluarga_binatang   = '$has_keluarga_binatang[$i]'
                                    ");
            
        }
    }
    //
    $binatang_berbahaya     = $_POST['binatang_berbahaya'];
    $X                      = count($binatang_berbahaya);
    for($a=0; $a < $X; $a++){
        $sql_binatang[$a]   = mysqli_query($host, "SELECT *FROM keluarga_binatang where 
                                id_binatang     = '$binatang_berbahaya[$a]' AND 
                                key_keluarga    = '$key_keluarga'");
        $count_binatang[$a] = mysqli_num_rows($sql_binatang[$a]);
        $has_keluarga_binatang[$a]  = md5(uniqid());
        if($count_binatang[$a]<1){
        $add_binatang_bahaya[$a]= mysqli_query($host,"INSERT INTO keluarga_binatang SET
                                key_keluarga    = '$key_keluarga',
                                id_binatang     = '$binatang_berbahaya[$a]',
                                jenis_binatang  = '124',
                                created_at      = '$hari_ini',
                                created_by      = '$user_check',
                                has_keluarga_binatang   = '$has_keluarga_binatang[$a]'
                                ");
        }
    }
    $binatang_peliharaan    = $_POST['binatang_peliharaan'];
    $Y                      = count($binatang_peliharaan);
    for($b=0; $b < $Y; $b++){
        $sql_binatang[$b]   = mysqli_query($host, "SELECT *FROM keluarga_binatang where 
                                id_binatang     = '$binatang_peliharaan[$b]' AND 
                                key_keluarga    = '$key_keluarga'");
        $count_binatang[$b] = mysqli_num_rows($sql_binatang[$b]);
        $has_keluarga_binatang[$b]  = md5(uniqid());
        if($count_binatang[$b]<1){
        $add_binatang_pelihara[$b]  = mysqli_query($host,"INSERT INTO keluarga_binatang SET
                                key_keluarga    = '$key_keluarga',
                                id_binatang     = '$binatang_peliharaan[$b]',
                                jenis_binatang  = '125',
                                created_at      = '$hari_ini',
                                created_by      = '$user_check',
                                has_keluarga_binatang   = '$has_keluarga_binatang[$b]'
                                ");
        }
    }
    $binatang_ternak                = $_POST['binatang_ternak'];
    $Z                              = count($binatang_ternak);
    for($c=0; $c < $Z; $c++){
        $sql_binatang[$c]           = mysqli_query($host, "SELECT *FROM keluarga_binatang where 
                                    id_binatang     = '$binatang_ternak[$c]' AND 
                                    key_keluarga    = '$key_keluarga'");
        $count_binatang[$c]         = mysqli_num_rows($sql_binatang[$c]);
        $has_keluarga_binatang[$c]  = md5(uniqid());
        if($count_binatang[$c]<1){
        $add_binatang_ternak[$c]    = mysqli_query($host,"INSERT INTO keluarga_binatang SET
                                    key_keluarga    = '$key_keluarga',
                                    id_binatang     = '$binatang_ternak[$c]',
                                    jenis_binatang  = '126',
                                    created_at      = '$hari_ini',
                                    created_by      = '$user_check',
                                    has_keluarga_binatang   = '$has_keluarga_binatang[$c]'
                                    ");
        }
    }
    $update_keluarga        = mysqli_query($host,"UPDATE keluarga SET 
                                binatang_vektor     = '$N',
                                binatang_buas       = '$X',
                                binatang_peliharaan = '$Y',
                                binatang_ternak     = '$Z' WHERE
                                key_keluarga        = '$key_keluarga'");

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