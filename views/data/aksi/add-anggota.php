<?php
if(isset($_POST['add_anggota'])){
    $key_keluarga           = $_POST['add_anggota'];
    $nama_anggota           = $_POST['nama_anggota'];
    $jenis_kelamin          = $_POST['jenis_kelamin'];
    $tgl_lahir              = $_POST['tgl_lahir'];
    $nik                    = $_POST['nik'];
    $status_ktp             = $_POST['status_ktp'];
    $jenis_keluarga         = $_POST['jenis_keluarga'];
    $golongan_darah         = $_POST['golongan_darah'];
    $vaksin_covid19         = $_POST['vaksin_covid19'];
    $status_pendidikan      = $_POST['status_pendidikan'];
    $status_pekerjaan       = $_POST['status_pekerjaan'];
    $status_pernikahan      = $_POST['status_pernikahan'];
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
        $input_data     = mysqli_query($host, "INSERT INTO keluarga_anggota SET 
                            key_keluarga            = '$key_keluarga',
                            nama_anggota            = '$nama_anggota',
                            nik                     = '$nik',
                            status_ktp              = '$status_ktp',
                            jenis_kelamin           = '$jenis_kelamin',
                            tgl_lahir               = '$tgl_lahir',
                            id_struktur_keluarga    = '$jenis_keluarga',
                            golongan_darah          = '$golongan_darah',
                            vaksin_covid19          = '$vaksin_covid19',
                            pendidikan              = '$status_pendidikan',
                            pekerjaan               = '$status_pekerjaan',
                            status_pernikahan       = '$status_pernikahan',
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