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
                    <div class="col-7">: <?= $data_anggota['tgl_lahir']." ($umur->y tahun $umur->m bulan $umur->d hari)"?></div>
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