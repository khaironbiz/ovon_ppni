<!-- Modal Kesehatan Wanita -->
<div class="modal fade" id="kesehatanwanita" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="" method="POST">
                <div class="modal-header">
                <h5 class="modal-title">Kesehatan Wanita</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row mb-1">
                        <div class="col-5">Usia awal menstruasi</div>
                        <div class="col-7">
                            <input type="number" name="usia_haid" class="form-control form-control-sm" value="<?= $data_anggota['usia_haid']?>">
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-5">Keluhan Menstruasi</div>
                        <div class="col-7">
                            <select class="form-control form-control-sm" required name="keluhan_haid">
                                <option value="<?= $data_anggota['keluhan_haid']?>"><?= master_jawaban($data_anggota['keluhan_haid'])?></option>
                                <?php
                                    $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='82' ");
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
                        <div class="col-5">Status Menstruasi</div>
                        <div class="col-7">
                            <select class="form-control form-control-sm" required name="status_haid">
                                <option value="<?= $data_anggota['status_haid']?>"><?= master_jawaban($data_anggota['status_haid'])?></option>
                                <?php
                                    $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='84' ");
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
                        <div class="col-5">Lama Hari Menstruasi</div>
                        <div class="col-7">
                            <input type="number" class="form-control form-control-sm" name="lama_haid" value="<?= $data_anggota['durasi_haid']?>">
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-5">Siklus Menstruasi</div>
                        <div class="col-7">
                            <input type="number" class="form-control form-control-sm" name="siklus_haid" value="<?= $data_anggota['siklus_haid']?>">
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-5">Pemeriksaan IVA</div>
                        <div class="col-7">
                            <div class="form-check form-check-inline col-sm-12">
                                <select class="form-control form-control-sm col-sm-6" required name="iva_test">
                                    <option value="<?= $data_anggota['iva_test']?>"><?= master_jawaban($data_anggota['iva_test'])?></option>
                                    <?php
                                        $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='112' ");
                                                    while($data_jawaban = mysqli_fetch_array($sql_jawaban)){
                                    ?>
                                        <option value="<?= $data_jawaban['id_master_jawaban']?>"><?= $data_jawaban['master_jawaban']?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                                <select class="form-control form-control-sm col-sm-6" required name="iva_hasil">
                                    <option value="<?= $data_anggota['iva_hasil']?>"><?= master_jawaban($data_anggota['iva_hasil'])?></option>
                                    <?php
                                        $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='113' ");
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
                    <div class="row mb-1">
                        <div class="col-5">Kontrasepsi</div>
                        <div class="col-7">
                            <div class="form-check form-check-inline col-sm-12">
                                <select class="form-control form-control-sm col-sm-6" required name="vaksin_covid19">
                                   
                                    <option value="<?= $data_anggota['kontrasepsi'] ?>"><?= master_jawaban($data_anggota['kontrasepsi'])?></option>
                                    <?php
                                        $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='115' ");
                                                    while($data_jawaban = mysqli_fetch_array($sql_jawaban)){
                                    ?>
                                        <option value="<?= $data_jawaban['id_master_jawaban']?>"><?= $data_jawaban['master_jawaban']?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                                <select class="form-control form-control-sm col-sm-6" required name="vaksin_covid19">
                                   <option value="<?= $data_anggota['alat_kontrasepsi']?>"><?= master_jawaban($data_anggota['alat_kontrasepsi'])?></option>
                                    <?php
                                        $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='114' ");
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
                    <div class="row mb-1">
                        <div class="col-5">Status Kehamilan</div>
                        <div class="col-7">
                            <select class="form-control form-control-sm" required name="vaksin_covid19">
                                <option value="<?= $data_anggota['hamil']?>"><?= master_jawaban($data_anggota['hamil'])?></option>
                                <?php
                                    $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='85' ");
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
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
if(isset($_POST['update_kesehatan_wanita'])){
    $usia_haid      = $_POST['usia_haid'];
    $keluhan_haid   = $_POST['keluhan_haid'];
    $status_haid    = $_POST['status_haid'];
    $lama_haid      = $_POST['lama_haid'];
    $siklus_haid    = $_POST['siklus_haid'];
    $iva_test       = $_POST['iva_test'];
    $kontrasepsi    = $_POST['kontrasepsi'];
    $alatkontrasepsi= $_POST['alat_kontrasepsi'];
    $usia_haid      = $_POST['usia_haid'];
    $usia_haid      = $_POST['usia_haid'];
    $update_wanita  = mysqli_query($host,"UPDATE keluarga_anggota SET
                        usia_haid           = '$usia_haid',
                        keluhan_haid        = '$keluhan_haid',
                        status_haid         = '$status_haid',
                        lama_haid           = '$lama_haid',
                        siklus_haid         = '$siklus_haid',
                        iva_test            = '$iva_test',
                        iva_hasil           = '$iva_hasil',
                        kontrasepsi         = '$kontrasepsi',
                        alat_kontrasepsi    = '$alat_kontrasepsi',
                        ");
}

?>