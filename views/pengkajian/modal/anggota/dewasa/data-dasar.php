<!-- Modal Dewasa TTV dan Lab -->
<div class="modal fade" id="datadasar" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="">
                <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row mb-1">
                        <div class="col-5">Nama</div>
                        <div class="col-7">: <?= $data_anggota['nama_anggota']?></div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-5">Tgl Lahir</div>
                        <div class="col-7">: <?= $data_anggota['tgl_lahir']?></div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-5">Jenis Kelamin</div>
                        <div class="col-7">: <?= master_jawaban($data_anggota['jenis_kelamin'])?></div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-5">NIK</div>
                        <div class="col-7">: <?= $data_anggota['nik']?></div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-5">Status KTP</div>
                        <div class="col-7">: <?= master_jawaban($data_anggota['status_ktp'])?></div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-5">Struktur Keluarga</div>
                        <div class="col-7">: <?= master_jawaban($data_anggota['id_struktur_keluarga'])?></div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-5">Status Pernikahan</div>
                        <div class="col-7">
                            <select class="form-control form-control-sm" required name="status_pernikahan">
                                <?php
                                    $status_pernikahan  = $data_anggota['status_pernikahan'];
                                ?>
                                <option value="<?= $status_pernikahan; ?>"><?= master_jawaban($status_pernikahan)?></option>
                                <?php
                                    $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='80' ");
                                                while($data_jawaban = mysqli_fetch_array($sql_jawaban)){
                                ?>
                                    <option value="<?= $data_jawaban['id_master_jawaban']?>"><?= $data_jawaban['master_jawaban']?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-5">Pendidikan</div>
                        <div class="col-7">
                            <select class="form-control form-control-sm" required name="pendidikan">
                                <?php
                                    $pendidikan  = $data_anggota['pendidikan'];
                                ?>
                                <option value="<?= $pendidikan; ?>"><?= master_jawaban($pendidikan)?></option>
                                <?php
                                    $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='58' ");
                                                while($data_jawaban = mysqli_fetch_array($sql_jawaban)){
                                ?>
                                    <option value="<?= $data_jawaban['id_master_jawaban']?>"><?= $data_jawaban['master_jawaban']?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-5">Pekerjaan</div>
                        <div class="col-7">
                            <select class="form-control form-control-sm" required name="pekerjaan">
                                <?php
                                    $pekerjaan  = $data_anggota['pekerjaan'];
                                ?>
                                <option value="<?= $pekerjaan; ?>"><?= master_jawaban($pekerjaan)?></option>
                                <?php
                                    $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='109' ");
                                                while($data_jawaban = mysqli_fetch_array($sql_jawaban)){
                                ?>
                                    <option value="<?= $data_jawaban['id_master_jawaban']?>"><?= $data_jawaban['master_jawaban']?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">Golongan Darah</div>
                        <div class="col-7">
                            <select class="form-control form-control-sm" required name="golongan_darah">
                                
                                <option value="<?= $data_anggota['golongan_darah'] ?>"><?= master_jawaban($data_anggota['golongan_darah'])?></option>
                                <?php
                                    $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='90' ");
                                                while($data_jawaban = mysqli_fetch_array($sql_jawaban)){
                                ?>
                                    <option value="<?= $data_jawaban['id_master_jawaban']?>"><?= $data_jawaban['master_jawaban']?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">Vaksin Covid-19</div>
                        <div class="col-7">: 
                            <?php
                                
                            ?>
                            <select class="form-control form-control-sm" required name="vaksin_covid19">
                                <?php
                                    $vaksin_covid19  = $data_anggota['vaksin_covid19'];
                                ?>
                                <option value="<?= $vaksin_covid19; ?>">
                                    <?php 
                                        if(count_jawaban($data_anggota['vaksin_covid19'])>0){
                                        echo master_jawaban($data_anggota['vaksin_covid19']);
                                        }else{ echo "---Pilih---";
                                        }
                                    ?>
                                </option>
                                <?php
                                    $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='116' ");
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>