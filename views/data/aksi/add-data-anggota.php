<?php
if(isset($_POST['add_anggota'])){
    $key_keluarga           = $_POST['add_anggota'];
    $nama_anggota           = $_POST['nama_anggota'];
    $jenis_kelamin          = $_POST['jenis_kelamin'];
    $tgl_lahir              = $_POST['tgl_lahir'];
    $jenis_keluarga         = $_POST['jenis_keluarga'];
    $golongan_darah         = $_POST['golongan_darah'];
    $vaksin_covid19         = $_POST['vaksin_covid19'];
    $berat_badan            = $_POST['berat_badan'];
    $tinggi_badan           = $_POST['tinggi_badan'];
    $status_pendidikan      = $_POST['status_pendidikan'];
    $status_pekerjaan       = $_POST['status_pekerjaan'];
    $nadi                   = $_POST['nadi'];
    $sistolik               = $_POST['sistolik'];
    $diastolik              = $_POST['diastolik'];
    $cholesterol            = $_POST['cholesterol'];
    $gula_darah             = $_POST['gula_darah'];
    $hb                     = $_POST['hb'];
    $asam_urat              = $_POST['asam_urat'];
    $riwayat_kesehatan      = $_POST['riwayat_kesehatan'];
    $keluhan_kesehatan      = $_POST['keluhan_kesehatan'];
    $demam                  = $_POST['demam'];
    $diare                  = $_POST['diare'];
    $merokok                = $_POST['merokok'];
    $frekwensi_olah_raga    = $_POST['frekwensi_olah_raga'];
    $durasi_olah_raga       = $_POST['durasi_olah_raga'];
    $hari_ini               = date('Y-m-d H:i:s');
    $provinsi               = $myprov;
    $kabupaten              = $mykota;
    $kecamatan              = $mykecamatan;
    $kelurahan              = $mydesa;
    $rw                     = $data_pengguna['id_rw'];
    $rt                     = $data_pengguna['id_rt'];
    $has_keluarga_anggota   = md5(uniqid());
    $sql_keluarga           = mysqli_query($host, "SELECT * FROM keluarga_anggota WHERE key_keluarga='$key_keluarga' and nama_anggota='$nama_anggota' ");
    $count                  = mysqli_num_rows($sql_keluarga);
    if($count < 1 ){
        $input_data     = mysqli_query($host, "INSERT INTO keluarga_anggota SET 
                            key_keluarga            = '$key_keluarga',
                            nama_anggota            = '$nama_anggota',
                            jenis_kelamin           = '$jenis_kelamin',
                            tgl_lahir               = '$tgl_lahir',
                            id_struktur_keluarga    = '$jenis_keluarga',
                            golongan_darah          = '$golongan_darah',
                            vaksin_covid19          = '$vaksin_covid19',
                            berat_badan             = '$berat_badan',
                            tinggi_badan            = '$tinggi_badan',
                            pendidikan              = '$status_pendidikan',
                            pekerjaan               = '$status_pekerjaan',
                            nadi                    = '$nadi',
                            sistolik                = '$sistolik',
                            diastolik               = '$diastolik',
                            cholesterol             = '$cholesterol',
                            gula_darah              = '$gula_darah',
                            hb                      = '$hb',
                            asam_urat               = '$asam_urat',
                            riwayat_kesehatan       = '$riwayat_kesehatan',
                            keluhan_kesehatan       = '$keluhan_kesehatan',
                            demam                   = '$demam',
                            diare                   = '$diare',
                            merokok                 = '$merokok',
                            frekwensi_olah_raga     = '$frekwensi_olah_raga',
                            durasi_olah_raga        = '$durasi_olah_raga',
                            created_at              = '$hari_ini',
                            created_by              = '$user_check',
                            provinsi                = '$provinsi',
                            kabupaten               = '$kabupaten',
                            kecamatan               = '$kecamatan',
                            kelurahan               = '$kelurahan',
                            rw                      = '$rw',
                            rt                      = '$rt',
                            has_keluarga_anggota    = '$has_keluarga_anggota'");
        if($input_data){
            $_SESSION['status']="Data berhasil disimpan";
            $_SESSION['status_info']="success";
            echo "<script>document.location=\"$site_url/data/keluarga.php?id=$key_keluarga\"</script>";
        }else{
            $_SESSION['status']="Data gagal disimpan";
            $_SESSION['status_info']="danger";
            echo "<script>document.location=\"$site_url/data/keluarga.php?id=$key_keluarga\"</script>";
        }
    }else{
        $_SESSION['status']="Data gagal disimpan karena data sudah terdaftar di sistem";
        $_SESSION['status_info']="danger";
        echo "<script>document.location=\"$site_url/data/keluarga.php?id=$key_keluarga\"</script>";

    }
}
?>