<?php
if(isset($_POST['add_golongan_darah'])){
    $hari_ini               = date('Y-m-d H:i:s');
    $golongan_darah         = $_POST['golongan_darah'];
    $has_m_golongan_darah   = md5(uniqid());
    $sql_m_golongan_darah   = mysqli_query($host, "SELECT * FROM master_golongan_darah WHERE golongan_darah='$golongan_darah'");
    $count                  = mysqli_num_rows($sql_m_golongan_darah);
    if($count < 1 ){
        $input_data     = mysqli_query($host, "INSERT INTO master_golongan_darah SET 
                            golongan_darah      = '$golongan_darah',
                            created_at          = '$hari_ini',
                            created_by          = '$user_check',
                            has_golongan_darah  = '$has_m_golongan_darah'");
        if($input_data){
            $_SESSION['status']="Data berhasil disimpan";
            $_SESSION['status_info']="success";
            echo "<script>document.location=\"$site_url/master/golongan-darah.php\"</script>";
        }else{
            $_SESSION['status']="Data gagal disimpan";
            $_SESSION['status_info']="danger";
            echo "<script>document.location=\"$site_url/master/golongan-darah.php\"</script>";
        }
    }else{
        $_SESSION['status']="Data gagal disimpan karena data sudah terdaftar di sistem";
        $_SESSION['status_info']="danger";
        echo "<script>document.location=\"$site_url/master/golongan-darah.php\"</script>";

    }
}
?>