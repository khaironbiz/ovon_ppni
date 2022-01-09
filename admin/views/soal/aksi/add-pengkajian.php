<?php
if(isset($_POST['add_master_pengkajian'])){
    $hari_ini               = date('Y-m-d H:i:s');
    $master_pengkajian      = $_POST['master_pengkajian'];
    $has_master_pengkajian  = md5(uniqid());
    $sql_master_pengkajian  = mysqli_query($host, "SELECT * FROM master_pengkajian WHERE master_pengkajian='$master_pengkajian'");
    $count                  = mysqli_num_rows($sql_master_pengkajian);
    if($count < 1 ){
        $input_data     = mysqli_query($host, "INSERT INTO master_pengkajian SET 
                            master_pengkajian      = '$master_pengkajian',
                            created_at         = '$hari_ini',
                            created_by         = '$user_check',
                            has_master_pengkajian  = '$has_master_pengkajian'");
        if($input_data){
            $_SESSION['status']="Data berhasil disimpan";
            $_SESSION['status_info']="success";
            echo "<script>document.location=\"$site_url/soal/\"</script>";
        }else{
            $_SESSION['status']="Data gagal disimpan";
            $_SESSION['status_info']="danger";
            echo "<script>document.location=\"$site_url/soal/\"</script>";
        }
    }else{
        $_SESSION['status']="Data gagal disimpan karena data sudah terdaftar di sistem";
        $_SESSION['status_info']="danger";
        echo "<script>document.location=\"$site_url/soal/\"</script>";

    }
}
?>