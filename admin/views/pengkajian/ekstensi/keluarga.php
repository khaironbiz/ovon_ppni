                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-2">Nama</div>
                                    <div class="col-sm-4"> : <?= $data_anggota['nama_anggota'];?></div>
                                    <div class="col-sm-2">Jenis Kelamin</div>
                                    <div class="col-sm-4"> : <?= master_jawaban($data_anggota['jenis_kelamin'])?></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">Tanggal Lahir</div>
                                    <div class="col-sm-4"> : <?= $data_anggota['tgl_lahir']?></div>
                                    <div class="col-sm-2">Status KTP</div>
                                    <div class="col-sm-4"> : <?= master_jawaban($data_anggota['status_ktp'])?></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">NIK</div>
                                    <div class="col-sm-4"> : <?= $data_keluarga['id_kepala_keluarga']?></div>
                                    <div class="col-sm-2">No KK</div>
                                    <div class="col-sm-4"> : <?= $data_keluarga['no_kk']?></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">Penghasilan</div>
                                    <div class="col-sm-4">:</div>
                                    <div class="col-sm-2">Pengeluaran</div>
                                    <div class="col-sm-4">:</div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">Alamat</div>
                                    <div class="col-sm-4">:</div>
                                    <div class="col-sm-2">Jenis Keluarga</div>
                                    <div class="col-sm-4">:</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card">
                            <div class="card-header">
                                <div>Rumah</div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-2">Luas Rumah (m2)</div>
                                    <div class="col-sm-4">:</div>
                                        
                                    <div class="col-sm-2">Jenis Lantai</div>
                                    <div class="col-sm-4">:</div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">Jenis Atap</div>
                                    <div class="col-sm-4">:</div>
                                        
                                    <div class="col-sm-2">Jenis Dinding</div>
                                    <div class="col-sm-4">:</div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">Luas Ventilasi (m2)</div>
                                    <div class="col-sm-4">:</div>
                                        
                                    <div class="col-sm-2">Arah Ventilasi</div>
                                    <div class="col-sm-4">:</div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">Air Minum</div>
                                    <div class="col-sm-4">:</div>
                                        
                                    <div class="col-sm-2">Air Bersih</div>
                                    <div class="col-sm-4">:</div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">Pengelolaan Sampah</div>
                                    <div class="col-sm-4">:</div>
                                        
                                    <div class="col-sm-2">Pembuangan Air Limbah</div>
                                    <div class="col-sm-4">:</div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">Sampah Organik</div>
                                    <div class="col-sm-4">:</div>
                                    <div class="col-sm-2">Sampah Plastik</div>
                                    <div class="col-sm-4">:</div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">Kepemilikan Jamban</div>
                                    <div class="col-sm-2">:</div>
                                        
                                    <div class="col-sm-2">Jenis Jamban</div>
                                    <div class="col-sm-2">:</div>
                                    <div class="col-sm-2">Lokasi Jamban</div>
                                    <div class="col-sm-2">:</div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body row">
                                <div class="col-md-4">
                                    <label>Vektor</label>
                                </div>
                                <div class="col-md-4">
                                    <label>Hewan Berbahaya</label>
                                </div>
                                <div class="col-md-4">
                                    <label>Hewan Peliharaan</label>
                                </div>
                            </div>
                        </div>