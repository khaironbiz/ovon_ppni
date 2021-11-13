<?php
if(isset($_POST['add_air_minum'])){
    $hari_ini           = date('Y-m-d H:i:s');
    $master_air_minum   = $_POST['master_air_minum'];
    $has                = md5(uniqid());
    $sql                = mysqli_query($host, "SELECT * FROM master_air_minum WHERE master_air_minum ='$master_air_minum'");
    $count              = mysqli_num_rows($sql);
    if($count < 1 ){
        $input_data     = mysqli_query($host, "INSERT INTO master_air_minum SET 
                            master_air_minum       = '$master_air_minum',
                            created_at             = '$hari_ini',
                            created_by             = '$user_check',
                            has_master_air_minum   = '$has'");
        if($input_data){
            $_SESSION['status']="Data berhasil disimpan";
            $_SESSION['status_info']="success";
            echo "<script>document.location=\"$site_url/master/air-minum.php\"</script>";
        }else{
            $_SESSION['status']="Data gagal disimpan";
            $_SESSION['status_info']="danger";
            echo "<script>document.location=\"$site_url/master/air-minum.php\"</script>";
        }
    }else{
        $_SESSION['status']="Data gagal disimpan karena data sudah terdaftar di sistem";
        $_SESSION['status_info']="danger";
        echo "<script>document.location=\"$site_url/master/air-minum.php\"</script>";

    }
}
?>