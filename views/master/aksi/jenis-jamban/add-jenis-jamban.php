<?php
if(isset($_POST['add_jenis_jamban'])){
    $hari_ini           = date('Y-m-d H:i:s');
    $master_jenis_jamban= $_POST['master_jenis_jamban'];
    $has                = md5(uniqid());
    $sql                = mysqli_query($host, "SELECT * FROM master_jenis_jamban WHERE master_jenis_jamban ='$master_jenis_jamban'");
    $count              = mysqli_num_rows($sql);
    if($count < 1 ){
        $input_data     = mysqli_query($host, "INSERT INTO master_jenis_jamban SET 
                            master_jenis_jamban     = '$master_jenis_jamban',
                            created_at              = '$hari_ini',
                            created_by              = '$user_check',
                            has_master_jenis_jamban = '$has'");
        if($input_data){
            $_SESSION['status']="Data berhasil disimpan";
            $_SESSION['status_info']="success";
            echo "<script>document.location=\"$site_url/master/jenis-jamban.php\"</script>";
        }else{
            $_SESSION['status']="Data gagal disimpan";
            $_SESSION['status_info']="danger";
            echo "<script>document.location=\"$site_url/master/jenis-jamban.php\"</script>";
        }
    }else{
        $_SESSION['status']="Data gagal disimpan karena data sudah terdaftar di sistem";
        $_SESSION['status_info']="danger";
        echo "<script>document.location=\"$site_url/master/jenis-jamban.php\"</script>";

    }
}
?>