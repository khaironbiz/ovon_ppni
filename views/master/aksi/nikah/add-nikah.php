<?php
if(isset($_POST['add_nikah'])){
    $hari_ini      = date('Y-m-d H:i:s');
    $nama_nikah    = $_POST['nama_nikah'];
    $has_m_nikah   = md5(uniqid());
    $sql_m_nikah   = mysqli_query($host, "SELECT * FROM master_nikah WHERE nama_nikah='$nama_nikah'");
    $count         = mysqli_num_rows($sql_m_nikah);
    if($count < 1 ){
        $input_data     = mysqli_query($host, "INSERT INTO master_nikah SET 
                            nama_nikah          = '$nama_nikah',
                            created_at          = '$hari_ini',
                            created_by          = '$user_check',
                            has_master_nikah    = '$has_m_nikah'");
        if($input_data){
            $_SESSION['status']="Data berhasil disimpan";
            $_SESSION['status_info']="success";
            echo "<script>document.location=\"$site_url/master/nikah.php\"</script>";
        }else{
            $_SESSION['status']="Data gagal disimpan";
            $_SESSION['status_info']="danger";
            echo "<script>document.location=\"$site_url/master/nikah.php\"</script>";
        }
    }else{
        $_SESSION['status']="Data gagal disimpan karena data sudah terdaftar di sistem";
        $_SESSION['status_info']="danger";
        echo "<script>document.location=\"$site_url/master/nikah.php\"</script>";

    }
}
?>