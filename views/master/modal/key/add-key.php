<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Tambah Data
</button>
<!-- Modal -->
<form action="" method="POST">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Key</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Akses Kepada</label>
                        <div class="col-sm-9">
                            <select name="wilayah_akses" class="form-control"/ required>
					            <option value="">---pilih level---</option>
					            <?php 
                                $myuser_akses   = $data_pengguna['wilayah_akses'];
					            $sql_akses       = mysqli_query($host, "SELECT * FROM user_level WHERE wilayah_akses < '$myuser_akses'");
					                while ($data=mysqli_fetch_array($sql_akses)){
						                echo '<option value="'.$data['wilayah_akses'].'">'.$data['user_level'].'</option>';
					                }
					            ?>
				            <select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Expred Key</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" name="valid_until">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Provinsi</label>
                        <div class="col-sm-9">
				            <script src="<?= $site_url?>/assets/js/ajax_kota.js"></script>
				            <select name="prop" id="prop" onchange="ajaxkota(this.value)" class="form-control"/ required>
					            <option value="<? echo $data['prop']; ?>"><? echo $kodeprovinsi; ?></option>
					            <?php 
					            $sql_prov       = mysqli_query($host, "SELECT * FROM id_desa WHERE 
                                                    lokasi_kabupatenkota    = 0 and 
                                                    lokasi_kecamatan        = 0 and 
                                                    lokasi_kelurahan        = 0 order by lokasi_nama");
					                while ($dataProvinsi=mysqli_fetch_array($sql_prov)){
						                echo '<option value="'.$dataProvinsi['lokasi_propinsi'].'">'.$dataProvinsi['lokasi_nama'].'</option>';
					                }
					            ?>
				            <select>
                            <input type="hidden" class="form-control" name="add_key" value="<?= uniqid(); ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Kota</label>
                        <div class="col-sm-9">
				            <select name="kota" id="kota" onchange="ajaxkec(this.value)" class="form-control"/ required>
                                <option value="<? echo $data['kota']; ?>"><? echo $kodekota11; ?></option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Kecamatan</label>
                        <div class="col-sm-9">
				            <select name="kec" id="kec" onchange="ajaxkel(this.value)" class="form-control"/ required>
                                <option value="<? echo $data['kec']; ?>"><? echo $kodekecamatan; ?></option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Kelurahan</label>
                        <div class="col-sm-9">
				            <select name="kel" id="kel" class="form-control"/ required  >
                                <option value="<? echo $data['kel']; ?>"><? echo $desa; ?></option>
                            </select>
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