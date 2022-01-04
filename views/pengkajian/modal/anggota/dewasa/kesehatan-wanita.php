<!-- Modal Dewasa TTV dan Lab -->
<div class="modal fade" id="kesehatanwanita" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="">
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
                            <input type="number" name="usia_haid" class="form-control form-control-sm">
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-5">Keluhan Menstruasi</div>
                        <div class="col-7">
                            <select class="form-control form-control-sm" required name="keluhan_haid">
                                <option value="">---Keluhan menstruasi---</option>
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
                                <option value="">---Keluhan menstruasi---</option>
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
                            <input type="number" class="form-control form-control-sm" name="lama_haid" placeholder="durasi menstruasi">
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-5">Siklus Menstruasi</div>
                        <div class="col-7">
                            <input type="number" class="form-control form-control-sm" name="siklus_haid" placeholder="siklus menstruasi">
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-5">Pemeriksaan IVA</div>
                        <div class="col-7">
                            <div class="form-check form-check-inline col-sm-12">
                                <select class="form-control form-control-sm col-sm-6" required name="iva_test">
                                    <option value="">--IVA test--</option>
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
                                    <option value="">--Hasil IVA--</option>
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
                                   
                                    <option value="">--Kontrasepsi--</option>
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
                                   <option value="">--Alat Kontrasepsi--</option>
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
                                <option value="">--Status Kehamilan--</option>
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