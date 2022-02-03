                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-6">Data Dasar</div>
                                    <div class="col-6 text-right">
                                        <?php
                                        require_once __DIR__ . "./../modal/keluarga/data-dasar.php";
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-sm-4">No KK</div>
                                            <div class="col-sm-8"> : <?= $data_keluarga['no_kk']?></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">Nama</div>
                                            <div class="col-sm-8"> : <?= $data_anggota['nama_anggota'];?></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">Jenis Kelamin</div>
                                            <div class="col-sm-8"> : <?= master_jawaban($data_anggota['jenis_kelamin'])?></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">NIK</div>
                                            <div class="col-sm-8"> : <?= $data_keluarga['id_kepala_keluarga']?></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">Status KTP</div>
                                            <div class="col-sm-8"> : <?= master_jawaban($data_anggota['status_ktp'])?></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">Tanggal Lahir</div>
                                            <div class="col-sm-8"> : <?= $data_anggota['tgl_lahir']?></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">Jenis Keluarga</div>
                                            <div class="col-sm-8"> : <?= master_jawaban($data_keluarga['jenis_keluarga'])?></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Status Ekonomi</label>
                                        <div class="row">
                                            <div class="col-sm-4">Penghasilan</div>
                                            <div class="col-sm-8"> : <?= number_format($data_keluarga['penghasilan'],2)?></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">Pengeluaran</div>
                                            <div class="col-sm-8"> : <?= number_format($data_keluarga['pengeluaran'],2)?></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">Balance </div>
                                            <?php
                                                $balance = $data_keluarga['penghasilan']-$data_keluarga['pengeluaran'];
                                                if($balance >0){
                                                    $status_ekonomi = "Surplus";
                                                }elseif($balance ==0){
                                                    $status_ekonomi = "Nett";
                                                }elseif($balance < 0){
                                                    $status_ekonomi = "Defisit";
                                                }
                                            ?>
                                            <div class="col-sm-8"> : <?= number_format($balance,2) ?> <b>(<?= $status_ekonomi?>)</b></div>
                                        </div>
                                        <label>Alamat</label>
                                        <div class="row">
                                            <div class="col-sm-4">Jalan</div>
                                            <div class="col-sm-8"> : <?= $data_keluarga['alamat']?></div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-6">Rumah</div>
                                    <div class="col-6 text-right">
                                        <?php
                                        require_once __DIR__ . "./../modal/keluarga/rumah.php";
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-sm-4">Luas Rumah (m2)</div>
                                            <div class="col-sm-8">: <?= $data_keluarga['luas_rumah']?> M2</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">Jenis Lantai</div>
                                            <div class="col-sm-8">: <?= master_jawaban($data_keluarga['lantai_rumah'])?></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">Jenis Dinding</div>
                                            <div class="col-sm-8">: <?= master_jawaban($data_keluarga['dinding_rumah'])?></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">Luas Ventilasi</div>
                                            <div class="col-sm-8">: <?= $data_keluarga['luas_ventilasi']?> M2</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">Arah Ventilasi</div>
                                            <div class="col-sm-8">: <?= master_jawaban($data_keluarga['arah_ventilasi'])?></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">Air Minum</div>
                                            <div class="col-sm-8">: <?= master_jawaban($data_keluarga['air_minum'])?></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">Air Bersih</div>
                                            <div class="col-sm-8">: <?= master_jawaban($data_keluarga['air_bersih'])?></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        
                                        <div class="row">
                                            <div class="col-sm-4">Pengelolaan Sampah</div>
                                            <div class="col-sm-8">: <?= master_jawaban($data_keluarga['pengelolaan_sampah'])?></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">Pembuangan Air Limbah</div>
                                            <div class="col-sm-8">: <?= master_jawaban($data_keluarga['limbah_air'])?></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">Kepemilikan Jamban</div>
                                            <div class="col-sm-8">: <?= master_jawaban($data_keluarga['kepemilikan_jamban'])?></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">Jenis Jamban</div>
                                            <div class="col-sm-8">: <?= master_jawaban($data_keluarga['jenis_jamban'])?></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">Lokasi Jamban</div>
                                            <div class="col-sm-8">: <?= master_jawaban($data_keluarga['lokasi_jamban'])?></div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-sm-4">Sampah Organik</div>
                                            <div class="col-sm-8">: <?= $data_keluarga['sampah_basah']?> kg/hari</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">Sampah Plastik</div>
                                            <div class="col-sm-8">: <?= $data_keluarga['sampah_plastik']?> kg/hari</div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-6">
                                        <b>Keberadaan Binatang</b>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <?php
                                        require_once __DIR__ . "./../modal/keluarga/binatang.php";
                                        ?>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-3 col-6">
                                        <label>Hewan Vektor</label>
                                        <?php
                                        $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='123' ");
                                        while($data_jawaban = mysqli_fetch_array($sql_jawaban)){
                                            $id_binatang    = $data_jawaban['id_master_jawaban'];
                                            $sql_binatang   = mysqli_query($host,"SELECT * FROM keluarga_binatang WHERE id_binatang='$id_binatang'");
                                            $count_binatang = mysqli_num_rows($sql_binatang);
                                            if($count_binatang>0){

                                            
                                        ?>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" checked>  
                                            <label class="form-check-label" >
                                                <?= $data_jawaban['master_jawaban']?>
                                            </label>
                                            
                                        </div>
                                        <?php
                                        }else{
                                        ?>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox">  
                                            <label class="form-check-label" >
                                                <?= $data_jawaban['master_jawaban']?>
                                            </label>
                                            
                                        </div>
                                        <?php
                                        }
                                        }
                                        ?>
                                    </div>
                                    <div class="col-lg-3 col-6">
                                        <label>Hewan Berbahaya</label>
                                        <?php
                                        $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='124' ");
                                        while($data_jawaban = mysqli_fetch_array($sql_jawaban)){
                                            $id_binatang    = $data_jawaban['id_master_jawaban'];
                                            $sql_binatang   = mysqli_query($host,"SELECT * FROM keluarga_binatang WHERE id_binatang='$id_binatang'");
                                            $count_binatang = mysqli_num_rows($sql_binatang);
                                            if($count_binatang>0){

                                            
                                        ?>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" checked>  
                                            <label class="form-check-label" >
                                                <?= $data_jawaban['master_jawaban']?>
                                            </label>
                                            
                                        </div>
                                        <?php
                                        }else{
                                        ?>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox">  
                                            <label class="form-check-label" >
                                                <?= $data_jawaban['master_jawaban']?>
                                            </label>
                                            
                                        </div>
                                        <?php
                                        }
                                        }
                                        ?>
                                    </div>
                                    <div class="col-lg-3 col-6">
                                        <label>Hewan Peliharaan</label>
                                        <?php
                                        $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='125' ");
                                        while($data_jawaban = mysqli_fetch_array($sql_jawaban)){
                                            $id_binatang    = $data_jawaban['id_master_jawaban'];
                                            $sql_binatang   = mysqli_query($host,"SELECT * FROM keluarga_binatang WHERE id_binatang='$id_binatang'");
                                            $count_binatang = mysqli_num_rows($sql_binatang);
                                            if($count_binatang>0){

                                            
                                        ?>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" checked>  
                                            <label class="form-check-label" >
                                                <?= $data_jawaban['master_jawaban']?>
                                            </label>
                                            
                                        </div>
                                        <?php
                                        }else{
                                        ?>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox">  
                                            <label class="form-check-label" >
                                                <?= $data_jawaban['master_jawaban']?>
                                            </label>
                                            
                                        </div>
                                        <?php
                                        }
                                        }
                                        ?>
                                    </div>
                                    <div class="col-lg-3 col-6">
                                        <label>Hewan Ternak</label>
                                        <?php
                                        $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='126' ");
                                        while($data_jawaban = mysqli_fetch_array($sql_jawaban)){
                                            $id_binatang    = $data_jawaban['id_master_jawaban'];
                                            $sql_binatang   = mysqli_query($host,"SELECT * FROM keluarga_binatang WHERE id_binatang='$id_binatang'");
                                            $count_binatang = mysqli_num_rows($sql_binatang);
                                            if($count_binatang>0){

                                            
                                        ?>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" checked>  
                                            <label class="form-check-label" >
                                                <?= $data_jawaban['master_jawaban']?>
                                            </label>
                                            
                                        </div>
                                        <?php
                                        }else{
                                        ?>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox">  
                                            <label class="form-check-label" >
                                                <?= $data_jawaban['master_jawaban']?>
                                            </label>
                                            
                                        </div>
                                        <?php
                                        }
                                        }
                                        ?>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        