<?php
if(isset($_POST['add_master_rumpun'])){
    $hari_ini               = date('Y-m-d H:i:s');
    $master_rumpun          = $_POST['master_rumpun'];
    $key                    = $_POST['add_master_rumpun'];
    $sql_master_pengkajian  = mysqli_query($host,"SELECT * FROM master_pengkajian WHERE has_master_pengkajian='$key'");
    $master_pengkajian      = mysqli_fetch_array($sql_master_pengkajian);
    $id_master_pengkajian   = $master_pengkajian['id_master_pengkajian'];
    $has_master_rumpun      = md5(uniqid());
    $sql_master_rumpun      = mysqli_query($host, "SELECT * FROM master_rumpun WHERE master_rumpun='$master_rumpun'");
    $count                  = mysqli_num_rows($sql_master_rumpun);
    if($count < 1 ){
        $input_data     = mysqli_query($host, "INSERT INTO master_rumpun SET 
                            id_master_pengkajian    = '$id_master_pengkajian',
                            master_rumpun           = '$master_rumpun',
                            created_at              = '$hari_ini',
                            created_by              = '$user_check',
                            has_master_rumpun       = '$has_master_rumpun'");
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