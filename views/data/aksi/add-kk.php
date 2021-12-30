<?php
if(isset($_POST['add_kk'])){
    $key_keluarga           = $_POST['add_kk'];
    $nama_anggota           = $_POST['nama_anggota'];
    $jenis_kelamin          = $_POST['jenis_kelamin'];
    $tgl_lahir              = $_POST['tgl_lahir'];
    $nik                    = $_POST['nik'];
    $no_kk                  = $_POST['no_kk'];
    $bpjs                   = $_POST['bpjs'];
    $jenis_keluarga         = 1;
    $golongan_darah         = $_POST['golongan_darah'];
    $vaksin_covid19         = $_POST['vaksin_covid19'];
    $status_pendidikan      = $_POST['status_pendidikan'];
    $status_pekerjaan       = $_POST['status_pekerjaan'];
    $hari_ini               = date('Y-m-d H:i:s');
    $provinsi               = $data_pengguna['prov'];
    $kabupaten              = $data_pengguna['kota'];
    $kecamatan              = $data_pengguna['kec'];
    $kelurahan              = $data_pengguna['kel'];
    $rw                     = $data_pengguna['id_rw'];
    $rt                     = $data_pengguna['id_rt'];
    $has_keluarga_anggota   = md5(uniqid());
    $sql_nik                = mysqli_query($host,"SELECT * FROM keluarga_anggota WHERE nik='$nik'");
    $count_nik              = mysqli_num_rows($sql_nik);
    $sql_keluarga           = mysqli_query($host, "SELECT * FROM keluarga_anggota WHERE key_keluarga='$key_keluarga' and nama_anggota ='$nama_anggota' ");
    $count                  = mysqli_num_rows($sql_keluarga);
    if($count_nik >0){
        $_SESSION['status']="NIK sudah terdaftar";
        $_SESSION['status_info']="danger";
            echo "<script>document.location=\"$site_url/data\"</script>";
    }elseif($count < 1 ){
        $tambah_kk      = mysqli_query($host,"INSERT INTO keluarga SET
                            key_keluarga            = '$key_keluarga',
                            no_kk                   = '$no_kk',
                            bpjs                    = '$bpjs',
                            nama_keluarga           = '$nama_anggota',
                            id_kepala_keluarga      = '$nik',
                            provinsi                = '$provinsi',
                            kabupaten               = '$kabupaten',
                            kecamatan               = '$kecamatan',
                            kelurahan               = '$kelurahan',
                            rw                      = '$rw',
                            rt                      = '$rt'");
        $input_data     = mysqli_query($host, "INSERT INTO keluarga_anggota SET 
                            key_keluarga            = '$key_keluarga',
                            nama_anggota            = '$nama_anggota',
                            nik                     = '$nik',
                            jenis_kelamin           = '$jenis_kelamin',
                            tgl_lahir               = '$tgl_lahir',
                            id_struktur_keluarga    = '$jenis_keluarga',
                            golongan_darah          = '$golongan_darah',
                            vaksin_covid19          = '$vaksin_covid19',
                            pendidikan              = '$status_pendidikan',
                            pekerjaan               = '$status_pekerjaan',
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
            $_SESSION['status']="Data berhasil disimpan $count_nik";
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