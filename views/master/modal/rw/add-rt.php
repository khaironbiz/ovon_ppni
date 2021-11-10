<!-- Button trigger modal -->
<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal<?= $data['has_rw']; ?>">
    Add RT
</button>
<!-- Modal -->
<form action="" method="POST">
    <div class="modal fade" id="exampleModal<?= $data['has_rw']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Kelurahan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?= $data_desa['lokasi_nama']; ?>" readonly>
                            <input type="hidden" class="form-control" name="add_rt" value="<?= uniqid(); ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Rukun Warga</label>
                        <div class="col-sm-9">
                            <select name="id_rw" class="form-control"/ required>
					            <option value="<?= $data['id_rw']; ?>"><?= $data['nama_rw']; ?></option>
				            <select>
                            
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">RT</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputPassword3" name="nama_rt">
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