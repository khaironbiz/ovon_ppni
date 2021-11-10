<?php
if(isset($_POST['add_keluarga'])){
    $hari_ini               = date('Y-m-d H:i:s');
    $key_keluarga           = $_POST['add_keluarga'];
    $nama_keluarga          = $_POST['nama_keluarga'];
    $jenis_keluarga         = $_POST['jenis_keluarga'];
    $penghasilan            = $_POST['penghasilan'];
    $pengeluaran            = $_POST['pengeluaran'];
    $balance_ekonomi        = $penghasilan-$pengeluaran;
    if($balance_ekonomi > 0){
        $status_ekonomi     = 1;
    }if($balance_ekonomi < 0){
        $status_ekonomi     = 2;
    }if($balance_ekonomi == 0){
        $status_ekonomi     = 3;
    }
    $sumber_air_minum       = $_POST['sumber_air_minum'];
    $penyediaan_air_minum   = $_POST['penyediaan_air_minum'];
    $sumber_air             = $_POST['sumber_air'];
    $jenis_jamban           = $_POST['jenis_jamban'];
    $kepemilikan_jamban     = $_POST['kepemilikan_jamban'];
    $bahan_bakar            = $_POST['bahan_bakar'];
    $bpjs                   = $_POST['bpjs'];
    $luas_rumah             = $_POST['luas_rumah'];
    $jml_anggota_keluarga   = $_POST['jml_anggota_keluarga'];
    $atap_rumah             = $_POST['atap_rumah'];
    $dinding_rumah          = $_POST['dinding_rumah'];
    $lahan_pertanian        = $_POST['lahan_pertanian'];
    $lantai_rumah           = $_POST['lantai_rumah'];
    $provinsi               = $myprov;
    $kabupaten              = $mykota;
    $kecamatan              = $mykecamatan;
    $kelurahan              = $mydesa;
    $rw                     = $data_pengguna['id_rw'];
    $rt                     = $data_pengguna['id_rt'];
    $has_keluarga           = md5(uniqid());
    $sql_keluarga           = mysqli_query($host, "SELECT * FROM keluarga WHERE key_keluarga='$key_keluarga'");
    $count                  = mysqli_num_rows($sql_keluarga);
    if($count < 1 ){
        $input_data     = mysqli_query($host, "INSERT INTO keluarga SET 
                            key_keluarga            = '$key_keluarga',
                            nama_keluarga           = '$nama_keluarga',
                            jenis_keluarga          = '$jenis_keluarga',
                            penghasilan             = '$penghasilan',
                            pengeluaran             = '$pengeluaran',
                            status_ekonomi          = '$status_ekonomi',
                            sumber_air_minum        = '$sumber_air_minum',
                            penyediaan_air_minum    = '$penyediaan_air_minum',
                            sumber_air              = '$sumber_air',
                            jenis_jamban            = '$jenis_jamban',
                            kepemilikan_jamban      = '$kepemilikan_jamban',
                            bahan_bakar             = '$bahan_bakar',
                            bpjs                    = '$bpjs',
                            luas_rumah              = '$luas_rumah',
                            jml_anggota_keluarga    = '$jml_anggota_keluarga',
                            atap_rumah              = '$atap_rumah',
                            dinding_rumah           = '$dinding_rumah',
                            lahan_pertanian         = '$lahan_pertanian',
                            lantai_rumah            = '$lantai_rumah',
                            created_at              = '$hari_ini',
                            created_by              = '$user_check',
                            provinsi                = '$provinsi',
                            kabupaten               = '$kabupaten',
                            kecamatan               = '$kecamatan',
                            kelurahan               = '$kelurahan',
                            rw                      = '$rw',
                            rt                      = '$rt',
                            has_keluarga            = '$has_keluarga'");
        if($input_data){
            $_SESSION['status']="Data berhasil disimpan";
            $_SESSION['status_info']="success";
            echo "<script>document.location=\"$site_url/data/\"</script>";
        }else{
            $_SESSION['status']="Data gagal disimpan";
            $_SESSION['status_info']="danger";
            echo "<script>document.location=\"$site_url/data/\"</script>";
        }
    }else{
        $_SESSION['status']="Data gagal disimpan karena data sudah terdaftar di sistem";
        $_SESSION['status_info']="danger";
        echo "<script>document.location=\"$site_url/data/\"</script>";

    }
}
?>