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
                        <label class="col-sm-3 col-form-label">Nama Anggota</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" placeholder="Nama Anggota Keluarga" name="nama_anggota" required>
                            <input type="hidden" class="form-control" value="<?= $key ?>" name="add_anggota" required>
                        </div>
                        <label class="col-sm-2 col-form-label">Status Keluarga</label>
                        <div class="col-sm-4">
                            <select class="form-control" required name="jenis_keluarga">
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
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-3">
                            <select class="form-control" required name="jenis_kelamin">
                                <option value="">---Jenis Kelamin----</option>
                                <?php
                                    $sql_sex = mysqli_query($host, "SELECT * FROM master_sex ");
                                    while($data_sex = mysqli_fetch_array($sql_sex)){
                                ?>
                                <option value="<?= $data_sex['id_master_sex']?>"><?= $data_sex['master_sex']?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-4">
                            <input type="date" class="form-control" name="tgl_lahir">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Golongan Darah</label>
                        <div class="col-sm-3">
                            <select class="form-control" required name="golongan_darah">
                                <option value="">---Golongan Darah----</option>
                                <?php
                                    $sql_sex = mysqli_query($host, "SELECT * FROM master_golongan_darah ");
                                    while($data_sex = mysqli_fetch_array($sql_sex)){
                                ?>
                                <option value="<?= $data_sex['id_golongan_darah']?>"><?= $data_sex['golongan_darah']?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <label class="col-sm-2 col-form-label">Status Vaksin Covid-19</label>
                        <div class="col-sm-4">
                            <select class="form-control" required name="vaksin_covid19">
                                <option value="">---Vaksin Covid-19---</option>
                                <?php
                                    $sql_imunisasi = mysqli_query($host, "SELECT * FROM master_imunisasi ");
                                    while($data_imunisasi = mysqli_fetch_array($sql_imunisasi)){
                                ?>
                                <option value="<?= $data_imunisasi['id_master_imunisasi']?>"><?= $data_imunisasi['master_imunisasi']?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Berat Badan</label>
                        <div class="col-sm-3">
                            <input type="number" class="form-control" name="berat_badan" placeholder="Berat Badan (kg)">
                        </div>
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Tinggi Badan</label>
                        <div class="col-sm-4">
                            <input type="number" class="form-control" name="tinggi_badan" placeholder="Tinggi Badan / Panjang Badan(cm)">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Status Pendidikan</label>
                        <div class="col-sm-3">
                            <select class="form-control" required name="status_pendidikan">
                                <option value="">---Pendidikan----</option>
                                <?php
                                    $sql_pendidikan = mysqli_query($host, "SELECT * FROM master_pendidikan WHERE blokir ='0'");
                                    while($data_pendidikan = mysqli_fetch_array($sql_pendidikan)){
                                ?>
                                <option value="<?= $data_pendidikan['id_master_pendidikan']?>"><?= $data_pendidikan['nama_pendidikan']?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <label class="col-sm-2 col-form-label">Status Pekerjaan</label>
                        <div class="col-sm-4">
                            <select class="form-control" required name="status_pekerjaan">
                                <option value="">---Status Pekerjaan----</option>
                                <<?php
                                    $sql_pekerjaan = mysqli_query($host, "SELECT * FROM master_pekerjaan WHERE blokir ='0'");
                                    while($data_pekerjaan = mysqli_fetch_array($sql_pekerjaan)){
                                ?>
                                <option value="<?= $data_pekerjaan['id_master_pekerjaan']?>"><?= $data_pekerjaan['master_pekerjaan']?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Frekwensi Nadi</label>
                        <div class="col-sm-3">
                            <input type="number" class="form-control" name="nadi" placeholder="Nadi x/menit">
                        </div>
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Tekanan Darah</label>
                        <div class="col-sm-2">
                            <input type="number" class="form-control" name="sistolik" placeholder="sistolik mmHg">
                        </div>
                        <div class="col-sm-2">
                            <input type="number" class="form-control" name="diastolik" placeholder="diastolik mmHg">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Kolesterol</label>
                        <div class="col-sm-3">
                            <input type="number" class="form-control" name="cholesterol" placeholder="Kolestrol (mg/dl)">
                        </div>
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Gula Darah Sewaktu</label>
                        <div class="col-sm-4">
                            <input type="number" class="form-control" name="gula_darah" placeholder="gula_darah (mg/dl)">
                        </div>
                        
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Hemoglobin</label>
                        <div class="col-sm-3">
                            <input type="number" class="form-control" name="hb" placeholder="HB (gr/dl)">
                        </div>
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Asam Urat</label>
                        <div class="col-sm-4">
                            <input type="number" class="form-control" name="asam_urat" placeholder="asam_urat (mg/dl)">
                        </div>
                        
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Riwayat Kesehatan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="riwayat_kesehatan" placeholder="Riwayat Kesehatan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Keluhan Saat ini</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="keluhan_kesehatan" placeholder="Keluhan saat ini">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Demam</label>
                        <div class="col-sm-3">
                            <select class="form-control" required name="demam">
                                <option value="">---Demam----</option>
                                <option value="1">YA</option>
                                <option value="2">Tidak</option>
                            </select>
                        </div>
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Diare</label>
                        <div class="col-sm-4">
                            <select class="form-control" required name="diare">
                                <option value="">---Diare----</option>
                                <option value="1">YA</option>
                                <option value="2">Tidak</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Kebiasaan Merokok</label>
                        <div class="col-sm-3">
                            <select class="form-control" required name="merokok">
                                <option value="">---Kebiasaan Merokok----</option>
                                <<?php
                                    $sql_merokok = mysqli_query($host, "SELECT * FROM master_merokok WHERE blokir ='0'");
                                    while($data_merokok = mysqli_fetch_array($sql_merokok)){
                                ?>
                                <option value="<?= $data_merokok['id_master_merokok']?>"><?= $data_merokok['status_merokok']?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Olah Raga</label>
                        <div class="col-sm-2">
                            <select class="form-control" required name="frekwensi_olah_raga">
                                <option value="">---Frekwensi----</option>
                                <option value="1">3X/Minggu atau lebih</option>
                                <option value="2">Kurang dari 3X/Minggu</option>
                            </select>
                        </div>
                        <div class="col-sm-2">
                            <select class="form-control" required name="durasi_olah_raga">
                                <option value="">---Durasi----</option>
                                <option value="1">30 Menit atau Lebih</option>
                                <option value="2">Kurang dari 30 Menit</option>
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
