<!-- Button trigger modal -->
<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal">
    Update
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Data Dasar</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="" method="post">
        <div class="modal-body text-left">
            <div class="row">
                <div class="col-md-6">
                    <label>Data Kepala Keluarga</label>
                    <div class="row mb-1">
                        <div class="col-md-4">Nama</div>
                        <div class="col-md-8">
                            <input type="text" name= "nama_anggota" class="form-control form-control-sm" value="<?= $data_anggota['nama_anggota'];?>">
                        </div>
                    </div>
                    <div class="row  mb-1">
                    <div class="col-md-4">Jenis Kelamin</div>
                    <div class="col-md-8">
                            <?php
                                $jenis_kelamin     = master_jawaban($data_anggota['jenis_kelamin'])
                            ?>
                            <select class="form-control form-control-sm" required name="jenis_keluarga">
                                <option value="<?= $data_anggota['jenis_kelamin']?>"><?= $jenis_kelamin?></option>
                                <?php
                                $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='3' ");
                                while($data_jawaban = mysqli_fetch_array($sql_jawaban)){
                                ?>
                                <option value="<?= $data_jawaban['id_master_jawaban']?>"><?= $data_jawaban['master_jawaban']?></option>
                                <?php
                                }
                                ?>
                            </select>
                            
                        </div>
                    </div>
                    <div class="row  mb-1">
                    <div class="col-md-4">Tanggal Lahir</div>
                        <div class="col-md-8">
                            <input type="date" name= "tgl_lahir" class="form-control form-control-sm" value="<?= $data_anggota['tgl_lahir'];?>">
                        </div>
                    </div>
                    <div class="row  mb-1">
                    <div class="col-md-4">NIK</div>
                        <div class="col-md-8">
                            <input type="text" name= "nik" class="form-control form-control-sm" value="<?= $data_anggota['nik'];?>">
                        </div>
                    </div>
                    <div class="row  mb-1">
                    <div class="col-md-4">Status KTP</div>
                        <div class="col-md-8">
                            <?php
                                $status_ktp     = master_jawaban($data_anggota['status_ktp'])
                            ?>
                            <select class="form-control form-control-sm" required name="jenis_keluarga">
                                <option value="<?= $data_anggota['status_ktp']?>"><?= $status_ktp?></option>
                                <?php
                                $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='79' ");
                                while($data_jawaban = mysqli_fetch_array($sql_jawaban)){
                                ?>
                                <option value="<?= $data_jawaban['id_master_jawaban']?>"><?= $data_jawaban['master_jawaban']?></option>
                                <?php
                                }
                                ?>
                            </select>
                            
                        </div>
                    </div>
                    <div class="row  mb-1">
                    <div class="col-md-4">Nomor KK</div>
                        <div class="col-md-8">
                            <input type="text" name= "no_kk" class="form-control form-control-sm" value="<?= $data_keluarga['no_kk'];?>">
                        </div>
                    </div>
                    <div class="row  mb-1">
                    <div class="col-md-4">Jenis Keluarga</div>
                        <div class="col-md-8">
                            <select class="form-control form-control-sm" required name="jenis_keluarga">
                            <?php
                                $jenis_keluarga     = master_jawaban($data_anggota['id_jenis_keluarga'])
                            ?>
                                <option value=""><?= $data_keluarga['jenis_keluarga']?></option>
                                <?php
                                $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='18' ");
                                while($data_jawaban = mysqli_fetch_array($sql_jawaban)){
                                ?>
                                <option value="<?= $data_jawaban['id_master_jawaban']?>"><?= $data_jawaban['master_jawaban']?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label>Ekonomi Keluarga</label>
                    <div class="row  mb-1">
                    <div class="col-md-4">Penghasilan</div>
                        <div class="col-md-8">
                            <input type="text" name= "penghasilan" class="form-control form-control-sm" value="<?= $data_keluarga['penghasilan'];?>">
                        </div>
                    </div>
                    <div class="row  mb-1">
                    <div class="col-md-4">Pengeluaran</div>
                        <div class="col-md-8">
                            <input type="text" name= "nama_anggota" class="form-control form-control-sm" value="<?= $data_keluarga['pengeluaran'];?>">
                        </div>
                    </div>
                    <label>Alamat</label>
                    <div class="row  mb-1">
                    <div class="col-md-4">Jalan</div>
                        <div class="col-md-8">
                            <input type="text" name= "nama_anggota" class="form-control form-control-sm" value="<?= $data_keluarga['alamat'];?>">
                        </div>
                    </div>
                    <div class="row  mb-1">
                    <div class="col-md-4"></div>
                        <div class="col-md-8">
                            <?php
                                $nama_rw    = ($data_keluarga['rw']);
                                $desa    = ($data_keluarga['kelurahan']);
                            ?>
                            RT : RW : <?= $nama_rw; ?>, <?= $data_pengguna['nama_desa']?>,  <?= $data_pengguna['nama_kecamatan']?>, <?= $data_pengguna['nama_kabupaten']?>, <?= $data_pengguna['nama_provinsi']?>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        </form>
        </div>
    </div>
</div>
<?php
if(isset($_POST['edit_keluarga'])){
    $key_keluarga       = $_POST['edit_keluarga'];
    $key_kunjungan      = $_POST['key_kunjungan'];
    
}


?>