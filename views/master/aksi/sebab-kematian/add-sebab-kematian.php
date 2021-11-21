<?php
if(isset($_POST['add_sebab_kematian'])){
    $hari_ini           = date('Y-m-d H:i:s');
    $master_sebab_kematian= $_POST['master_sebab_kematian'];
    $has                = md5(uniqid());
    $sql                = mysqli_query($host, "SELECT * FROM master_sebab_kematian WHERE master_sebab_kematian ='$master_sebab_kematian'");
    $count              = mysqli_num_rows($sql);
    if($count < 1 ){
        $input_data     = mysqli_query($host, "INSERT INTO master_sebab_kematian SET 
                            master_sebab_kematian     = '$master_sebab_kematian',
                            created_at      = '$hari_ini',
                            created_by      = '$user_check',
                            has_master_sebab_kematian = '$has'");
        if($input_data){
            $_SESSION['status']="Data berhasil disimpan";
            $_SESSION['status_info']="success";
            echo "<script>document.location=\"$site_url/master/sebab-kematian.php\"</script>";
        }else{
            $_SESSION['status']="Data gagal disimpan";
            $_SESSION['status_info']="danger";
            echo "<script>document.location=\"$site_url/master/sebab-kematian.php\"</script>";
        }
    }else{
        $_SESSION['status']="Data gagal disimpan karena data sudah terdaftar di sistem";
        $_SESSION['status_info']="danger";
        echo "<script>document.location=\"$site_url/master/sebab-kematian.php\"</script>";

    }
}
?>