<?php
if(isset($_POST['add_fasilitas'])){
    $hari_ini          = date('Y-m-d H:i:s');
    $master_fasilitas  = $_POST['fasilitas'];
    $has_m_fasilitas   = md5(uniqid());
    $sql_m_fasilitas   = mysqli_query($host, "SELECT * FROM master_fasilitas WHERE master_fasilitas='$master_fasilitas'");
    $count             = mysqli_num_rows($sql_m_fasilitas);
    if($count < 1 ){
        $input_data     = mysqli_query($host, "INSERT INTO master_fasilitas SET 
                            master_fasilitas        = '$master_fasilitas',
                            created_at              = '$hari_ini',
                            created_by              = '$user_check',
                            has_master_fasilitas    = '$has_m_fasilitas'");
        if($input_data){
            $_SESSION['status']="Data berhasil disimpan";
            $_SESSION['status_info']="success";
            echo "<script>document.location=\"$site_url/master/fasilitas-keluarga.php\"</script>";
        }else{
            $_SESSION['status']="Data gagal disimpan";
            $_SESSION['status_info']="danger";
            echo "<script>document.location=\"$site_url/master/fasilitas-keluarga.php\"</script>";
        }
    }else{
        $_SESSION['status']="Data gagal disimpan karena data sudah terdaftar di sistem";
        $_SESSION['status_info']="danger";
        echo "<script>document.location=\"$site_url/master/fasilitas-keluarga.php\"</script>";

    }
}
?>