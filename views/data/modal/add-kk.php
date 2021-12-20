<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header bg-dark">
            Tambah Kepala Keluarga
            </div>

            <div class="card-body">
                <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" placeholder="Nama kepala keluarga" name="nama_anggota" required>
                            <input type="hidden" class="form-control" value="<?= uniqid() ?>" name="add_kk" required>
                        </div>
                        <label class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-4">
                            <input type="number" name="nik" class="form-control" placeholder="Nomor KTP">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-4">
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
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Golongan Darah</label>
                        <div class="col-sm-4">
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
                        <label class="col-sm-2 col-form-label">Vaksin Covid-19</label>
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
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Pendidikan</label>
                        <div class="col-sm-4">
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
            </div>
            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>


