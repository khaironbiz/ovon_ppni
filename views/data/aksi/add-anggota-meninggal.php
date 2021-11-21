<?php
if(isset($_POST['add_keluarga_meninggal'])){
    $key_keluarga           = $_POST['add_keluarga_meninggal'];
    $struktur_keluarga      = $_POST['struktur_keluarga'];
    $sebab_kematian         = $_POST['sebab_kematian'];
    $tgl_kematian           = $_POST['tgl_kematian'];
    $usia_meninggal         = $_POST['usia_meninggal'];
    $has_keluarga_meninggal = md5(uniqid());
    $sql_keluarga           = mysqli_query($host, "SELECT * FROM keluarga WHERE key_keluarga='$key_keluarga'");
    $count                  = mysqli_num_rows($sql_keluarga);
    if($count >0 ){
        $input_data     = mysqli_query($host, "INSERT INTO keluarga_meninggal SET 
                            key_keluarga            = '$key_keluarga',
                            struktur_keluarga       = '$struktur_keluarga',
                            tgl_kematian            = '$tgl_meninggal',
                            sebab_kematian          = '$sebab_kematian',
                            usia_meninggal          = '$usia_meninggal',
                            has_keluarga_meninggal  = '$has_keluarga_meninggal'");
        if($input_data){
            $_SESSION['status']="Data berhasil disimpan";
            $_SESSION['status_info']="success";
            echo "<script>document.location=\"$site_url/data/keluarga.php?id=$key_keluarga\"</script>";
        }else{
            $_SESSION['status']="Data gagal disimpan";
            $_SESSION['status_info']="danger";
            echo "<script>document.location=\"$site_url/data/keluarga.php?id=$key_keluarga\"</script>";
        }
    }else{
        $_SESSION['status']="Data gagal disimpan karena data sudah terdaftar di sistem";
        $_SESSION['status_info']="danger";
        echo "<script>document.location=\"$site_url/data/keluarga.php?id=$key_keluarga\"</script>";

    }
}
?>