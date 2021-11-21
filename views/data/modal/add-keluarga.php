<div class="modal-body">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Nama Kepala</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" placeholder="Nama Kepala Keluarga" name="nama_keluarga">
                            <input type="hidden" class="form-control" name="add_keluarga" value="<?= uniqid(); ?>">
                        </div>
                        <label class="col-sm-3 col-form-label">Jenis Keluarga</label>
                        <div class="col-sm-3">
                            <select class="form-control" required name="jenis_keluarga">
                                <option value="">---Jenis Keluarga----</option>
                                <?php
                                $sql_jen_kel    = mysqli_query($host,"SELECT * from master_jenis_keluarga ");
                                while($data_jen_kel = mysqli_fetch_array($sql_jen_kel)){
                                ?>
                                <option value="<?= $data_jen_kel['id_master_jenis_keluarga'] ?>">
                                <?= $data_jen_kel['master_jenis_keluarga'] ?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Kondisi Ekonomi</label>
                        <div class="col-sm-3">
                            <input class="form-control" placeholder="Penghasilan" name="penghasilan" required>
                        </div>
                        <div class="col-sm-6">
                            <input class="form-control" placeholder="Pengeluaran" name="pengeluaran" required>
                        </div>
                        
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Sumber Air Minum</label>
                        <div class="col-sm-3">
                            <select class="form-control" required name="sumber_air_minum">
                                <option value="">---Sumber Air Minum----</option>
                                
                                <?php
                                $sql_jen_kel    = mysqli_query($host,"SELECT * from master_air_minum ");
                                while($data_jen_kel = mysqli_fetch_array($sql_jen_kel)){
                                ?>
                                <option value="<?= $data_jen_kel['id_master_air_minum'] ?>">
                                <?= $data_jen_kel['master_air_minum'] ?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Penyediaan air minum</label>
                        <div class="col-sm-3">
                            <select class="form-control" required name="penyediaan_air_minum">
                                <option value="">---Penyediaan Air Minum----</option>
                                <option value="1">Tidak Dimasak</option>
                                <option value="2">Dimasak</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Letak Sumber Air</label>
                        <div class="col-sm-9">
                            <select class="form-control" required name="sumber_air">
                                <option value="">---Letak Sumber Air----</option>
                                <option value="1">Di dalam rumah</option>
                                <option value="2">Di luar rumah</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Jenis Jamban</label>
                        <div class="col-sm-3">
                            <select class="form-control" required name="jenis_jamban">
                                <option value="">---Jenis Jamban----</option>
                                <?php
                                $sql_jamban    = mysqli_query($host,"SELECT * from master_jenis_jamban ");
                                while($data_jamban = mysqli_fetch_array($sql_jamban)){
                                ?>
                                <option value="<?= $data_jamban['id_master_jenis_jamban'] ?>">
                                <?= $data_jamban['master_jenis_jamban'] ?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                        <label class="col-sm-3 col-form-label">Kepemilikan Jamban</label>
                        <div class="col-sm-3">
                            <select class="form-control" required name="kepemilikan_jamban">
                                <option value="">---Kepemilikan jamban----</option>
                                <option value="1">Milik Sendiri</option>
                                <option value="2">Milik Umum</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Fasilitas</label>
                        <div class="col-sm-9">
                            <?php
                                $sql_fas    = mysqli_query($host,"SELECT * from master_fasilitas ");
                                while($data_fas= mysqli_fetch_array($sql_fas)){
                            ?>
                                <input type="checkbox" name="fasilitas[]" value="<?= $data_fas['id_master_fasilitas']?>"> <?= $data_fas['master_fasilitas']?> <span> </span>
                            <?php
                                }
                            ?>
                            
                        </div>
                        
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Kendaraan</label>
                        <div class="col-sm-9">
                            
                            <?php
                                $sql_kendaraan    = mysqli_query($host,"SELECT * from master_kendaraan ");
                                while($data_kendaraan = mysqli_fetch_array($sql_kendaraan)){
                            ?>
                                <input type="checkbox" name="kendaraan[]" value="<?= $data_kendaraan['id_master_kendaraan'] ?>"> 
                                <?= $data_kendaraan['master_kendaraan'] ?>
                                
                            <?php
                                }
                            ?>
                        </div>
                        
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Bahan Bakar Utama</label>
                        <div class="col-sm-3">
                            <select class="form-control" required name="bahan_bakar">
                                <option value="">---Bahan Bakar----</option>
                                <?php
                                $sql_bahan_bakar    = mysqli_query($host,"SELECT * from master_bahan_bakar ");
                                while($data_bahan_bakar = mysqli_fetch_array($sql_bahan_bakar)){
                                ?>
                                
                                <option value="<?= $data_bahan_bakar['id_master_bahan_bakar'] ?>">
                                <?= $data_bahan_bakar['master_bahan_bakar'] ?></option>
                                    
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                        <label class="col-sm-3 col-form-label">Kepemilikan BPJS</label>
                        <div class="col-sm-3">
                            <select class="form-control" required name="bpjs">
                                <option value="">---BPJS----</option>
                                <?php
                                $sql_bpjs    = mysqli_query($host,"SELECT * from master_bpjs ");
                                while($data_bpjs = mysqli_fetch_array($sql_bpjs)){
                                ?>
                                
                                <option value="<?= $data_bpjs['id_master_bpjs'] ?>">
                                <?= $data_bpjs['master_bpjs'] ?></option>
                                    
                                <?php
                                    }
                                ?>
                                
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Luas Rumah (M2)</label>
                        <div class="col-sm-3">
                            <input type="number" class="form-control" placeholder="Luas rumah (m2)" name="luas_rumah">
                        </div>
                        <label class="col-sm-3 col-form-label">Jumlah Keluarga</label>
                        <div class="col-sm-3">
                            <input type="number" class="form-control" placeholder="Jumlah orang dalam keluarga" name="jml_anggota_keluarga">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Atap Rumah</label>
                        <div class="col-sm-3">
                            <select class="form-control" required name="atap_rumah">
                                <option value="">---Jenis Atap Rumah----</option>
                                <?php
                                $sql_atap    = mysqli_query($host,"SELECT * from master_atap ");
                                while($data_atap = mysqli_fetch_array($sql_atap)){
                                ?>
                                
                                <option value="<?= $data_atap['id_master_atap'] ?>">
                                <?= $data_atap['master_atap'] ?></option>
                                    
                                <?php
                                    }
                                ?>
                                
                            </select>
                        </div>
                        <label class="col-sm-3 col-form-label">Dinding Bangunan</label>
                        <div class="col-sm-3">
                            <select class="form-control" required name="dinding_rumah">
                                <option value="">---Jenis Dinding----</option>
                                <?php
                                $sql_dinding    = mysqli_query($host,"SELECT * from master_dinding ");
                                while($data_dinding = mysqli_fetch_array($sql_dinding)){
                                ?>
                                
                                <option value="<?= $data_dinding['id_master_dinding'] ?>">
                                <?= $data_dinding['master_dinding'] ?></option>
                                    
                                <?php
                                    }
                                ?>
                                
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Luas Pertanian</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" placeholder="luas lahan pertanian" name="lahan_pertanian">
                        </div>
                        <label class="col-sm-3 col-form-label">Lantai Rumah</label>
                        <div class="col-sm-3">
                            <select class="form-control" required name="lantai_rumah">
                                <option value="">---Lantai Rumah----</option>
                                <?php
                                $sql_lantai    = mysqli_query($host,"SELECT * from master_lantai ");
                                while($data_lantai = mysqli_fetch_array($sql_lantai)){
                                ?>
                                
                                <option value="<?= $data_lantai['id_master_lantai'] ?>">
                                <?= $data_lantai['master_lantai'] ?></option>
                                    
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Status Lahan Pertanian</label>
                        <div class="col-sm-3">
                            
                            <select class="form-control" required name="status_lahan_pertanian">
                                <option value="">---Status lahan pertanian----</option>
                                <option value="0">Tidak Punya</option>
                                <option value="1">Sewa</option>
                                <option value="2">Milik sendiri</option>
                                
                            </select>
                        </div>
                        <label class="col-sm-3 col-form-label">Hewan Peliharaan</label>
                        <div class="col-sm-3">
                            
                            <?php
                                $sql_ternak    = mysqli_query($host,"SELECT * from master_ternak ");
                                while($data_ternak = mysqli_fetch_array($sql_ternak)){
                            ?>
                                <input type="checkbox" name="ternak[]" value="<?= $data_ternak['id_master_ternak'] ?>"> 
                                <?= $data_ternak['master_ternak'] ?>
                                
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                    
                </div>