<!-- Modal Dewasa TTV dan Lab -->
<div class="modal fade" id="dewasattv" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="" method="POST">
                <div class="modal-header">
                <h5 class="modal-title">TTV dan Laboratorium <?= $data_anggota['nama_anggota']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-3">Tinggi Badan</div>
                        <div class="col-9">
                            <div class="input-group mb-1">
                                <input type="text" class="form-control" name="tinggi_badan" value= "<?= $data_anggota['tinggi_badan']?>">
                                <span class="input-group-text">CM</span>
                                <span class="btn btn-outline-secondary">Berat Badan</span>
                                <input type="text" class="form-control" name="berat_badan" value= "<?= $data_anggota['berat_badan']?>">
                                <span class="input-group-text">Kg</span>
                            </div>
                            <input type="hidden" class="form-control form-control-sm" name="update_ttv" value="<?= $_GET['key']?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">Nadi </div>
                        <div class="col-9">
                            <div class="input-group mb-1">
                                <input type="text" class="form-control" name="nadi" value = "<?= $data_anggota['nadi']?>">
                                <span class="input-group-text">kali/menit</span>
                                <span class="btn btn-outline-secondary">Respirasi </span>
                                <input type="text" class="form-control" name="nafas" value= "<?= $data_anggota['nafas']?>">
                                <span class="input-group-text">kali/menit</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">Tekanan Darah</div>
                        <div class="col-9">
                            <div class="input-group mb-1">
                                <span class="btn btn-outline-secondary">Sistolik</span>
                                <input type="text" class="form-control" name="sistolik" value= "<?= $data_anggota['sistolik']?>">
                                <span class="btn btn-outline-secondary">Diastolik</span>
                                <input type="text" class="form-control" name="diastolik" value= "<?= $data_anggota['diastolik']?>">
                                <span class="input-group-text">mmHg</span>
                            </div>
                        </div>
                    </div>
                    
                    <label>Laboratorium</label>
                    <div class="row">
                        <div class="col-3">HB</div>
                        <div class="col-9">
                            <div class="input-group mb-1">
                                <input type="text" class="form-control" name="hb" value= "<?= $data_anggota['hb']?>">
                                <span class="input-group-text">mg/dL</span>
                                <span class="btn btn-outline-secondary">Gula Darah</span>
                                <input type="text" class="form-control" name="gula_darah" value= "<?= $data_anggota['gula_darah']?>">
                                <span class="input-group-text">mg/dL</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">Cholesterol</div>
                        <div class="col-9">
                            <div class="input-group mb-1">
                                <input type="text" class="form-control" name="cholesterol" value= "<?= $data_anggota['cholesterol']?>">
                                <span class="input-group-text">mg/dL</span>
                                <span class="btn btn-outline-secondary">Asam Urat</span>
                                <input type="text" class="form-control" name="asam_urat" value= "<?= $data_anggota['asam_urat']?>">
                                <span class="input-group-text">mg/dL</span>
                            </div>
                        </div>
                    </div>
                    
                    <label>Riwayat Penyakit</label>
                    <div class="row">
                        <?php
                        $no=1;
                        $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='95' ");
                        while($data_jawaban = mysqli_fetch_array($sql_jawaban)){
                        
                        ?>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="<?= $data_jawaban['id_master_jawaban'];?>" name="riwayat_penyakit[]">
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
if(isset($_POST['update_ttv'])){
$hari_ini           = date('Y-m-d H:i:s');
$has_anggota        = $_POST['update_ttv'];
$tinggi_badan       = $_POST['tinggi_badan'];
$berat_badan        = $_POST['berat_badan'];
$nadi               = $_POST['nadi'];
$nafas              = $_POST['nafas'];
$sistolik           = $_POST['sistolik'];
$diastolik          = $_POST['diastolik'];
$hb                 = $_POST['hb'];
$gula_darah         = $_POST['gula_darah'];
$cholesterol        = $_POST['cholesterol'];
$asam_urat          = $_POST['asam_urat'];

$cari_anggota       = mysqli_query($host,"SELECT * FROM keluarga_anggota WHERE has_keluarga_anggota= '$has_anggota'");
$data_keluarga      = mysqli_fetch_array($cari_anggota);
$key_keluarga       = $data_keluarga['key_keluarga'];
$id_keluarga_anggota= $data_keluarga['id_keluarga_anggota'];
$riwayat_penyakit   = $_POST['riwayat_penyakit'];
$N                  = count($riwayat_penyakit);
    for($i=0; $i < $N; $i++){
$has_riwayat[$i]    = md5(uniqid());

$cari_penyakit[$i]  = mysqli_query($host,"SELECT * FROM riwayat_penyakit WHERE 
                        id_keluarga_anggota     = '$id_keluarga_anggota' AND 
                        id_penyakit             = '$riwayat_penyakit[$i]'");
$count_penyakit[$i] = mysqli_num_rows($cari_penyakit[$i]);
if($count_penyakit[$i] <1){
    $coba[$i]           = "INSERT INTO riwayat_penyakit SET 
                            key_keluarga            = '$key_keluarga',
                            id_keluarga_anggota     = '$id_keluarga_anggota',
                            id_penyakit             = '$riwayat_penyakit[$i]',
                            created_at              = '$hari_ini',
                            created_by              = '$user_check',
                            has_riwayat_penyakit    = '$has_riwayat[$i]'";
            $cek        = mysqli_query($host, $coba[$i]);
    }

}
$update_ttv         = mysqli_query($host,"UPDATE keluarga_anggota SET
                    tinggi_badan        = '$tinggi_badan',
                    berat_badan         = '$berat_badan',
                    nadi                = '$nadi',
                    nafas               = '$nafas',
                    sistolik            = '$sistolik',
                    diastolik           = '$diastolik',
                    hb                  = '$hb',
                    gula_darah          = '$gula_darah',
                    cholesterol         = '$cholesterol',
                    updated_at          = '$hari_ini',
                    asam_urat           = '$asam_urat' WHERE 
                    has_keluarga_anggota= '$has_anggota'");
if($update_ttv){
        $_SESSION['status']="Data sukses disimpan";
        $_SESSION['status_info']="success";
        echo "<script>document.location=\"$site_url/pengkajian/individu.php?key=$has_anggota\"</script>";
        
    }else{
        $_SESSION['status']="Data gagal disimpan";
        $_SESSION['status_info']="danger";
        echo "<script>document.location=\"$site_url/pengkajian/individu.php?key=$has_anggota\"</script>";
    }
}
?>