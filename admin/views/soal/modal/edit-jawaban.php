<!-- Button trigger modal -->
<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal<?= $data_jawaban['has_master_jawaban']?>">
    Edit Data
</button>
<!-- Modal -->
<form action="" method="POST">
    <div class="modal fade" id="exampleModal<?= $data_jawaban['has_master_jawaban']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Jawaban <?= $soal['master_soal']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Jawaban</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="master_jawaban" value="<?= $data_jawaban['master_jawaban']?>">
                            <input type="hidden" class="form-control" name="edit_master_jawaban" value="<?= $data_jawaban['has_master_jawaban']?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Nomor Urut</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="nomor_urut" value="<?= $data_jawaban['nomor_urut']?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Blokir</label>
                        <div class="col-sm-9">
                            <input class="form-check-input" type="radio" name="blokir" value="1">
                            <label class="form-check-label">
                                Blokir
                            </label><br>
                            <input class="form-check-input" type="radio" name="blokir" value="0">
                            <label class="form-check-label">
                                Buka Blokir
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>