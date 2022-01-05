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
                    <div class="col-5">IMT</div>
                    <div class="col-7">: </div>
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
            <div class="card-body">
                <label>Olah Raga</label>
                <div class="row mb-1">
                    <div class="col-5">Frekwensi</div>
                    <div class="col-7">: 
                            
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col-5">Durasi</div>
                    <div class="col-7">: 
                            
                    </div>
                </div>
                <label>Pola Makan</label>
                <div class="row mb-1">
                    <div class="col-5">Frekwensi</div>
                    <div class="col-7">: 
                            
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col-5">Porsi</div>
                    <div class="col-7">: 
                            
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col-5">Makan Sayuran</div>
                    <div class="col-7">: 
                            
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col-5">Makan Buah</div>
                    <div class="col-7">: 
                            
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col-5">Lauk Tersering</div>
                    <div class="col-7">: 
                            
                    </div>
                </div>
                <label>Pola Tidur</label>
                <div class="row mb-1">
                    <div class="col-5">Frekwensi</div>
                    <div class="col-7">: 
                            
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col-5">Durasi</div>
                    <div class="col-7">: 
                            
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col-5">Kualitas Tidur</div>
                    <div class="col-7">: 
                            
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col-5">Gangguan Tidur</div>
                    <div class="col-7">: 
                            
                    </div>
                </div>
                <label>Kebiasaan Buruk</label>
                <div class="row mb-1">
                    <div class="col-5">Kebiasaan Merokok</div>
                    <div class="col-7">: 
                            
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col-5">Jenis Rokok</div>
                    <div class="col-7">: 
                            
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col-5">Minuman Alkohol</div>
                    <div class="col-7">: 
                            
                    </div>
                </div>
                <label>Penyakit Diderita</label>
                <div class="row mb-1">
                    <?php
                    $no=1;
                    $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='95' ");
                                    while($data_jawaban = mysqli_fetch_array($sql_jawaban)){
                    ?>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="<?= $data_jawaban['id_master_jawaban'];?>" readonly>
                        <label class="form-check-label"><?= $data_jawaban['master_jawaban'];?></label>
                    </div>
                    <?php
                    }
                    ?>
                </div>
                <label>Keluhan Saat Ini</label>
                <div class="row">
                    <textarea class="form-control" rows="2"></textarea>
                </div>
            </div>
        </div>
    </div>
    <?php
        if($sex > 43){
            //include('modal/anggota/usia16-59th.php');
    ?>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-black">
                <div class="row">
                    <div class="col-6"><label>Kesehatan Wanita</label></div>
                    <div class="col-6 text-right">
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#kesehatanwanita">
                            Update
                        </button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row mb-1">
                    <div class="col-5">Usia awal menstruasi</div>
                    <div class="col-7">: 
                            
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col-5">Keluhan Menstruasi</div>
                    <div class="col-7">: 
                            
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col-5">Status Menstruasi</div>
                    <div class="col-7">: 
                            
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col-5">Lama Hari Menstruasi</div>
                    <div class="col-7">: 
                            
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col-5">Siklus Menstruasi</div>
                    <div class="col-7">: 
                            
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col-5">Pemeriksaan IVA</div>
                    <div class="col-7">: 
                            
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col-5">Kontrasepsi</div>
                    <div class="col-7">: 
                            
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col-5">Status Kehamilan</div>
                    <div class="col-7">: 
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-black">
                <div class="row">
                    <div class="col-6"><label>Kehamilan</label></div>
                    <div class="col-6 text-right">
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#kehamilan">
                            Update
                        </button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row mb-1">
                    <div class="col-5">HPHT</div>
                    <div class="col-7">: 
                            
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col-5">Usia Kehamilan</div>
                    <div class="col-7">: 
                            
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col-5">Taksiran Partus</div>
                    <div class="col-7">: 
                            
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col-5">Gravida</div>
                    <div class="col-7">: 
                            
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col-5">Partus</div>
                    <div class="col-7">: 
                            
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col-5">Abortus</div>
                    <div class="col-7">: 
                            
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col-5">Riwayat Partus</div>
                    <div class="col-7">: 
                            
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col-5">Konsultasi Kehamilan</div>
                    <div class="col-7">: 
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
    
</div>

<?php
    
?>