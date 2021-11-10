<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
    Add Keluarga
</button>
<!-- Modal -->
<form action="" method="POST">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pengkajian Keluarga</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Nama Kepala</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" placeholder="Nama Kepala Keluarga" name="nama_keluarga">
                            <input type="hidden" class="form-control" name="add_keluarga" value="<?= uniqid(); ?>">
                        </div>
                        <label class="col-sm-2 col-form-label">Jenis Keluarga</label>
                        <div class="col-sm-4">
                            <select class="form-control" required name="jenis_keluarga">
                                <option value="">---Jenis Keluarga----</option>
                                <option value="1">Keluarga Inti</option>
                                <option value="2">Keluarga Besar</option>
                                <option value="3">Keluarga Duda / Janda</option>
                                <option value="4">Keluarga Komposit</option>
                                <option value="5">Keluarga Kabisat</option>
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
                                <option value="1">Air Kemasan</option>
                                <option value="2">Air Isi Ulang</option>
                                <option value="3">PDAM</option>
                                <option value="4">Sumur</option>
                                <option value="5">Mata Air</option>
                                <option value="6">Danau</option>
                                <option value="7">Bendungan</option>
                                <option value="8">Air Hujan</option>
                                <option value="9">Tanki Air</option>
                            </select>
                        </div>
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Penyediaan air minum</label>
                        <div class="col-sm-4">
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
                                <option value="1">Kakus Tanki</option>
                                <option value="2">Kakus Tanpa Tanki</option>
                                <option value="3">Sungai</option>
                                <option value="4">Cubluk</option>
                                <option value="5">Halaman/semak/hutan/kebon</option>
                            </select>
                        </div>
                        <label class="col-sm-2 col-form-label">Kepemilikan Jamban</label>
                        <div class="col-sm-4">
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
                            <input type="checkbox"value="1"> Listrik, 
                            <input type="checkbox"value="2"> Radio, 
                            <input type="checkbox"value="3"> Televisi, 
                            <input type="checkbox"value="4"> Handphone, 
                            <input type="checkbox"value="5"> Tidak Ada
                            
                        </div>
                        
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Kendaraan</label>
                        <div class="col-sm-9">
                            <input type="checkbox"value="1"> Sepeda, 
                            <input type="checkbox"value="2"> Sepeda Motor, 
                            <input type="checkbox"value="3"> Mobil, 
                            <input type="checkbox"value="4"> Tidak Ada
                            
                        </div>
                        
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Bahan Bakar Utama</label>
                        <div class="col-sm-3">
                            <select class="form-control" required name="bahan_bakar">
                                <option value="">---Bahan Bakar----</option>
                                <option value="1">Listrik</option>
                                <option value="2">Gas</option>
                                <option value="3">Bio Gas</option>
                                <option value="4">Minyak Tanah</option>
                                <option value="5">Kayu Bakar</option>
                            </select>
                        </div>
                        <label class="col-sm-2 col-form-label">Kepemilikan BPJS</label>
                        <div class="col-sm-4">
                            <select class="form-control" required name="bpjs">
                                <option value="">---BPJS----</option>
                                <option value="1">Tidak Punya</option>
                                <option value="2">Memiliki BPJS Tetapi Tidak Lengkap</option>
                                <option value="3">BPJS Lengkap</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Luas Rumah (M2)</label>
                        <div class="col-sm-3">
                            <input type="number" class="form-control" placeholder="Nama Kepala Keluarga" name="luas_rumah">
                        </div>
                        <label class="col-sm-2 col-form-label">Jumlah Keluarga</label>
                        <div class="col-sm-4">
                            <input type="number" class="form-control" placeholder="Nama Kepala Keluarga" name="jml_anggota_keluarga">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Atap Rumah</label>
                        <div class="col-sm-3">
                            <select class="form-control" required name="atap_rumah">
                                <option value="">---Jenis Atap Rumah----</option>
                                <option value="1">Genting</option>
                                <option value="2">Beton</option>
                                <option value="3">Kayu Sirap</option>
                                <option value="4">Bahan Alami</option>
                                <option value="5">Asbes</option>
                            </select>
                        </div>
                        <label class="col-sm-2 col-form-label">Dinding Bangunan</label>
                        <div class="col-sm-4">
                            <select class="form-control" required name="dinding_rumah">
                                <option value="">---Jenis Dinding----</option>
                                <option value="1">Tembok</option>
                                <option value="2">Kayu</option>
                                <option value="3">Bambu</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Luas Pertanian</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" placeholder="Nama Kepala Keluarga" name="lahan_pertanian">
                        </div>
                        <label class="col-sm-2 col-form-label">Lantai Rumah</label>
                        <div class="col-sm-4">
                            <select class="form-control" required name="lantai_rumah">
                                <option value="">---Lantai Rumah----</option>
                                <option value="1">Tanah</option>
                                <option value="2">Plester</option>
                                <option value="3">Ubin</option>
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
