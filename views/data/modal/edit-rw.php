<!-- Button trigger modal -->
<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#edit_rw">
    Edit RT/RW
</button>
<!-- Modal -->
<form action="" method="POST">
    <div class="modal fade" id="edit_rw" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update RT / RW</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Kelurahan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?= $data_desa['lokasi_nama']?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">RW</label>
                        <div class="col-sm-9">
				            <script src="<?= $site_url?>/assets/js/ajax_rw.js"></script>
				            <select name="prop" id="prop" onchange="ajaxkota(this.value)" class="form-control"/ required>
					            <option value="<? echo $data['prop']; ?>"><? echo $kodeprovinsi; ?></option>
					            <?php 
					            $sql_rw       = mysqli_query($host, "SELECT * FROM rw WHERE kel = '$mydesa' order by id_rw");
					                while ($data_rw=mysqli_fetch_array($sql_rw)){
						                echo '<option value="'.$data_rw['id_rw'].'">'.$data_rw['nama_rw'].'</option>';
					                }
					            ?>
				            <select>
                            <input type="hidden" class="form-control" name="edit_rw" value="<?= uniqid(); ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">RT</label>
                        <div class="col-sm-9">
				            <select name="kota" id="kota" onchange="ajaxkec(this.value)" class="form-control"/ required>
                                <option value="<? echo $data['kota']; ?>"><? echo $kodekota11; ?></option>
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