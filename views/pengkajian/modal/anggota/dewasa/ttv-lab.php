<!-- Modal Dewasa TTV dan Lab -->
<div class="modal fade" id="dewasattv" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="">
                <div class="modal-header">
                <h5 class="modal-title">TTV dan Laboratorium</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-5">Berat Badan</div>
                        <div class="col-7">: 76 Kg</div>
                    </div>
                    <div class="row">
                        <div class="col-5">Tinggi</div>
                        <div class="col-7">: 76 Kg</div>
                    </div>
                    <div class="row">
                        <div class="col-5">Tekanan Darah</div>
                        <div class="col-7">: 135/85 mmHg</div>
                    </div>
                    <div class="row">
                        <div class="col-5">Nadi</div>
                        <div class="col-7">: 86 x/menit</div>
                    </div>
                    <div class="row">
                        <div class="col-5">Respirasi</div>
                        <div class="col-7">: 18 x/menit</div>
                    </div>
                    <label>Laboratorium</label>
                    <div class="row">
                        <div class="col-5">HB</div>
                        <div class="col-7">: 12 mg/dL</div>
                    </div>
                    <div class="row">
                        <div class="col-5">Gula Darah</div>
                        <div class="col-7">: 125 mg/dL</div>
                    </div>
                    <div class="row">
                        <div class="col-5">Cholesterol</div>
                        <div class="col-7">: 150 mg/dL</div>
                    </div>
                    <div class="row">
                        <div class="col-5">Asam Urat</div>
                        <div class="col-7">:  mg/dL</div>
                    </div>
                    <label>Riwayat Penyakit</label>
                    <div class="row">
                        <?php
                        $no=1;
                        $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='95' ");
                                            while($data_jawaban = mysqli_fetch_array($sql_jawaban)){
                        ?>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="<?= $data_jawaban['id_master_jawaban'];?>">
                                <label class="form-check-label"><?= $data_jawaban['master_jawaban'];?></label>
                        </div>
                        <?php
                        }
                        ?>
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