<?php
if(isset($_POST['edit_master_jawaban'])){
    $hari_ini                   = date('Y-m-d H:i:s');
    $has_master_jawaban         = $_POST['edit_master_jawaban'];
    $master_jawaban             = $_POST['master_jawaban'];
    $nomor_urut                 = $_POST['nomor_urut'];
    $blokir                     = $_POST['blokir'];
    $sql_master_jawaban_ini     = mysqli_query($host,"SELECT * FROM master_jawaban WHERE has_master_jawaban='$has_master_jawaban'");
    $data_master_jawaban_ini    = mysqli_fetch_array($sql_master_jawaban_ini);
    $count_has_jawaban          = mysqli_num_rows($sql_master_jawaban_ini);
    $id_master_soal             = $data_master_jawaban_ini['id_master_soal'];
    $sql_soal                   = mysqli_query($host,"SELECT * FROM master_soal WHERE id_master_soal ='$id_master_soal'");
    $data_soal                  = mysqli_fetch_array($sql_soal);
    $has_master_soal            = $data_soal['has_master_soal'];
    if($count_has_jawaban > 0 ){
        $input_data     = mysqli_query($host, "UPDATE master_jawaban SET 
                            master_jawaban      = '$master_jawaban',
                            nomor_urut          = '$nomor_urut',
                            blokir              = '$blokir',
                            updated_at          = '$hari_ini' WHERE
                            has_master_jawaban  = '$has_master_jawaban'");
        if($input_data){
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