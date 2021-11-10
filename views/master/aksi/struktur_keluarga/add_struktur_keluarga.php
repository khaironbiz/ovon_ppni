<?php
if(isset($_POST['add_struktur_keluarga'])){
    $hari_ini           = date('Y-m-d H:i:s');
    $struktur_keluarga  = $_POST['struktur_keluarga'];
    $sql_struktur_kel   = mysqli_query($host, "SELECT * FROM master_struktur_keluarga WHERE 
                            struktur_keluarga='$struktur_keluarga'");
    $has_struktur_kel   = md5(uniqid());
    $count              = mysqli_num_rows($sql_struktur_kel);
    if($count < 1 ){
        $input_data     = mysqli_query($host, "INSERT INTO master_struktur_keluarga SET 
                            struktur_keluarga       = '$struktur_keluarga',
                            created_at              = '$hari_ini',
                            created_by              = '$user_check',
                            has_struktur_keluarga   = '$has_struktur_kel'");
        if($input_data){
            $_SESSION['status']="Data berhasil disimpan";
            $_SESSION['status_info']="success";
            echo "<script>document.location=\"$site_url/master/struktur-keluarga.php\"</script>";
        }else{
            $_SESSION['status']="Data gagal disimpan";
            $_SESSION['status_info']="danger";
            echo "<script>document.location=\"$site_url/master/struktur-keluarga.php\"</script>";
        }
    }else{
        $_SESSION['status']="Data gagal disimpan karena data sudah terdaftar di sistem";
        $_SESSION['status_info']="danger";
        echo "<script>document.location=\"$site_url/master/struktur-keluarga.php\"</script>";

    }
}
?>