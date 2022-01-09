<?php
if(isset($_POST['edit_master_soal'])){
    $hari_ini           = date('Y-m-d H:i:s');
    $master_soal        = $_POST['master_soal'];
    $has_master_soal    = $_POST['edit_master_soal'];
    $nomor_urut         = $_POST['nomor_urut'];
    $jawaban            = $_POST['jenis_input_jawaban'];
    $sql_master_soal    = mysqli_query($host, "SELECT * FROM master_soal WHERE has_master_soal='$has_master_soal'");
    $count              = mysqli_num_rows($sql_master_soal);
    if($count > 0 ){
        $update_data    = mysqli_query($host, "UPDATE master_soal SET 
                            master_soal         = '$master_soal',
                            nomor_urut          = '$nomor_urut',
                            jenis_input_jawaban = '$jawaban',
                            updated_at          = '$hari_ini' WHERE
                            has_master_soal     = '$has_master_soal'");
        if($update_data){
            $_SESSION['status']="Data berhasil disimpan";
            $_SESSION['status_info']="success";
            echo "<script>document.location=\"$site_url/soal/edit.php?key=$has_master_soal\"</script>";
        }else{
            $_SESSION['status']="Data gagal disimpan";
            $_SESSION['status_info']="danger";
            echo "<script>document.location=\"$site_url/soal/edit.php?key=$has_master_soal\"</script>";
        }
    }else{
        $_SESSION['status']="Data gagal disimpan karena data sudah terdaftar di sistem";
        $_SESSION['status_info']="danger";
        echo "<script>document.location=\"$site_url/soal/edit.php?key=$has_master_soal\"</script>";

    }
}
?>