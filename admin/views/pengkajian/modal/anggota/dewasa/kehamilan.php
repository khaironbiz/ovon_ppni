<!-- Modal Kesehatan Wanita -->
<div class="modal fade" id="kehamilan" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="">
                <div class="modal-header">
                <h5 class="modal-title">Kehamilan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row mb-1">
                        <div class="col-5">HPHT</div>
                        <div class="col-7">
                            <input type="date" name="hpht" class="form-control form-control-sm">
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-5">Kehamilan (GPA)</div>
                        <div class="col-7">
                            <div class="form-check form-check-inline col-sm-12">
                                <input type="number" class="form-control form-control-sm col-sm-4" placeholder="gravida">
                                <input type="number" class="form-control form-control-sm col-sm-4" placeholder="partus">
                                <input type="number" class="form-control form-control-sm col-sm-4" placeholder="abortus">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-5">Riwayat Partus</div>
                        <div class="col-7">
                            <select class="form-control form-control-sm" required name="riwayat_partus">
                                <option value="">--Riwayat Partus--</option>
                                <?php
                                    $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='88' ");
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
                        <div class="col-5">Konsultasi Kehamilan</div>
                        <div class="col-7">
                            <select class="form-control form-control-sm" required name="konsultasi_kehamilan">
                                <option value="">--Konsultasi kehamilan--</option>
                                <?php
                                    $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='87' ");
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