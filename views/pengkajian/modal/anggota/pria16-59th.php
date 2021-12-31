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
                </table>
            </div>
            
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <tr>
                        <td>Pekerjaan</td>
                        <td>:</td>
                        <td><input class="form-control" type="text"></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

                        