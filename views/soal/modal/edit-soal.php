<!-- Button trigger modal -->
<button type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#editsoal">
    Edit Pertanyaan
</button>
<!-- Modal -->
<form action="" method="POST">
    <div class="modal fade" id="editsoal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <label class="col-sm-3 col-form-label">Pertanyaan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="master_soal" value="<?=  $soal['master_soal']?>">
                            <input type="text" class="form-control" name="edit_master_soal" value="<?= $_GET['key']?>">
                            
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Nomor Urut</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="nomor_urut" value="<?= $soal['nomor_urut']?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Jenis Jawaban</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="jenis_input_jawaban" required>
                                <?php
                                    $soal_jenis_input_jawaban = $soal['jenis_input_jawaban'];
                                    $sql_input_jawaban  = mysqli_query($host,"SELECT * FROM jenis_input_jawaban ORDER BY id_jenis_input_jawaban");
                                    while($data= mysqli_fetch_array($sql_input_jawaban)){
                                        
                                        $id_ini = $data['id_jenis_input_jawaban'];
                                ?>
                                <option value="<?= $id_jenis_input_jawaban; ?>" 
                                <?php if($id_ini !=$soal_jenis_input_jawaban){
                                }else{echo "selected";} ?>>
                                    <?= $data['jenis_input_jawaban']?>
                                </option>
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

