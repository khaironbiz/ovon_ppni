<?php
if(isset($_POST['add_rt'])){
    $kelurahan  = $_SESSION['kel'];
    $prov       = substr($kelurahan, 0,2);
    $kota       = substr($kelurahan, 0,4);
    $kecamatan  = substr($kelurahan, 0,6);
    $hari_ini   = date('Y-m-d H:i:s');
    $nama_rt    = sprintf("%03d", $_POST['nama_rt']);
    $id_rw      = $_POST['id_rw'];
    $has_m_rt   = md5(uniqid());
    if(isset($kelurahan) ){
        $input_data = mysqli_query($host, "INSERT INTO rt SET 
                        rw          = '$id_rw',
                        kel         = '$kelurahan',
                        kec         = '$kecamatan',
                        kota        = '$kota',
                        prov        = '$prov',
                        nama_rt     = '$nama_rt',
                        created_at  = '$hari_ini',
                        created_by  = '$user_check',
                        has_rt      = '$has_m_rt'");
        if($input_data){
            $_SESSION['status']="Data berhasil disimpan";
            $_SESSION['status_info']="success";
            echo "<script>document.location=\"$site_url/master/rw.php\"</script>";
        }else{
            $_SESSION['status']="Data gagal disimpan";
            $_SESSION['status_info']="danger";
            echo "<script>document.location=\"$site_url/master/rw.php\"</script>";
        }
    }else{
        $_SESSION['status']="Data gagal disimpan karena data sudah terdaftar di sistem";
        $_SESSION['status_info']="danger";
        echo "<script>document.location=\"$site_url/master/rw.php\"</script>";

    }
}

?>