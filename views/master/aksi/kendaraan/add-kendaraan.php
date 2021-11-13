<?php
if(isset($_POST['add_kendaraan'])){
    $hari_ini           = date('Y-m-d H:i:s');
    $master_kendaraan= $_POST['master_kendaraan'];
    $has                = md5(uniqid());
    $sql                = mysqli_query($host, "SELECT * FROM master_kendaraan WHERE master_kendaraan ='$master_kendaraan'");
    $count              = mysqli_num_rows($sql);
    if($count < 1 ){
        $input_data     = mysqli_query($host, "INSERT INTO master_kendaraan SET 
                            master_kendaraan        = '$master_kendaraan',
                            created_at              = '$hari_ini',
                            created_by              = '$user_check',
                            has_master_kendaraan    = '$has'");
        if($input_data){
            $_SESSION['status']="Data berhasil disimpan";
            $_SESSION['status_info']="success";
            echo "<script>document.location=\"$site_url/master/kendaraan.php\"</script>";
        }else{
            $_SESSION['status']="Data gagal disimpan";
            $_SESSION['status_info']="danger";
            echo "<script>document.location=\"$site_url/master/kendaraan.php\"</script>";
        }
    }else{
        $_SESSION['status']="Data gagal disimpan karena data sudah terdaftar di sistem";
        $_SESSION['status_info']="danger";
        echo "<script>document.location=\"$site_url/master/kendaraan.php\"</script>";

    }
}
?>