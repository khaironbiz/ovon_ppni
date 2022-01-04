<?php
include('usia16-59th.php');
?>
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Kesehatan Wanita
            </div>
            <div class="card-body">
                <table class="table table-sm">
                    <tr>
                        <td>Usia awal menstruasi</td>
                        <td>:</td>
                        <td>
                            <input type="number" name="usia_haid" class="form-control form-control-sm">
                        </td>
                    </tr>
                    <tr>
                        <td>Keluhan Menstruasi</td>
                        <td>:</td>
                        <td>
                            <select class="form-control form-control-sm" required name="keluhan_haid">
                                
                                <option value="">---Keluhan menstruasi---</option>
                                <?php
                                    $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='82' ");
                                                while($data_jawaban = mysqli_fetch_array($sql_jawaban)){
                                ?>
                                    <option value="<?= $data_jawaban['id_master_jawaban']?>"><?= $data_jawaban['master_jawaban']?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Status Menstruasi</td>
                        <td>:</td>
                        <td>
                            <select class="form-control form-control-sm" required name="status_haid">
                                
                                <option value="">---Status menstruasi---</option>
                                <?php
                                    $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='84' ");
                                                while($data_jawaban = mysqli_fetch_array($sql_jawaban)){
                                ?>
                                    <option value="<?= $data_jawaban['id_master_jawaban']?>"><?= $data_jawaban['master_jawaban']?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Lama Hari Menstruasi</td>
                        <td>:</td>
                        <td>
                            <input type="number" class="form-control form-control-sm" name="lama_haid" placeholder="durasi menstruasi">
                        </td>
                    </tr>
                    <tr>
                        <td>Siklus Menstruasi</td>
                        <td>:</td>
                        <td>
                            <input type="number" class="form-control form-control-sm" name="siklus_haid" placeholder="siklus menstruasi">
                        </td>
                    </tr>
                    
                    <tr>
                        <td>Pemeriksaan IVA</td>
                        <td>:</td>
                        <td>
                            
                            <div class="form-check form-check-inline col-sm-12">
                                <select class="form-control form-control-sm col-sm-6" required name="iva_test">
                                   
                                    <option value="">--IVA test--</option>
                                    <?php
                                        $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='112' ");
                                                    while($data_jawaban = mysqli_fetch_array($sql_jawaban)){
                                    ?>
                                        <option value="<?= $data_jawaban['id_master_jawaban']?>"><?= $data_jawaban['master_jawaban']?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                                <select class="form-control form-control-sm col-sm-6" required name="iva_hasil">
                                   <option value="">--Hasil IVA--</option>
                                    <?php
                                        $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='113' ");
                                                    while($data_jawaban = mysqli_fetch_array($sql_jawaban)){
                                    ?>
                                        <option value="<?= $data_jawaban['id_master_jawaban']?>"><?= $data_jawaban['master_jawaban']?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Kontrasepsi</td>
                        <td>:</td>
                        <td>
                            <div class="form-check form-check-inline col-sm-12">
                                <select class="form-control form-control-sm col-sm-6" required name="vaksin_covid19">
                                   
                                    <option value="">--Kontrasepsi--</option>
                                    <?php
                                        $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='115' ");
                                                    while($data_jawaban = mysqli_fetch_array($sql_jawaban)){
                                    ?>
                                        <option value="<?= $data_jawaban['id_master_jawaban']?>"><?= $data_jawaban['master_jawaban']?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                                <select class="form-control form-control-sm col-sm-6" required name="vaksin_covid19">
                                   <option value="">--Alat Kontrasepsi--</option>
                                    <?php
                                        $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='114' ");
                                                    while($data_jawaban = mysqli_fetch_array($sql_jawaban)){
                                    ?>
                                        <option value="<?= $data_jawaban['id_master_jawaban']?>"><?= $data_jawaban['master_jawaban']?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Kehamilan
            </div>
            <div class="card-body">
                <table class="table table-sm">
                    <tr>
                        <td>HPHT</td>
                        <td>:</td>
                        <td>
                            <input type="date" class="form-control form-control-sm">
                        </td>
                    </tr>
                    <tr>
                        <td>Kehamilan (GPA)</td>
                        <td>:</td>
                        <td>
                            <div class="form-check form-check-inline col-sm-12">
                                <input type="number" class="form-control form-control-sm col-sm-3" placeholder="gravida">
                                <input type="number" class="form-control form-control-sm col-sm-3" placeholder="partus">
                                <input type="number" class="form-control form-control-sm col-sm-3" placeholder="abortus">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Konsultasi Kehamilan</td>
                        <td>:</td>
                        <td>
                            <select class="form-control form-control-sm" required name="konsultasi_kehamilan">
                                <option value="">--Konsultasi kehamilan--</option>
                                <?php
                                    $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='87' ");
                                                    while($data_jawaban = mysqli_fetch_array($sql_jawaban)){
                                ?>
                                    <option value="<?= $data_jawaban['id_master_jawaban']?>"><?= $data_jawaban['master_jawaban']?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Riwayat Partus</td>
                        <td>:</td>
                        <td>
                            <select class="form-control form-control-sm" required name="riwayat_partus">
                                <option value="">--Riwayat Partus--</option>
                                <?php
                                    $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='88' ");
                                                    while($data_jawaban = mysqli_fetch_array($sql_jawaban)){
                                ?>
                                    <option value="<?= $data_jawaban['id_master_jawaban']?>"><?= $data_jawaban['master_jawaban']?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </td>
                    </tr>
                    
                </table>
            </div>
        </div>
    </div>
</div>