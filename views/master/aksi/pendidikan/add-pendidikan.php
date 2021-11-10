<?php
if(isset($_POST['add_pendidikan'])){
    $hari_ini           = date('Y-m-d H:i:s');
    $nama_pendidikan    = $_POST['nama_pendidikan'];
    $has_m_pendidikan   = md5(uniqid());
    $sql_m_pendidikan   = mysqli_query($host, "SELECT * FROM master_pendidikan WHERE nama_pendidikan='$nama_pendidikan'");
    $count              = mysqli_num_rows($sql_m_pendidikan);
    if($count < 1 ){
        $input_data     = mysqli_query($host, "INSERT INTO master_pendidikan SET 
                            nama_pendidikan         = '$nama_pendidikan',
                            created_at              = '$hari_ini',
                            created_by              = '$user_check',
                            has_master_pendidikan   = '$has_m_pendidikan'");
        if($input_data){
            $_SESSION['status']="Data berhasil disimpan";
            $_SESSION['status_info']="success";
            echo "<script>document.location=\"$site_url/master/\"</script>";
        }else{
            $_SESSION['status']="Data gagal disimpan";
            $_SESSION['status_info']="danger";
            echo "<script>document.location=\"$site_url/master/\"</script>";
        }
    }else{
        $_SESSION['status']="Data gagal disimpan karena data sudah terdaftar di sistem";
        $_SESSION['status_info']="danger";
        echo "<script>document.location=\"$site_url/master/\"</script>";

    }
}
?>