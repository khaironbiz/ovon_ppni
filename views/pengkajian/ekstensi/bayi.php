<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-black">
                <div class="row">
                    <div class="col-6"><label>Bayi</label></div>
                    <div class="col-6 text-right">
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#datadasar">
                            Update
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-black">
                <div class="row">
                    <div class="col-6"><label>Pola Kebiasaan</label></div>
                    <div class="col-6 text-right">
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#polakebiasaan">
                            Update
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<a href="<?= $site_url?>/data/keluarga.php?id=<?= $data_anggota['key_keluarga']?>" class="btn btn-danger btn-sm">Keluarga</a>