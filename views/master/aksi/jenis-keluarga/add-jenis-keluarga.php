<?php
if(isset($_POST['add_jenis_keluarga'])){
    $hari_ini       = date('Y-m-d H:i:s');
    $jenis_keluarga = $_POST['jenis_keluarga'];
    $has_m_jen_kel  = md5(uniqid());
    $sql_m_jen_kel  = mysqli_query($host, "SELECT * FROM master_jenis_keluarga WHERE master_jenis_keluarga='$jenis_keluarga'");
    $count          = mysqli_num_rows($sql_m_jen_kel);
    if($count < 1 ){
        $input_data     = mysqli_query($host, "INSERT INTO master_jenis_keluarga SET 
                            master_jenis_keluarga       = '$jenis_keluarga',
                            created_at                  = '$hari_ini',
                            created_by                  = '$user_check',
                            has_master_jenis_keluarga   = '$has_m_jen_kel'");
        if($input_data){
            $_SESSION['status']="Data berhasil disimpan";
            $_SESSION['status_info']="success";
            echo "<script>document.location=\"$site_url/master/jenis-keluarga.php\"</script>";
        }else{
            $_SESSION['status']="Data gagal disimpan";
            $_SESSION['status_info']="danger";
            echo "<script>document.location=\"$site_url/master/jenis-keluarga.php\"</script>";
        }
    }else{
        $_SESSION['status']="Data gagal disimpan karena data sudah terdaftar di sistem";
        $_SESSION['status_info']="danger";
        echo "<script>document.location=\"$site_url/master/jenis-keluarga.php\"</script>";

    }
}
?>