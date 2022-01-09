<?php
if(isset($_POST['add_user_level'])){
    $hari_ini       = date('Y-m-d H:i:s');
    $user_level     = $_POST['user_level'];
    $wilayah_akses  = $_POST['wilayah_akses'];
    $has_user_level = md5(uniqid());
    $sql_user_level = mysqli_query($host, "SELECT * FROM user_level WHERE user_level='$user_level'");
    $count          = mysqli_num_rows($sql_user_level);
    if($count < 1 ){
        $input_data     = mysqli_query($host, "INSERT INTO user_level SET 
                            user_level      = '$user_level',
                            wilayah_akses   = '$wilayah_akses',
                            created_at      = '$hari_ini',
                            created_by      = '$user_check',
                            has_user_level  = '$has_user_level'");
        if($input_data){
            $_SESSION['status']="Data berhasil disimpan";
            $_SESSION['status_info']="success";
            echo "<script>document.location=\"$site_url/master/user-level.php\"</script>";
        }else{
            $_SESSION['status']="Data gagal disimpan";
            $_SESSION['status_info']="danger";
            echo "<script>document.location=\"$site_url/master/user-level.php\"</script>";
        }
    }else{
        $_SESSION['status']="Data gagal disimpan karena data sudah terdaftar di sistem";
        $_SESSION['status_info']="danger";
        echo "<script>document.location=\"$site_url/master/user-level.php\"</script>";

    }
}
?>