<?php
if(isset($_POST['add_rw'])){
    $kelurahan  = $_SESSION['kel'];
    $prov       = substr($kelurahan, 0,2);
    $kota       = substr($kelurahan, 0,4);
    $kecamatan  = substr($kelurahan, 0,8);
    $hari_ini   = date('Y-m-d H:i:s');
    $nama_rw    = $_POST['nama_rw'];
    $has_m_rw   = md5(uniqid());
    if(isset($kelurahan) ){
        $input_data = mysqli_query($host, "INSERT INTO rw SET 
                        kel         = '$kelurahan',
                        kec         = '$kecamatan',
                        kota        = '$kota',
                        prov        = '$prov',
                        nama_rw     = '$nama_rw',
                        created_at  = '$hari_ini',
                        created_by  = '$user_check',
                        has_rw      = '$has_m_rw'");
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