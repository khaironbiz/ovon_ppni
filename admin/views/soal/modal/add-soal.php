<!-- Button trigger modal -->
<button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#exampleModal">
    Tambah Data 
</button>
<!-- Modal -->
<form action="" method="POST">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Soal <?= $judul; ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Soal</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputPassword3" name="master_soal">
                            <input type="hidden" class="form-control" name="add_master_soal" value="<?= uniqid(); ?>">
                            <input type="hidden" class="form-control" name="key_back" value="<?= $_GET['id']?>">
                            
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Nomor Urut</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="inputPassword3" name="nomor_urut">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Jenis Jawaban</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="jenis_input_jawaban" required>
                                <option>Pilih</option>
                                <?php
                                    $sql_input_jawaban  = mysqli_query($host,"SELECT * FROM jenis_input_jawaban ORDER BY id_jenis_input_jawaban");
                                    while($data= mysqli_fetch_array($sql_input_jawaban)){
                                ?>
                                <option value="<?= $data['id_jenis_input_jawaban']?>"><?= $data['jenis_input_jawaban']?></option>
                                <?php
                                    }
                                    ?>
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