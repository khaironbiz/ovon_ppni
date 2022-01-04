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