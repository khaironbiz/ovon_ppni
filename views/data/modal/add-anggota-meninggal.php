<!-- Button trigger modal -->
<button type="button" class="btn btn-danger btn-sm mt-2" data-toggle="modal" data-target="#exampleModal">
    Keluarga Meninggal 
</button>
<!-- Modal -->
<form action="" method="POST">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pengkajian Anggota Keluarga <?= $data_kel['nama_keluarga']; ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Status Keluarga</label>
                        <div class="col-sm-4">
                            <select class="form-control" required name="struktur_keluarga">
                                <option value="">---Jenis Keluarga----</option>
                                <?php
                                    $sql_struktur_keluarga = mysqli_query($host, "SELECT * FROM master_struktur_keluarga ");
                                    while($data_struktur_keluarga = mysqli_fetch_array($sql_struktur_keluarga)){
                                ?>
                                <option value="<?= $data_struktur_keluarga['id_struktur_keluarga']?>"><?= $data_struktur_keluarga['struktur_keluarga']?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <label class="col-sm-2 col-form-label">Tanggal Meninggal</label>
                        <div class="col-sm-4">
                            <input type="date" class="form-control" name="tgl_kematian">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Sebab Kematian</label>
                        <div class="col-sm-4">
                            <select class="form-control" required name="sebab_kematian">
                                <option value="">---sebab kematian----</option>
                                <?php
                                    $sql_sebab_kematian = mysqli_query($host, "SELECT * FROM master_sebab_kematian ");
                                    while($data_sebab_kematian = mysqli_fetch_array($sql_sebab_kematian)){
                                ?>
                                <option value="<?= $data_sebab_kematian['id_master_sebab_kematian']?>"><?= $data_sebab_kematian['master_sebab_kematian']?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Usia saat meninggal</label>
                        <div class="col-sm-4">
                            <input type="number" class="form-control" name="usia_meninggal">
                            <input type="hidden" class="form-control" name="add_keluarga_meninggal" value="<?= $_GET['id']?>">
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
