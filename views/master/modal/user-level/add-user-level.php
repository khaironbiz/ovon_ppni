<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Tambah Data
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
                        <label for="inputPassword3" class="col-sm-3 col-form-label">User Level</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="user_level" required>
                            <input type="hidden" class="form-control" name="add_user_level" value="<?= uniqid(); ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Wilayah Akses</label>
                        <div class="col-sm-9">
                            <select name="wilayah_akses" class="form-control" required>
                                <option value="">---Pilih Wilayah---</option>
                                <option value="10">RT</option>
                                <option value="20">RW</option>
                                <option value="30">Desa</option>
                                <option value="40">Kecamatan</option>
                                <option value="50">Kabupaten</option>
                                <option value="60">Provinsi</option>
                                <option value="70">Indonesia</option>
                            <select>
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