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
                            <input class="form-check-input" type="checkbox" value="<?= $data_jawaban['id_master_jawaban']?>" name="binatang_peliharaan">  
                            <label class="form-check-label" >
                                <?= $data_jawaban['master_jawaban']?>
                            </label>
                            
                        </div>
                        <?php
                        }
                        ?>
                </div>
                <div class="col-md-6">
                    <label>Binatang berbahaya</label>
                        <?php
                        $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='124' ");
                        while($data_jawaban = mysqli_fetch_array($sql_jawaban)){
                        ?>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="<?= $data_jawaban['id_master_jawaban']?>" name="binatang_peliharaan">  
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
                            <input class="form-check-input" type="checkbox" value="<?= $data_jawaban['id_master_jawaban']?>" name="binatang_peliharaan">  
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
if(isset($_POST['edit_keluarga_binatang'])){
    $hari_ini           = date('Y-m-d H:i:s');
    $provinsi           = $data_keluarga['provinsi'];
    $kabupaten          = $data_keluarga['kabupaten'];
    $kecamatan          = $data_keluarga['kecamatan'];
    $desa               = $data_keluarga['kelurahan'];
    $rt                 = $data_keluarga['rt'];
    $rw                 = $data_keluarga['rw'];
    $key_keluarga       = $_POST['edit_keluarga_binatang'];
    $key_kunjungan      = $_POST['key_kunjungan'];
    
    $update_keluarga    = mysqli_query($host,"UPDATE keluarga SET 
                        
                        updated_at              = '$hari_ini' WHERE 
                        key_keluarga            = '$key_keluarga'");
    $sql_pengkajian     = mysqli_query($host,"SELECT * FROM pengkajian_keluarga WHERE has_pengkajian_keluarga = '$key_kunjungan'");
    $count_pengkajian   = mysqli_num_rows($sql_pengkajian);
    if($count_pengkajian <1){
        $pengkajian     = mysqli_query($host,"INSERT INTO pengkajian_keluarga SET 
                        key_keluarga            = '$key_keluarga',
                        bahan_bakar             = '$bahan_bakar',
                        created_by              = '$user_check',
                        created_at              = '$hari_ini',
                        has_pengkajian_keluarga = '$key_kunjungan'");
    }else{
        $pengkajian     = mysqli_query($host,"UPDATE pengkajian_keluarga SET 
                        
                        updated_at              = '$hari_ini' WHERE
                        has_pengkajian_keluarga = '$key_kunjungan'");
    }
    if($update_keluarga && $pengkajian){
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