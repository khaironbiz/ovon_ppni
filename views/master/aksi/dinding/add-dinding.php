<?php
if(isset($_POST['add_dinding'])){
    $hari_ini           = date('Y-m-d H:i:s');
    $master_dinding= $_POST['master_dinding'];
    $has                = md5(uniqid());
    $sql                = mysqli_query($host, "SELECT * FROM master_dinding WHERE master_dinding ='$master_dinding'");
    $count              = mysqli_num_rows($sql);
    if($count < 1 ){
        $input_data     = mysqli_query($host, "INSERT INTO master_dinding SET 
                            master_dinding     = '$master_dinding',
                            created_at      = '$hari_ini',
                            created_by      = '$user_check',
                            has_master_dinding = '$has'");
        if($input_data){
            $_SESSION['status']="Data berhasil disimpan";
            $_SESSION['status_info']="success";
            echo "<script>document.location=\"$site_url/master/dinding.php\"</script>";
        }else{
            $_SESSION['status']="Data gagal disimpan";
            $_SESSION['status_info']="danger";
            echo "<script>document.location=\"$site_url/master/dinding.php\"</script>";
        }
    }else{
        $_SESSION['status']="Data gagal disimpan karena data sudah terdaftar di sistem";
        $_SESSION['status_info']="danger";
        echo "<script>document.location=\"$site_url/master/dinding.php\"</script>";

    }
}
?>