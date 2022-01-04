<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <table class="table table-sm">
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?= $data_anggota['nama_anggota']?></td>
                    </tr>
                    <tr>
                        <td>NIK</td>
                        <td>:</td>
                        <td><?= $data_anggota['nik']?></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td><?= master_jawaban($data_anggota['jenis_kelamin']);?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td><?= $data_anggota['tgl_lahir'];?></td>
                    </tr>
                    <tr>
                        <td>Struktur Keluarga</td>
                        <td>:</td>
                        <td><?= master_jawaban($data_anggota['id_struktur_keluarga']);?></td>
                    </tr>
                    <tr>
                        <td>Status Pernikahan</td>
                        <td>:</td>
                        <td>
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
                        </td>
                    </tr>
                    <tr>
                        <td>Pendidikan</td>
                        <td>:</td>
                        <td>
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
                        </td>
                    </tr>
                    <tr>
                        <td>Pekerjaan</td>
                        <td>:</td>
                        <td>
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
                        </td>
                    </tr>
                    <tr>
                        <td>Golongan Darah</td>
                        <td>:</td>
                        <td>
                            <select class="form-control form-control-sm" required name="golongan_darah">
                                <?php
                                    $golongan_darah  = $data_anggota['golongan_darah'];
                                ?>
                                <option value="<?= $golongan_darah; ?>"><?= master_jawaban($golongan_darah)?></option>
                                <?php
                                    $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='90' ");
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
                        <td>Vaksin Covid-19</td>
                        <td>:</td>
                        <td>
                            <select class="form-control form-control-sm" required name="vaksin_covid19">
                                <?php
                                    $vaksin_covid19  = $data_anggota['vaksin_covid19'];
                                ?>
                                <option value="<?= $vaksin_covid19; ?>"><?= master_jawaban($vaksin_covid19)?></option>
                                <?php
                                    $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='116' ");
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
                        <td>TTV</td>
                        <td>:</td>
                        <td>
                            <div class="form-check form-check-inline col-sm-12">
                                <input type="number" required class="form-control form-control-sm col-sm-6" name="sistolik" placeholder="sistolik">
                                <input type="number" required class="form-control form-control-sm col-sm-6" name="diastolik" placeholder="diastolik">
                            </div>
                            
                        </td>
                    </tr>
                    <tr>
                        <td></td><td></td>
                        <td>
                            <div class="form-check form-check-inline col-sm-12">
                                <input type="number" required class="form-control form-control-sm col-sm-6" name="nadi" placeholder="nadi (x/mnt)">
                                <input type="number" required class="form-control form-control-sm col-sm-6" name="respirasi" placeholder="nafas (x/mnt)">
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td>Antropometri</td>
                        <td>:</td>
                        <td>
                            <div class="form-check form-check-inline col-sm-12">
                                <input type="number" required class="form-control form-control-sm col-sm-6" name="bb" placeholder="berat badan (kg)">
                                <input type="number" required class="form-control form-control-sm col-sm-6" name="tb" placeholder="tinggi badan (cm)">
                            </div>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>Laboratotium</td>
                        <td>:</td>
                        <td>
                            <div class="form-check form-check-inline col-sm-12">
                                <input type="text" class="form-control form-control-sm col-sm-6" name="hb" placeholder="HB (mg/dl)">
                                <input type="number" class="form-control form-control-sm col-sm-6" name="cholesterol" placeholder="cholesterol (mg/dl)">
                            </div>
                                
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                            
                        <td>
                            <div class="form-check form-check-inline col-sm-12">
                                <input type="number" class="form-control form-control-sm col-sm-6" name="asam_urat" placeholder="asam urat (mg/dl)">
                                <input type="number" class="form-control form-control-sm col-sm-6" name="gd" placeholder="gula darah (mg/dl)">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">Riwayat Penyakit</td>
                    </tr>
                    <tr>
                        <td colspan="3">
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
                        </td>
                    </tr>
                </table>
            </div>
            
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
               Kebiasaan
            </div>
            <div class="card-body">
                <table class="table table-sm">
                    <tr>
                        <td>Olah Raga</td>
                        <td>:</td>
                        <td>
                            <div class="form-check form-check-inline col-sm-12">
                                <select class="form-control form-control-sm col-sm-6" required name="vaksin_covid19">
                                   
                                    <option value="">--frekwensi--</option>
                                    <?php
                                        $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='96' ");
                                                    while($data_jawaban = mysqli_fetch_array($sql_jawaban)){
                                    ?>
                                        <option value="<?= $data_jawaban['id_master_jawaban']?>"><?= $data_jawaban['master_jawaban']?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                                <select class="form-control form-control-sm col-sm-6" required name="vaksin_covid19">
                                   <option value="">--durasi--</option>
                                    <?php
                                        $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='97' ");
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
                        <td>Makan</td>
                        <td>:</td>
                        <td>
                            <div class="form-check form-check-inline col-sm-12">
                                <select class="form-control form-control-sm col-sm-6" required name="vaksin_covid19">
                                   
                                    <option value="">--frekwensi--</option>
                                    <?php
                                        $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='96' ");
                                                    while($data_jawaban = mysqli_fetch_array($sql_jawaban)){
                                    ?>
                                        <option value="<?= $data_jawaban['id_master_jawaban']?>"><?= $data_jawaban['master_jawaban']?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                                <select class="form-control form-control-sm col-sm-6" required name="vaksin_covid19">
                                   <option value="">--Jumlah--</option>
                                    <?php
                                        $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='97' ");
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
                        <td>Makan Sayur</td><td>:</td>
                        <td>
                            <select class="form-control form-control-sm" required name="vaksin_covid19">
                                <option value="">--makan sayur--</option>
                                <?php
                                $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='103' ");
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
                        <td>Makan Buah</td><td>:</td>
                        <td>
                            <select class="form-control form-control-sm" required name="vaksin_covid19">
                                <option value="">--makan buah--</option>
                                <?php
                                $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='104' ");
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
                        <td>Lauk Tersering</td><td>:</td>
                        <td>
                            <select class="form-control form-control-sm" required name="vaksin_covid19">
                                <option value="">--lauk tersering dikonsumsi--</option>
                                <?php
                                $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='105' ");
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
                        <td>Durasi Tidur</td>
                        <td>:</td>
                        <td>
                            <select class="form-control form-control-sm" required name="vaksin_covid19">
                                <option value="">--durasi--</option>
                                <?php
                                     $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='106' ");
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
                        <td>Kualitas Tidur</td>
                        <td>:</td>
                        <td>
                            <select class="form-control form-control-sm" required name="vaksin_covid19">
                                <option value="">--kualitas tidur--</option>
                                <?php
                                        $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='107' ");
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
                        <td>Gangguan tidur</td>
                        <td>:</td>
                        <td>
                            <select class="form-control form-control-sm" required name="vaksin_covid19">
                                <option value="">--durasi--</option>
                                <?php
                                    $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='108' ");
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
                        <td>Merokok</td>
                        <td>:</td>
                        <td>
                            <div class="form-check form-check-inline col-sm-12">
                                <select class="form-control form-control-sm col-sm-6" required name="vaksin_covid19">
                                   
                                    <option value="">--Kebiasaan merokok--</option>
                                    <?php
                                        $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='98' ");
                                                    while($data_jawaban = mysqli_fetch_array($sql_jawaban)){
                                    ?>
                                        <option value="<?= $data_jawaban['id_master_jawaban']?>"><?= $data_jawaban['master_jawaban']?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                                <select class="form-control form-control-sm col-sm-6" required name="vaksin_covid19">
                                   <option value="">--jenis rokok--</option>
                                    <?php
                                        $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='99' ");
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
                        <td>Minum Alkohol</td>
                        <td>:</td>
                        <td>
                            <select class="form-control form-control-sm col-sm-6" required name="vaksin_covid19">
                                <option value="">--minum alkohol--</option>
                                <?php
                                    $sql_jawaban = mysqli_query($host, "SELECT * FROM master_jawaban WHERE id_master_soal='100' ");
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
                        <td colspan="3">Penyakit diderita</td>
                    </tr>
                    <tr>
                        <td colspan="3">
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
                        </td>
                    </tr>
                    <tr>
                        <td>Keluhan</td>
                        <td>:</td>
                        <td>
                            <input type="text" class="form-control form-control-sm" placeholder="keluhan" name="keluhan">
                        </td>
                    </tr>
                </table>
            </div>
            
        </div>
    </div>
    
</div>