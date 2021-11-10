<?php
if(isset($_POST['add_pekerjaan'])){
    $hari_ini           = date('Y-m-d H:i:s');
    $nama_pekerjaan    = $_POST['nama_pekerjaan'];
    $has_m_pekerjaan   = md5(uniqid());
    $sql_m_pekerjaan   = mysqli_query($host, "SELECT * FROM master_pekerjaan WHERE master_pekerjaan='$nama_pekerjaan'");
    $count              = mysqli_num_rows($sql_m_pekerjaan);
    if($count < 1 ){
        $input_data     = mysqli_query($host, "INSERT INTO master_pekerjaan SET 
                            master_pekerjaan         = '$nama_pekerjaan',
                            created_at              = '$hari_ini',
                            created_by              = '$user_check',
                            has_master_pekerjaan   = '$has_m_pekerjaan'");
        if($input_data){
            $_SESSION['status']="Data berhasil disimpan";
            $_SESSION['status_info']="success";
            echo "<script>document.location=\"$site_url/master/pekerjaan.php\"</script>";
        }else{
            $_SESSION['status']="Data gagal disimpan";
            $_SESSION['status_info']="danger";
            echo "<script>document.location=\"$site_url/master/pekerjaan.php\"</script>";
        }
    }else{
        $_SESSION['status']="Data gagal disimpan karena data sudah terdaftar di sistem";
        $_SESSION['status_info']="danger";
        echo "<script>document.location=\"$site_url/master/pekerjaan.php\"</script>";

    }
}
?>