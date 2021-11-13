<?php
if(isset($_POST['add_atap'])){
    $hari_ini           = date('Y-m-d H:i:s');
    $master_atap= $_POST['master_atap'];
    $has                = md5(uniqid());
    $sql                = mysqli_query($host, "SELECT * FROM master_atap WHERE master_atap ='$master_atap'");
    $count              = mysqli_num_rows($sql);
    if($count < 1 ){
        $input_data     = mysqli_query($host, "INSERT INTO master_atap SET 
                            master_atap     = '$master_atap',
                            created_at      = '$hari_ini',
                            created_by      = '$user_check',
                            has_master_atap = '$has'");
        if($input_data){
            $_SESSION['status']="Data berhasil disimpan";
            $_SESSION['status_info']="success";
            echo "<script>document.location=\"$site_url/master/atap.php\"</script>";
        }else{
            $_SESSION['status']="Data gagal disimpan";
            $_SESSION['status_info']="danger";
            echo "<script>document.location=\"$site_url/master/atap.php\"</script>";
        }
    }else{
        $_SESSION['status']="Data gagal disimpan karena data sudah terdaftar di sistem";
        $_SESSION['status_info']="danger";
        echo "<script>document.location=\"$site_url/master/atap.php\"</script>";

    }
}
?>