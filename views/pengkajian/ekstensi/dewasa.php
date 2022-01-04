<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-black">
                <div class="row">
                    <div class="col-6"><label>Data Dasar</label></div>
                    <div class="col-6 text-right">
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#datadasar">
                            Update
                        </button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-5">Nama</div>
                    <div class="col-7">: <?= $data_anggota['nama_anggota']?></div>
                </div>
                <div class="row">
                    <div class="col-5">Tgl Lahir</div>
                    <div class="col-7">: <?= $data_anggota['tgl_lahir']?></div>
                </div>
                <div class="row">
                    <div class="col-5">Jenis Kelamin</div>
                    <div class="col-7">: <?= master_jawaban($data_anggota['jenis_kelamin'])?></div>
                </div>
                <div class="row">
                    <div class="col-5">NIK</div>
                    <div class="col-7">: <?= $data_anggota['nik']?></div>
                </div>
                <div class="row">
                    <div class="col-5">Status KTP</div>
                    <div class="col-7">: <?= master_jawaban($data_anggota['status_ktp'])?></div>
                </div>
                <div class="row">
                    <div class="col-5">Struktur Keluarga</div>
                    <div class="col-7">: <?= master_jawaban($data_anggota['id_struktur_keluarga'])?></div>
                </div>
                <div class="row">
                    <div class="col-5">Status Pernikahan</div>
                    <div class="col-7">: <?= master_jawaban($data_anggota['status_pernikahan'])?></div>
                </div>
                <div class="row">
                    <div class="col-5">Pendidikan</div>
                    <div class="col-7">: <?= master_jawaban($data_anggota['pendidikan'])?></div>
                </div>
                <div class="row">
                    <div class="col-5">Pekerjaan</div>
                    <div class="col-7">: <?= master_jawaban($data_anggota['pekerjaan'])?></div>
                </div>
                <div class="row">
                    <div class="col-5">Golongan Darah</div>
                    <div class="col-7">: 
                        <?php
                            if(count_jawaban($data_anggota['golongan_darah'])>0){
                                echo master_jawaban($data_anggota['golongan_darah']);
                            }else{
                            }
                            ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-5">Vaksin Covid-19</div>
                    <div class="col-7">: 
                        <?php
                            if(count_jawaban($data_anggota['vaksin_covid19'])>0){
                                echo master_jawaban($data_anggota['vaksin_covid19']);
                            }else{
                            }
                            ?>
                    </div>
                </div>
            </div>
            
            <div class="card-header bg-black">
                <div class="row">
                    <div class="col-6"><label>TTV dan Laborat</label></div>
                    <div class="col-6 text-right">
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#dewasattv">
                            Update
                        </button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-5">Berat Badan</div>
                    <div class="col-7">: 76 Kg</div>
                </div>
                <div class="row">
                    <div class="col-5">Tinggi</div>
                    <div class="col-7">: 76 Kg</div>
                </div>
                <div class="row">
                    <div class="col-5">Tekanan Darah</div>
                    <div class="col-7">: 135/85 mmHg</div>
                </div>
                <div class="row">
                    <div class="col-5">Nadi</div>
                    <div class="col-7">: 86 x/menit</div>
                </div>
                <div class="row">
                    <div class="col-5">Respirasi</div>
                    <div class="col-7">: 18 x/menit</div>
                </div>
                <label>Laboratorium</label>
                <div class="row">
                    <div class="col-5">HB</div>
                    <div class="col-7">: 12 mg/dL</div>
                </div>
                <div class="row">
                    <div class="col-5">Gula Darah</div>
                    <div class="col-7">: 125 mg/dL</div>
                </div>
                <div class="row">
                    <div class="col-5">Cholesterol</div>
                    <div class="col-7">: 150 mg/dL</div>
                </div>
                <div class="row">
                    <div class="col-5">Asam Urat</div>
                    <div class="col-7">:  mg/dL</div>
                </div>
                <label>Riwayat Penyakit</label>
                <div class="row">
                    <?php
                    $no=1;
                    $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='95' ");
                                        while($data_jawaban = mysqli_fetch_array($sql_jawaban)){
                    ?>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" value="<?= $data_jawaban['id_master_jawaban'];?>">
                            <label class="form-check-label"><?= $data_jawaban['master_jawaban'];?></label>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
        </div>
    </div>
</div>

<?php
    
?>