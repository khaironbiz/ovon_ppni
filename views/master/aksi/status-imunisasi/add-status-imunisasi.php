<?php
if(isset($_POST['add_status_imunisasi'])){
    $hari_ini               = date('Y-m-d H:i:s');
    $status_imunisasi       = $_POST['status_imunisasi'];
    $has_status_imunisasi   = md5(uniqid());
    $sql_m_status_imunisasi = mysqli_query($host, "SELECT * FROM master_imunisasi WHERE master_imunisasi='$status_imunisasi'");
    $count                  = mysqli_num_rows($sql_m_status_imunisasi);
    if($count < 1 ){
        $input_data     = mysqli_query($host, "INSERT INTO master_imunisasi SET 
                            master_imunisasi    = '$status_imunisasi',
                            created_at          = '$hari_ini',
                            created_by          = '$user_check',
                            has_master_imunisasi= '$has_status_imunisasi'");
        if($input_data){
            $_SESSION['status']="Data berhasil disimpan";
            $_SESSION['status_info']="success";
            echo "<script>document.location=\"$site_url/master/status-imunisasi.php\"</script>";
        }else{
            $_SESSION['status']="Data gagal disimpan";
            $_SESSION['status_info']="danger";
            echo "<script>document.location=\"$site_url/master/status-imunisasi.php\"</script>";
        }
    }else{
        $_SESSION['status']="Data gagal disimpan karena data sudah terdaftar di sistem";
        $_SESSION['status_info']="danger";
        echo "<script>document.location=\"$site_url/master/status-imunisasi.php\"</script>";

    }
}
?>