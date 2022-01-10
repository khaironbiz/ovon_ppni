<!-- Button trigger modal -->
<button type="button" class="btn btn-info btn-sm mb-1" data-toggle="modal" data-target="#exampleModal">
    Kunjungan Baru
</button>
<!-- Modal -->
<form action="" method="POST">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Kunjungan Keluarga</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-sm-5 col-form-label">Tanggal Kunjungan</label>
                        <div class="col-sm-7">
                            <input type="date" class="form-control" name="tgl_kunjungan" value="<?= date('Y-m-d')?>">
                            <input type="hidden" class="form-control" name="kunjungan_keluarga" value="<?= $_GET['key'];?>">
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