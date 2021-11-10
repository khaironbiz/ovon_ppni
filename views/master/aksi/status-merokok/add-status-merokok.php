<?php
if(isset($_POST['add_status_merokok'])){
    $hari_ini               = date('Y-m-d H:i:s');
    $status_merokok       = $_POST['status_merokok'];
    $has_status_merokok   = md5(uniqid());
    $sql_m_status_merokok = mysqli_query($host, "SELECT * FROM master_merokok WHERE status_merokok='$status_merokok'");
    $count                  = mysqli_num_rows($sql_m_status_merokok);
    if($count < 1 ){
        $input_data     = mysqli_query($host, "INSERT INTO master_merokok SET 
                            status_merokok      = '$status_merokok',
                            created_at          = '$hari_ini',
                            created_by          = '$user_check',
                            has_status_merokok  = '$has_status_merokok'");
        if($input_data){
            $_SESSION['status']="Data berhasil disimpan";
            $_SESSION['status_info']="success";
            echo "<script>document.location=\"$site_url/master/status-merokok.php\"</script>";
        }else{
            $_SESSION['status']="Data gagal disimpan";
            $_SESSION['status_info']="danger";
            echo "<script>document.location=\"$site_url/master/status-merokok.php\"</script>";
        }
    }else{
        $_SESSION['status']="Data gagal disimpan karena data sudah terdaftar di sistem";
        $_SESSION['status_info']="danger";
        echo "<script>document.location=\"$site_url/master/status-merokok.php\"</script>";

    }
}
?>