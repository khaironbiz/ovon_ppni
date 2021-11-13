<?php
if(isset($_POST['add_bahan_bakar'])){
    $hari_ini           = date('Y-m-d H:i:s');
    $master_bahan_bakar= $_POST['master_bahan_bakar'];
    $has                = md5(uniqid());
    $sql                = mysqli_query($host, "SELECT * FROM master_bahan_bakar WHERE master_bahan_bakar ='$master_bahan_bakar'");
    $count              = mysqli_num_rows($sql);
    if($count < 1 ){
        $input_data     = mysqli_query($host, "INSERT INTO master_bahan_bakar SET 
                            master_bahan_bakar        = '$master_bahan_bakar',
                            created_at              = '$hari_ini',
                            created_by              = '$user_check',
                            has_master_bahan_bakar    = '$has'");
        if($input_data){
            $_SESSION['status']="Data berhasil disimpan";
            $_SESSION['status_info']="success";
            echo "<script>document.location=\"$site_url/master/bahan-bakar.php\"</script>";
        }else{
            $_SESSION['status']="Data gagal disimpan";
            $_SESSION['status_info']="danger";
            echo "<script>document.location=\"$site_url/master/bahan-bakar.php\"</script>";
        }
    }else{
        $_SESSION['status']="Data gagal disimpan karena data sudah terdaftar di sistem";
        $_SESSION['status_info']="danger";
        echo "<script>document.location=\"$site_url/master/bahan-bakar.php\"</script>";

    }
}
?>