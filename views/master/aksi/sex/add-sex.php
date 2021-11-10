<?php
if(isset($_POST['add_sex'])){
    $hari_ini       = date('Y-m-d H:i:s');
    $master_sex     = $_POST['master_sex'];
    $has_m_sex      = md5(uniqid());
    $sql_m_sex      = mysqli_query($host, "SELECT * FROM master_sex WHERE master_sex='$master_sex'");
    $count          = mysqli_num_rows($sql_m_sex);
    if($count < 1 ){
        $input_data     = mysqli_query($host, "INSERT INTO master_sex SET 
                            master_sex      = '$master_sex',
                            created_at      = '$hari_ini',
                            created_by      = '$user_check',
                            has_master_sex  = '$has_m_sex'");
        if($input_data){
            $_SESSION['status']="Data berhasil disimpan";
            $_SESSION['status_info']="success";
            echo "<script>document.location=\"$site_url/master/jenis-kelamin.php\"</script>";
        }else{
            $_SESSION['status']="Data gagal disimpan";
            $_SESSION['status_info']="danger";
            echo "<script>document.location=\"$site_url/master/jenis-kelamin.php\"</script>";
        }
    }else{
        $_SESSION['status']="Data gagal disimpan karena data sudah terdaftar di sistem";
        $_SESSION['status_info']="danger";
        echo "<script>document.location=\"$site_url/master/jenis-kelamin.php\"</script>";

    }
}
?>