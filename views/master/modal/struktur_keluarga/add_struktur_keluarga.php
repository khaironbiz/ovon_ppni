<!-- Button trigger modal -->
<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal">
    Add Struktur Keluarga
</button>
<!-- Modal -->
<form action="" method="POST">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-4 col-form-label">Struktur Keluarga</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="struktur_keluarga">
                            <input type="hidden" class="form-control" name="add_struktur_keluarga" value="<?= uniqid(); ?>">
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