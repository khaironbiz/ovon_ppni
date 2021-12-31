<?php
if(isset($_POST['create_keluarga'])){
    $detik_ini                  = date('Y-m-d H:i:s');
    $has_pengkajian_keluarga    = md5(uniqid());
    $key_keluarga               = $_POST['create_keluarga'];
    $sql_keluarga               = mysqli_query($host,"SELECT * FROM keluarga WHERE key_keluarga='$key_keluarga'");
    $count_keluarga             = mysqli_num_rows($sql_keluarga);
    if($count_keluarga >0){
        $nama_keluarga      = $_POST['nama_keluarga'];
        $jenis_kelamin      = $_POST['jenis_kelamin'];
        $tgl_lahir          = $_POST['tgl_lahir'];
        $status_ktp         = $_POST['status_ktp'];
        $nik                = $_POST['nik'];
        $no_kk              = $_POST['no_kk'];
        $penghasilan        = $_POST['penghasilan'];
        $pengeluaran        = $_POST['pengeluaran'];
        $status_ekonomi     = $penghasilan-$pengeluaran;
        $alamat             = $_POST['alamat'];
        $jenis_keluarga     = $_POST['jenis_keluarga'];
        $luas_rumah         = $_POST['luas_rumah'];
        $lantai_rumah       = $_POST['lantai_rumah'];
        $atap_rumah         = $_POST['atap_rumah'];
        $dinding_rumah      = $_POST['dinding_rumah'];
        $luas_ventilasi     = $_POST['luas_ventilasi'];
        $arah_ventilasi     = $_POST['arah_ventilasi'];
        $air_minum          = $_POST['air_minum'];
        $air_bersih         = $_POST['air_bersih'];
        $pengelolaan_sampah = $_POST['pengelolaan_sampah'];
        $limbah_air         = $_POST['limbah_air'];
        $sampah_basah       = $_POST['sampah_basah'];
        $sampah_plastik     = $_POST['sampah_plastik'];
        $kepemilikan_jamban = $_POST['kepemilikan_jamban'];
        $jenis_jamban       = $_POST['jenis_jamban'];   
        $lokasi_jamban      = $_POST['lokasi_jamban'];
        $jentik             = $_POST['jentik'];
        $tikus              = $_POST['tikus'];
        $kecoa              = $_POST['kecoa'];
        $cicak              = $_POST['cicak'];
        $lalat              = $_POST['lalat'];
        $anjing             = $_POST['anjing'];
        $kucing             = $_POST['kucing'];
        $burung             = $_POST['burung'];
        $unggas             = $_POST['unggas'];
        $binatang_lain      = $_POST['binatang_lain'];
        $ular               = $_POST['ular'];
        $biawak             = $_POST['biawak'];
        $update_keluarga    = mysqli_query($host,"UPDATE keluarga SET 
                                penghasilan         = '$penghasilan',
                                pengeluaran         = '$pengeluaran',
                                status_ekonomi      = '$status_ekonomi',
                                alamat              = '$alamat',
                                jenis_keluarga      = '$jenis_keluarga',
                                no_kk               = '$no_kk',
                                luas_rumah          = '$luas_rumah',
                                lantai_rumah        = '$lantai_rumah',
                                atap_rumah          = '$atap_rumah',
                                dinding_rumah       = '$dinding_rumah',
                                luas_ventilasi      = '$luas_ventilasi',
                                arah_ventilasi      = '$arah_ventilasi',
                                air_minum           = '$air_minum',
                                air_bersih          = '$air_bersih',
                                pengelolaan_sampah  = '$pengelolaan_sampah',
                                limbah_air          = '$limbah_air',
                                sampah_basah        = '$sampah_basah',
                                sampah_plastik      = '$sampah_plastik',
                                kepemilikan_jamban  = '$kepemilikan_jamban',
                                jenis_jamban        = '$jenis_jamban',
                                lokasi_jamban       = '$lokasi_jamban',
                                jentik              = '$jentik',
                                tikus               = '$tikus',
                                kecoa               = '$kecoa',
                                cicak               = '$cicak',
                                lalat               = '$lalat',
                                anjing              = '$anjing',
                                kucing              = '$kucing',
                                burung              = '$burung',
                                unggas              = '$unggas',
                                binatang_lain       = '$binatang_lain',
                                ular                = '$ular',
                                biawak              = '$biawak',
                                updated_at          = '$detik_ini' WHERE 
                                key_keluarga        = '$key_keluarga'");
        if($update_keluarga){
            $add_arsip      = mysqli_query($host,"INSERT INTO pengkajian_keluarga SET 
                                key_keluarga            = '$key_keluarga',
                                penghasilan             = '$penghasilan',
                                pengeluaran             = '$pengeluaran',
                                status_ekonomi          = '$status_ekonomi',
                                alamat                  = '$alamat',
                                jenis_keluarga          = '$jenis_keluarga',
                                no_kk                   = '$no_kk',
                                luas_rumah              = '$luas_rumah',
                                lantai_rumah            = '$lantai_rumah',
                                atap_rumah              = '$atap_rumah',
                                dinding_rumah           = '$dinding_rumah',
                                luas_ventilasi          = '$luas_ventilasi',
                                arah_ventilasi          = '$arah_ventilasi',
                                air_minum               = '$air_minum',
                                air_bersih              = '$air_bersih',
                                pengelolaan_sampah      = '$pengelolaan_sampah',
                                limbah_air              = '$limbah_air',
                                sampah_basah            = '$sampah_basah',
                                sampah_plastik          = '$sampah_plastik',
                                kepemilikan_jamban      = '$kepemilikan_jamban',
                                jenis_jamban            = '$jenis_jamban',
                                lokasi_jamban           = '$lokasi_jamban',
                                jentik                  = '$jentik',
                                tikus                   = '$tikus',
                                kecoa                   = '$kecoa',
                                cicak                   = '$cicak',
                                lalat                   = '$lalat',
                                anjing                  = '$anjing',
                                kucing                  = '$kucing',
                                burung                  = '$burung',
                                unggas                  = '$unggas',
                                binatang_lain           = '$binatang_lain',
                                ular                    = '$ular',
                                biawak                  = '$biawak',
                                created_at              = '$detik_ini',
                                created_by              = '$user_check',
                                has_pengkajian_keluarga = '$has_pengkajian_keluarga'");
            if($add_arsip){
                $_SESSION['status']="Data Sukses Disimpan";
                $_SESSION['status_info']="success";
                echo "<script>document.location=\"$site_url/data/\"</script>";
            }else{
                $_SESSION['status']="Gagal membuat data arsip keluarga";
                $_SESSION['status_info']="danger";
                 echo "<script>document.location=\"$site_url/pengkajian/keluarga.php?key=$key_keluarga\"</script>";
            }
        }else{
            $_SESSION['status']="Pengkajian Keluarga Gagal";
            $_SESSION['status_info']="danger";
            echo "<script>document.location=\"$site_url/pengkajian/keluarga.php?key=$key_keluarga\"</script>";
        }
    }else{
        $_SESSION['status']="Key Invalid";
        $_SESSION['status_info']="danger";
        echo "<script>document.location=\"$site_url/pengkajian/keluarga.php?key=$key_keluarga\"</script>";
    }
}
?>